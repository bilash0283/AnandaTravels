<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<title>Ananda Travels – Book Cheap Air Tickets</title>
<meta name="description" content="Search every airport worldwide and book air tickets at the best fares with Ananda Travels." />
<meta name="theme-color" content="#0b1b4d" />
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: { sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'] },
        colors: {
          brand: { 50:'#eef6ff',100:'#d9eaff',200:'#bcdaff',300:'#8ec2ff',400:'#59a0ff',500:'#3379fb',600:'#1d5af0',700:'#1545dd',800:'#1839b3',900:'#1a378d' },
          sun: { 400:'#ffb547', 500:'#ff9a1f' }
        },
        keyframes: {
          float: { '0%,100%': { transform: 'translateY(0) rotate(-6deg)' }, '50%': { transform: 'translateY(-18px) rotate(-2deg)' } },
          floatSlow: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-12px)' } },
          blob: { '0%,100%': { transform: 'translate(0,0) scale(1)' }, '33%': { transform: 'translate(40px,-30px) scale(1.1)' }, '66%': { transform: 'translate(-30px,30px) scale(.95)' } },
          fly: { '0%': { transform: 'translateX(-10vw)', opacity: 0 }, '10%,90%': { opacity: .9 }, '100%': { transform: 'translateX(110vw)', opacity: 0 } },
          pop: { '0%': { transform: 'scale(.96) translateY(8px)', opacity: 0 }, '100%': { transform: 'scale(1) translateY(0)', opacity: 1 } },
          sheet: { '0%': { transform: 'translateY(100%)' }, '100%': { transform: 'translateY(0)' } },
          shimmer: { '100%': { transform: 'translateX(100%)' } },
          fadeUp: { '0%': { transform: 'translateY(28px)', opacity: 0 }, '100%': { transform: 'translateY(0)', opacity: 1 } },
          dash: { to: { strokeDashoffset: '-160' } },
          pulseRing: { '0%': { transform: 'scale(.8)', opacity: .7 }, '100%': { transform: 'scale(2)', opacity: 0 } }
        },
        animation: {
          float: 'float 6s ease-in-out infinite',
          floatSlow: 'floatSlow 7s ease-in-out infinite',
          blob: 'blob 14s ease-in-out infinite',
          fly: 'fly 20s linear infinite',
          pop: 'pop .25s cubic-bezier(.2,.8,.2,1) both',
          sheet: 'sheet .3s cubic-bezier(.2,.8,.2,1) both',
          fadeUp: 'fadeUp .9s cubic-bezier(.2,.8,.2,1) backwards',
          dash: 'dash 6s linear infinite',
          pulseRing: 'pulseRing 2s ease-out infinite'
        }
      }
    }
  }
