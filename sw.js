/* Ananda Travels – service worker
   - Works from any folder/URL (all paths are relative to the SW scope)
   - Change VERSION whenever you want every visitor to get a fresh cache */
const VERSION = 'v1';
const CORE_CACHE = `ananda-core-${VERSION}`;
const RUNTIME_CACHE = `ananda-runtime-${VERSION}`;
const RUNTIME_LIMIT = 120;

const SCOPE = self.registration.scope;
const url = p => new URL(p, SCOPE).href;
const PRECACHE = ['./', 'index.html', 'manifest.webmanifest', 'icon-192.png', 'icon-512.png', 'apple-touch-icon.png'].map(url);
const NEVER_CACHE = ['api/', 'admin']; // backend routes always go to the network

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CORE_CACHE)
      .then(cache => Promise.all(PRECACHE.map(u => cache.add(u).catch(() => null))))
      .then(() => self.skipWaiting())
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(keys => Promise.all(keys.filter(k => k.startsWith('ananda-') && k !== CORE_CACHE && k !== RUNTIME_CACHE).map(k => caches.delete(k))))
      .then(() => self.clients.claim())
  );
});

self.addEventListener('message', event => {
  if (event.data === 'SKIP_WAITING') self.skipWaiting();
});

async function trim(cacheName, max) {
  const cache = await caches.open(cacheName);
  const keys = await cache.keys();
  if (keys.length > max) await Promise.all(keys.slice(0, keys.length - max).map(k => cache.delete(k)));
}

/* page navigations: network first, fall back to the cached page when offline */
async function navigate(request) {
  try {
    const fresh = await fetch(request);
    if (fresh && fresh.ok) {
      const cache = await caches.open(CORE_CACHE);
      cache.put(url('./'), fresh.clone());
    }
    return fresh;
  } catch (err) {
    const cache = await caches.open(CORE_CACHE);
    return (await cache.match(url('./'))) || (await cache.match(url('index.html'))) || Response.error();
  }
}

/* static files: answer from cache instantly, refresh it in the background */
async function staleWhileRevalidate(request, cacheName, fetchRequest) {
  const cache = await caches.open(cacheName);
  const cached = await cache.match(request);
  const network = fetch(fetchRequest || request)
    .then(res => {
      if (res && (res.ok || res.type === 'opaque')) {
        cache.put(request, res.clone()).then(() => trim(cacheName, RUNTIME_LIMIT));
      }
      return res;
    })
    .catch(() => null);
  return cached || (await network) || Response.error();
}

self.addEventListener('fetch', event => {
  const req = event.request;
  if (req.method !== 'GET') return;
  const u = new URL(req.url);
  if (!/^https?:$/.test(u.protocol)) return;

  if (u.origin === self.location.origin) {
    const path = u.href.slice(SCOPE.length);
    if (NEVER_CACHE.some(p => path.startsWith(p))) return;
    if (u.pathname.endsWith('/sw.js')) return;
    if (req.mode === 'navigate') {
      event.respondWith(navigate(req));
      return;
    }
    event.respondWith(staleWhileRevalidate(req, CORE_CACHE));
    return;
  }

  /* third-party files (Tailwind, Google Fonts, destination photos, airport list):
     fetched in CORS mode so the cached copy is a normal, small response */
  event.respondWith((async () => {
    try {
      const corsReq = new Request(req.url, { mode: 'cors', credentials: 'omit' });
      const res = await staleWhileRevalidate(req, RUNTIME_CACHE, corsReq);
      if (res && res.type !== 'error') return res;
    } catch (e) { /* fall through */ }
    return fetch(req); // server without CORS: plain network, not cached
  })());
});