</script>
<style>
  html { scroll-padding-top: 90px; -webkit-text-size-adjust: 100%; }
  body { font-family: 'Plus Jakarta Sans', system-ui, sans-serif; overflow-x: hidden; }
  .reveal { opacity: 0; transform: translateY(32px); transition: opacity .8s cubic-bezier(.2,.8,.2,1), transform .8s cubic-bezier(.2,.8,.2,1); }
  .reveal.show { opacity: 1; transform: none; }
  .glass { background: rgba(255,255,255,.12); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border: 1px solid rgba(255,255,255,.22); }
  .btn-shine { position: relative; overflow: hidden; }
  .btn-shine::after { content:''; position:absolute; inset:0; background: linear-gradient(120deg, transparent, rgba(255,255,255,.45), transparent); transform: translateX(-100%); }
  .btn-shine:hover::after { animation: shimmer 1s; }
  .hero-bg { background:
      radial-gradient(900px 500px at 85% -10%, rgba(59,130,246,.9) 0%, transparent 60%),
      radial-gradient(700px 450px at -10% 35%, rgba(124,58,237,.75) 0%, transparent 55%),
      linear-gradient(160deg, #0b1b4d 0%, #14307f 55%, #1d5af0 100%); }
  .tilt { transition: transform .4s cubic-bezier(.2,.8,.2,1), box-shadow .4s; }
  @media (hover:hover) { .tilt:hover { transform: translateY(-8px); box-shadow: 0 30px 60px -20px rgba(29,90,240,.35); } }
  .no-scrollbar { scrollbar-width: none; -ms-overflow-style: none; }
  .no-scrollbar::-webkit-scrollbar { display: none; }
  .thin-scroll::-webkit-scrollbar { width: 6px; }
  .thin-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 99px; }
  input[type="date"] { -webkit-appearance: none; appearance: none; min-height: 1.5rem; font: inherit; text-align: left; }
  input[type="date"]::-webkit-date-and-time-value { text-align: left; }
  input[type="date"]::-webkit-calendar-picker-indicator { cursor: pointer; opacity: .55; }
  input[type="date"]:disabled { cursor: not-allowed; }
  .barcode { background: repeating-linear-gradient(90deg,#0f172a 0 2px,transparent 2px 4px,#0f172a 4px 5px,transparent 5px 9px,#0f172a 9px 12px,transparent 12px 14px); }
  details > summary { list-style: none; }
  details > summary::-webkit-details-marker { display: none; }
  #rotWord { display:inline-block; transition: opacity .4s, transform .4s; }
  #rotWord.out { opacity:0; transform: translateY(14px); }
  @media (prefers-reduced-motion: reduce) { *, *::before, *::after { animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; } .reveal { opacity: 1; transform: none; } }
</style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

<!-- backdrop for mobile sheets -->
<div id="backdrop" class="hidden fixed inset-0 z-[55] bg-slate-900/60 backdrop-blur-sm md:hidden"></div>

<!-- NAVBAR -->
<header id="nav" class="fixed top-0 inset-x-0 z-40 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 sm:h-20 flex items-center justify-between transition-all" id="navInner">
    <a href="#home" class="flex items-center gap-2 text-white font-extrabold text-lg sm:text-xl">
      <span class="grid place-items-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-gradient-to-br from-sun-400 to-sun-500 shadow-lg">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" transform="rotate(45 12 12)"/></svg>
      </span>
      <span>Ananda<span class="text-sun-400">Travels</span></span>
    </a>
    <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-white/90">
      <a href="#home" class="hover:text-sun-400 transition">Home</a>
      <a href="#destinations" class="hover:text-sun-400 transition">Destinations</a>
      <a href="#services" class="hover:text-sun-400 transition">Services</a>
      <a href="#why" class="hover:text-sun-400 transition">Why Us</a>
      <a href="#how" class="hover:text-sun-400 transition">How It Works</a>
      <a href="#faq" class="hover:text-sun-400 transition">FAQ</a>
    </nav>
    <div class="flex items-center gap-2 sm:gap-3">
      <a href="tel:+8801700000000" class="hidden md:flex items-center gap-2 text-white/90 text-sm font-semibold hover:text-sun-400 transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 0 1 2-2h2.3a1 1 0 0 1 1 .7l1 3a1 1 0 0 1-.3 1L7.7 9.3a12 12 0 0 0 7 7l1.6-1.3a1 1 0 0 1 1-.3l3 1a1 1 0 0 1 .7 1V19a2 2 0 0 1-2 2A16 16 0 0 1 3 5z"/></svg>
        +8801816-402466
      </a>
      <a href="/admin/login" class="px-3.5 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-white/15 hover:bg-white text-white hover:text-brand-700 border border-white/30 transition">Admin Login</a>
      <button id="menuBtn" aria-label="Menu" class="lg:hidden w-10 h-10 grid place-items-center rounded-full bg-white/15 text-white">
        <svg id="icoMenu" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round"/></svg>
        <svg id="icoClose" class="w-5 h-5 hidden" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18" stroke-linecap="round"/></svg>
      </button>
    </div>
  </div>
  <div id="mobileMenu" class="hidden lg:hidden bg-slate-900/95 backdrop-blur-xl border-t border-white/10 animate-pop">
    <nav class="px-4 py-4 grid gap-1 text-white font-semibold">
      <a href="#home" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">Home</a>
      <a href="#destinations" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">Destinations</a>
      <a href="#services" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">Services</a>
      <a href="#why" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">Why Us</a>
      <a href="#how" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">How It Works</a>
      <a href="#faq" class="mnav px-3 py-3 rounded-xl hover:bg-white/10">FAQ</a>
      <a href="tel:+8801700000000" class="mt-2 px-3 py-3 rounded-xl bg-sun-500 text-center">📞 Call +8801816-402466</a>
    </nav>
  </div>
</header>

<!-- HERO -->
<section id="home" class="hero-bg relative overflow-hidden pt-28 sm:pt-36 pb-44 sm:pb-52">
  <div class="absolute -top-24 -left-24 w-72 h-72 sm:w-96 sm:h-96 bg-fuchsia-500/30 rounded-full blur-3xl animate-blob"></div>
  <div class="absolute top-40 right-0 w-80 h-80 sm:w-[28rem] sm:h-[28rem] bg-sky-400/30 rounded-full blur-3xl animate-blob" style="animation-delay:-5s"></div>
  <svg class="absolute inset-0 w-full h-full opacity-30 pointer-events-none" viewBox="0 0 1440 600" preserveAspectRatio="none" aria-hidden="true"><path d="M-50 470 C 300 150, 760 560, 1500 90" stroke="white" stroke-width="2" fill="none" stroke-dasharray="6 10" class="animate-dash"/></svg>
  <svg class="absolute top-28 left-0 w-8 h-8 sm:w-10 sm:h-10 text-white/70 animate-fly" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" transform="rotate(90 12 12)"/></svg>
  <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image:radial-gradient(#fff 1px,transparent 1px);background-size:28px 28px;mask-image:linear-gradient(to bottom,black,transparent 80%);-webkit-mask-image:linear-gradient(to bottom,black,transparent 80%)"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-12 gap-10 items-center">
      <div class="lg:col-span-7 animate-fadeUp">
        <span class="inline-flex items-center gap-2 glass text-white text-[11px] sm:text-xs font-bold px-3.5 sm:px-4 py-2 rounded-full mb-5 sm:mb-6">
          <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span></span>
          Best fares • Fast response • 24/7 support
        </span>
        <h1 class="text-[2.1rem] leading-[1.15] sm:text-5xl lg:text-6xl font-extrabold text-white">
          Book cheap flights to<br class="hidden sm:block" />
          <span class="bg-gradient-to-r from-sun-400 via-yellow-300 to-sun-500 bg-clip-text text-transparent"><span id="rotWord">Dubai</span></span> & beyond.
        </h1>
        <p class="mt-5 sm:mt-6 text-base sm:text-lg text-blue-100 max-w-xl">Search every airport in the world, pick your dates and tell us about your trip. Our experts will call you back with the best available fare.</p>
        <div class="mt-6 sm:mt-8 flex flex-wrap items-center gap-x-6 gap-y-2 text-white/90 text-sm font-semibold">
          <div class="flex items-center gap-2"><span class="text-sun-400">✔</span> No hidden charges</div>
          <div class="flex items-center gap-2"><span class="text-sun-400">✔</span> Quick confirmation</div>
          <div class="flex items-center gap-2"><span class="text-sun-400">✔</span> Trusted agency</div>
        </div>
      </div>

      <!-- boarding pass visual -->
      <div class="hidden lg:flex lg:col-span-5 justify-center relative h-[380px]">
        <div class="absolute w-72 h-72 rounded-full border border-white/20 top-6 right-10"></div>
        <div class="absolute w-48 h-48 rounded-full border border-white/10 top-20 right-24"></div>
        <div class="relative w-[340px] rotate-3 animate-floatSlow">
          <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-brand-600 to-brand-500 px-6 py-4 text-white flex items-center justify-between">
              <span class="font-extrabold tracking-wide text-sm">BOARDING PASS</span><span class="text-xs font-bold bg-white/20 px-2 py-1 rounded-full">ECONOMY</span>
            </div>
            <div class="px-6 pt-5 pb-4">
              <div class="flex items-center justify-between">
                <div><p class="text-3xl font-extrabold text-slate-900">DAC</p><p class="text-xs text-slate-400">Dhaka</p></div>
                <div class="flex-1 mx-3 flex items-center text-brand-500"><span class="flex-1 border-t-2 border-dashed border-brand-200"></span><svg class="w-6 h-6 mx-1" fill="currentColor" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" transform="rotate(90 12 12)"/></svg><span class="flex-1 border-t-2 border-dashed border-brand-200"></span></div>
                <div class="text-right"><p class="text-3xl font-extrabold text-slate-900">DXB</p><p class="text-xs text-slate-400">Dubai</p></div>
              </div>
              <div class="grid grid-cols-3 gap-3 mt-5 text-xs">
                <div><p class="text-slate-400">Date</p><p class="font-bold">12 Dec</p></div>
                <div><p class="text-slate-400">Gate</p><p class="font-bold">B12</p></div>
                <div><p class="text-slate-400">Seat</p><p class="font-bold">14A</p></div>
              </div>
            </div>
            <div class="relative border-t-2 border-dashed border-slate-200 px-6 py-4">
              <span class="absolute -left-3 -top-3 w-6 h-6 rounded-full bg-[#1a3a99]"></span><span class="absolute -right-3 -top-3 w-6 h-6 rounded-full bg-[#1a3a99]"></span>
              <div class="barcode h-10 rounded"></div>
            </div>
          </div>
        </div>
        <div class="absolute -left-2 bottom-12 glass rounded-2xl px-4 py-3 text-white animate-floatSlow" style="animation-delay:-2s"><p class="text-[11px] text-blue-100">Ticket status</p><p class="font-extrabold text-sm">✔ Confirmed</p></div>
        <div class="absolute right-0 bottom-2 glass rounded-2xl px-4 py-3 text-white animate-floatSlow" style="animation-delay:-4s"><p class="text-[11px] text-blue-100">Dhaka → Bangkok</p><p class="font-extrabold">From ৳ 24,900</p></div>
      </div>
    </div>
  </div>
</section>

<!-- SEARCH CARD -->
<section class="relative z-30 -mt-32 sm:-mt-40 px-3 sm:px-6" id="search">
  <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-2xl shadow-brand-900/25 p-4 sm:p-7 animate-fadeUp" style="animation-delay:.15s">
    <div class="flex flex-wrap items-center justify-between gap-3 mb-5">
      <!-- trip toggle -->
      <div class="relative grid grid-cols-2 w-full sm:w-72 p-1 bg-slate-100 rounded-full" id="tripTabs">
        <span id="tripInd" class="absolute top-1 bottom-1 left-1 w-[calc(50%-4px)] rounded-full bg-brand-600 shadow-md transition-transform duration-300 ease-out"></span>
        <button type="button" data-trip="oneway" class="trip-btn relative z-10 py-2.5 rounded-full text-sm font-bold transition-colors">One Way</button>
        <button type="button" data-trip="round" class="trip-btn relative z-10 py-2.5 rounded-full text-sm font-bold transition-colors">Round Trip</button>
      </div>
      <p class="text-xs sm:text-sm text-slate-500 flex items-center gap-2">
        <span id="apDot" class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
        <span id="apStatus">Loading airports…</span>
      </p>
    </div>

    <form id="searchForm" novalidate class="grid grid-cols-2 lg:grid-cols-12 gap-3">
      <!-- FROM / TO -->
      <div id="routeWrap" class="col-span-2 lg:col-span-8">
        <div class="relative grid grid-cols-1 sm:grid-cols-2 gap-3" id="routeGrid">
          <div data-pick="from"></div>
          <div data-pick="to"></div>
          <button type="button" id="swapBtn" aria-label="Swap airports" class="absolute z-10 right-4 top-1/2 sm:right-auto sm:left-1/2 -translate-y-1/2 sm:-translate-x-1/2 w-10 h-10 grid place-items-center rounded-full bg-white border-2 border-slate-200 text-brand-600 shadow-md hover:bg-brand-600 hover:text-white hover:border-brand-600 transition-all duration-500">
            <svg id="swapIco" class="w-5 h-5 rotate-90 sm:rotate-0 transition-transform duration-500" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24"><path d="M7 7h13m0 0-4-4m4 4-4 4M17 17H4m0 0 4-4m-4 4 4 4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </div>

      <!-- DEPART -->
      <div id="departWrap" class="col-span-2 lg:col-span-4">
        <label class="block min-h-[80px] rounded-2xl border border-slate-200 hover:border-brand-400 focus-within:border-brand-500 focus-within:ring-4 focus-within:ring-brand-100 bg-white px-4 py-3 transition cursor-pointer">
          <span class="block text-[11px] font-bold tracking-wider text-slate-400">DEPARTURE</span>
          <input type="date" id="depart" class="w-full bg-transparent outline-none font-bold text-slate-900 text-base" />
          <span id="departDay" class="block text-xs text-slate-400 h-4"></span>
        </label>
        <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
      </div>

      <!-- RETURN (round trip only) -->
      <div id="returnWrap" class="hidden col-span-1 lg:col-span-3">
        <label class="block min-h-[80px] rounded-2xl border border-slate-200 hover:border-brand-400 focus-within:border-brand-500 focus-within:ring-4 focus-within:ring-brand-100 bg-white px-4 py-3 transition cursor-pointer">
          <span class="block text-[11px] font-bold tracking-wider text-slate-400">RETURN</span>
          <input type="date" id="return" class="w-full bg-transparent outline-none font-bold text-slate-900 text-base" />
          <span id="returnDay" class="block text-xs text-slate-400 h-4"></span>
        </label>
        <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
      </div>

      <!-- TRAVELLERS -->
      <div class="relative col-span-2 lg:col-span-6" id="travWrap">
        <button type="button" id="travBtn" class="w-full min-h-[80px] text-left rounded-2xl border border-slate-200 hover:border-brand-400 bg-white px-4 py-3 transition flex items-center gap-3">
          <span class="shrink-0 w-10 h-10 rounded-xl bg-brand-50 text-brand-600 grid place-items-center">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM22 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8" stroke-linecap="round"/></svg>
          </span>
          <span class="min-w-0 flex-1">
            <span class="block text-[11px] font-bold tracking-wider text-slate-400">TRAVELLERS & CLASS</span>
            <span id="travLabel" class="block font-bold text-slate-900 truncate">1 Adult</span>
            <span id="travSub" class="block text-xs text-slate-400">Economy</span>
          </span>
          <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
        </button>
        <div id="travPanel" class="hidden fixed inset-x-0 bottom-0 z-[60] bg-white rounded-t-3xl p-5 pb-8 animate-sheet md:animate-pop md:absolute md:inset-x-auto md:bottom-auto md:left-0 md:top-full md:mt-2 md:w-[340px] md:rounded-2xl md:p-5 md:shadow-2xl md:border md:border-slate-100 md:z-30">
          <div class="flex items-center justify-between md:hidden mb-4">
            <p class="font-extrabold text-lg">Travellers & class</p>
            <button type="button" class="trav-close w-9 h-9 rounded-full bg-slate-100 grid place-items-center">✕</button>
          </div>
          <div class="flex items-center justify-between mb-4">
            <div><p class="font-bold">Adults</p><p class="text-xs text-slate-400">12+ years</p></div>
            <div class="flex items-center gap-3">
              <button type="button" data-t="adults" data-d="-1" class="cnt w-10 h-10 rounded-full border-2 border-slate-200 text-lg font-bold hover:border-brand-500 hover:text-brand-600 active:scale-90 transition">−</button>
              <span id="adultsVal" class="w-5 text-center font-extrabold">1</span>
              <button type="button" data-t="adults" data-d="1" class="cnt w-10 h-10 rounded-full border-2 border-slate-200 text-lg font-bold hover:border-brand-500 hover:text-brand-600 active:scale-90 transition">+</button>
            </div>
          </div>
          <div class="flex items-center justify-between mb-5">
            <div><p class="font-bold">Children</p><p class="text-xs text-slate-400">2–11 years</p></div>
            <div class="flex items-center gap-3">
              <button type="button" data-t="children" data-d="-1" class="cnt w-10 h-10 rounded-full border-2 border-slate-200 text-lg font-bold hover:border-brand-500 hover:text-brand-600 active:scale-90 transition">−</button>
              <span id="childrenVal" class="w-5 text-center font-extrabold">0</span>
              <button type="button" data-t="children" data-d="1" class="cnt w-10 h-10 rounded-full border-2 border-slate-200 text-lg font-bold hover:border-brand-500 hover:text-brand-600 active:scale-90 transition">+</button>
            </div>
          </div>
          <p class="text-xs font-bold tracking-wider text-slate-400 mb-2">CABIN CLASS</p>
          <div id="cabinWrap" class="grid grid-cols-2 gap-2">
            <button type="button" data-cabin="Economy" class="cabin px-3 py-2.5 rounded-xl border-2 text-sm font-bold transition">Economy</button>
            <button type="button" data-cabin="Premium Economy" class="cabin px-3 py-2.5 rounded-xl border-2 text-sm font-bold transition">Premium</button>
            <button type="button" data-cabin="Business" class="cabin px-3 py-2.5 rounded-xl border-2 text-sm font-bold transition">Business</button>
            <button type="button" data-cabin="First" class="cabin px-3 py-2.5 rounded-xl border-2 text-sm font-bold transition">First</button>
          </div>
          <button type="button" class="trav-close mt-5 w-full py-3 rounded-xl bg-brand-600 text-white font-bold hover:bg-brand-700 transition">Done</button>
        </div>
      </div>

      <!-- SUBMIT -->
      <div class="col-span-2 lg:col-span-6 flex">
        <button type="submit" class="btn-shine w-full min-h-[64px] lg:min-h-[80px] px-8 rounded-2xl bg-gradient-to-r from-sun-500 to-orange-500 text-white font-extrabold text-lg shadow-lg shadow-orange-500/30 hover:shadow-orange-500/50 hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center justify-center gap-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.6" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg>
          Search Flights
        </button>
      </div>
    </form>
  </div>

  <div class="max-w-6xl mx-auto mt-5 grid grid-cols-2 md:grid-cols-4 gap-3 text-center text-xs sm:text-sm font-semibold text-slate-600">
    <div class="bg-white/70 rounded-xl py-2.5">🔒 Secure & private</div><div class="bg-white/70 rounded-xl py-2.5">💸 No hidden fees</div>
    <div class="bg-white/70 rounded-xl py-2.5">⚡ Fast callback</div><div class="bg-white/70 rounded-xl py-2.5">🎧 24/7 support</div>
  </div>
</section>

<!-- STATS -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 mt-16 sm:mt-20">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
    <div class="reveal bg-white rounded-2xl p-5 sm:p-6 text-center shadow-sm border border-slate-100"><p class="text-3xl sm:text-4xl font-extrabold text-brand-600"><span class="count" data-to="15000">0</span>+</p><p class="text-xs sm:text-sm text-slate-500 mt-1 font-semibold">Tickets Issued</p></div>
    <div class="reveal bg-white rounded-2xl p-5 sm:p-6 text-center shadow-sm border border-slate-100" style="transition-delay:.1s"><p class="text-3xl sm:text-4xl font-extrabold text-brand-600"><span class="count" data-to="120">0</span>+</p><p class="text-xs sm:text-sm text-slate-500 mt-1 font-semibold">Destinations</p></div>
    <div class="reveal bg-white rounded-2xl p-5 sm:p-6 text-center shadow-sm border border-slate-100" style="transition-delay:.2s"><p class="text-3xl sm:text-4xl font-extrabold text-brand-600"><span class="count" data-to="50">0</span>+</p><p class="text-xs sm:text-sm text-slate-500 mt-1 font-semibold">Airlines</p></div>
    <div class="reveal bg-white rounded-2xl p-5 sm:p-6 text-center shadow-sm border border-slate-100" style="transition-delay:.3s"><p class="text-3xl sm:text-4xl font-extrabold text-brand-600"><span class="count" data-to="98">0</span>%</p><p class="text-xs sm:text-sm text-slate-500 mt-1 font-semibold">Happy Customers</p></div>
  </div>
</section>

<!-- DESTINATIONS -->
<section id="destinations" class="max-w-7xl mx-auto px-4 sm:px-6 py-20 sm:py-24">
  <div class="text-center max-w-2xl mx-auto reveal">
    <p class="text-brand-600 font-bold text-xs sm:text-sm tracking-widest">POPULAR ROUTES</p>
    <h2 class="text-2xl sm:text-4xl font-extrabold mt-2">Top destinations our travellers love</h2>
    <p class="text-slate-500 mt-3 text-sm sm:text-base">Tap a destination to fill the search form instantly.</p>
  </div>
  <div id="destGrid" class="mt-10 sm:mt-12 flex gap-4 overflow-x-auto snap-x snap-mandatory no-scrollbar -mx-4 px-4 sm:mx-0 sm:px-0 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:gap-6 sm:overflow-visible"></div>
</section>

<!-- SERVICES -->
<section id="services" class="bg-white py-20 sm:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto reveal">
      <p class="text-brand-600 font-bold text-xs sm:text-sm tracking-widest">OUR SERVICES</p>
      <h2 class="text-2xl sm:text-4xl font-extrabold mt-2">Everything for a perfect journey</h2>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6 mt-10 sm:mt-12">
      <div class="reveal tilt p-5 sm:p-7 rounded-3xl bg-gradient-to-b from-brand-50 to-white border border-brand-100"><div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-brand-600 text-white grid place-items-center text-xl sm:text-2xl mb-4">✈️</div><h3 class="font-extrabold sm:text-lg">Air Tickets</h3><p class="text-xs sm:text-sm text-slate-500 mt-2">Domestic & international tickets at the best fares.</p></div>
      <div class="reveal tilt p-5 sm:p-7 rounded-3xl bg-gradient-to-b from-orange-50 to-white border border-orange-100" style="transition-delay:.08s"><div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-sun-500 text-white grid place-items-center text-xl sm:text-2xl mb-4">🏨</div><h3 class="font-extrabold sm:text-lg">Hotel Booking</h3><p class="text-xs sm:text-sm text-slate-500 mt-2">Comfortable stays near your destination.</p></div>
      <div class="reveal tilt p-5 sm:p-7 rounded-3xl bg-gradient-to-b from-emerald-50 to-white border border-emerald-100" style="transition-delay:.16s"><div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-emerald-500 text-white grid place-items-center text-xl sm:text-2xl mb-4">🛂</div><h3 class="font-extrabold sm:text-lg">Visa Support</h3><p class="text-xs sm:text-sm text-slate-500 mt-2">Guidance and processing for popular countries.</p></div>
      <div class="reveal tilt p-5 sm:p-7 rounded-3xl bg-gradient-to-b from-violet-50 to-white border border-violet-100" style="transition-delay:.24s"><div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-violet-500 text-white grid place-items-center text-xl sm:text-2xl mb-4">🕋</div><h3 class="font-extrabold sm:text-lg">Hajj & Umrah</h3><p class="text-xs sm:text-sm text-slate-500 mt-2">Trusted packages with full assistance.</p></div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section id="why" class="py-20 sm:py-24 max-w-7xl mx-auto px-4 sm:px-6">
  <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
    <div class="reveal">
      <p class="text-brand-600 font-bold text-xs sm:text-sm tracking-widest">WHY Ananda</p>
      <h2 class="text-2xl sm:text-4xl font-extrabold mt-2 leading-tight">Travel smarter with a team you can trust</h2>
      <p class="text-slate-500 mt-4 text-sm sm:text-base">We compare multiple airlines and fare sources so you do not have to. One request – our agent handles everything from fare to ticket.</p>
      <ul class="mt-6 space-y-4">
        <li class="flex gap-4"><span class="shrink-0 w-11 h-11 rounded-xl bg-brand-600 text-white grid place-items-center">💰</span><div><p class="font-bold">Lowest fares</p><p class="text-sm text-slate-500">Smart comparison for the best price on every route.</p></div></li>
        <li class="flex gap-4"><span class="shrink-0 w-11 h-11 rounded-xl bg-sun-500 text-white grid place-items-center">⚡</span><div><p class="font-bold">Instant response</p><p class="text-sm text-slate-500">Our agent calls you back within minutes.</p></div></li>
        <li class="flex gap-4"><span class="shrink-0 w-11 h-11 rounded-xl bg-emerald-500 text-white grid place-items-center">🛡️</span><div><p class="font-bold">Safe & secure</p><p class="text-sm text-slate-500">Your personal information is never shared.</p></div></li>
        <li class="flex gap-4"><span class="shrink-0 w-11 h-11 rounded-xl bg-violet-500 text-white grid place-items-center">🎧</span><div><p class="font-bold">After-sales support</p><p class="text-sm text-slate-500">Date change, refund or any issue – we are one call away.</p></div></li>
      </ul>
    </div>
    <div class="reveal relative">
      <div class="aspect-[4/3] rounded-3xl overflow-hidden bg-gradient-to-br from-brand-600 to-violet-600 shadow-2xl">
        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1000&q=70" alt="Airplane in the sky" loading="lazy" onerror="this.remove()" class="w-full h-full object-cover" />
      </div>
      <div class="absolute -bottom-5 left-4 sm:-left-6 bg-white rounded-2xl shadow-xl px-5 py-4 flex items-center gap-3 animate-floatSlow">
        <span class="w-11 h-11 rounded-full bg-emerald-100 text-emerald-600 grid place-items-center font-extrabold">★</span>
        <div><p class="font-extrabold leading-none">4.9 / 5</p><p class="text-xs text-slate-500">2,000+ reviews</p></div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section id="how" class="py-20 sm:py-24 bg-white">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto reveal">
      <p class="text-brand-600 font-bold text-xs sm:text-sm tracking-widest">HOW IT WORKS</p>
      <h2 class="text-2xl sm:text-4xl font-extrabold mt-2">Book your ticket in 3 easy steps</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-10 md:gap-8 mt-12 sm:mt-14 relative">
      <div class="hidden md:block absolute top-10 left-[17%] right-[17%] border-t-2 border-dashed border-brand-200"></div>
      <div class="reveal text-center relative"><div class="w-20 h-20 mx-auto rounded-full bg-brand-600 text-white grid place-items-center text-3xl font-extrabold shadow-xl shadow-brand-600/30">1</div><h3 class="font-extrabold text-lg mt-5">Search your flight</h3><p class="text-sm text-slate-500 mt-2">Choose route, dates and number of travellers.</p></div>
      <div class="reveal text-center relative" style="transition-delay:.15s"><div class="w-20 h-20 mx-auto rounded-full bg-sun-500 text-white grid place-items-center text-3xl font-extrabold shadow-xl shadow-orange-500/30">2</div><h3 class="font-extrabold text-lg mt-5">Share your details</h3><p class="text-sm text-slate-500 mt-2">Enter name, phone and email so we can reach you.</p></div>
      <div class="reveal text-center relative" style="transition-delay:.3s"><div class="w-20 h-20 mx-auto rounded-full bg-emerald-500 text-white grid place-items-center text-3xl font-extrabold shadow-xl shadow-emerald-500/30">3</div><h3 class="font-extrabold text-lg mt-5">Get your ticket</h3><p class="text-sm text-slate-500 mt-2">We confirm the best fare and issue your ticket.</p></div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section id="reviews" class="bg-slate-900 py-20 sm:py-24 relative overflow-hidden">
  <div class="absolute -top-24 right-0 w-96 h-96 bg-brand-600/30 rounded-full blur-3xl animate-blob"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center max-w-2xl mx-auto reveal">
      <p class="text-sun-400 font-bold text-xs sm:text-sm tracking-widest">TESTIMONIALS</p>
      <h2 class="text-2xl sm:text-4xl font-extrabold text-white mt-2">Loved by thousands of travellers</h2>
    </div>
    <div class="mt-10 sm:mt-12 flex gap-4 overflow-x-auto snap-x snap-mandatory no-scrollbar -mx-4 px-4 md:mx-0 md:px-0 md:grid md:grid-cols-3 md:gap-6 md:overflow-visible">
      <div class="reveal snap-center shrink-0 w-[85%] sm:w-[60%] md:w-auto glass rounded-3xl p-6 sm:p-7 text-white"><p class="text-sun-400 text-lg">★★★★★</p><p class="mt-3 text-blue-50 text-sm sm:text-base">Very fast service. I got a better fare than any website and they helped me with date change too.</p><p class="mt-5 font-bold">Rahim Uddin <span class="text-blue-200 font-medium text-sm">· Dhaka</span></p></div>
      <div class="reveal snap-center shrink-0 w-[85%] sm:w-[60%] md:w-auto glass rounded-3xl p-6 sm:p-7 text-white" style="transition-delay:.1s"><p class="text-sun-400 text-lg">★★★★★</p><p class="mt-3 text-blue-50 text-sm sm:text-base">Booked family tickets for 4 people. They called me in 5 minutes and everything was smooth.</p><p class="mt-5 font-bold">Nusrat Jahan <span class="text-blue-200 font-medium text-sm">· Chattogram</span></p></div>
      <div class="reveal snap-center shrink-0 w-[85%] sm:w-[60%] md:w-auto glass rounded-3xl p-6 sm:p-7 text-white" style="transition-delay:.2s"><p class="text-sun-400 text-lg">★★★★★</p><p class="mt-3 text-blue-50 text-sm sm:text-base">Honest agency. No hidden charges and the support team is always available. Highly recommended.</p><p class="mt-5 font-bold">Sabbir Ahmed <span class="text-blue-200 font-medium text-sm">· Sylhet</span></p></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-20 sm:py-24 max-w-3xl mx-auto px-4 sm:px-6">
  <div class="text-center reveal">
    <p class="text-brand-600 font-bold text-xs sm:text-sm tracking-widest">FAQ</p>
    <h2 class="text-2xl sm:text-4xl font-extrabold mt-2">Frequently asked questions</h2>
  </div>
  <div class="mt-10 space-y-3">
    <details class="reveal group bg-white rounded-2xl border border-slate-100 shadow-sm p-5"><summary class="flex items-center justify-between gap-4 cursor-pointer font-bold">Do I pay when I submit the request?<span class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 grid place-items-center transition group-open:rotate-180">⌄</span></summary><p class="text-sm text-slate-500 mt-3">No. Submitting the form is free. Our agent will contact you with the fare and payment options.</p></details>
    <details class="reveal group bg-white rounded-2xl border border-slate-100 shadow-sm p-5"><summary class="flex items-center justify-between gap-4 cursor-pointer font-bold">How fast will you contact me?<span class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 grid place-items-center transition group-open:rotate-180">⌄</span></summary><p class="text-sm text-slate-500 mt-3">Usually within a few minutes during office hours, and first thing next morning otherwise.</p></details>
    <details class="reveal group bg-white rounded-2xl border border-slate-100 shadow-sm p-5"><summary class="flex items-center justify-between gap-4 cursor-pointer font-bold">Can I change or cancel my ticket?<span class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 grid place-items-center transition group-open:rotate-180">⌄</span></summary><p class="text-sm text-slate-500 mt-3">Yes, subject to the airline's fare rules. We handle date changes and refunds on your behalf.</p></details>
    <details class="reveal group bg-white rounded-2xl border border-slate-100 shadow-sm p-5"><summary class="flex items-center justify-between gap-4 cursor-pointer font-bold">Do you book tickets for children?<span class="shrink-0 w-8 h-8 rounded-full bg-brand-50 text-brand-600 grid place-items-center transition group-open:rotate-180">⌄</span></summary><p class="text-sm text-slate-500 mt-3">Yes. Choose the number of children (2–11 years) in the search form and we will quote accordingly.</p></details>
  </div>
</section>

<!-- CTA -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 -mb-16 relative z-10">
  <div class="reveal rounded-3xl bg-gradient-to-r from-brand-600 to-violet-600 p-8 sm:p-14 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl shadow-brand-600/30 text-center md:text-left">
    <div class="text-white"><h3 class="text-2xl sm:text-3xl font-extrabold">Ready for your next trip?</h3><p class="text-blue-100 mt-2 text-sm sm:text-base">Search now and our team will contact you with the best offer.</p></div>
    <a href="#search" class="btn-shine w-full md:w-auto px-8 py-4 rounded-2xl bg-white text-brand-700 font-extrabold hover:scale-105 transition">Search Flights ↑</a>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-slate-950 text-slate-400 pt-28 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-10">
    <div class="md:col-span-2"><p class="text-white font-extrabold text-xl">Ananda<span class="text-sun-400">Travels</span></p><p class="mt-3 text-sm max-w-sm">Your trusted partner for domestic and international air tickets. Fly smart, fly happy.</p></div>
    <div><p class="text-white font-bold mb-3">Quick Links</p><ul class="space-y-2 text-sm"><li><a href="#home" class="hover:text-white">Home</a></li><li><a href="#destinations" class="hover:text-white">Destinations</a></li><li><a href="#services" class="hover:text-white">Services</a></li><li><a href="/admin/login" class="hover:text-white">Admin</a></li></ul></div>
    <div><p class="text-white font-bold mb-3">Contact</p><ul class="space-y-2 text-sm"><li>📞 +8801816-402466</li><li>✉️ info@Anandatravels.com</li><li>📍 House-54/A(1st Floor), Road-132, Gulshan-1, Dhaka</li></ul></div>
  </div>
  <p class="text-center text-xs mt-12 border-t border-white/10 pt-6 px-4">© <span id="yr"></span> Ananda Travels. All rights reserved. · Airport data: OpenFlights</p>
</footer>

<!-- floating buttons -->
<a href="https://wa.me/+8801816402466" target="_blank" rel="noopener" aria-label="WhatsApp" class="fixed z-40 right-4 bottom-4 sm:right-6 sm:bottom-6 w-14 h-14 rounded-full bg-emerald-500 text-white grid place-items-center shadow-xl shadow-emerald-500/40 hover:scale-110 transition">
  <span class="absolute inset-0 rounded-full bg-emerald-500 animate-pulseRing"></span>
  <svg class="relative w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.2 14.2c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.3-.7-2.8-1.2-4.6-4-4.7-4.2-.1-.2-1.1-1.5-1.1-2.8 0-1.3.7-2 .9-2.3.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 1.9c.1.2.1.4 0 .6l-.4.6c-.2.2-.3.4-.1.7.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.3.1.5.1.7-.1l.9-1.1c.2-.3.4-.2.7-.1l1.8.9c.3.1.5.2.5.4.1.1.1.7-.1 1.2z"/></svg>
</a>
<button id="toTop" aria-label="Back to top" class="hidden fixed z-40 right-5 bottom-20 sm:right-7 sm:bottom-24 w-10 h-10 rounded-full bg-white text-brand-600 shadow-lg border border-slate-100 grid place-items-center hover:-translate-y-1 transition">↑</button>

<!-- BOOKING MODAL -->
<div id="modal" class="hidden fixed inset-0 z-[70] items-end sm:items-center justify-center sm:p-4">
  <div id="modalBg" class="absolute inset-0 bg-slate-900/70 backdrop-blur-sm"></div>
  <div class="relative w-full sm:max-w-lg bg-white rounded-t-3xl sm:rounded-3xl shadow-2xl overflow-hidden animate-sheet sm:animate-pop max-h-[94vh] overflow-y-auto">
    <div id="formView">
      <div class="bg-gradient-to-r from-brand-700 to-brand-500 p-5 sm:p-6 text-white relative">
        <button id="closeModal" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/15 hover:bg-white/30 grid place-items-center transition" aria-label="Close">✕</button>
        <h3 class="text-lg sm:text-xl font-extrabold pr-10">Almost there! Your details</h3>
        <div class="mt-4 glass rounded-2xl p-4 text-sm" id="summary"></div>
      </div>
      <form id="bookForm" novalidate class="p-5 sm:p-6 space-y-4">
        <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true" />
        <div>
          <label class="text-xs font-bold text-slate-500 ml-1">FULL NAME *</label>
          <input name="name" type="text" autocomplete="name" placeholder="Your full name" class="mt-1 w-full border-2 border-slate-200 focus:border-brand-500 focus:ring-4 focus:ring-brand-100 outline-none rounded-xl px-4 py-3 font-semibold text-base transition" />
          <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
          <div>
            <label class="text-xs font-bold text-slate-500 ml-1">EMAIL *</label>
            <input name="email" type="email" autocomplete="email" placeholder="you@email.com" class="mt-1 w-full border-2 border-slate-200 focus:border-brand-500 focus:ring-4 focus:ring-brand-100 outline-none rounded-xl px-4 py-3 font-semibold text-base transition" />
            <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
          </div>
          <div>
            <label class="text-xs font-bold text-slate-500 ml-1">PHONE *</label>
            <input name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" class="mt-1 w-full border-2 border-slate-200 focus:border-brand-500 focus:ring-4 focus:ring-brand-100 outline-none rounded-xl px-4 py-3 font-semibold text-base transition" />
            <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
          </div>
        </div>
        <div>
          <label class="text-xs font-bold text-slate-500 ml-1">ADDRESS *</label>
          <textarea name="address" rows="2" autocomplete="street-address" placeholder="House, road, city" class="mt-1 w-full border-2 border-slate-200 focus:border-brand-500 focus:ring-4 focus:ring-brand-100 outline-none rounded-xl px-4 py-3 font-semibold text-base transition resize-none"></textarea>
          <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>
        </div>
        <button id="bookSubmit" type="submit" class="btn-shine w-full py-4 rounded-2xl bg-gradient-to-r from-sun-500 to-orange-500 text-white font-extrabold text-lg shadow-lg shadow-orange-500/30 hover:-translate-y-0.5 transition flex items-center justify-center gap-2 disabled:opacity-70">
          <span id="bookLabel">Submit Request</span>
          <svg id="spin" class="hidden w-5 h-5 animate-spin" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"/><path d="M4 12a8 8 0 0 1 8-8" stroke="currentColor" stroke-width="4" stroke-linecap="round"/></svg>
        </button>
        <p id="submitError" class="hidden text-sm text-red-500 text-center"></p>
      </form>
    </div>
    <div id="successView" class="hidden p-8 sm:p-10 text-center">
      <div class="w-24 h-24 mx-auto rounded-full bg-emerald-100 grid place-items-center animate-pop">
        <svg class="w-12 h-12 text-emerald-500" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="m5 13 4 4L19 7" stroke-dasharray="30" stroke-dashoffset="30" stroke-linecap="round"><animate attributeName="stroke-dashoffset" to="0" dur=".6s" fill="freeze" begin=".2s"/></path></svg>
      </div>
      <h3 class="text-2xl font-extrabold mt-6">Request Submitted!</h3>
      <p class="text-slate-500 mt-2">Thank you. Our team will contact you shortly with the best fare.</p>
      <p class="mt-4 inline-block bg-slate-100 rounded-full px-4 py-2 text-sm font-bold">Reference: <span id="refId" class="text-brand-600"></span></p>
      <button id="doneBtn" class="mt-8 w-full py-3.5 rounded-2xl bg-brand-600 hover:bg-brand-700 text-white font-bold transition">Close</button>
    </div>
  </div>
</div>

<script>
/* =====================================================================
   CONFIG
   - Airports: OpenFlights database (free, open data) loaded via AJAX (fetch),
     cached in localStorage for 7 days. If the network fails, a built-in list is used.
   - Bookings: USE_API=true hole POST JSON jabe BOOKINGS_URL e (admin backend).
       body: { from, to, tripType, departDate, returnDate, adults, children,
               cabin, name, email, phone, address }
   ===================================================================== */
const CONFIG = {
  USE_API: false,
  BOOKINGS_URL: '/api/bookings',
  AIRPORT_SOURCES: [
    'https://cdn.jsdelivr.net/gh/jpatokal/openflights@master/data/airports.dat',
    'https://raw.githubusercontent.com/jpatokal/openflights/master/data/airports.dat'
  ],
  CACHE_KEY: 'sw_airports_v1',
  CACHE_TTL: 7 * 24 * 60 * 60 * 1000
};

/* offline fallback: c=code, t=city, n=airport name, o=country */
const FALLBACK = [
  ['DAC','Dhaka','Hazrat Shahjalal International Airport','Bangladesh'],['CGP','Chattogram','Shah Amanat International Airport','Bangladesh'],
  ['ZYL','Sylhet','Osmani International Airport','Bangladesh'],['CXB',"Cox's Bazar","Cox's Bazar Airport",'Bangladesh'],
  ['JSR','Jashore','Jashore Airport','Bangladesh'],['RJH','Rajshahi','Shah Makhdum Airport','Bangladesh'],
  ['BZL','Barishal','Barishal Airport','Bangladesh'],['SPD','Saidpur','Saidpur Airport','Bangladesh'],
  ['DXB','Dubai','Dubai International Airport','United Arab Emirates'],['AUH','Abu Dhabi','Zayed International Airport','United Arab Emirates'],
  ['SHJ','Sharjah','Sharjah International Airport','United Arab Emirates'],['DOH','Doha','Hamad International Airport','Qatar'],
  ['RUH','Riyadh','King Khalid International Airport','Saudi Arabia'],['JED','Jeddah','King Abdulaziz International Airport','Saudi Arabia'],
  ['MED','Madinah','Prince Mohammad Bin Abdulaziz Airport','Saudi Arabia'],['KWI','Kuwait City','Kuwait International Airport','Kuwait'],
  ['MCT','Muscat','Muscat International Airport','Oman'],['BAH','Manama','Bahrain International Airport','Bahrain'],
  ['KUL','Kuala Lumpur','Kuala Lumpur International Airport','Malaysia'],['SIN','Singapore','Changi Airport','Singapore'],
  ['BKK','Bangkok','Suvarnabhumi Airport','Thailand'],['HKT','Phuket','Phuket International Airport','Thailand'],
  ['CGK','Jakarta','Soekarno-Hatta International Airport','Indonesia'],['HKG','Hong Kong','Hong Kong International Airport','Hong Kong'],
  ['CAN','Guangzhou','Baiyun International Airport','China'],['PEK','Beijing','Capital International Airport','China'],
  ['NRT','Tokyo','Narita International Airport','Japan'],['ICN','Seoul','Incheon International Airport','South Korea'],
  ['DEL','Delhi','Indira Gandhi International Airport','India'],['CCU','Kolkata','Netaji Subhas Chandra Bose International Airport','India'],
  ['BOM','Mumbai','Chhatrapati Shivaji International Airport','India'],['MAA','Chennai','Chennai International Airport','India'],
  ['KTM','Kathmandu','Tribhuvan International Airport','Nepal'],['CMB','Colombo','Bandaranaike International Airport','Sri Lanka'],
  ['MLE','Male','Velana International Airport','Maldives'],['KHI','Karachi','Jinnah International Airport','Pakistan'],
  ['IST','Istanbul','Istanbul Airport','Turkey'],['LHR','London','Heathrow Airport','United Kingdom'],
  ['MAN','Manchester','Manchester Airport','United Kingdom'],['CDG','Paris','Charles de Gaulle International Airport','France'],
  ['FRA','Frankfurt','Frankfurt am Main Airport','Germany'],['FCO','Rome','Leonardo da Vinci-Fiumicino Airport','Italy'],
  ['JFK','New York','John F Kennedy International Airport','United States'],['YYZ','Toronto','Lester B. Pearson International Airport','Canada'],
  ['SYD','Sydney','Sydney Kingsford Smith International Airport','Australia'],['CAI','Cairo','Cairo International Airport','Egypt']
].map(a => ({ c: a[0], t: a[1], n: a[2], o: a[3] }));

const POPULAR_ORDER = ['DAC','CGP','ZYL','CXB','DXB','DOH','JED','RUH','KUL','SIN','BKK','DEL','CCU','LHR','JFK','IST','AUH','MCT','KWI','HKG','NRT','CDG','YYZ','SYD'];
const POPULAR = new Set(POPULAR_ORDER);

const DESTINATIONS = [
  { to:'DXB', city:'Dubai', from:'28,500', img:'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&q=70', grad:'from-amber-500 to-orange-600' },
  { to:'BKK', city:'Bangkok', from:'24,900', img:'https://images.unsplash.com/photo-1508009603885-50cf7c579365?w=800&q=70', grad:'from-pink-500 to-rose-600' },
  { to:'SIN', city:'Singapore', from:'32,000', img:'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=800&q=70', grad:'from-sky-500 to-blue-600' },
  { to:'KUL', city:'Kuala Lumpur', from:'27,800', img:'https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=800&q=70', grad:'from-emerald-500 to-teal-600' },
  { to:'LHR', city:'London', from:'89,000', img:'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=800&q=70', grad:'from-indigo-500 to-violet-600' },
  { to:'JED', city:'Jeddah', from:'45,500', img:'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=800&q=70', grad:'from-lime-500 to-green-600' },
  { to:'IST', city:'Istanbul', from:'52,000', img:'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?w=800&q=70', grad:'from-red-500 to-rose-600' },
  { to:'CXB', city:"Cox's Bazar", from:'6,500', img:'https://images.unsplash.com/photo-1583212292454-1fe6229603b7?w=800&q=70', grad:'from-cyan-500 to-blue-600' }
];

/* ---------- helpers ---------- */
const $ = (s, el = document) => el.querySelector(s);
const $$ = (s, el = document) => [...el.querySelectorAll(s)];
const norm = s => (s || '').normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();
const esc = s => String(s).replace(/[&<>"']/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
const isMobile = () => window.matchMedia('(max-width: 767px)').matches;
const prep = a => { a.k = norm(`${a.t} ${a.c} ${a.n} ${a.o}`); a.cl = norm(a.t); a.nl = norm(a.n); a.ol = norm(a.o); a.cc = a.c.toLowerCase(); return a; };
function hl(text, q) {
  const toks = q.trim().split(/\s+/).filter(Boolean).map(t => t.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'));
  if (!toks.length) return esc(text);
  return text.split(new RegExp('(' + toks.join('|') + ')', 'gi')).map((p, i) => i % 2 ? `<mark class="bg-yellow-200/80 text-inherit rounded px-0.5">${esc(p)}</mark>` : esc(p)).join('');
}

const state = { airports: [], trip: 'oneway', from: null, to: null, adults: 1, children: 0, cabin: 'Economy' };

/* ---------- airport data (AJAX) ---------- */
function csvLine(line) {
  const out = []; let cur = '', q = false;
  for (let i = 0; i < line.length; i++) {
    const ch = line[i];
    if (q) { if (ch === '"') { if (line[i + 1] === '"') { cur += '"'; i++; } else q = false; } else cur += ch; }
    else if (ch === '"') q = true;
    else if (ch === ',') { out.push(cur); cur = ''; }
    else cur += ch;
  }
  out.push(cur); return out;
}
function parseOpenFlights(text) {
  const list = [], seen = new Set();
  for (const line of text.split('\n')) {
    if (!line.trim()) continue;
    const f = csvLine(line.replace(/\r$/, ''));
    const code = f[4];
    if (!/^[A-Z]{3}$/.test(code) || (f[12] && f[12] !== 'airport') || seen.has(code)) continue;
    seen.add(code);
    list.push({ c: code, t: f[2] || f[1], n: f[1], o: f[3] });
  }
  return list;
}
async function loadAirports() {
  try {
    const c = JSON.parse(localStorage.getItem(CONFIG.CACHE_KEY) || 'null');
    if (c && Date.now() - c.t < CONFIG.CACHE_TTL && c.d && c.d.length > 500) return { list: c.d, from: 'cache' };
  } catch (e) {}
  for (const url of CONFIG.AIRPORT_SOURCES) {
    try {
      const ctrl = new AbortController(); const to = setTimeout(() => ctrl.abort(), 15000);
      const res = await fetch(url, { signal: ctrl.signal }); clearTimeout(to);
      if (!res.ok) continue;
      const list = parseOpenFlights(await res.text());
      if (list.length > 500) {
        try { localStorage.setItem(CONFIG.CACHE_KEY, JSON.stringify({ t: Date.now(), d: list })); } catch (e) {}
        return { list, from: 'network' };
      }
    } catch (e) { /* try next source */ }
  }
  return null;
}
function setAirportStatus(ok, n) {
  $('#apDot').className = 'w-2 h-2 rounded-full ' + (ok ? 'bg-emerald-500' : 'bg-amber-400');
  $('#apStatus').textContent = ok ? `${n.toLocaleString()} airports worldwide` : `${n.toLocaleString()} popular airports (offline list)`;
}

/* ---------- search ranking ---------- */
function popularList() {
  const map = new Map(state.airports.map(a => [a.c, a]));
  return POPULAR_ORDER.map(c => map.get(c)).filter(Boolean);
}
function searchAirports(raw) {
  const q = norm(raw.trim());
  if (!q) return { items: popularList(), popular: true };
  const tokens = q.split(/\s+/), res = [];
  for (const a of state.airports) {
    if (!tokens.every(t => a.k.includes(t))) continue;
    let s;
    if (a.cc === q) s = 100; else if (a.cc.startsWith(q)) s = 90;
    else if (a.cl === q) s = 88; else if (a.cl.startsWith(q)) s = 80;
    else if (a.cl.includes(q)) s = 60; else if (a.nl.startsWith(q)) s = 55;
    else if (a.ol.startsWith(q)) s = 35; else s = 30;
    if (POPULAR.has(a.c)) s += 8;
    if (a.o === 'Bangladesh') s += 5;
    res.push([s, a]);
  }
  res.sort((x, y) => y[0] - x[0] || x[1].t.localeCompare(y[1].t));
  return { items: res.slice(0, 50).map(r => r[1]), popular: false, total: res.length };
}

/* ---------- airport picker (From / To) ---------- */
const pickers = {};
function buildPicker(root) {
  const key = root.dataset.pick, isFrom = key === 'from';
  const label = isFrom ? 'FROM' : 'TO';
  const accent = isFrom ? 'bg-brand-50 text-brand-600' : 'bg-orange-50 text-orange-500';
  const rot = isFrom ? 'rotate(-45 12 12)' : 'rotate(45 12 12)';
  root.className = 'relative';
  root.innerHTML = `
    <button type="button" class="pick-btn w-full min-h-[80px] text-left rounded-2xl border border-slate-200 hover:border-brand-400 bg-white px-4 py-3 transition flex items-center gap-3">
      <span class="shrink-0 w-10 h-10 rounded-xl ${accent} grid place-items-center">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" transform="${rot}"/></svg>
      </span>
      <span class="min-w-0 flex-1 ${isFrom ? '' : 'sm:pl-3'}">
        <span class="block text-[11px] font-bold tracking-wider text-slate-400">${label}</span>
        <span class="pick-value block font-bold text-slate-400 truncate">Select airport</span>
        <span class="pick-sub block text-xs text-slate-400 truncate h-4"></span>
      </span>
    </button>
    <div class="pick-panel hidden fixed inset-0 z-[60] bg-white flex flex-col animate-sheet md:animate-pop md:absolute md:inset-auto md:left-0 md:top-full md:mt-2 md:w-[420px] md:max-w-[calc(100vw-3rem)] md:max-h-[440px] md:rounded-2xl md:shadow-2xl md:border md:border-slate-100 md:z-30 overflow-hidden">
      <div class="p-3 border-b border-slate-100 flex items-center gap-2">
        <button type="button" class="pick-close md:hidden w-10 h-10 shrink-0 grid place-items-center rounded-full bg-slate-100 text-lg" aria-label="Close">←</button>
        <div class="relative flex-1">
          <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg>
          <input type="text" autocomplete="off" autocorrect="off" spellcheck="false" placeholder="${isFrom ? 'From' : 'To'}: city, airport or code" class="pick-input w-full pl-11 pr-4 py-3 rounded-xl bg-slate-100 focus:bg-white focus:ring-4 focus:ring-brand-100 border-2 border-transparent focus:border-brand-500 outline-none text-base font-semibold transition" />
        </div>
      </div>
      <p class="pick-hint px-4 pt-3 pb-1 text-[11px] font-bold tracking-wider text-slate-400"></p>
      <ul class="pick-list flex-1 overflow-y-auto overscroll-contain thin-scroll py-1" role="listbox"></ul>
    </div>
    <p class="err hidden text-xs text-red-500 mt-1 ml-1"></p>`;

  const btn = $('.pick-btn', root), panel = $('.pick-panel', root), input = $('.pick-input', root), list = $('.pick-list', root), hint = $('.pick-hint', root);
  let items = [], active = 0;

  const render = () => {
    const r = searchAirports(input.value);
    items = r.items; if (active >= items.length) active = 0;
    hint.textContent = r.popular ? 'POPULAR AIRPORTS' : (r.total > items.length ? `TOP ${items.length} OF ${r.total} MATCHES` : `${r.total} MATCH${r.total === 1 ? '' : 'ES'}`);
    list.innerHTML = items.length ? items.map((a, i) => `
      <li role="option" data-i="${i}" class="px-4 py-3 flex items-center gap-3 cursor-pointer transition ${i === active ? 'bg-brand-50' : 'hover:bg-slate-50'}">
        <span class="shrink-0 w-14 text-center py-1.5 rounded-lg bg-brand-600/10 text-brand-700 text-xs font-extrabold tracking-wide">${hl(a.c, input.value)}</span>
        <span class="min-w-0 flex-1">
          <span class="block font-bold text-sm text-slate-900 truncate">${hl(a.t, input.value)}<span class="font-medium text-slate-400">, ${esc(a.o)}</span></span>
          <span class="block text-xs text-slate-500 truncate">${hl(a.n, input.value)}</span>
        </span>
      </li>`).join('') : `<li class="px-4 py-10 text-center text-sm text-slate-400">No airports found for “${esc(input.value)}”</li>`;
    const act = $('li[data-i].bg-brand-50', list); if (act) act.scrollIntoView({ block: 'nearest' });
  };
  const open = () => {
    closeAll();
    panel.classList.remove('hidden');
    if (isMobile()) document.body.style.overflow = 'hidden';
    input.value = ''; active = 0; render();
    setTimeout(() => input.focus(), 60);
  };
  const close = () => { panel.classList.add('hidden'); if (isMobile()) document.body.style.overflow = ''; };
  const choose = a => {
    setAirport(key, a); close();
    if (isFrom && !state.to) setTimeout(() => pickers.to.open(), 150);
  };

  btn.addEventListener('click', e => { e.stopPropagation(); panel.classList.contains('hidden') ? open() : close(); });
  $('.pick-close', root).addEventListener('click', close);
  input.addEventListener('input', () => { active = 0; render(); });
  input.addEventListener('keydown', e => {
    if (e.key === 'ArrowDown') { active = Math.min(active + 1, items.length - 1); render(); e.preventDefault(); }
    else if (e.key === 'ArrowUp') { active = Math.max(active - 1, 0); render(); e.preventDefault(); }
    else if (e.key === 'Enter') { if (items[active]) choose(items[active]); e.preventDefault(); }
    else if (e.key === 'Escape') close();
  });
  list.addEventListener('click', e => { const li = e.target.closest('li[data-i]'); if (li) choose(items[+li.dataset.i]); });
  list.addEventListener('mousemove', e => { const li = e.target.closest('li[data-i]'); if (li && +li.dataset.i !== active) { active = +li.dataset.i; $$('li[data-i]', list).forEach((x, i) => x.classList.toggle('bg-brand-50', i === active)); } });
  panel.addEventListener('click', e => e.stopPropagation());
  pickers[key] = { root, open, close, render, isOpen: () => !panel.classList.contains('hidden') };
}
function setAirport(key, a) {
  state[key] = a;
  const r = pickers[key].root;
  const v = $('.pick-value', r);
  v.textContent = a ? `${a.t} (${a.c})` : 'Select airport';
  v.classList.toggle('text-slate-900', !!a); v.classList.toggle('text-slate-400', !a);
  $('.pick-sub', r).textContent = a ? a.n : '';
  if (a) hideErr(r);
}
function closeAll() {
  Object.values(pickers).forEach(p => p.close());
  $('#travPanel').classList.add('hidden'); $('#backdrop').classList.add('hidden');
  if (isMobile()) document.body.style.overflow = '';
}
document.addEventListener('click', e => {
  if (!e.target.closest('[data-pick]') && !e.target.closest('#travWrap')) closeAll();
});
addEventListener('keydown', e => { if (e.key === 'Escape') { closeAll(); closeModal(); } });

$('#swapBtn').addEventListener('click', () => {
  const a = state.from, b = state.to;
  setAirport('from', b); setAirport('to', a);
  const ic = $('#swapIco'); ic.style.transform = (ic.style.transform.includes('180') ? '' : 'rotate(180deg)');
});

/* ---------- trip type ---------- */
function setTrip(t) {
  state.trip = t;
  const round = t === 'round';
  $('#tripInd').style.transform = round ? 'translateX(100%)' : 'translateX(0)';
  $$('.trip-btn').forEach(b => { const on = b.dataset.trip === t; b.classList.toggle('text-white', on); b.classList.toggle('text-slate-500', !on); });
  $('#routeWrap').className = 'col-span-2 ' + (round ? 'lg:col-span-6' : 'lg:col-span-8');
  $('#departWrap').className = round ? 'col-span-1 lg:col-span-3' : 'col-span-2 lg:col-span-4';
  const rw = $('#returnWrap');
  if (round) { rw.classList.remove('hidden'); rw.classList.add('animate-pop'); }
  else { rw.classList.add('hidden'); $('#return').value = ''; $('#returnDay').textContent = ''; hideErr(rw); }
}
$$('.trip-btn').forEach(b => b.addEventListener('click', () => setTrip(b.dataset.trip)));

/* ---------- dates ---------- */
const iso = d => new Date(d.getTime() - d.getTimezoneOffset() * 60000).toISOString().slice(0, 10);
const dayName = v => v ? new Date(v + 'T00:00').toLocaleDateString('en-US', { weekday: 'long', day: 'numeric', month: 'short' }) : '';
function setupDates() {
  const today = iso(new Date()), dep = $('#depart'), ret = $('#return');
  dep.min = today; ret.min = today;
  dep.addEventListener('change', () => {
    ret.min = dep.value || today;
    if (ret.value && ret.value < dep.value) { ret.value = ''; $('#returnDay').textContent = ''; }
    $('#departDay').textContent = dayName(dep.value); hideErr($('#departWrap'));
  });
  ret.addEventListener('change', () => { $('#returnDay').textContent = dayName(ret.value); hideErr($('#returnWrap')); });
}

/* ---------- travellers ---------- */
function travText() {
  const p = [`${state.adults} Adult${state.adults > 1 ? 's' : ''}`];
  if (state.children) p.push(`${state.children} Child${state.children > 1 ? 'ren' : ''}`);
  $('#travLabel').textContent = p.join(', '); $('#travSub').textContent = state.cabin;
}
$('#travBtn').addEventListener('click', e => {
  e.stopPropagation();
  const p = $('#travPanel'), was = p.classList.contains('hidden');
  closeAll();
  if (was) { p.classList.remove('hidden'); if (isMobile()) { $('#backdrop').classList.remove('hidden'); document.body.style.overflow = 'hidden'; } }
});
$('#travPanel').addEventListener('click', e => e.stopPropagation());
$$('.trav-close').forEach(b => b.addEventListener('click', closeAll));
$('#backdrop').addEventListener('click', closeAll);
$$('.cnt').forEach(b => b.addEventListener('click', () => {
  const t = b.dataset.t, d = +b.dataset.d, min = t === 'adults' ? 1 : 0;
  const next = Math.max(min, state[t] + d);
  const other = t === 'adults' ? state.children : state.adults;
  if (next + other > 9) return;
  state[t] = next; $(`#${t}Val`).textContent = next; travText();
}));
function paintCabin() {
  $$('.cabin').forEach(b => {
    const on = b.dataset.cabin === state.cabin;
    b.classList.toggle('border-brand-600', on); b.classList.toggle('bg-brand-50', on); b.classList.toggle('text-brand-700', on);
    b.classList.toggle('border-slate-200', !on); b.classList.toggle('text-slate-600', !on);
  });
}
$$('.cabin').forEach(b => b.addEventListener('click', () => { state.cabin = b.dataset.cabin; paintCabin(); travText(); }));

/* ---------- validation ---------- */
const errEl = w => w.querySelector(':scope > .err');
function showErr(w, msg) { const p = errEl(w); if (p) { p.textContent = msg; p.classList.remove('hidden'); } }
function hideErr(w) { const p = errEl(w); if (p) p.classList.add('hidden'); }

/* ---------- search submit ---------- */
let search = null;
$('#searchForm').addEventListener('submit', e => {
  e.preventDefault();
  closeAll();
  const dep = $('#depart'), ret = $('#return'), round = state.trip === 'round';
  const ws = [pickers.from.root, pickers.to.root, $('#departWrap'), $('#returnWrap')];
  ws.forEach(hideErr);
  let first = null;
  const bad = (w, m) => { showErr(w, m); if (!first) first = w; };
  if (!state.from) bad(pickers.from.root, 'Select departure airport');
  if (!state.to) bad(pickers.to.root, 'Select destination airport');
  else if (state.from && state.from.c === state.to.c) bad(pickers.to.root, 'From and To cannot be the same');
  if (!dep.value) bad($('#departWrap'), 'Select departure date');
  if (round && !ret.value) bad($('#returnWrap'), 'Select return date');
  if (first) {
    first.scrollIntoView({ behavior: 'smooth', block: 'center' });
    $('#searchForm').animate([{ transform: 'translateX(0)' }, { transform: 'translateX(-8px)' }, { transform: 'translateX(8px)' }, { transform: 'translateX(0)' }], { duration: 300 });
    return;
  }
  search = {
    from: state.from.c, fromCity: state.from.t, to: state.to.c, toCity: state.to.t,
    tripType: round ? 'Round Trip' : 'One Way', departDate: dep.value, returnDate: round ? ret.value : null,
    adults: state.adults, children: state.children, cabin: state.cabin
  };
  openModal();
});

/* ---------- modal ---------- */
const modal = $('#modal');
function openModal() {
  $('#formView').classList.remove('hidden'); $('#successView').classList.add('hidden');
  $('#summary').innerHTML = `
    <div class="flex items-center justify-between gap-2">
      <div><p class="text-2xl font-extrabold">${esc(search.from)}</p><p class="text-xs text-blue-100 max-w-[110px] truncate">${esc(search.fromCity)}</p></div>
      <div class="flex-1 flex items-center gap-1 text-blue-100"><span class="flex-1 border-t border-dashed border-white/50"></span>✈<span class="flex-1 border-t border-dashed border-white/50"></span></div>
      <div class="text-right"><p class="text-2xl font-extrabold">${esc(search.to)}</p><p class="text-xs text-blue-100 max-w-[110px] truncate ml-auto">${esc(search.toCity)}</p></div>
    </div>
    <div class="mt-3 pt-3 border-t border-white/20 flex flex-wrap gap-x-4 gap-y-1 text-xs text-blue-50">
      <span>🗓 ${search.departDate}${search.returnDate ? ' → ' + search.returnDate : ''}</span>
      <span>🎫 ${search.tripType}</span>
      <span>👤 ${search.adults} Adult${search.adults > 1 ? 's' : ''}${search.children ? ', ' + search.children + ' Child' + (search.children > 1 ? 'ren' : '') : ''}</span>
      <span>💺 ${esc(search.cabin)}</span>
    </div>`;
  modal.classList.remove('hidden'); modal.classList.add('flex'); document.body.style.overflow = 'hidden';
}
function closeModal() { modal.classList.add('hidden'); modal.classList.remove('flex'); document.body.style.overflow = ''; }
$('#closeModal').addEventListener('click', closeModal);
$('#modalBg').addEventListener('click', closeModal);
$('#doneBtn').addEventListener('click', closeModal);

$('#bookForm').addEventListener('submit', async e => {
  e.preventDefault();
  const f = e.target, v = Object.fromEntries(new FormData(f));
  if (v.website) return; // honeypot
  $$('.err', f).forEach(p => p.classList.add('hidden'));
  let ok = true;
  const bad = (n, m) => { const w = f.elements[n].parentElement; showErr(w, m); ok = false; };
  const phone = v.phone.replace(/[\s-]/g, '');
  if (v.name.trim().length < 3) bad('name', 'Enter your full name');
  if (!/^\S+@\S+\.\S+$/.test(v.email)) bad('email', 'Enter a valid email address');
  if (!/^\+?\d{8,15}$/.test(phone)) bad('phone', 'Enter a valid phone number');
  if (v.address.trim().length < 5) bad('address', 'Enter your address');
  if (!ok) return;

  const payload = { ...search, name: v.name.trim(), email: v.email.trim(), phone, address: v.address.trim(), status: 'new', createdAt: new Date().toISOString() };
  $('#spin').classList.remove('hidden'); $('#bookLabel').textContent = 'Submitting…'; $('#bookSubmit').disabled = true; $('#submitError').classList.add('hidden');
  try {
    let ref;
    if (CONFIG.USE_API) {
      const r = await fetch(CONFIG.BOOKINGS_URL, { method: 'POST', headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' }, body: JSON.stringify(payload) });
      if (!r.ok) throw new Error('Server error');
      const d = await r.json(); ref = d.reference || d.id;
    } else {
      await new Promise(r => setTimeout(r, 900));            // demo delay
      ref = 'SW' + Date.now().toString().slice(-7);
      const all = JSON.parse(localStorage.getItem('sw_bookings') || '[]'); all.push({ ref, ...payload });
      localStorage.setItem('sw_bookings', JSON.stringify(all)); // demo only – replace with API
    }
    $('#refId').textContent = ref;
    $('#formView').classList.add('hidden'); $('#successView').classList.remove('hidden');
    f.reset();
  } catch (err) {
    $('#submitError').textContent = 'Something went wrong. Please try again.'; $('#submitError').classList.remove('hidden');
  } finally {
    $('#spin').classList.add('hidden'); $('#bookLabel').textContent = 'Submit Request'; $('#bookSubmit').disabled = false;
  }
});

/* ---------- destinations ---------- */
function renderDestinations() {
  $('#destGrid').innerHTML = DESTINATIONS.map((d, i) => `
    <button type="button" data-to="${d.to}" class="reveal tilt group relative snap-center shrink-0 w-[72%] sm:w-auto h-72 sm:h-80 rounded-3xl overflow-hidden text-left bg-gradient-to-br ${d.grad}" style="transition-delay:${(i % 4) * 0.08}s">
      <img src="${d.img}" alt="${esc(d.city)}" loading="lazy" onerror="this.remove()" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700" />
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/85 via-slate-900/20 to-transparent"></div>
      <div class="absolute bottom-0 p-5 sm:p-6 text-white">
        <p class="text-xs font-bold text-sun-400">DHAKA → ${d.to}</p>
        <h3 class="text-xl sm:text-2xl font-extrabold">${esc(d.city)}</h3>
        <p class="text-sm mt-1">from <span class="font-extrabold text-lg">৳ ${d.from}</span></p>
      </div>
      <span class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 backdrop-blur grid place-items-center text-white sm:opacity-0 group-hover:opacity-100 sm:translate-x-3 group-hover:translate-x-0 transition">→</span>
    </button>`).join('');
  $$('#destGrid [data-to]').forEach(b => b.addEventListener('click', () => {
    const find = c => state.airports.find(a => a.c === c);
    const dac = find('DAC'), to = find(b.dataset.to);
    if (dac) setAirport('from', dac); if (to) setAirport('to', to);
    $('#search').scrollIntoView({ behavior: 'smooth', block: 'center' });
    $('#depart').focus({ preventScroll: true });
  }));
}

/* ---------- UI: nav, reveal, counters, rotating word ---------- */
function setupNavbar() {
  const nav = $('#nav'), inner = $('#navInner'), top = $('#toTop');
  const on = () => {
    const s = scrollY > 30;
    nav.classList.toggle('bg-slate-900/90', s); nav.classList.toggle('backdrop-blur-md', s); nav.classList.toggle('shadow-lg', s);
    inner.classList.toggle('sm:h-16', s); inner.classList.toggle('sm:h-20', !s);
    top.classList.toggle('hidden', scrollY < 700);
  };
  addEventListener('scroll', on, { passive: true }); on();
  top.addEventListener('click', () => scrollTo({ top: 0, behavior: 'smooth' }));
  const menu = $('#mobileMenu'), mb = $('#menuBtn');
  const toggle = open => { menu.classList.toggle('hidden', !open); $('#icoMenu').classList.toggle('hidden', open); $('#icoClose').classList.toggle('hidden', !open); nav.classList.toggle('bg-slate-900/95', open); };
  mb.addEventListener('click', () => toggle(menu.classList.contains('hidden')));
  $$('.mnav').forEach(a => a.addEventListener('click', () => toggle(false)));
}
function setupReveal() {
  const io = new IntersectionObserver(entries => {
    entries.forEach(en => {
      if (!en.isIntersecting) return;
      en.target.classList.add('show');
      $$('.count', en.target).forEach(animateCount);
      io.unobserve(en.target);
    });
  }, { threshold: .12 });
  $$('.reveal').forEach(el => io.observe(el));
}
function animateCount(el) {
  const to = +el.dataset.to, dur = 1800, t0 = performance.now();
  const tick = t => { const p = Math.min((t - t0) / dur, 1); el.textContent = Math.floor(to * (1 - Math.pow(1 - p, 3))).toLocaleString(); if (p < 1) requestAnimationFrame(tick); };
  requestAnimationFrame(tick);
}
function setupRotator() {
  const words = ['Dubai', 'Bangkok', 'London', 'Singapore', 'Istanbul', 'Kuala Lumpur'], el = $('#rotWord'); let i = 0;
  setInterval(() => { el.classList.add('out'); setTimeout(() => { i = (i + 1) % words.length; el.textContent = words[i]; el.classList.remove('out'); }, 400); }, 2600);
}

/* ---------- init ---------- */
(async function init() {
  $('#yr').textContent = new Date().getFullYear();
  buildPicker($('[data-pick="from"]')); buildPicker($('[data-pick="to"]'));
  state.airports = FALLBACK.map(prep);            // works immediately
  setAirportStatus(false, state.airports.length);
  setupDates(); setTrip('oneway'); paintCabin(); travText();
  renderDestinations(); setupReveal(); setupNavbar(); setupRotator();

  const data = await loadAirports();               // upgrade to full list (AJAX)
  if (data) {
    state.airports = data.list.map(prep);
    setAirportStatus(true, state.airports.length);
    Object.values(pickers).forEach(p => p.isOpen() && p.render());
  } else {
    $('#apDot').className = 'w-2 h-2 rounded-full bg-amber-400';
  }
})();
</script>
</body>
</html>
