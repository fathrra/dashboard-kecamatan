<!-- Ringkasan Eksekutif - Dashboard Cicalengka (Chart.js Ready) -->
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "surface-container-high": "#e3e8f7", "surface-bright": "#f9f9ff", "surface-tint": "#4e44e3", "surface": "#f9f9ff", "error-container": "#ffdad6", "secondary": "#595e6b", "on-primary-fixed-variant": "#3422cc", "surface-container-lowest": "#ffffff", "tertiary-container": "#006e4b", "on-secondary": "#ffffff", "on-secondary-fixed": "#161c26", "on-tertiary": "#ffffff", "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#c3c0ff", "surface-variant": "#dde2f1", "on-secondary-fixed-variant": "#414753", "surface-container-highest": "#dde2f1", "tertiary-fixed": "#6ffbbe", "tertiary": "#005338", "on-tertiary-fixed-variant": "#005236", "on-background": "#161c26", "on-tertiary-container": "#67f4b7", "background": "#f9f9ff", "primary": "#3625cd", "on-surface": "#161c26", "primary-fixed": "#e2dfff", "secondary-fixed": "#dde2f1", "surface-dim": "#d4dae9", "outline-variant": "#c7c4d8", "on-primary-fixed": "#0f0069", "on-error": "#ffffff", "on-surface-variant": "#464555", "inverse-on-surface": "#ecf1ff", "error": "#ba1a1a", "on-error-container": "#93000a", "primary-container": "#5046e5", "inverse-surface": "#2b313c", "inverse-primary": "#c3c0ff", "secondary-fixed-dim": "#c1c6d5", "surface-container": "#e8eefd", "tertiary-fixed-dim": "#4edea3", "on-primary-container": "#dbd8ff", "on-tertiary-fixed": "#002113", "on-secondary-container": "#5d636f", "outline": "#777587", "secondary-container": "#dae0ee", "on-primary": "#ffffff" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "space-xs": "0.375rem", "margin": "1.25rem", "space-lg": "1.5rem", "space-sm": "0.625rem", "gutter-desktop": "1.5rem", "space-md": "1rem", "margin-desktop": "2rem", "gutter": "1.25rem", "space-xl": "2rem" }, fontFamily: { "body-md": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "metric-display": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"] }, fontSize: { "body-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }], "headline-xl-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "headline-lg": ["26px", { "lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "700" }], "body-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }], "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }], "metric-display": ["30px", { "lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "700" }], "headline-sm": ["16px", { "lineHeight": "22px", "fontWeight": "700" }] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-[72px] bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col items-center py-space-lg"><div class="mb-space-xl flex flex-col items-center justify-center"><a class="flex items-center justify-center" data-path="ringkasan" href="#"><div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center shadow-[0_4px_12px_rgba(54,37,205,0.25)]"><span class="material-symbols-outlined text-on-primary text-[22px]">dashboard</span></div></a></div><nav class="flex-1 flex flex-col items-center gap-space-sm w-full px-space-xs" data-active-classes="bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]"><a aria-current="page" class="w-11 h-11 rounded-full flex items-center justify-center transition-all bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]" data-path="ringkasan" href="#" title="Ringkasan Eksekutif"><span class="material-symbols-outlined text-[20px]">grid_view</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="demografi-kependudukan" href="#" title="Demografi &amp; Kependudukan"><span class="material-symbols-outlined text-[20px]">groups</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="kepegawaian" href="#" title="Kepegawaian &amp; Aparatur"><span class="material-symbols-outlined text-[20px]">badge</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="infrastruktur-mbg" href="#" title="Infrastruktur &amp; MBG"><span class="material-symbols-outlined text-[20px]">apartment</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pendidikan-kesehatan" href="#" title="Pendidikan &amp; Kesehatan"><span class="material-symbols-outlined text-[20px]">local_hospital</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="laporan-analisis" href="#" title="Laporan &amp; Analisis"><span class="material-symbols-outlined text-[20px]">insert_chart</span></a></nav><div class="flex flex-col items-center gap-space-sm w-full px-space-xs pt-space-md"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pengaturan" href="#" title="Pengaturan Sistem"><span class="material-symbols-outlined text-[20px]">settings</span></a><button class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all" title="Keluar" type="button" onclick="if(confirm('Apakah Anda yakin ingin keluar dari sesi Dashboard Kecamatan Cicalengka?')) { window.triggerToast('Sesi ditutup. Sampai jumpa!'); }"><span class="material-symbols-outlined text-[20px]">logout</span></button></div></aside><div class="pl-[72px]"><header class="fixed top-0 left-[72px] right-0 h-20 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center px-gutter-desktop"><div class="w-full flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md flex-1 max-w-xl"><div class="flex items-center gap-space-sm pl-space-xs"><img alt="Brand logo. - Primary color: #1e3a8a
- Font: plusJakartaSans
- Mode: light
- Roundness: rounded-sm
" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XEmj8BA8WHZ6rBHU9dn0vDsK8_oFlnpaO0u2e-xmmevULi3IAdvEzBGmAIWiG6JylYypWC3KrIP2LpZ8_cnNqGZdiEftRUdqZ8dKOsJeUHh0fmSwvYrShObT5Ocr1Px1WRdGWtZiO8URSVyHDpNtfiiEdd53IelMEgiOhPQ9P6AzUVZDDqnSHWKTyxtp_e3QizJEGr0WLC2fwOW6hSbtDcH4xKbo-qZMKRnOEbziqS6yZq3prD0OxMkxk"><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight hidden sm:inline-block">CivicHub</span></div><div class="relative flex-1 hidden md:block"><button onclick="document.getElementById('village-dropdown-menu').classList.toggle('hidden')" class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button">
  <span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span>
  <span id="selected-village-name" class="">Semua 12 Desa</span>
  <span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span>
</button>
<div id="village-dropdown-menu" class="hidden absolute right-0 mt-2 w-48 rounded-xl bg-surface-container-lowest shadow-[0_8px_24px_-4px_rgba(37,43,54,0.18)] border border-surface-container z-50 py-1 text-body-sm">
  <button onclick="window.filterVillage('all')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface font-semibold">
    <span class="">Semua 12 Desa</span>
    <span class="text-xs text-primary font-bold">124.5k</span>
  </button>
  <button onclick="window.filterVillage('cicalengka-kulon')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Cicalengka Kulon</span>
    <span class="text-xs text-secondary">14.8k</span>
  </button>
  <button onclick="window.filterVillage('panenjoan')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Panenjoan</span>
    <span class="text-xs text-secondary">11.3k</span>
  </button>
  <button onclick="window.filterVillage('waluya')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Waluya</span>
    <span class="text-xs text-secondary">12.6k</span>
  </button>
</div></div></div><div class="flex items-center gap-space-sm"><div class="hidden lg:flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface text-label-md font-label-md"><span class="material-symbols-outlined text-primary text-[16px]">calendar_today</span><span class="">Hari ini, 24 Okt 2024</span></div><div class="relative"><button onclick="document.getElementById('village-dropdown-menu').classList.toggle('hidden')" class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button">
  <span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span>
  <span id="selected-village-name" class="">Semua 12 Desa</span>
  <span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span>
</button>
<div id="village-dropdown-menu" class="hidden absolute right-0 mt-2 w-48 rounded-xl bg-surface-container-lowest shadow-[0_8px_24px_-4px_rgba(37,43,54,0.18)] border border-surface-container z-50 py-1 text-body-sm">
  <button onclick="window.filterVillage('all')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface font-semibold">
    <span class="">Semua 12 Desa</span>
    <span class="text-xs text-primary font-bold">124.5k</span>
  </button>
  <button onclick="window.filterVillage('cicalengka-kulon')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Cicalengka Kulon</span>
    <span class="text-xs text-secondary">14.8k</span>
  </button>
  <button onclick="window.filterVillage('panenjoan')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Panenjoan</span>
    <span class="text-xs text-secondary">11.3k</span>
  </button>
  <button onclick="window.filterVillage('waluya')" class="w-full text-left px-3.5 py-2 hover:bg-surface-container flex items-center justify-between text-on-surface">
    <span class="">Waluya</span>
    <span class="text-xs text-secondary">12.6k</span>
  </button>
</div></div><div class="relative">
  <button onclick="document.getElementById('notif-popover').classList.toggle('hidden')" aria-label="Notifications" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all relative" type="button">
    <span class="material-symbols-outlined text-[19px]">notifications</span>
    <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error ring-2 ring-surface-container-lowest"></span>
  </button>
  <div id="notif-popover" class="hidden absolute right-0 mt-2 w-80 rounded-xl bg-surface-container-lowest shadow-[0_8px_24px_-4px_rgba(37,43,54,0.2)] border border-surface-container z-50 p-space-md text-left">
    <div class="flex items-center justify-between pb-2 border-b border-surface-container mb-2">
      <span class="font-headline-sm text-[14px] font-bold text-on-surface">Notifikasi &amp; Peringatan</span>
      <span class="text-[11px] font-bold text-primary bg-primary-fixed px-2 py-0.5 rounded-full">3 Baru</span>
    </div>
    <div class="space-y-2 text-body-sm">
      <div onclick="window.triggerToast('Detail: Target Kemantapan TW 4 telah diverifikasi!')" class="p-2 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
        <div class="flex items-center gap-1.5 text-xs font-bold text-primary">
          <span class="material-symbols-outlined text-[14px]">verified</span>
          <span class="">Kemantapan Jalan TW 4</span>
        </div>
        <p class="text-xs text-secondary mt-0.5">Realisasi aspal Cicalengka Wetan mencapai 88% RPJMD.</p>
      </div>
      <div onclick="window.triggerToast('Detail: 3 Dapur MBG diverifikasi Dinas Kesehatan.')" class="p-2 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
        <div class="flex items-center gap-1.5 text-xs font-bold text-tertiary">
          <span class="material-symbols-outlined text-[14px]">restaurant</span>
          <span class="">Dapur Gizi MBG Panenjoan</span>
        </div>
        <p class="text-xs text-secondary mt-0.5">Sertifikasi higienitas dapur gizi rampung disetujui.</p>
      </div>
      <div onclick="window.triggerToast('Peringatan BUP 2026: 12 Aparatur memasuki pra-pensiun.')" class="p-2 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
        <div class="flex items-center gap-1.5 text-xs font-bold text-[#f97316]">
          <span class="material-symbols-outlined text-[14px]">warning</span>
          <span class="">Peringatan BUP 2026</span>
        </div>
        <p class="text-xs text-secondary mt-0.5">12 Aparatur sipil bersiap masa purna tugas.</p>
      </div>
    </div>
    <button onclick="document.getElementById('notif-popover').classList.add('hidden'); window.triggerToast('Semua notifikasi ditandai telah dibaca.');" class="w-full mt-3 py-1.5 text-center text-xs font-bold text-primary hover:bg-primary-fixed rounded-lg transition-colors">
      Tandai Sudah Dibaca
    </button>
  </div>
</div><button aria-label="Settings quick access" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all" type="button" onclick="window.triggerToast('Membuka preferensi filter &amp; tampilan analitik...', 'tune')"><span class="material-symbols-outlined text-[19px]">tune</span></button><div class="flex items-center gap-space-xs pl-space-xs"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></div></header><main class="w-full pt-20 px-gutter-desktop pb-space-xl bg-surface min-h-screen"><div class="flex flex-col w-full gap-space-lg">
<!-- Greeting & Period Row -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md pt-2">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight flex items-center gap-2">
        Halo, Pimpinan Kecamatan! <span class="inline-block hover:rotate-12 transition-transform cursor-pointer">👋</span>
</h1>
<p class="font-body-md text-body-md text-secondary mt-1">
        Ringkasan indikator kependudukan, aparatur, dan prasarana umum tahun 2024
      </p>
</div>
<div class="flex items-center gap-space-sm self-start md:self-auto">
<div class="relative inline-flex items-center"><button onclick="document.getElementById('period-dropdown').classList.toggle('hidden')" class="flex items-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest text-on-surface shadow-[0_4px_16px_rgba(37,43,54,0.04)] hover:shadow-md transition-all text-label-md font-label-md" type="button">
  <span id="period-label" class="text-on-surface font-medium">Bulan Ini / 2024</span>
  <span class="material-symbols-outlined text-secondary text-[18px]">expand_more</span>
</button>
<div id="period-dropdown" class="hidden absolute right-0 top-11 mt-1 w-44 rounded-xl bg-surface-container-lowest shadow-[0_8px_24px_-4px_rgba(37,43,54,0.18)] border border-surface-container z-40 py-1 text-body-sm">
  <button onclick="document.getElementById('period-label').textContent='Bulan Ini / 2024'; document.getElementById('period-dropdown').classList.add('hidden'); window.triggerToast('Filter aktif: Bulan Ini / 2024');" class="w-full text-left px-3.5 py-1.5 hover:bg-surface-container text-on-surface font-semibold">Bulan Ini / 2024</button>
  <button onclick="document.getElementById('period-label').textContent='Triwulan 3 / 2024'; document.getElementById('period-dropdown').classList.add('hidden'); window.triggerToast('Filter aktif: Triwulan 3 / 2024');" class="w-full text-left px-3.5 py-1.5 hover:bg-surface-container text-on-surface">Triwulan 3 / 2024</button>
  <button onclick="document.getElementById('period-label').textContent='Semester 1 / 2024'; document.getElementById('period-dropdown').classList.add('hidden'); window.triggerToast('Filter aktif: Semester 1 / 2024');" class="w-full text-left px-3.5 py-1.5 hover:bg-surface-container text-on-surface">Semester 1 / 2024</button>
  <button onclick="document.getElementById('period-label').textContent='Tahun Penuh 2023'; document.getElementById('period-dropdown').classList.add('hidden'); window.triggerToast('Filter aktif: Tahun 2023 (Arsip)');" class="w-full text-left px-3.5 py-1.5 hover:bg-surface-container text-on-surface">Tahun Penuh 2023</button>
</div></div>
<button aria-label="Calendar view" class="w-10 h-10 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface shadow-[0_4px_16px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-all" type="button" onclick="window.triggerToast('Menampilkan kalender kegiatan kecamatan Oktober 2024...', 'calendar_month')">
<span class="material-symbols-outlined text-[19px]">calendar_month</span>
</button>
</div>
</div>
<!-- Top KPI Grid: 4 Metric Cards mimicking reference layout -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
<!-- Card 1: Vibrant Hero Card (Indigo Gradient) -->
<div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-[#5046e5] to-[#3625cd] p-space-lg text-on-primary shadow-[0_14px_30px_-6px_rgba(80,70,229,0.32)] flex flex-col justify-between group">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-primary-container font-semibold tracking-wide">Total Penduduk</span>
<button aria-label="Detail Total Penduduk" class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-2 flex-wrap">
<span class="font-metric-display text-metric-display tracking-tight font-extrabold text-white">124.500</span>
<span class="font-body-md text-body-md text-on-primary-container font-semibold">Jiwa</span>
</div>
<div class="mt-2 flex items-center gap-1.5">
<span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-[#34c759]/25 text-[#7bf29d] font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[13px]">arrow_upward</span> 1.4%
          </span>
<span class="font-body-sm text-body-sm text-on-primary-container/80 text-[11px]">YoY</span>
</div>
</div>
<div class="pt-2 text-on-primary-container/90 font-body-sm text-body-sm flex items-center gap-1.5">
<span class="material-symbols-outlined text-[14px]">transgender</span>
<span class="">63.120 L / 61.380 P</span>
</div>
</div>
<!-- Card 2: Total KK -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg text-on-surface shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary font-medium">Total Kepala Keluarga</span>
<button aria-label="Detail Total KK" class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-inverse-surface hover:text-inverse-on-surface transition-colors">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">38.200</span>
<span class="font-body-md text-body-md text-secondary font-semibold">KK</span>
</div>
<div class="mt-2 flex items-center gap-1.5">
<span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[13px]">arrow_downward</span> 0.4%
          </span>
<span class="font-body-sm text-body-sm text-secondary text-[11px]">vs thn lalu</span>
</div>
</div>
<div class="pt-2 text-secondary font-body-sm text-body-sm flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-[15px]">verified</span>
<span class="truncate">99.2% Terverifikasi SIAK</span>
</div>
</div>
<!-- Card 3: Wilayah Administratif -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg text-on-surface shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary font-medium">Wilayah Administratif</span>
<button aria-label="Detail Wilayah" class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-inverse-surface hover:text-inverse-on-surface transition-colors">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">12</span>
<span class="font-body-md text-body-md text-secondary font-semibold">Desa</span>
</div>
<div class="mt-2 flex items-center gap-1.5">
<span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-[#dcfce7] text-[#15803d] font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[13px]">check_circle</span> 100% Aktif
          </span>
</div>
</div>
<div class="pt-2 text-secondary font-body-sm text-body-sm flex items-center gap-1.5">
<span class="material-symbols-outlined text-tertiary text-[15px]">domain</span>
<span class="">142 RW • 580 RT</span>
</div>
</div>
<!-- Card 4: Kesiapan MBG -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg text-on-surface shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-secondary font-medium">Kesiapan MBG (Gizi)</span>
<button aria-label="Detail MBG" class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-inverse-surface hover:text-inverse-on-surface transition-colors">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">85%</span>
<span class="font-body-md text-body-md text-secondary font-semibold">Kesiapan</span>
</div>
<div class="mt-2 flex items-center gap-1.5">
<span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-[#dcfce7] text-[#15803d] font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-[13px]">arrow_upward</span> 5.2%
          </span>
<span class="font-body-sm text-body-sm text-secondary text-[11px]">Bulan ini</span>
</div>
</div>
<div class="pt-2 text-secondary font-body-sm text-body-sm flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-[15px]">restaurant</span>
<span class="truncate">17 dari 20 Dapur Beroperasi</span>
</div>
</div>
</div>
<!-- Analytical Middle Section: Grid (2 Mini Quick Stat Cards + Bar Chart + Donut Chart) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md items-stretch">
<!-- Left Column: Mini Stat Cards (4 Cols) -->
<div class="lg:col-span-4 flex flex-col gap-space-md justify-between">
<!-- Aparatur Sipil Card -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex-1 flex flex-col justify-between">
<!-- Soft decorative contour lines -->
<svg class="absolute right-0 top-0 w-36 h-36 opacity-10 pointer-events-none text-primary" fill="none" viewBox="0 0 100 100">
<path d="M0,50 Q25,10 50,50 T100,50" stroke="currentColor" stroke-width="2"></path>
<path d="M0,70 Q25,30 50,70 T100,70" stroke="currentColor" stroke-width="2"></path>
<path d="M0,90 Q25,50 50,90 T100,90" stroke="currentColor" stroke-width="2"></path>
</svg>
<div class="flex items-center justify-between">
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">badge</span>
</div>
<button aria-label="Rincian Aparatur" class="w-8 h-8 rounded-full bg-inverse-surface text-inverse-on-surface flex items-center justify-center shadow-sm hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[17px]">arrow_outward</span>
</button>
</div>
<div class="my-space-sm relative z-10">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">485</span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Aparatur Sipil</span>
</div>
<p class="font-body-sm text-body-sm text-secondary mt-1">
<span class="font-semibold text-primary">182</span> PNS, 
            <span class="font-semibold text-[#f97316]">198</span> PPPK Penuh, 
            <span class="font-semibold text-tertiary">105</span> Paruh Waktu.
          </p>
</div>
<div class="flex items-center gap-2 pt-2 border-t-0">
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface text-label-sm font-label-sm flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-primary"></span> Pelayanan Kecamatan Aktif
          </span>
</div>
</div>
<!-- Kemantapan Jalan Card -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex-1 flex flex-col justify-between">
<svg class="absolute right-0 bottom-0 w-32 h-32 opacity-10 pointer-events-none text-tertiary" fill="none" viewBox="0 0 100 100">
<circle cx="50" cy="50" r="40" stroke="currentColor" stroke-dasharray="6,6" stroke-width="3"></circle>
</svg>
<div class="flex items-center justify-between">
<div class="w-8 h-8 rounded-full bg-[#e6f4ea] flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-[18px]">add_road</span>
</div>
<button aria-label="Rincian Jalan" class="w-8 h-8 rounded-full bg-inverse-surface text-inverse-on-surface flex items-center justify-center shadow-sm hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-[17px]">arrow_outward</span>
</button>
</div>
<div class="my-space-sm relative z-10">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">142,8</span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">km Mantap</span>
</div>
<p class="font-body-sm text-body-sm text-secondary mt-1">
            14,2 km Nas • 28,6 km Prov • 100 km Kab
          </p>
</div>
<div class="flex items-center gap-2 pt-2">
<span class="px-2.5 py-1 rounded-full bg-[#dcfce7] text-[#15803d] text-label-sm font-label-sm font-bold flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-[#15803d]"></span> 83.4% Kondisi Baik &amp; Mantap
          </span>
</div>
</div>
</div>
<!-- Center Column: Bar Chart (5 Cols) -->
<div class="lg:col-span-5 rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div class="flex items-start justify-between">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Kesiapan Infrastruktur &amp; Jalan</h2>
<p class="font-body-sm text-body-sm text-secondary mt-0.5">Monitoring kemantapan jalan lintas desa (Triwulan 1-4)</p>
</div>
<button aria-label="Buka Laporan Infrastruktur" class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-inverse-surface hover:text-inverse-on-surface transition-colors">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<!-- Bar Chart Visualization via Chart.js -->
<div class="relative w-full pt-4 pb-2 h-52 flex items-center justify-center">
<canvas id="chartKemantapanJalan" width="426" height="184" style="display: block; box-sizing: border-box; height: 184px; width: 426px;"></canvas>
</div>
<div class="flex items-center justify-between pt-2 border-t-0 text-secondary text-body-sm font-body-sm">
<span class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
          Realisasi Pengaspalan &amp; Rabat Beton
        </span>
<span class="font-semibold text-on-surface">Target RPJMD: 88%</span>
</div>
</div>
<!-- Right Column: Donut Chart - Komposisi Aparatur (3 Cols) -->
<div class="lg:col-span-3 rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div class="flex items-start justify-between">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Komposisi Aparatur</h2>
<p class="font-body-sm text-body-sm text-secondary mt-0.5">Proporsi kepegawaian 2024</p>
</div>
<button aria-label="Rincian Komposisi" class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-inverse-surface hover:text-inverse-on-surface transition-colors">
<span class="material-symbols-outlined text-[17px]">north_east</span>
</button>
</div>
<!-- Segmented Ring Donut Chart via Chart.js with central metric overlay -->
<div class="py-2 flex justify-center items-center">
<div class="relative w-40 h-40 flex items-center justify-center">
<canvas id="chartKomposisiAparatur" width="160" height="160" style="display: block; box-sizing: border-box; height: 160px; width: 160px;"></canvas>
<div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none text-center">
<span class="font-headline-md text-headline-md font-extrabold text-on-surface leading-none">485</span>
<span class="text-[10px] text-secondary font-medium tracking-tight mt-0.5">Pegawai</span>
</div>
</div>
</div>
<!-- Vertical Legend mimicking reference item list -->
<div class="flex flex-col gap-2 pt-2">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-[#4F46E5]"></span>
<span class="text-on-surface">PNS Struktural &amp; Fungsional</span>
</div>
<span class="font-bold text-on-surface">37.5%</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-[#F59E0B]"></span>
<span class="text-on-surface">PPPK Penuh Waktu</span>
</div>
<span class="font-bold text-on-surface">40.8%</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-[#10B981]"></span>
<span class="text-on-surface">PPPK Paruh Waktu</span>
</div>
<span class="font-bold text-on-surface">21.7%</span>
</div>
</div>
</div>
</div>
<!-- Bottom Section: "Distribusi 3 Wilayah Geografis" -->
<div class="flex flex-col gap-space-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div>
<h2 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tight">Distribusi 3 Zona Geografis</h2>
<p class="font-body-sm text-body-sm text-secondary">Alokasi beban demografi, sarana kesehatan, dan sentra dapur gizi MBG</p>
</div>
<div class="flex items-center gap-2">
<button class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors text-label-md font-label-md flex items-center gap-1.5" type="button">
<span class="material-symbols-outlined text-[16px]">file_download</span>
<span class="">Unduh Rekap</span>
</button>
<button class="px-4 py-1.5 rounded-full bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)] hover:opacity-95 transition-opacity text-label-md font-label-md flex items-center gap-1.5" type="button">
<span class="material-symbols-outlined text-[16px]">map</span>
<span class="">Lihat Peta Spasial</span>
</button>
</div>
</div>
<!-- 3 Cards Layout -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- Wilayah I (Utara) -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-start justify-between">
<span class="px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-bold">
              Wilayah I (Utara)
            </span>
<span class="text-label-sm font-label-sm text-secondary font-semibold">4 Desa</span>
</div>
<div class="mt-4">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">51.900 Jiwa</h3>
<p class="font-body-sm text-body-sm text-secondary mt-0.5">Cicalengka Kulon, Cicalengka Wetan, Babakan Peuteuy, Dampit</p>
</div>
<!-- Mini Progress Indicator -->
<div class="mt-4 flex flex-col gap-1.5">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-secondary">Kepadatan Relatif</span>
<span class="font-bold text-on-surface">41.7%</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-primary" style="width: 41.7%;"></div>
</div>
</div>
</div>
<div class="pt-5 mt-4 flex items-center justify-between text-body-sm font-body-sm text-secondary">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-tertiary">soup_kitchen</span>
            8 Dapur MBG
          </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">local_hospital</span>
            1 PKM DTP
          </span>
</div>
</div>
<!-- Wilayah II (Tengah) -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-start justify-between">
<span class="px-3 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-bold">
              Wilayah II (Tengah)
            </span>
<span class="text-label-sm font-label-sm text-secondary font-semibold">4 Desa</span>
</div>
<div class="mt-4">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">43.500 Jiwa</h3>
<p class="font-body-sm text-body-sm text-secondary mt-0.5">Waluya, Mikuat, Nagrog, Narawita</p>
</div>
<!-- Mini Progress Indicator -->
<div class="mt-4 flex flex-col gap-1.5">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-secondary">Kepadatan Relatif</span>
<span class="font-bold text-on-surface">34.9%</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-[#f97316]" style="width: 34.9%;"></div>
</div>
</div>
</div>
<div class="pt-5 mt-4 flex items-center justify-between text-body-sm font-body-sm text-secondary">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-tertiary">soup_kitchen</span>
            6 Dapur MBG
          </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">local_hospital</span>
            1 PKM Non-DTP
          </span>
</div>
</div>
<!-- Wilayah III (Selatan) -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div>
<div class="flex items-start justify-between">
<span class="px-3 py-1 rounded-full bg-[#e6f4ea] text-tertiary font-label-sm text-label-sm font-bold">
              Wilayah III (Selatan)
            </span>
<span class="text-label-sm font-label-sm text-secondary font-semibold">4 Desa</span>
</div>
<div class="mt-4">
<h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">29.100 Jiwa</h3>
<p class="font-body-sm text-body-sm text-secondary mt-0.5">Tanjungwangi, Tenjolaya, Panenjoan, Margaasih</p>
</div>
<!-- Mini Progress Indicator -->
<div class="mt-4 flex flex-col gap-1.5">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-secondary">Kepadatan Relatif</span>
<span class="font-bold text-on-surface">23.4%</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full rounded-full bg-tertiary-container" style="width: 23.4%;"></div>
</div>
</div>
</div>
<div class="pt-5 mt-4 flex items-center justify-between text-body-sm font-body-sm text-secondary">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-tertiary">soup_kitchen</span>
            6 Dapur MBG
          </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">local_hospital</span>
            1 Puskesmas Pembantu
          </span>
</div>
</div>
</div>
</div>
</div></main></div>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Chart 1: Kesiapan Infrastruktur & Jalan (Bar Chart)
  const ctxJalan = document.getElementById('chartKemantapanJalan');
  if (ctxJalan) {
    const labelsJalan = ['TW 1', 'TW 2', 'TW 3', 'TW 4', "Tgt '25", 'Wil I', 'Wil II', 'Wil III'];
    const dataJalan = [65, 48, 83.4, 55, 88, 82, 75, 71];

    // Give distinct visual depth matching design (e.g. highlight TW 3 and slightly varied opacities)
    const backgroundColors = dataJalan.map((val, idx) => {
      if (idx === 2) return '#3625cd'; // TW 3 highlighted peak
      if (idx === 4) return 'rgba(79, 70, 229, 0.65)'; // Target 2025
      return 'rgba(79, 70, 229, 0.85)';
    });

    new Chart(ctxJalan, {
      type: 'bar',
      data: {
        labels: labelsJalan,
        datasets: [{
          data: dataJalan,
          backgroundColor: backgroundColors,
          borderRadius: 8,
          borderSkipped: false,
          maxBarThickness: 28,
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
          padding: {
            top: 10,
            bottom: 0
          }
        },
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            backgroundColor: '#2b313c',
            titleFont: {
              family: 'Plus Jakarta Sans',
              size: 11,
              weight: '600'
            },
            bodyFont: {
              family: 'Plus Jakarta Sans',
              size: 12,
              weight: '700'
            },
            padding: 8,
            cornerRadius: 6,
            displayColors: false,
            callbacks: {
              label: function(context) {
                return context.parsed.y + '% Kemantapan';
              }
            }
          }
        },
        scales: {
          x: {
            grid: {
              display: false,
              drawBorder: false
            },
            ticks: {
              font: {
                family: 'Plus Jakarta Sans',
                size: 11,
                weight: '600'
              },
              color: '#595e6b'
            }
          },
          y: {
            display: false,
            beginAtZero: true,
            max: 100
          }
        }
      }
    });
  }

  // Chart 2: Komposisi Aparatur (Doughnut Chart)
  const ctxAparatur = document.getElementById('chartKomposisiAparatur');
  if (ctxAparatur) {
    new Chart(ctxAparatur, {
      type: 'doughnut',
      data: {
        labels: ['PNS', 'PPPK Penuh Waktu', 'PPPK Paruh Waktu'],
        datasets: [{
          data: [182, 198, 105],
          backgroundColor: ['#4F46E5', '#F59E0B', '#10B981'],
          borderWidth: 0,
          hoverOffset: 4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '76%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            backgroundColor: '#2b313c',
            titleFont: {
              family: 'Plus Jakarta Sans',
              size: 11,
              weight: '600'
            },
            bodyFont: {
              family: 'Plus Jakarta Sans',
              size: 12,
              weight: '700'
            },
            padding: 8,
            cornerRadius: 6,
            callbacks: {
              label: function(context) {
                const total = 485;
                const value = context.parsed;
                const percentage = ((value / total) * 100).toFixed(1);
                return ` ${value} Pegawai (${percentage}%)`;
              }
            }
          }
        }
      }
    });
  }
});
</script>


<!-- Interactive Components Layer -->
<div id="toast-container" class="fixed bottom-6 right-6 z-50 flex flex-col gap-2 pointer-events-none"></div>

<!-- Generic Detail Modal -->
<div id="detail-modal" class="fixed inset-0 z-50 hidden bg-inverse-surface/50 backdrop-blur-sm flex items-center justify-center p-4 transition-all opacity-0 pointer-events-none">
  <div class="bg-surface-container-lowest rounded-xl shadow-[0_14px_30px_-6px_rgba(80,70,229,0.32)] max-w-lg w-full p-space-lg transform scale-95 transition-all duration-200">
    <div class="flex items-center justify-between pb-3 border-b border-surface-container">
      <div class="flex items-center gap-2">
        <div id="modal-icon-badge" class="w-9 h-9 rounded-xl bg-primary-fixed text-primary flex items-center justify-center font-bold">
          <span class="material-symbols-outlined text-[20px]" id="modal-icon">analytics</span>
        </div>
        <div>
          <h3 id="modal-title" class="font-headline-sm text-headline-sm font-bold text-on-surface">Rincian Indikator</h3>
          <p id="modal-subtitle" class="text-body-sm text-secondary">Analisis data berkala tahun 2024</p>
        </div>
      </div>
      <button onclick="window.closeDetailModal()" class="w-8 h-8 rounded-full hover:bg-surface-container-high text-secondary flex items-center justify-center transition-colors">
        <span class="material-symbols-outlined text-[20px]">close</span>
      </button>
    </div>
    <div id="modal-body" class="py-4 text-body-md space-y-3">
      <!-- Injected dynamic content -->
    </div>
    <div class="pt-3 border-t border-surface-container flex items-center justify-end gap-2">
      <button onclick="window.triggerToast('Data berhasil disinkronisasi dengan SIAK &amp; Portal Satu Data')" class="px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors text-label-md font-label-md">
        Sinkronisasi Ulang
      </button>
      <button onclick="window.closeDetailModal()" class="px-4 py-1.5 rounded-full bg-primary text-white hover:opacity-95 transition-opacity text-label-md font-label-md">
        Selesai
      </button>
    </div>
  </div>
</div>

<!-- Geospatial GIS Map Modal -->
<div id="geo-map-modal" class="fixed inset-0 z-50 hidden bg-inverse-surface/60 backdrop-blur-sm flex items-center justify-center p-4 transition-all opacity-0 pointer-events-none">
  <div class="bg-surface-container-lowest rounded-xl shadow-[0_14px_30px_-6px_rgba(80,70,229,0.32)] max-w-3xl w-full p-space-lg transform scale-95 transition-all duration-200">
    <div class="flex items-center justify-between pb-3 border-b border-surface-container">
      <div class="flex items-center gap-2">
        <div class="w-9 h-9 rounded-xl bg-[#e6f4ea] text-tertiary flex items-center justify-center font-bold">
          <span class="material-symbols-outlined text-[20px]">map</span>
        </div>
        <div>
          <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">Peta Spasial Geografis Kecamatan Cicalengka</h3>
          <p class="text-body-sm text-secondary">Sebaran 12 Desa, 20 Dapur MBG, dan Koridor Jalan Mantap</p>
        </div>
      </div>
      <button onclick="window.closeGeoModal()" class="w-8 h-8 rounded-full hover:bg-surface-container-high text-secondary flex items-center justify-center transition-colors">
        <span class="material-symbols-outlined text-[20px]">close</span>
      </button>
    </div>
    <div class="py-4">
      <!-- Stylized Interactive Map Canvas Preview -->
      <div class="relative w-full h-72 rounded-xl bg-surface-container-low border border-surface-container overflow-hidden flex flex-col justify-between p-4">
        <div class="absolute inset-0 opacity-20 pointer-events-none">
          <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <pattern id="grid-preview" width="40" height="40" patternUnits="userSpaceOnUse">
                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#4F46E5" stroke-width="1"></path>
              </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-preview)"></rect>
          </svg>
        </div>
        <div class="relative z-10 flex items-center justify-between">
          <div class="flex items-center gap-2 bg-surface-container-lowest/90 backdrop-blur px-3 py-1.5 rounded-full shadow-sm text-label-sm font-label-sm">
            <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
            <span class="">Layer Spasial: MBG &amp; Mantap Aktif</span>
          </div>
          <div class="flex items-center gap-1 bg-surface-container-lowest/90 backdrop-blur p-1 rounded-full shadow-sm">
            <button onclick="window.triggerToast('Memperbesar Peta...')" class="w-7 h-7 rounded-full flex items-center justify-center hover:bg-surface-container-high text-on-surface text-[14px]">+</button>
            <button onclick="window.triggerToast('Memperkecil Peta...')" class="w-7 h-7 rounded-full flex items-center justify-center hover:bg-surface-container-high text-on-surface text-[14px]">-</button>
          </div>
        </div>
        <div class="relative z-10 grid grid-cols-3 gap-2">
          <div onclick="window.filterByZone(1)" class="cursor-pointer bg-primary/10 border border-primary/30 p-2 rounded-lg hover:bg-primary/20 transition-colors">
            <span class="text-xs font-bold text-primary block">Zona I (Utara)</span>
            <span class="text-[11px] text-secondary">4 Desa • 8 MBG</span>
          </div>
          <div onclick="window.filterByZone(2)" class="cursor-pointer bg-[#f97316]/10 border border-[#f97316]/30 p-2 rounded-lg hover:bg-[#f97316]/20 transition-colors">
            <span class="text-xs font-bold text-[#f97316] block">Zona II (Tengah)</span>
            <span class="text-[11px] text-secondary">4 Desa • 6 MBG</span>
          </div>
          <div onclick="window.filterByZone(3)" class="cursor-pointer bg-tertiary-container/10 border border-tertiary-container/30 p-2 rounded-lg hover:bg-tertiary-container/20 transition-colors">
            <span class="text-xs font-bold text-tertiary block">Zona III (Selatan)</span>
            <span class="text-[11px] text-secondary">4 Desa • 6 MBG</span>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-2 flex items-center justify-between">
      <span class="text-body-sm text-secondary flex items-center gap-1">
        <span class="material-symbols-outlined text-[16px] text-tertiary">pin_drop</span>
        Koordinat Utama: Lat -6.9839°, Long 107.8391°
      </span>
      <button onclick="window.closeGeoModal()" class="px-4 py-2 rounded-full bg-inverse-surface text-inverse-on-surface text-label-md font-label-md hover:opacity-95 transition-opacity">
        Tutup Peta
      </button>
    </div>
  </div>
</div>

<!-- Interactive Script Injection -->
<script>
(function() {
  // Toast manager
  window.triggerToast = function(msg, icon = 'check_circle') {
    const container = document.getElementById('toast-container');
    if (!container) return;
    const toast = document.createElement('div');
    toast.className = 'pointer-events-auto flex items-center gap-2.5 px-4 py-2.5 rounded-xl bg-inverse-surface text-inverse-on-surface shadow-[0_8px_24px_-4px_rgba(37,43,54,0.3)] text-body-sm font-medium transition-all duration-300 transform translate-y-4 opacity-0';
    toast.innerHTML = `<span class="material-symbols-outlined text-[#7bf29d] text-[18px]">${icon}</span><span>${msg}</span>`;
    container.appendChild(toast);
    requestAnimationFrame(() => {
      toast.classList.remove('translate-y-4', 'opacity-0');
    });
    setTimeout(() => {
      toast.classList.add('opacity-0', 'translate-y-2');
      setTimeout(() => toast.remove(), 300);
    }, 3200);
  };

  // Modal controls
  window.openDetailModal = function(title, subtitle, icon, contentHtml) {
    const modal = document.getElementById('detail-modal');
    if (!modal) return;
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-subtitle').textContent = subtitle;
    document.getElementById('modal-icon').textContent = icon;
    document.getElementById('modal-body').innerHTML = contentHtml;
    modal.classList.remove('hidden', 'pointer-events-none');
    requestAnimationFrame(() => {
      modal.classList.remove('opacity-0');
      modal.firstElementChild.classList.remove('scale-95');
    });
  };

  window.closeDetailModal = function() {
    const modal = document.getElementById('detail-modal');
    if (!modal) return;
    modal.classList.add('opacity-0');
    modal.firstElementChild.classList.add('scale-95');
    setTimeout(() => {
      modal.classList.add('hidden', 'pointer-events-none');
    }, 200);
  };

  window.openGeoModal = function() {
    const modal = document.getElementById('geo-map-modal');
    if (!modal) return;
    modal.classList.remove('hidden', 'pointer-events-none');
    requestAnimationFrame(() => {
      modal.classList.remove('opacity-0');
      modal.firstElementChild.classList.remove('scale-95');
    });
  };

  window.closeGeoModal = function() {
    const modal = document.getElementById('geo-map-modal');
    if (!modal) return;
    modal.classList.add('opacity-0');
    modal.firstElementChild.classList.add('scale-95');
    setTimeout(() => {
      modal.classList.add('hidden', 'pointer-events-none');
    }, 200);
  };

  // Village Dataset definitions
  const villageData = {
    'all': {
      name: 'Semua 12 Desa',
      penduduk: '124.500', jiwaPns: '63.120 L / 61.380 P',
      kk: '38.200',
      wilayah: '12', rts: '142 RW • 580 RT',
      mbg: '85%', mbgRatio: '17 dari 20 Dapur Beroperasi',
      aparatur: 485, pns: 182, pppkFull: 198, pppkPart: 105,
      jalan: [65, 48, 83.4, 55, 88, 82, 75, 71]
    },
    'cicalengka-kulon': {
      name: 'Cicalengka Kulon',
      penduduk: '14.820', jiwaPns: '7.540 L / 7.280 P',
      kk: '4.610',
      wilayah: '1', rts: '16 RW • 64 RT',
      mbg: '92%', mbgRatio: '3 dari 3 Dapur Beroperasi',
      aparatur: 52, pns: 24, pppkFull: 20, pppkPart: 8,
      jalan: [70, 62, 88.5, 68, 92, 89, 80, 78]
    },
    'panenjoan': {
      name: 'Panenjoan',
      penduduk: '11.350', jiwaPns: '5.800 L / 5.550 P',
      kk: '3.420',
      wilayah: '1', rts: '14 RW • 52 RT',
      mbg: '80%', mbgRatio: '2 dari 2 Dapur Beroperasi',
      aparatur: 38, pns: 14, pppkFull: 16, pppkPart: 8,
      jalan: [60, 54, 79.2, 58, 85, 78, 70, 68]
    },
    'waluya': {
      name: 'Waluya',
      penduduk: '12.600', jiwaPns: '6.420 L / 6.180 P',
      kk: '3.910',
      wilayah: '1', rts: '15 RW • 58 RT',
      mbg: '88%', mbgRatio: '2 dari 2 Dapur Beroperasi',
      aparatur: 42, pns: 16, pppkFull: 18, pppkPart: 8,
      jalan: [66, 52, 84.1, 62, 86, 81, 74, 72]
    }
  };

  window.filterVillage = function(key) {
    const data = villageData[key] || villageData['all'];
    
    // Update Village button label
    const labelSpan = document.getElementById('selected-village-name');
    if (labelSpan) labelSpan.textContent = data.name;

    // Close village dropdown if open
    const dropdown = document.getElementById('village-dropdown-menu');
    if (dropdown) dropdown.classList.add('hidden');

    // Update KPI card numbers
    const elPenduduk = document.querySelector('.font-metric-display');
    if (elPenduduk) elPenduduk.textContent = data.penduduk;

    // Update Chart.js Charts if present
    const chartJalan = Chart.getChart('chartKemantapanJalan');
    if (chartJalan) {
      chartJalan.data.datasets[0].data = data.jalan;
      chartJalan.update();
    }

    const chartAparatur = Chart.getChart('chartKomposisiAparatur');
    if (chartAparatur) {
      chartAparatur.data.datasets[0].data = [data.pns, data.pppkFull, data.pppkPart];
      chartAparatur.update();
    }

    // Update center donut counter
    const centerPegawai = document.querySelector('#chartKomposisiAparatur + div span');
    if (centerPegawai) centerPegawai.textContent = data.aparatur;

    window.triggerToast(`Menampilkan data: ${data.name}`);
  };

  window.filterByZone = function(zoneNumber) {
    const zoneNames = ['Wilayah I (Utara)', 'Wilayah II (Tengah)', 'Wilayah III (Selatan)'];
    const targetName = zoneNames[zoneNumber - 1];
    window.triggerToast(`Fokus ke ${targetName}`);
    
    // Highlight zone card border
    document.querySelectorAll('.zona-card').forEach((card, idx) => {
      if (idx === zoneNumber - 1) {
        card.classList.add('ring-2', 'ring-primary');
      } else {
        card.classList.remove('ring-2', 'ring-primary');
      }
    });
  };

  // Wire event handlers once DOM is interactive
  setTimeout(() => {
    // Setup detail button actions
    const detailBtns = document.querySelectorAll('button[aria-label^="Detail"], button[aria-label^="Rincian"], button[aria-label^="Buka Laporan"]');
    detailBtns.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const label = btn.getAttribute('aria-label') || 'Detail';
        window.openDetailModal(
          label,
          'Data tervalidasi per 24 Oktober 2024',
          'verified',
          `<div class="bg-surface-container-low p-3.5 rounded-lg space-y-2">
            <div class="flex justify-between text-body-sm"><span class="text-secondary">Status Verifikasi SIAK:</span><span class="font-bold text-[#15803d]">100% Sesuai NIK</span></div>
            <div class="flex justify-between text-body-sm"><span class="text-secondary">Pembaruan Terakhir:</span><span class="font-bold text-on-surface">Hari ini 08:30 WIB</span></div>
            <div class="flex justify-between text-body-sm"><span class="text-secondary">Operator Pelaksana:</span><span class="font-bold text-primary">Disdukcapil & Puskesos</span></div>
          </div>
          <p class="text-body-sm text-secondary pt-1">Seluruh entri data tercatat pada server agregasi Satu Data Kabupaten Bandung dan siap diekspor menjadi laporan berkala.</p>`
        );
      });
    });

    // Search input typing listener
    const searchInput = document.querySelector('header input[type="text"]');
    if (searchInput) {
      let timer;
      searchInput.addEventListener('input', (e) => {
        clearTimeout(timer);
        const query = e.target.value.trim();
        if (!query) return;
        timer = setTimeout(() => {
          window.triggerToast(`Mencari data: "${query}"...`, 'search');
        }, 500);
      });
    }

    // Download button
    const downloadBtn = document.querySelector('button:has(span:contains("Unduh")), button[onclick*="download"]');
    // Also listen to any button containing text 'Unduh Rekap'
    document.querySelectorAll('button').forEach(btn => {
      if (btn.textContent.includes('Unduh Rekap')) {
        btn.addEventListener('click', () => {
          window.triggerToast('Mengunduh Laporan Rekapitulasi Cicalengka 2024.pdf...', 'download');
        });
      }
      if (btn.textContent.includes('Lihat Peta Spasial')) {
        btn.addEventListener('click', () => {
          window.openGeoModal();
        });
      }
    });

    // Mark zone cards
    document.querySelectorAll('.grid-cols-1.md\\:grid-cols-3 > div').forEach((card, idx) => {
      card.classList.add('zona-card', 'cursor-pointer', 'transition-all');
      card.addEventListener('click', () => {
        window.filterByZone(idx + 1);
      });
    });
  }, 100);
})();
</script></body></html>

<!-- Kependudukan & Akta - Dashboard Cicalengka (Chart.js Ready) -->
<!DOCTYPE html>

<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><meta content="web_dashboard" name="shell-type"/><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "surface-container-high": "#e3e8f7", "surface-bright": "#f9f9ff", "surface-tint": "#4e44e3", "surface": "#f9f9ff", "error-container": "#ffdad6", "secondary": "#595e6b", "on-primary-fixed-variant": "#3422cc", "surface-container-lowest": "#ffffff", "tertiary-container": "#006e4b", "on-secondary": "#ffffff", "on-secondary-fixed": "#161c26", "on-tertiary": "#ffffff", "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#c3c0ff", "surface-variant": "#dde2f1", "on-secondary-fixed-variant": "#414753", "surface-container-highest": "#dde2f1", "tertiary-fixed": "#6ffbbe", "tertiary": "#005338", "on-tertiary-fixed-variant": "#005236", "on-background": "#161c26", "on-tertiary-container": "#67f4b7", "background": "#f9f9ff", "primary": "#3625cd", "on-surface": "#161c26", "primary-fixed": "#e2dfff", "secondary-fixed": "#dde2f1", "surface-dim": "#d4dae9", "outline-variant": "#c7c4d8", "on-primary-fixed": "#0f0069", "on-error": "#ffffff", "on-surface-variant": "#464555", "inverse-on-surface": "#ecf1ff", "error": "#ba1a1a", "on-error-container": "#93000a", "primary-container": "#5046e5", "inverse-surface": "#2b313c", "inverse-primary": "#c3c0ff", "secondary-fixed-dim": "#c1c6d5", "surface-container": "#e8eefd", "tertiary-fixed-dim": "#4edea3", "on-primary-container": "#dbd8ff", "on-tertiary-fixed": "#002113", "on-secondary-container": "#5d636f", "outline": "#777587", "secondary-container": "#dae0ee", "on-primary": "#ffffff" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "space-xs": "0.375rem", "margin": "1.25rem", "space-lg": "1.5rem", "space-sm": "0.625rem", "gutter-desktop": "1.5rem", "space-md": "1rem", "margin-desktop": "2rem", "gutter": "1.25rem", "space-xl": "2rem" }, fontFamily: { "body-md": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "metric-display": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"] }, fontSize: { "body-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }], "headline-xl-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "headline-lg": ["26px", { "lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "700" }], "body-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }], "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }], "metric-display": ["30px", { "lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "700" }], "headline-sm": ["16px", { "lineHeight": "22px", "fontWeight": "700" }] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-[72px] bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col items-center py-space-lg"><div class="mb-space-xl flex flex-col items-center justify-center"><a class="flex items-center justify-center" data-path="ringkasan" href="#"><div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center shadow-[0_4px_12px_rgba(54,37,205,0.25)]"><span class="material-symbols-outlined text-on-primary text-[22px]">dashboard</span></div></a></div><nav class="flex-1 flex flex-col items-center gap-space-sm w-full px-space-xs" data-active-classes="bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="ringkasan" href="#" title="Ringkasan Eksekutif"><span class="material-symbols-outlined text-[20px]">grid_view</span></a><a aria-current="page" class="w-11 h-11 rounded-full flex items-center justify-center transition-all bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]" data-path="demografi-kependudukan" href="#" title="Demografi &amp; Kependudukan"><span class="material-symbols-outlined text-[20px]">groups</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="kepegawaian" href="#" title="Kepegawaian &amp; Aparatur"><span class="material-symbols-outlined text-[20px]">badge</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="infrastruktur-mbg" href="#" title="Infrastruktur &amp; MBG"><span class="material-symbols-outlined text-[20px]">apartment</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pendidikan-kesehatan" href="#" title="Pendidikan &amp; Kesehatan"><span class="material-symbols-outlined text-[20px]">local_hospital</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="laporan-analisis" href="#" title="Laporan &amp; Analisis"><span class="material-symbols-outlined text-[20px]">insert_chart</span></a></nav><div class="flex flex-col items-center gap-space-sm w-full px-space-xs pt-space-md"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pengaturan" href="#" title="Pengaturan Sistem"><span class="material-symbols-outlined text-[20px]">settings</span></a><button class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all" title="Keluar" type="button"><span class="material-symbols-outlined text-[20px]">logout</span></button></div></aside><div class="pl-[72px]"><header class="fixed top-0 left-[72px] right-0 h-20 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center px-gutter-desktop"><div class="w-full flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md flex-1 max-w-xl"><div class="flex items-center gap-space-sm pl-space-xs"><img alt="Brand logo. - Primary color: #1e3a8a
- Font: plusJakartaSans
- Mode: light
- Roundness: rounded-sm
" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XEmj8BA8WHZ6rBHU9dn0vDsK8_oFlnpaO0u2e-xmmevULi3IAdvEzBGmAIWiG6JylYypWC3KrIP2LpZ8_cnNqGZdiEftRUdqZ8dKOsJeUHh0fmSwvYrShObT5Ocr1Px1WRdGWtZiO8URSVyHDpNtfiiEdd53IelMEgiOhPQ9P6AzUVZDDqnSHWKTyxtp_e3QizJEGr0WLC2fwOW6hSbtDcH4xKbo-qZMKRnOEbziqS6yZq3prD0OxMkxk"/><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight hidden sm:inline-block">CivicHub</span></div><div class="relative flex-1 hidden md:block"><span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span><input class="w-full pl-10 pr-space-md py-2.5 rounded-full bg-surface-container-lowest text-on-surface placeholder:text-outline text-body-sm font-body-sm shadow-[0_2px_8px_rgba(37,43,54,0.04)] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari data desa, metrik, atau penduduk..." type="text"/></div></div><div class="flex items-center gap-space-sm"><div class="hidden lg:flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface text-label-md font-label-md"><span class="material-symbols-outlined text-primary text-[16px]">calendar_today</span><span>Hari ini, 24 Okt 2024</span></div><div class="relative"><button class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button"><span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span><span>Semua 12 Desa</span><span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span></button></div><button aria-label="Notifications" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all relative" type="button"><span class="material-symbols-outlined text-[19px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error ring-2 ring-surface-container-lowest"></span></button><button aria-label="Settings quick access" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all" type="button"><span class="material-symbols-outlined text-[19px]">tune</span></button><div class="flex items-center gap-space-xs pl-space-xs"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></div></header><main class="w-full pt-20 px-gutter-desktop pb-space-xl bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Page Context Sub-header -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-space-lg gap-space-sm">
<div class="flex flex-col">
<div class="flex items-center gap-space-xs text-on-surface-variant text-label-sm font-label-sm">
<span class="hover:text-primary transition-colors cursor-pointer">Kecamatan Cicalengka</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Demografi &amp; Administrasi Kependudukan</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mt-1">Data Kependudukan Desa</h1>
</div>
<!-- Quick Stat Pill Badge Cluster -->
<div class="flex items-center gap-space-xs self-start sm:self-auto bg-surface-container-lowest px-3 py-1.5 rounded-full shadow-sm">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary-container animate-pulse"></span>
<span class="font-label-md text-label-md text-on-surface font-semibold">124.680 Jiwa Total</span>
<span class="text-outline-variant text-[12px]">|</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Update: Semester II 2024</span>
</div>
</div>
<!-- 4 Colored KPI Header Cards matching Reference Banner Top Row -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-lg">
<!-- Card 1: Wajib KTP-el (Pastel Soft Violet / Blue Tint Header) -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between p-space-md">
<div class="absolute -top-12 -right-12 w-28 h-28 bg-primary-container/10 rounded-full blur-xl pointer-events-none"></div>
<div>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-bold tracking-tight mb-space-sm">
          Wajib KTP-el
        </div>
<div class="flex items-baseline justify-between mt-space-xs">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface tracking-tight">91.840</span>
<span class="font-label-md text-label-md text-tertiary font-bold px-2 py-0.5 rounded-full bg-tertiary-fixed-dim/30">98,4%</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant pt-space-xs mt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-primary text-[14px]">flag</span> Target rekaman 99%
        </span>
<span class="font-label-sm text-label-sm text-primary font-bold">1.488 Tersisa</span>
</div>
</div>
<!-- Card 2: Akta Kelahiran Anak (Warm Coral / Orange Tint Header) -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between p-space-md">
<div class="absolute -top-12 -right-12 w-28 h-28 bg-amber-400/10 rounded-full blur-xl pointer-events-none"></div>
<div>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-orange-100 text-amber-900 font-label-sm text-label-sm font-bold tracking-tight mb-space-sm">
          Akta Kelahiran Anak (0-18)
        </div>
<div class="flex items-baseline justify-between mt-space-xs">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface tracking-tight">31.250</span>
<span class="font-label-md text-label-md text-tertiary font-bold px-2 py-0.5 rounded-full bg-tertiary-fixed-dim/30">+2.6%</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant pt-space-xs mt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-amber-600 text-[14px]">child_care</span> 94,8% terdaftar resmi
        </span>
<span class="font-label-sm text-label-sm text-amber-700 font-bold">Siap Cetak</span>
</div>
</div>
<!-- Card 3: Penerbitan Akta Kematian (Soft Yellow / Amber Tint Header) -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between p-space-md">
<div class="absolute -top-12 -right-12 w-28 h-28 bg-yellow-400/15 rounded-full blur-xl pointer-events-none"></div>
<div>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-amber-50 text-amber-800 font-label-sm text-label-sm font-bold tracking-tight mb-space-sm">
          Penerbitan Akta Kematian
        </div>
<div class="flex items-baseline justify-between mt-space-xs">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface tracking-tight">642</span>
<span class="font-label-md text-label-md text-tertiary font-bold px-2 py-0.5 rounded-full bg-tertiary-fixed-dim/30">+0.6%</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant pt-space-xs mt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-amber-500 text-[14px]">history_edu</span> 91,2% rasio pelaporan
        </span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Bulan Ini</span>
</div>
</div>
<!-- Card 4: IKD Digital KTP (Soft Mint Green Accent) -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between p-space-md">
<div class="absolute -top-12 -right-12 w-28 h-28 bg-tertiary-fixed/30 rounded-full blur-xl pointer-events-none"></div>
<div>
<div class="inline-flex items-center px-3 py-1 rounded-full bg-tertiary-fixed-dim/40 text-on-tertiary-fixed-variant font-label-sm text-label-sm font-bold tracking-tight mb-space-sm">
          Identitas Kependudukan Digital (IKD)
        </div>
<div class="flex items-baseline justify-between mt-space-xs">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface tracking-tight">18.420</span>
<span class="font-label-md text-label-md text-tertiary font-bold px-2 py-0.5 rounded-full bg-tertiary-fixed-dim/30">+3.8%</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant pt-space-xs mt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-tertiary text-[14px]">phone_android</span> Aktivasi digital aktif
        </span>
<span class="font-label-sm text-label-sm text-tertiary font-bold">20,1% Total</span>
</div>
</div>
</div>
<!-- Chart.js Analytics Grid Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-space-md mb-space-lg">
<!-- Chart Card 1: Doughnut Chart (Gender & Demographics Distribution) -->
<div class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Rasio Penduduk &amp; Gender</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Komposisi jenis kelamin se-Kecamatan</p>
</div>
<span class="px-2.5 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">124.680 Jiwa</span>
</div>
<div class="relative flex items-center justify-center my-3 py-2 h-[220px]">
<canvas id="genderDoughnutChart"></canvas>
<!-- Center Callout Text inside Doughnut -->
<div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
<span class="text-label-sm font-label-sm uppercase font-bold text-outline">Total L/P</span>
<span class="font-headline-md text-headline-md font-extrabold text-on-surface">50.6%</span>
<span class="text-[11px] font-semibold text-tertiary">Rasio Imbang</span>
</div>
</div>
<div class="grid grid-cols-2 gap-2 pt-space-xs border-t border-surface-container">
<div class="flex items-center gap-2 p-2 rounded-lg bg-surface-container-low/70">
<span class="w-3 h-3 rounded-full bg-[#3625cd]"></span>
<div class="flex flex-col">
<span class="text-[11px] text-outline font-semibold">Laki-Laki</span>
<span class="font-bold text-body-sm text-on-surface">63.120 <span class="text-[11px] text-on-surface-variant font-normal">(50,6%)</span></span>
</div>
</div>
<div class="flex items-center gap-2 p-2 rounded-lg bg-surface-container-low/70">
<span class="w-3 h-3 rounded-full bg-[#6ffbbe]"></span>
<div class="flex flex-col">
<span class="text-[11px] text-outline font-semibold">Perempuan</span>
<span class="font-bold text-body-sm text-on-surface">61.380 <span class="text-[11px] text-on-surface-variant font-normal">(49,4%)</span></span>
</div>
</div>
</div>
</div>
<!-- Chart Card 2: Bar Chart (Capaian KTP-el & Akta Lahir Desa Tertinggi) -->
<div class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm flex flex-col justify-between lg:col-span-2">
<div class="flex flex-col sm:flex-row sm:items-center justify-between pb-space-sm border-b border-surface-container gap-space-xs">
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Capaian Administrasi Top Desa</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Perbandingan persentase kepemilikan KTP-el vs Akta Kelahiran</p>
</div>
<div class="flex items-center gap-space-sm text-label-sm font-label-sm">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-sm bg-[#3625cd]"></span>
<span class="text-on-surface font-semibold">KTP-el (%)</span>
</div>
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-sm bg-[#4edea3]"></span>
<span class="text-on-surface font-semibold">Akta Lahir (%)</span>
</div>
</div>
</div>
<div class="relative w-full h-[240px] pt-space-sm">
<canvas id="achievementBarChart"></canvas>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm text-on-surface-variant pt-space-xs border-t border-surface-container mt-space-xs">
<span class="flex items-center gap-1 text-label-sm font-label-sm text-outline">
<span class="material-symbols-outlined text-[15px] text-tertiary">trending_up</span> Standar Target SPM Nasional: &gt; 95%
</span>
<span class="text-label-sm font-label-sm font-bold text-primary">6 Desa Prioritas Unggul</span>
</div>
</div>
</div>
<!-- Main Table Section (Clean White Container with soft ambient drop-shadow) -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Toolbar Row directly matching reference UI -->
<div class="p-space-md lg:p-space-lg flex flex-col gap-space-md">
<div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
<!-- Search bar + Village count -->
<div class="flex flex-1 items-center gap-space-md">
<div class="relative flex-1 max-w-md">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
<input class="w-full pl-10 pr-space-md py-2 rounded-full bg-surface-container-low text-on-surface placeholder:text-outline text-body-sm font-body-sm focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 transition-all" id="villageSearchInput" placeholder="Cari nama desa / kepala desa..." type="text"/>
</div>
<div class="hidden sm:flex items-center gap-1.5 text-on-surface-variant font-label-md text-label-md whitespace-nowrap">
<span class="font-bold text-on-surface" id="visibleRowCount">10</span>
<span>Desa Terdaftar</span>
</div>
</div>
<!-- Action cluster: Export, Sort dropdown, and Primary Dark Obsidian Action Button -->
<div class="flex items-center gap-space-xs sm:gap-space-sm flex-wrap sm:flex-nowrap justify-end">
<!-- Ekspor Button -->
<button class="flex items-center gap-1.5 px-3.5 py-2 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface text-label-md font-label-md transition-colors" onclick="triggerExportToast()" type="button">
<span class="material-symbols-outlined text-[17px] text-on-surface-variant">file_download</span>
<span>Ekspor Data</span>
</button>
<!-- Sort Button Dropdown -->
<div class="relative">
<button class="flex items-center gap-1.5 px-3.5 py-2 rounded-full bg-surface-container-low hover:bg-surface-container-high text-on-surface text-label-md font-label-md transition-colors" id="sortDropdownButton" onclick="toggleSortMenu()" type="button">
<span class="material-symbols-outlined text-[17px] text-on-surface-variant">swap_vert</span>
<span id="currentSortLabel">Sort: default</span>
<span class="material-symbols-outlined text-[15px] text-outline">expand_more</span>
</button>
<!-- Dropdown Menu -->
<div class="hidden absolute right-0 mt-2 w-48 bg-surface-container-lowest rounded-xl shadow-xl z-30 p-1" id="sortMenu">
<button class="w-full text-left px-3 py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" onclick="applySort('default', 'Sort: default')">Default (Kode Desa)</button>
<button class="w-full text-left px-3 py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" onclick="applySort('penduduk_desc', 'Penduduk: Tertinggi')">Penduduk Tertinggi</button>
<button class="w-full text-left px-3 py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" onclick="applySort('ktp_desc', 'KTP-el %: Tertinggi')">Perekaman KTP-el</button>
<button class="w-full text-left px-3 py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" onclick="applySort('akta_desc', 'Akta Lahir %: Tertinggi')">Capaian Akta Lahir</button>
</div>
</div>
<!-- Add / Main Action Button: Dark Obsidian Pill Trigger from Reference -->
<button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-inverse-surface hover:bg-on-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)] text-label-md font-label-md transition-all active:scale-95" onclick="openRekapModal()" type="button">
<span class="material-symbols-outlined text-[17px]">add</span>
<span>Rekapitulasi Desa</span>
</button>
</div>
</div>
<!-- Second Row: Filter Pills with Dismiss X (matching reference screenshot) -->
<div class="flex items-center justify-between gap-space-sm pt-space-xs overflow-x-auto pb-1">
<div class="flex items-center gap-space-xs text-label-sm font-label-sm">
<div class="w-7 h-7 rounded-full bg-surface-container-low flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-[15px]">filter_list</span>
</div>
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-secondary-fixed text-label-sm font-label-sm" id="filterPillStatus">
<span>Status: Lengkap &amp; Optimal</span>
<button class="w-3.5 h-3.5 flex items-center justify-center text-on-surface-variant hover:text-on-surface" onclick="clearFilter('status')" type="button"><span class="material-symbols-outlined text-[13px]">close</span></button>
</div>
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-secondary-fixed text-label-sm font-label-sm" id="filterPillKtp">
<span>KTP-el &gt; 98%</span>
<button class="w-3.5 h-3.5 flex items-center justify-center text-on-surface-variant hover:text-on-surface" onclick="clearFilter('ktp')" type="button"><span class="material-symbols-outlined text-[13px]">close</span></button>
</div>
<button class="text-primary hover:underline px-2 text-label-sm font-label-sm font-semibold whitespace-nowrap" id="clearAllFiltersBtn" onclick="resetAllFilters()" type="button">
            Hapus Semua (2)
          </button>
</div>
<!-- Micro pagination marker top-right of table as in reference -->
<div class="hidden sm:flex items-center gap-2 text-on-surface-variant text-label-sm font-label-sm whitespace-nowrap pl-space-md">
<span>1 dari 1</span>
<div class="flex items-center gap-1">
<button class="w-6 h-6 rounded-full flex items-center justify-center text-outline-variant cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-[14px]">chevron_left</span>
</button>
<button class="w-6 h-6 rounded-full flex items-center justify-center text-outline-variant cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Data Table Container -->
<div class="w-full overflow-x-auto">
<table class="w-full text-left border-collapse" id="villageDemographicTable">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-3 pl-space-lg pr-space-xs w-10">
<input class="w-4 h-4 rounded text-primary focus:ring-primary/20 accent-primary cursor-pointer" id="selectAllCheckbox" onchange="toggleSelectAll(this)" type="checkbox"/>
</th>
<th class="py-3 px-space-sm font-semibold">Kode &amp; Nama Desa</th>
<th class="py-3 px-space-sm font-semibold">Kepala Desa</th>
<th class="py-3 px-space-sm font-semibold text-right">Penduduk (Jiwa)</th>
<th class="py-3 px-space-sm font-semibold text-center">L / P</th>
<th class="py-3 px-space-sm font-semibold text-right">Jml KK</th>
<th class="py-3 px-space-sm font-semibold text-center">KTP-el %</th>
<th class="py-3 px-space-sm font-semibold text-center">Akta Lahir %</th>
<th class="py-3 px-space-sm font-semibold text-center">Status Layanan</th>
<th class="py-3 pr-space-lg pl-space-sm text-right font-semibold">Aksi</th>
</tr>
</thead>
<tbody class="divide-y-0 text-body-sm font-body-sm text-on-surface" id="tableBodyVillages">
<!-- Row 1: Cicalengka Wetan -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="96.2" data-ktp="98.7" data-leader="H. Nanang Komarudin" data-name="Cicalengka Wetan" data-population="14280" data-status="Lengkap">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Cicalengka Wetan</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2001 • Pusat Kecamatan</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-label-sm">NK</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">H. Nanang Komarudin</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">14.280</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">7.240 / 7.040</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">4.180</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,7%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">96,2%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-tertiary-fixed-dim/40 text-on-tertiary-fixed-variant">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span> Lengkap
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 2: Cicalengka Kulon -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="95.1" data-ktp="98.5" data-leader="Dudi Sudrajat, S.IP" data-name="Cicalengka Kulon" data-population="13890" data-status="Lengkap">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Cicalengka Kulon</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2002 • Area Stasiun</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center text-on-secondary font-bold text-label-sm">DS</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Dudi Sudrajat, S.IP</span>
<span class="text-label-sm text-outline">Periode 2019-2025</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">13.890</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">7.020 / 6.870</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">3.950</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,5%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">95,1%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-tertiary-fixed-dim/40 text-on-tertiary-fixed-variant">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span> Lengkap
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 3: Panenjoan -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="94.4" data-ktp="98.2" data-leader="Asep Permana" data-name="Panenjoan" data-population="12950" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Panenjoan</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2003 • Kawasan Agrobisnis</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold text-label-sm">AP</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Asep Permana</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">12.950</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">6.520 / 6.430</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">3.720</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,2%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">94,4%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 4: Babakan Peuteuy -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="93.8" data-ktp="98.1" data-leader="Endang Supriatna" data-name="Babakan Peuteuy" data-population="11420" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Babakan Peuteuy</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2004 • Lintasan Kereta Cepat</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-label-sm">ES</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Endang Supriatna</span>
<span class="text-label-sm text-outline">Periode 2020-2026</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">11.420</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">5.780 / 5.640</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">3.210</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,1%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">93,8%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 5: Cikuya -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="92.4" data-ktp="97.8" data-leader="H. Dadan Wildan" data-name="Cikuya" data-population="10750" data-status="Percepatan">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Cikuya</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2005 • Sentra Tenun &amp; Kerajinan</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center text-on-secondary font-bold text-label-sm">DW</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">H. Dadan Wildan</span>
<span class="text-label-sm text-outline">Periode 2019-2025</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">10.750</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">5.410 / 5.340</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">3.050</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-orange-100 text-amber-900">97,8%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">92,4%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-orange-100 text-amber-900">
<span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span> Percepatan
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 6: Waluya -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="95.0" data-ktp="98.6" data-leader="Cecep Kurnia" data-name="Waluya" data-population="9840" data-status="Lengkap">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Waluya</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2006 • Koridor By-Pass</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold text-label-sm">CK</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Cecep Kurnia</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">9.840</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.960 / 4.880</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.840</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,6%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">95,0%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-tertiary-fixed-dim/40 text-on-tertiary-fixed-variant">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span> Lengkap
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 7: Tenjolaya -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="94.7" data-ktp="98.3" data-leader="Agus Sunandar" data-name="Tenjolaya" data-population="9210" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Tenjolaya</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2007 • Kawasan Industri Ringan</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-label-sm">AS</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Agus Sunandar</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">9.210</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.650 / 4.560</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.680</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,3%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">94,7%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 8: Nagrog -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="93.6" data-ktp="98.0" data-leader="Gun Gun Mulyana" data-name="Nagrog" data-population="8960" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Nagrog</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2008 • Bukit &amp; Agrowisata</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center text-on-secondary font-bold text-label-sm">GM</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Gun Gun Mulyana</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">8.960</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.510 / 4.450</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.590</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,0%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">93,6%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 9: Margaasih -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="95.6" data-ktp="98.8" data-leader="Yayan Suryana" data-name="Margaasih" data-population="8650" data-status="Lengkap">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Margaasih</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2009 • Pertanian Basah</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold text-label-sm">YS</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Yayan Suryana</span>
<span class="text-label-sm text-outline">Periode 2019-2025</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">8.650</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.360 / 4.290</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.480</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,8%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">95,6%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-tertiary-fixed-dim/40 text-on-tertiary-fixed-variant">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span> Lengkap
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 10: Dampit -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="91.5" data-ktp="97.4" data-leader="Wawan Hermawan" data-name="Dampit" data-population="8340" data-status="Percepatan">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Dampit</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2010 • Kawasan Curug Cinulang</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-label-sm">WH</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Wawan Hermawan</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">8.340</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.210 / 4.130</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.390</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-orange-100 text-amber-900">97,4%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">91,5%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-orange-100 text-amber-900">
<span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span> Percepatan
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 11: Tanjungwangi -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="93.2" data-ktp="98.1" data-leader="Rudi Setiawan" data-name="Tanjungwangi" data-population="8210" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Tanjungwangi</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2011 • Perbukitan Kareumbi</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center text-on-secondary font-bold text-label-sm">RS</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Rudi Setiawan</span>
<span class="text-label-sm text-outline">Periode 2021-2027</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">8.210</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.150 / 4.060</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.310</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,1%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">93,2%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
<!-- Row 12: Narawita -->
<tr class="village-row hover:bg-surface-container-low/60 transition-colors group" data-akta="94.0" data-ktp="98.3" data-leader="Dedi Kusnadi" data-name="Narawita" data-population="7930" data-status="Optimal">
<td class="py-3.5 pl-space-lg pr-space-xs">
<input class="row-checkbox w-4 h-4 rounded text-primary accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface group-hover:text-primary transition-colors">Narawita</span>
<span class="font-label-sm text-label-sm text-outline">32.04.14.2012 • Sentra Palawija</span>
</div>
</td>
<td class="py-3.5 px-space-sm">
<div class="flex items-center gap-space-xs">
<div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed font-bold text-label-sm">DK</div>
<div class="flex flex-col">
<span class="font-semibold text-on-surface">Dedi Kusnadi</span>
<span class="text-label-sm text-outline">Periode 2019-2025</span>
</div>
</div>
</td>
<td class="py-3.5 px-space-sm text-right font-bold tabular-nums text-on-surface">7.930</td>
<td class="py-3.5 px-space-sm text-center tabular-nums text-on-surface-variant font-label-md">4.010 / 3.920</td>
<td class="py-3.5 px-space-sm text-right tabular-nums text-on-surface-variant">2.230</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-tertiary-fixed-dim/30 text-tertiary">98,3%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="px-2.5 py-0.5 rounded-full font-bold text-label-sm bg-surface-container text-on-secondary-fixed">94,0%</span>
</td>
<td class="py-3.5 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-label-sm font-label-sm font-bold bg-primary-fixed text-primary">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Optimal
              </span>
</td>
<td class="py-3.5 pr-space-lg pl-space-sm text-right">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all" type="button">
<span class="material-symbols-outlined text-[18px]">more_horiz</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Empty State Fallback -->
<div class="hidden py-12 flex-col items-center justify-center text-center" id="noResultsState">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-outline mb-2">
<span class="material-symbols-outlined text-[24px]">search_off</span>
</div>
<p class="font-headline-sm text-headline-sm text-on-surface">Tidak ada desa ditemukan</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Coba kata kunci lain atau setel ulang filter pencarian.</p>
<button class="mt-3 px-4 py-1.5 rounded-full bg-primary text-on-primary text-label-md font-label-md" onclick="resetAllFilters()" type="button">Reset Pencarian</button>
</div>
<!-- Table Footer / Bottom Pagination matching Reference Image Bottom Bar -->
<div class="p-space-md lg:px-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md bg-surface-container-lowest">
<div class="flex items-center gap-space-sm text-on-surface-variant text-body-sm font-body-sm">
<span id="selectedCountIndicator">0 desa terpilih dari 12 total</span>
<span class="text-outline-variant">•</span>
<span class="text-on-surface-variant">SIAK Terintegrasi Disdukcapil Kab. Bandung</span>
</div>
<div class="flex items-center gap-space-md">
<div class="flex items-center gap-1 text-label-md font-label-md text-on-surface-variant">
<span>Menampilkan</span>
<select class="bg-surface-container-low px-2 py-1 rounded-lg text-on-surface font-semibold focus:outline-none cursor-pointer">
<option>12 baris</option>
<option>25 baris</option>
<option>Semua</option>
</select>
</div>
<div class="flex items-center gap-space-xs">
<button class="w-8 h-8 rounded-full flex items-center justify-center text-outline-variant bg-surface-container-low/50 cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-[18px]">keyboard_arrow_left</span>
</button>
<span class="w-8 h-8 rounded-full flex items-center justify-center bg-inverse-surface text-inverse-on-surface font-bold text-label-sm font-label-sm shadow-sm">1</span>
<button class="w-8 h-8 rounded-full flex items-center justify-center text-outline-variant bg-surface-container-low/50 cursor-not-allowed" disabled="" type="button">
<span class="material-symbols-outlined text-[18px]">keyboard_arrow_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Micro Modal for Rekapitulasi Quick Action -->
<div class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm p-4" id="rekapModal">
<div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-lg shadow-xl relative animate-in fade-in duration-150">
<div class="flex items-center justify-between pb-space-sm">
<div class="flex items-center gap-2">
<div class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[20px]">assignment_add</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Sinkronisasi &amp; Rekapitulasi</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Update data agregat kecamatan Cicalengka</p>
</div>
</div>
<button class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high transition-colors" onclick="closeRekapModal()" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<div class="space-y-3 py-space-md">
<div class="p-3 rounded-lg bg-surface-container-low text-body-sm font-body-sm text-on-surface">
<div class="flex justify-between items-center mb-1">
<span class="font-semibold text-on-surface">Status SIAK Terpusat</span>
<span class="text-tertiary font-bold text-label-sm">Terhubung (Online)</span>
</div>
<p class="text-outline text-label-sm">Terakhir disinkronkan: 24 Oktober 2024 pukul 08:30 WIB</p>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface mb-1 font-semibold">Cakupan Data</label>
<div class="grid grid-cols-2 gap-2 text-label-sm font-label-sm">
<label class="flex items-center gap-2 p-2 rounded-lg bg-surface hover:bg-surface-container cursor-pointer transition-colors">
<input checked="" class="accent-primary rounded" type="checkbox"/> Rekam KTP-el &amp; IKD
            </label>
<label class="flex items-center gap-2 p-2 rounded-lg bg-surface hover:bg-surface-container cursor-pointer transition-colors">
<input checked="" class="accent-primary rounded" type="checkbox"/> Akta Lahir &amp; Mati
            </label>
<label class="flex items-center gap-2 p-2 rounded-lg bg-surface hover:bg-surface-container cursor-pointer transition-colors">
<input checked="" class="accent-primary rounded" type="checkbox"/> Mutasi Datang/Pindah
            </label>
<label class="flex items-center gap-2 p-2 rounded-lg bg-surface hover:bg-surface-container cursor-pointer transition-colors">
<input checked="" class="accent-primary rounded" type="checkbox"/> Kartu Keluarga Baru
            </label>
</div>
</div>
</div>
<div class="flex items-center justify-end gap-space-xs pt-space-sm">
<button class="px-4 py-2 rounded-full text-on-surface-variant hover:bg-surface-container-high text-label-md font-label-md transition-colors" onclick="closeRekapModal()" type="button">
          Batal
        </button>
<button class="px-5 py-2 rounded-full bg-primary text-on-primary font-bold text-label-md font-label-md shadow-sm hover:opacity-95 transition-opacity" onclick="executeRekap()" type="button">
          Jalankan Sinkronisasi
        </button>
</div>
</div>
</div>
<!-- Toast Notification Box -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-2.5 px-4 py-2.5 rounded-full bg-inverse-surface text-inverse-on-surface shadow-xl text-body-sm font-body-sm" id="toastNotification">
<span class="material-symbols-outlined text-tertiary-fixed text-[18px]" id="toastIcon">check_circle</span>
<span id="toastMessage">Operasi berhasil dilaksanakan.</span>
</div>
</div>
<script>
  // Initialize Chart.js when DOM is ready
  document.addEventListener('DOMContentLoaded', () => {
    // 1. Doughnut Chart: Gender Distribution (Laki-laki vs Perempuan)
    const ctxGender = document.getElementById('genderDoughnutChart');
    if (ctxGender) {
      new Chart(ctxGender, {
        type: 'doughnut',
        data: {
          labels: ['Laki-Laki', 'Perempuan'],
          datasets: [{
            data: [63120, 61380],
            backgroundColor: ['#3625cd', '#6ffbbe'],
            hoverBackgroundColor: ['#2818aa', '#4edea3'],
            borderWidth: 3,
            borderColor: '#ffffff',
            hoverOffset: 4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '74%',
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: '#161c26',
              titleFont: { family: 'Plus Jakarta Sans', size: 12, weight: 'bold' },
              bodyFont: { family: 'Plus Jakarta Sans', size: 12 },
              padding: 10,
              cornerRadius: 8,
              callbacks: {
                label: function(context) {
                  const val = context.raw || 0;
                  const total = 124680;
                  const pct = ((val / total) * 100).toFixed(1);
                  return ` ${context.label}: ${val.toLocaleString('id-ID')} jiwa (${pct}%)`;
                }
              }
            }
          }
        }
      });
    }

    // 2. Bar Chart: KTP-el & Akta Achievement across Key Villages
    const ctxBar = document.getElementById('achievementBarChart');
    if (ctxBar) {
      new Chart(ctxBar, {
        type: 'bar',
        data: {
          labels: ['Cicalengka Wetan', 'Cicalengka Kulon', 'Panenjoan', 'Babakan Peuteuy', 'Waluya', 'Margaasih'],
          datasets: [
            {
              label: 'KTP-el %',
              data: [98.7, 98.5, 98.2, 98.1, 98.6, 98.8],
              backgroundColor: '#3625cd',
              borderRadius: 6,
              barThickness: 14
            },
            {
              label: 'Akta Lahir %',
              data: [96.2, 95.1, 94.4, 93.8, 95.0, 95.6],
              backgroundColor: '#4edea3',
              borderRadius: 6,
              barThickness: 14
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: '#161c26',
              titleFont: { family: 'Plus Jakarta Sans', size: 12, weight: 'bold' },
              bodyFont: { family: 'Plus Jakarta Sans', size: 12 },
              padding: 10,
              cornerRadius: 8,
              callbacks: {
                label: function(context) {
                  return ` ${context.dataset.label}: ${context.raw}%`;
                }
              }
            }
          },
          scales: {
            x: {
              grid: {
                display: false,
                drawBorder: false
              },
              ticks: {
                font: { family: 'Plus Jakarta Sans', size: 11, weight: '600' },
                color: '#595e6b'
              }
            },
            y: {
              min: 88,
              max: 100,
              grid: {
                color: '#e8eefd',
                drawBorder: false
              },
              ticks: {
                stepSize: 3,
                font: { family: 'Plus Jakarta Sans', size: 11 },
                color: '#777587',
                callback: function(val) {
                  return val + '%';
                }
              }
            }
          }
        }
      });
    }
  });

  // Search & Filter Execution
  const searchInput = document.getElementById('villageSearchInput');
  const tableRows = document.querySelectorAll('.village-row');
  const visibleCountEl = document.getElementById('visibleRowCount');
  const noResultsState = document.getElementById('noResultsState');

  let activeFilters = {
    search: '',
    status: true,
    ktpHigh: true
  };

  function applyTableFiltering() {
    const query = activeFilters.search.toLowerCase().trim();
    let visibleCount = 0;

    tableRows.forEach(row => {
      const name = row.getAttribute('data-name').toLowerCase();
      const leader = row.getAttribute('data-leader').toLowerCase();
      const ktpVal = parseFloat(row.getAttribute('data-ktp'));
      const statusVal = row.getAttribute('data-status');

      const matchesSearch = !query || name.includes(query) || leader.includes(query);
      const matchesStatus = !activeFilters.status || (statusVal === 'Lengkap' || statusVal === 'Optimal');
      const matchesKtp = !activeFilters.ktpHigh || (ktpVal >= 98.0);

      if (matchesSearch && matchesStatus && matchesKtp) {
        row.style.display = '';
        visibleCount++;
      } else {
        row.style.display = 'none';
      }
    });

    if (visibleCountEl) visibleCountEl.textContent = visibleCount;
    if (noResultsState) {
      noResultsState.style.display = visibleCount === 0 ? 'flex' : 'none';
    }
  }

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      activeFilters.search = e.target.value;
      applyTableFiltering();
    });
  }

  function clearFilter(type) {
    if (type === 'status') {
      activeFilters.status = false;
      const el = document.getElementById('filterPillStatus');
      if (el) el.style.display = 'none';
    } else if (type === 'ktp') {
      activeFilters.ktpHigh = false;
      const el = document.getElementById('filterPillKtp');
      if (el) el.style.display = 'none';
    }
    updateClearAllBtn();
    applyTableFiltering();
  }

  function resetAllFilters() {
    activeFilters.search = '';
    activeFilters.status = false;
    activeFilters.ktpHigh = false;

    if (searchInput) searchInput.value = '';
    const sPill = document.getElementById('filterPillStatus');
    const kPill = document.getElementById('filterPillKtp');
    if (sPill) sPill.style.display = 'none';
    if (kPill) kPill.style.display = 'none';

    updateClearAllBtn();
    applyTableFiltering();
    showToast('Semua filter berhasil disetel ulang');
  }

  function updateClearAllBtn() {
    const btn = document.getElementById('clearAllFiltersBtn');
    if (!btn) return;
    const activeCount = (activeFilters.status ? 1 : 0) + (activeFilters.ktpHigh ? 1 : 0);
    if (activeCount === 0) {
      btn.style.display = 'none';
    } else {
      btn.style.display = 'inline-block';
      btn.textContent = `Hapus Semua (${activeCount})`;
    }
  }

  // Row selection mechanics
  function toggleSelectAll(master) {
    const checkboxes = document.querySelectorAll('.row-checkbox');
    checkboxes.forEach(cb => {
      const parentRow = cb.closest('tr');
      if (parentRow && parentRow.style.display !== 'none') {
        cb.checked = master.checked;
      }
    });
    updateSelectedCount();
  }

  document.querySelectorAll('.row-checkbox').forEach(cb => {
    cb.addEventListener('change', updateSelectedCount);
  });

  function updateSelectedCount() {
    const checked = document.querySelectorAll('.row-checkbox:checked').length;
    const label = document.getElementById('selectedCountIndicator');
    if (label) {
      label.textContent = `${checked} desa terpilih dari 12 total`;
    }
  }

  // Sorting
  function toggleSortMenu() {
    const menu = document.getElementById('sortMenu');
    if (menu) menu.classList.toggle('hidden');
  }

  function applySort(criteria, label) {
    const labelEl = document.getElementById('currentSortLabel');
    if (labelEl) labelEl.textContent = label;
    const menu = document.getElementById('sortMenu');
    if (menu) menu.classList.add('hidden');

    const tbody = document.getElementById('tableBodyVillages');
    const rowsArray = Array.from(tableRows);

    rowsArray.sort((a, b) => {
      if (criteria === 'penduduk_desc') {
        return parseFloat(b.getAttribute('data-population')) - parseFloat(a.getAttribute('data-population'));
      } else if (criteria === 'ktp_desc') {
        return parseFloat(b.getAttribute('data-ktp')) - parseFloat(a.getAttribute('data-ktp'));
      } else if (criteria === 'akta_desc') {
        return parseFloat(b.getAttribute('data-akta')) - parseFloat(a.getAttribute('data-akta'));
      } else {
        return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
      }
    });

    rowsArray.forEach(row => tbody.appendChild(row));
    showToast(`Diurutkan berdasar: ${label}`);
  }

  // Rekap modal
  function openRekapModal() {
    const m = document.getElementById('rekapModal');
    if (m) m.classList.remove('hidden');
  }

  function closeRekapModal() {
    const m = document.getElementById('rekapModal');
    if (m) m.classList.add('hidden');
  }

  function executeRekap() {
    closeRekapModal();
    showToast('Sinkronisasi SIAK 12 Desa berhasil diperbarui!');
  }

  function triggerExportToast() {
    showToast('Mengekspor data kependudukan ke CSV / XLSX...');
  }

  // Toast helper
  function showToast(message) {
    const toast = document.getElementById('toastNotification');
    const msgEl = document.getElementById('toastMessage');
    if (!toast || !msgEl) return;

    msgEl.textContent = message;
    toast.classList.remove('translate-y-20', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');

    setTimeout(() => {
      toast.classList.remove('translate-y-0', 'opacity-100');
      toast.classList.add('translate-y-20', 'opacity-0');
    }, 2800);
  }

  // Initial Filter State Sync
  applyTableFiltering();
</script></main></div></body></html>

<!-- Kepegawaian PNS & PPPK - Dashboard Cicalengka (Chart.js Ready) -->
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "surface-container-high": "#e3e8f7", "surface-bright": "#f9f9ff", "surface-tint": "#4e44e3", "surface": "#f9f9ff", "error-container": "#ffdad6", "secondary": "#595e6b", "on-primary-fixed-variant": "#3422cc", "surface-container-lowest": "#ffffff", "tertiary-container": "#006e4b", "on-secondary": "#ffffff", "on-secondary-fixed": "#161c26", "on-tertiary": "#ffffff", "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#c3c0ff", "surface-variant": "#dde2f1", "on-secondary-fixed-variant": "#414753", "surface-container-highest": "#dde2f1", "tertiary-fixed": "#6ffbbe", "tertiary": "#005338", "on-tertiary-fixed-variant": "#005236", "on-background": "#161c26", "on-tertiary-container": "#67f4b7", "background": "#f9f9ff", "primary": "#3625cd", "on-surface": "#161c26", "primary-fixed": "#e2dfff", "secondary-fixed": "#dde2f1", "surface-dim": "#d4dae9", "outline-variant": "#c7c4d8", "on-primary-fixed": "#0f0069", "on-error": "#ffffff", "on-surface-variant": "#464555", "inverse-on-surface": "#ecf1ff", "error": "#ba1a1a", "on-error-container": "#93000a", "primary-container": "#5046e5", "inverse-surface": "#2b313c", "inverse-primary": "#c3c0ff", "secondary-fixed-dim": "#c1c6d5", "surface-container": "#e8eefd", "tertiary-fixed-dim": "#4edea3", "on-primary-container": "#dbd8ff", "on-tertiary-fixed": "#002113", "on-secondary-container": "#5d636f", "outline": "#777587", "secondary-container": "#dae0ee", "on-primary": "#ffffff" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "space-xs": "0.375rem", "margin": "1.25rem", "space-lg": "1.5rem", "space-sm": "0.625rem", "gutter-desktop": "1.5rem", "space-md": "1rem", "margin-desktop": "2rem", "gutter": "1.25rem", "space-xl": "2rem" }, fontFamily: { "body-md": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "metric-display": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"] }, fontSize: { "body-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }], "headline-xl-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "headline-lg": ["26px", { "lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "700" }], "body-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }], "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }], "metric-display": ["30px", { "lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "700" }], "headline-sm": ["16px", { "lineHeight": "22px", "fontWeight": "700" }] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-[72px] bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col items-center py-space-lg"><div class="mb-space-xl flex flex-col items-center justify-center"><a class="flex items-center justify-center" data-path="ringkasan" href="#"><div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center shadow-[0_4px_12px_rgba(54,37,205,0.25)]"><span class="material-symbols-outlined text-on-primary text-[22px]">dashboard</span></div></a></div><nav class="flex-1 flex flex-col items-center gap-space-sm w-full px-space-xs" data-active-classes="bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="ringkasan" href="#" title="Ringkasan Eksekutif"><span class="material-symbols-outlined text-[20px]">grid_view</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="demografi-kependudukan" href="#" title="Demografi &amp; Kependudukan"><span class="material-symbols-outlined text-[20px]">groups</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-all bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]" data-path="kepegawaian" href="#" title="Kepegawaian &amp; Aparatur"><span class="material-symbols-outlined text-[20px]">badge</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="infrastruktur-mbg" href="#" title="Infrastruktur &amp; MBG"><span class="material-symbols-outlined text-[20px]">apartment</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pendidikan-kesehatan" href="#" title="Pendidikan &amp; Kesehatan"><span class="material-symbols-outlined text-[20px]">local_hospital</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="laporan-analisis" href="#" title="Laporan &amp; Analisis"><span class="material-symbols-outlined text-[20px]">insert_chart</span></a></nav><div class="flex flex-col items-center gap-space-sm w-full px-space-xs pt-space-md"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pengaturan" href="#" title="Pengaturan Sistem"><span class="material-symbols-outlined text-[20px]">settings</span></a><button class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all" title="Keluar" type="button"><span class="material-symbols-outlined text-[20px]">logout</span></button></div></aside><div class="pl-[72px]"><header class="fixed top-0 left-[72px] right-0 h-20 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center px-gutter-desktop"><div class="w-full flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md flex-1 max-w-xl"><div class="flex items-center gap-space-sm pl-space-xs"><img alt="Brand logo. - Primary color: #1e3a8a
- Font: plusJakartaSans
- Mode: light
- Roundness: rounded-sm
" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XEmj8BA8WHZ6rBHU9dn0vDsK8_oFlnpaO0u2e-xmmevULi3IAdvEzBGmAIWiG6JylYypWC3KrIP2LpZ8_cnNqGZdiEftRUdqZ8dKOsJeUHh0fmSwvYrShObT5Ocr1Px1WRdGWtZiO8URSVyHDpNtfiiEdd53IelMEgiOhPQ9P6AzUVZDDqnSHWKTyxtp_e3QizJEGr0WLC2fwOW6hSbtDcH4xKbo-qZMKRnOEbziqS6yZq3prD0OxMkxk"><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight hidden sm:inline-block">CivicHub</span></div><div class="relative flex-1 hidden md:block"><span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span><input class="w-full pl-10 pr-space-md py-2.5 rounded-full bg-surface-container-lowest text-on-surface placeholder:text-outline text-body-sm font-body-sm shadow-[0_2px_8px_rgba(37,43,54,0.04)] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari data desa, metrik, atau penduduk..." type="text"></div></div><div class="flex items-center gap-space-sm"><div class="hidden lg:flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface text-label-md font-label-md"><span class="material-symbols-outlined text-primary text-[16px]">calendar_today</span><span class="">Hari ini, 24 Okt 2024</span></div><div class="relative"><button class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button" id="btn-desa-filter"><span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span><span class="">Semua 12 Desa</span><span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span></button></div><button aria-label="Notifications" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all relative" type="button"><span class="material-symbols-outlined text-[19px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error ring-2 ring-surface-container-lowest"></span></button><button aria-label="Settings quick access" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all" type="button"><span class="material-symbols-outlined text-[19px]">tune</span></button><div class="flex items-center gap-space-xs pl-space-xs"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></div></header><main class="w-full pt-20 px-gutter-desktop pb-space-xl bg-surface min-h-screen"><div class="flex flex-col w-full gap-space-lg">
<!-- Header Banner & Action Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-space-xs text-secondary text-label-sm font-label-sm uppercase tracking-wider">
<span class="">Kecamatan Cicalengka</span>
<span class="material-symbols-outlined text-[12px]">chevron_right</span>
<span class="text-primary font-bold">Manajemen SDM &amp; Aparatur</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface mt-1 tracking-tight">Kepegawaian &amp; Aparatur Sipil</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-0.5">
        Formasi definitif PNS, PPPK Penuh &amp; Paruh Waktu, distribusi unit kerja, serta peta proyeksi pensiun Kecamatan Cicalengka.
      </p>
</div>
<div class="flex items-center flex-wrap gap-space-xs">
<div class="flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest rounded-full shadow-[0_2px_8px_rgba(37,43,54,0.04)] text-on-surface text-label-md font-label-md hover:bg-surface-container" id="badge-tahun-aktif">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<span class="">Tahun 2024 / Aktif</span>
</div>
<button class="flex items-center gap-1.5 px-3.5 py-2 bg-surface-container-lowest hover:bg-surface-container text-on-surface rounded-full shadow-[0_2px_8px_rgba(37,43,54,0.04)] text-label-md font-label-md transition-all" type="button" id="btn-cetak-profil">
<span class="material-symbols-outlined text-[17px] text-secondary">print</span>
<span class="">Cetak Profil</span>
</button>
<button class="flex items-center gap-1.5 px-4 py-2 bg-inverse-surface hover:bg-black text-inverse-on-surface rounded-full shadow-[0_4px_12px_rgba(37,43,54,0.18)] text-label-md font-label-md transition-all" type="button" id="btn-tambah-usulan">
<span class="material-symbols-outlined text-[18px]">add</span>
<span class="">Tambah Usulan Formasi</span>
</button>
</div>
</div>
<!-- Top 4 Metric KPI Cards (Modern Pastel CRM Style) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
<!-- Card 1: Total Aparatur (Indigo Vibrant Hero) -->
<div class="bg-gradient-to-br from-primary-container to-primary text-on-primary rounded-2xl p-space-lg shadow-[0_14px_30px_-6px_rgba(80,70,229,0.28)] flex flex-col justify-between relative overflow-hidden group">
<div class="absolute right-0 top-0 w-36 h-36 bg-white/10 rounded-full blur-2xl -mr-10 -mt-10 pointer-events-none"></div>
<div class="flex items-start justify-between relative z-10">
<div>
<span class="text-on-primary-container font-label-md text-label-md uppercase tracking-wider block">Total Aparatur Sipil</span>
<div class="mt-2 flex items-baseline gap-2">
<span class="font-metric-display text-metric-display tracking-tight text-white">485</span>
<span class="text-on-primary-container font-body-sm text-body-sm">Pegawai</span>
</div>
</div>
<div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white shadow-sm">
<span class="material-symbols-outlined text-[18px]">groups</span>
</div>
</div>
<div class="mt-5 pt-3.5 border-t border-white/15 flex items-center justify-between relative z-10">
<span class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
          100% SI-ASN
        </span>
<span class="text-on-primary-container text-body-sm font-body-sm">Kecamatan &amp; 12 Desa</span>
</div>
</div>
<!-- Card 2: PNS Aktif -->
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between relative overflow-hidden group">
<div class="flex items-start justify-between">
<div>
<span class="text-secondary font-label-md text-label-md uppercase tracking-wider block">PNS Aktif (Tetap)</span>
<div class="mt-2 flex items-baseline gap-2">
<span class="font-metric-display text-metric-display tracking-tight text-on-surface">182</span>
<span class="text-secondary font-body-sm text-body-sm">Orang</span>
</div>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-primary shadow-sm">
<span class="material-symbols-outlined text-[18px]">badge</span>
</div>
</div>
<div class="mt-5 pt-3.5 border-t border-surface-container-high flex items-center justify-between">
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm">
          37.5% Porsi
        </span>
<span class="text-secondary font-body-sm text-body-sm">Status Definitif</span>
</div>
</div>
<!-- Card 3: PPPK Penuh Waktu -->
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between relative overflow-hidden group">
<div class="flex items-start justify-between">
<div>
<span class="text-secondary font-label-md text-label-md uppercase tracking-wider block">PPPK Penuh Waktu</span>
<div class="mt-2 flex items-baseline gap-2">
<span class="font-metric-display text-metric-display tracking-tight text-on-surface">198</span>
<span class="text-secondary font-body-sm text-body-sm">Orang</span>
</div>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant shadow-sm">
<span class="material-symbols-outlined text-[18px]">assignment_ind</span>
</div>
</div>
<div class="mt-5 pt-3.5 border-t border-surface-container-high flex items-center justify-between">
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-secondary-fixed-variant font-label-sm text-label-sm">
          40.8% Porsi
        </span>
<span class="text-secondary font-body-sm text-body-sm">Guru &amp; Nakes</span>
</div>
</div>
<!-- Card 4: PPPK Paruh Waktu -->
<div class="bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between relative overflow-hidden group">
<div class="flex items-start justify-between">
<div>
<span class="text-secondary font-label-md text-label-md uppercase tracking-wider block">PPPK Paruh Waktu</span>
<div class="mt-2 flex items-baseline gap-2">
<span class="font-metric-display text-metric-display tracking-tight text-on-surface">105</span>
<span class="text-secondary font-body-sm text-body-sm">Orang</span>
</div>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-tertiary shadow-sm">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
</div>
</div>
<div class="mt-5 pt-3.5 border-t border-surface-container-high flex items-center justify-between">
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm">
          21.7% Porsi
        </span>
<span class="text-secondary font-body-sm text-body-sm">Pelayanan Terpadu</span>
</div>
</div>
</div>
<!-- Middle Section: Donut Proporsi & Horizontal Unit Allocation -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Kolom Kiri: Proporsi Status & Sektor Jabatan (5 Cols) -->
<div class="lg:col-span-5 bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-4">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Proporsi Status &amp; Sektor</h2>
<p class="font-body-sm text-body-sm text-secondary">Komposisi aparatur sipil per kategori formasi</p>
</div>
<button class="w-8 h-8 rounded-full bg-surface-container-low hover:bg-surface-container text-on-surface-variant flex items-center justify-center transition-all" title="Detail Status" type="button">
<span class="material-symbols-outlined text-[18px]">north_east</span>
</button>
</div>
<!-- Donut Chart + Centered Total (Chart.js Canvas) -->
<div class="flex flex-col sm:flex-row items-center justify-center gap-space-lg my-3">
<div class="relative w-44 h-44 flex items-center justify-center flex-shrink-0">
<canvas class="w-full h-full" id="proporsiStatusChart" width="176" height="176" style="display: block; box-sizing: border-box; height: 176px; width: 176px;"></canvas>
<div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none text-center">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface leading-none">485</span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-tight mt-1">Pegawai</span>
</div>
</div>
<!-- Donut Legend Cards -->
<div class="flex flex-col gap-2.5 w-full">
<div class="flex items-center justify-between p-2 rounded-xl bg-surface-container-low/60">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary flex-shrink-0"></span>
<span class="font-label-md text-label-md text-on-surface">PNS Definitif</span>
</div>
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface">182</span>
<span class="text-secondary text-body-sm font-body-sm">37.5%</span>
</div>
</div>
<div class="flex items-center justify-between p-2 rounded-xl bg-surface-container-low/60">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary-container flex-shrink-0"></span>
<span class="font-label-md text-label-md text-on-surface">PPPK Penuh Waktu</span>
</div>
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface">198</span>
<span class="text-secondary text-body-sm font-body-sm">40.8%</span>
</div>
</div>
<div class="flex items-center justify-between p-2 rounded-xl bg-surface-container-low/60">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-tertiary-container flex-shrink-0"></span>
<span class="font-label-md text-label-md text-on-surface">PPPK Paruh Waktu</span>
</div>
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-on-surface">105</span>
<span class="text-secondary text-body-sm font-body-sm">21.7%</span>
</div>
</div>
</div>
</div>
</div>
<!-- Klaster Sektor dengan Progress Bar -->
<div class="mt-6 pt-4 border-t border-surface-container-high flex flex-col gap-3 hover:bg-surface-container" id="card-prioritas-suksesi">
<span class="text-label-sm font-label-sm text-secondary uppercase tracking-wider">Klaster Sektor Tugas</span>
<div>
<div class="flex justify-between items-center text-body-sm font-body-sm mb-1.5">
<span class="text-on-surface flex items-center gap-1.5 font-medium">
<span class="material-symbols-outlined text-[16px] text-primary">school</span>
              Tenaga Pendidikan (Guru/Tendik)
            </span>
<span class="font-bold text-on-surface">252 Pegawai (52%)</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 52%;"></div>
</div>
</div>
<div>
<div class="flex justify-between items-center text-body-sm font-body-sm mb-1.5">
<span class="text-on-surface flex items-center gap-1.5 font-medium">
<span class="material-symbols-outlined text-[16px] text-tertiary">local_hospital</span>
              Tenaga Kesehatan (Nakes UPTD)
            </span>
<span class="font-bold text-on-surface">116 Pegawai (24%)</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-tertiary rounded-full" style="width: 24%;"></div>
</div>
</div>
<div>
<div class="flex justify-between items-center text-body-sm font-body-sm mb-1.5">
<span class="text-on-surface flex items-center gap-1.5 font-medium">
<span class="material-symbols-outlined text-[16px] text-secondary">admin_panel_settings</span>
              Teknis &amp; Administratif Kantor
            </span>
<span class="font-bold text-on-surface">117 Pegawai (24%)</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 24%;"></div>
</div>
</div>
</div>
</div>
<!-- Kolom Kanan: Alokasi Pegawai per Unit & Kantor Desa (7 Cols) -->
<div class="lg:col-span-7 bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Alokasi Pegawai per Unit Kerja &amp; Desa</h2>
<p class="font-body-sm text-body-sm text-secondary">Sebaran aparatur ASN &amp; PPPK aktif se-Kecamatan</p>
</div>
<!-- Tab switch filter -->
<div class="inline-flex p-1 bg-surface-container-low rounded-full self-start sm:self-auto">
<button class="px-3 py-1 text-label-sm font-label-sm rounded-full bg-surface-container-lowest text-on-surface shadow-sm" type="button" id="btn-tab-headcount">Headcount</button>
<button class="px-3 py-1 text-label-sm font-label-sm rounded-full text-secondary hover:text-on-surface" type="button" id="btn-tab-rasio">Rasio Beban</button>
</div>
</div>
<!-- Horizontal Bar Chart with Chart.js -->
<div class="relative w-full h-[280px]">
<canvas class="w-full h-full" id="alokasiUnitChart" width="618" height="280" style="display: block; box-sizing: border-box; height: 280px; width: 618.7px;"></canvas>
</div>
</div>
<!-- Banner Info Standar Pelayanan Minimal -->
<div class="mt-6 p-3 bg-surface-container-low rounded-xl flex items-center justify-between gap-3">
<div class="flex items-center gap-2.5">
<div class="w-7 h-7 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed flex-shrink-0">
<span class="material-symbols-outlined text-[16px]">verified</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface">
            Standar Pelayanan Minimum Administrasi Terpadu (PATEN) terpenuhi di seluruh 12 desa wilayah Kecamatan Cicalengka.
          </span>
</div>
<button class="text-primary hover:text-on-primary-fixed-variant font-label-sm text-label-sm whitespace-nowrap" type="button">
          Lihat SPM
        </button>
</div>
</div>
</div>
<!-- Bottom Section: Proyeksi BUP Pensiun & Usulan Formasi ABK -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Kolom Kiri: Proyeksi Batas Usia Pensiun (5 Cols) -->
<div class="lg:col-span-5 bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-4">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Proyeksi Pensiun (BUP) 2024 - 2027</h2>
<p class="font-body-sm text-body-sm text-secondary">Peta aparatur purna tugas untuk perencanaan rekrutmen</p>
</div>
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface text-label-sm font-label-sm">
            Total 53 ASN
          </span>
</div>
<!-- Interactive Chart.js Bar Chart -->
<div class="relative w-full h-36 mb-2">
<canvas class="w-full h-full" id="proyeksiPensiunChart" width="421" height="144" style="display: block; box-sizing: border-box; height: 144px; width: 421.3px;"></canvas>
</div>
<!-- 4 Kolom Tahun Bertingkat -->
<div class="grid grid-cols-4 gap-2.5 my-3" id="cards-bup-years">
<!-- 2024 -->
<div class="bg-surface-container-low rounded-xl p-2.5 flex flex-col items-center text-center">
<span class="font-label-sm text-label-sm text-secondary">2024</span>
<span class="font-metric-display text-headline-sm font-bold text-on-surface my-1">8</span>
<span class="font-label-sm text-[10px] text-secondary">Pegawai</span>
</div>
<!-- 2025 -->
<div class="bg-surface-container-low rounded-xl p-2.5 flex flex-col items-center text-center">
<span class="font-label-sm text-label-sm text-secondary">2025</span>
<span class="font-metric-display text-headline-sm font-bold text-on-surface my-1">14</span>
<span class="font-label-sm text-[10px] text-secondary">Pegawai</span>
</div>
<!-- 2026 (Puncak BUP) -->
<div class="bg-error-container/40 rounded-xl p-2.5 flex flex-col items-center text-center ring-1 ring-error/20">
<span class="font-label-sm text-label-sm font-bold text-error">2026</span>
<span class="font-metric-display text-headline-sm font-bold text-error my-1">19</span>
<span class="font-label-sm text-[10px] text-error font-medium">Puncak BUP</span>
</div>
<!-- 2027 -->
<div class="bg-surface-container-low rounded-xl p-2.5 flex flex-col items-center text-center">
<span class="font-label-sm text-label-sm text-secondary">2027</span>
<span class="font-metric-display text-headline-sm font-bold text-on-surface my-1">12</span>
<span class="font-label-sm text-[10px] text-secondary">Pegawai</span>
</div>
</div>
</div>
<!-- Callout Catatan Suksesi -->
<div class="mt-4 p-3.5 bg-surface-container-low rounded-xl flex items-start gap-3 hover:bg-surface-container" id="card-prioritas-suksesi">
<span class="material-symbols-outlined text-[20px] text-primary mt-0.5">info</span>
<div>
<h3 class="font-label-md text-label-md text-on-surface font-semibold">Prioritas Suksesi 2025-2026</h3>
<p class="font-body-sm text-body-sm text-secondary mt-0.5 leading-relaxed">
            Teridentifikasi 3 Pejabat Pengawas dan 8 Kepala Sekolah SD Negeri akan purna tugas. Usulan pengisian melalui manajemen talenta ASN Kabupaten Bandung telah dijadwalkan pada Triwulan I 2025.
          </p>
</div>
</div>
</div>
<!-- Kolom Kanan: Analisis Beban Kerja (ABK) & Usulan Formasi (7 Cols) -->
<div class="lg:col-span-7 bg-surface-container-lowest rounded-2xl p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-4">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Analisis Beban Kerja (ABK) &amp; Usulan Formasi</h2>
<p class="font-body-sm text-body-sm text-secondary">Pengajuan pengisian kebutuhan jabatan prioritas ke BKPSDM</p>
</div>
<a class="inline-flex items-center gap-1 text-primary hover:text-on-primary-fixed-variant text-label-md font-label-md" href="#" id="link-daftar-usulan">
<span class="">Daftar Usulan Lengkap</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Table / List Kebutuhan Formasi Prioritas -->
<div class="overflow-hidden rounded-xl bg-surface-container-low/50">
<div class="grid grid-cols-12 px-4 py-2.5 text-label-sm font-label-sm text-secondary uppercase tracking-wider bg-surface-container-low">
<div class="col-span-5">Jabatan Formasi</div>
<div class="col-span-4">Unit Penempatan</div>
<div class="col-span-3 text-right">Status Usulan</div>
</div>
<div class="divide-y divide-surface-container-high/60">
<!-- Row 1: Pranata Komputer -->
<div class="grid grid-cols-12 px-4 py-3 items-center hover:bg-surface-container-lowest transition-colors">
<div class="col-span-5 flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">computer</span>
</div>
<div class="min-w-0">
<p class="font-label-md text-label-md font-bold text-on-surface truncate">Pranata Komputer Ahli</p>
<p class="text-body-sm font-body-sm text-secondary">Kebutuhan: 2 Orang</p>
</div>
</div>
<div class="col-span-4 text-body-sm font-body-sm text-on-surface truncate">
                Paten Kantor Kecamatan
              </div>
<div class="col-span-3 text-right">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed-variant text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Diusulkan BKPSDM
                </span>
</div>
</div>
<!-- Row 2: Analis Kebijakan -->
<div class="grid grid-cols-12 px-4 py-3 items-center hover:bg-surface-container-lowest transition-colors">
<div class="col-span-5 flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-tertiary-fixed flex items-center justify-center text-tertiary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">policy</span>
</div>
<div class="min-w-0">
<p class="font-label-md text-label-md font-bold text-on-surface truncate">Analis Kebijakan</p>
<p class="text-body-sm font-body-sm text-secondary">Kebutuhan: 1 Orang</p>
</div>
</div>
<div class="col-span-4 text-body-sm font-body-sm text-on-surface truncate">
                Sekretariat Kecamatan
              </div>
<div class="col-span-3 text-right">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Disetujui
                </span>
</div>
</div>
<!-- Row 3: Penyuluh Pertanian -->
<div class="grid grid-cols-12 px-4 py-3 items-center hover:bg-surface-container-lowest transition-colors">
<div class="col-span-5 flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">agriculture</span>
</div>
<div class="min-w-0">
<p class="font-label-md text-label-md font-bold text-on-surface truncate">Penyuluh Pertanian Lapangan</p>
<p class="text-body-sm font-body-sm text-secondary">Kebutuhan: 3 Orang</p>
</div>
</div>
<div class="col-span-4 text-body-sm font-body-sm text-on-surface truncate">
                UPTD Pertanian &amp; Ketahanan
              </div>
<div class="col-span-3 text-right">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed-variant text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Diusulkan BKPSDM
                </span>
</div>
</div>
<!-- Row 4: Pengawas Sekolah -->
<div class="grid grid-cols-12 px-4 py-3 items-center hover:bg-surface-container-lowest transition-colors">
<div class="col-span-5 flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-primary flex-shrink-0">
<span class="material-symbols-outlined text-[18px]">supervisor_account</span>
</div>
<div class="min-w-0">
<p class="font-label-md text-label-md font-bold text-on-surface truncate">Pengawas Sekolah Dasar</p>
<p class="text-body-sm font-body-sm text-secondary">Kebutuhan: 2 Orang</p>
</div>
</div>
<div class="col-span-4 text-body-sm font-body-sm text-on-surface truncate">
                UPTD Pendidikan Cicalengka
              </div>
<div class="col-span-3 text-right">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed-variant text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Diusulkan BKPSDM
                </span>
</div>
</div>
</div>
</div>
</div>
<!-- Action Footer -->
<div class="mt-4 pt-3 flex flex-col sm:flex-row items-center justify-between gap-3">
<span class="text-body-sm font-body-sm text-secondary">
          Dokumen e-Formasi &amp; ABK Terakhir diverifikasi: 18 Oktober 2024
        </span>
<div class="flex items-center gap-2">
<button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full bg-surface-container-high hover:bg-surface-container text-on-surface text-label-sm font-label-sm transition-all" type="button">
<span class="material-symbols-outlined text-[15px]">download</span>
<span class="">Unduh Dokumen ABK</span>
</button>
<button class="inline-flex items-center gap-1 px-3 py-1.5 rounded-full bg-inverse-surface hover:bg-black text-inverse-on-surface text-label-sm font-label-sm transition-all" type="button" id="btn-lacak-disposisi">
<span class="material-symbols-outlined text-[15px]">track_changes</span>
<span class="">Lacak Disposisi</span>
</button>
</div>
</div>
</div>
</div>
</div>
<!-- Interactive Chart.js Initializer & Sidebar Highlighter -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // 1. Sidebar Highlight for 'kepegawaian'
    const kepegawaianLink = document.querySelector('aside nav a[data-path="kepegawaian"]');
    if (kepegawaianLink) {
      document.querySelectorAll('aside nav a').forEach(a => {
        a.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
        a.classList.add('text-on-surface-variant');
      });
      kepegawaianLink.classList.remove('text-on-surface-variant');
      kepegawaianLink.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
    }

    // Chart.js Global Font Config
    if (typeof Chart !== 'undefined') {
      Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
      Chart.defaults.color = '#595e6b';

      // 2. Chart 1: Donut Proporsi Status (Cutout 75%)
      const ctxDonut = document.getElementById('proporsiStatusChart');
      if (ctxDonut) {
        new Chart(ctxDonut, {
          type: 'doughnut',
          data: {
            labels: ['PNS Definitif', 'PPPK Penuh Waktu', 'PPPK Paruh Waktu'],
            datasets: [{
              data: [182, 198, 105],
              backgroundColor: ['#3625cd', '#5046e5', '#006e4b'],
              borderWidth: 0,
              hoverOffset: 4
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '75%',
            plugins: {
              legend: { display: false },
              tooltip: {
                backgroundColor: '#161c26',
                padding: 10,
                titleFont: { size: 12, weight: '700' },
                bodyFont: { size: 12 },
                cornerRadius: 8,
                callbacks: {
                  label: function (context) {
                    const total = 485;
                    const value = context.parsed;
                    const percentage = ((value / total) * 100).toFixed(1);
                    return ` ${context.label}: ${value} Pegawai (${percentage}%)`;
                  }
                }
              }
            }
          }
        });
      }

      // 3. Chart 2: Horizontal Bar Alokasi Pegawai per Unit & Desa
      const ctxHorizontal = document.getElementById('alokasiUnitChart');
      if (ctxHorizontal) {
        new Chart(ctxHorizontal, {
          type: 'bar',
          data: {
            labels: [
              'UPTD Pendidikan',
              'UPTD Puskesmas DTP',
              'Kantor Kecamatan',
              'UPTD Pertanian',
              'Ds. Cicalengka Wetan',
              'Ds. Cicalengka Kulon',
              'Ds. Babakan Peuteuy',
              '9 Desa Lain (Avg)'
            ],
            datasets: [{
              label: 'Jumlah Aparatur (Orang)',
              data: [186, 64, 38, 22, 16, 15, 14, 13],
              backgroundColor: [
                '#3625cd',
                '#5046e5',
                '#5046e5',
                '#006e4b',
                '#595e6b',
                '#595e6b',
                '#595e6b',
                '#c1c6d5'
              ],
              borderRadius: 8,
              borderSkipped: false,
              barThickness: 14
            }]
          },
          options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                backgroundColor: '#161c26',
                padding: 10,
                titleFont: { size: 12, weight: '700' },
                bodyFont: { size: 12 },
                cornerRadius: 8,
                callbacks: {
                  label: function (context) {
                    return ` Jumlah: ${context.parsed.x} orang`;
                  }
                }
              }
            },
            scales: {
              x: {
                grid: {
                  color: '#dde2f1',
                  drawBorder: false
                },
                ticks: {
                  font: { size: 11 },
                  color: '#595e6b'
                },
                suggestedMax: 200
              },
              y: {
                grid: { display: false },
                ticks: {
                  font: { size: 11, weight: '600' },
                  color: '#161c26'
                }
              }
            }
          }
        });
      }

      // 4. Chart 3: Bar Proyeksi Pensiun (BUP) 2024 - 2027
      const ctxPensiun = document.getElementById('proyeksiPensiunChart');
      if (ctxPensiun) {
        new Chart(ctxPensiun, {
          type: 'bar',
          data: {
            labels: ['2024', '2025', '2026', '2027'],
            datasets: [{
              label: 'Purna Tugas ASN',
              data: [8, 14, 19, 12],
              backgroundColor: [
                '#dae0ee',
                '#5046e5',
                '#ba1a1a', // 2026 Peak Year
                '#5046e5'
              ],
              borderRadius: 8,
              borderSkipped: false,
              barThickness: 28
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                backgroundColor: '#161c26',
                padding: 10,
                titleFont: { size: 12, weight: '700' },
                bodyFont: { size: 12 },
                cornerRadius: 8,
                callbacks: {
                  label: function (context) {
                    const note = context.label === '2026' ? ' (Puncak BUP)' : '';
                    return ` BUP: ${context.parsed.y} ASN${note}`;
                  }
                }
              }
            },
            scales: {
              x: {
                grid: { display: false },
                ticks: {
                  font: { size: 11, weight: '600' },
                  color: '#161c26'
                }
              },
              y: {
                grid: {
                  color: '#dde2f1',
                  drawBorder: false
                },
                ticks: {
                  font: { size: 10 },
                  color: '#595e6b',
                  stepSize: 5
                },
                suggestedMax: 22
              }
            }
          }
        });
      }
    }
  });
</script><!-- Toast Container --><div id="toast-container" class="fixed bottom-6 right-6 z-50 flex flex-col gap-2 pointer-events-none"></div><!-- Modal: Tambah Usulan Formasi --><div id="modal-tambah-usulan" class="fixed inset-0 z-50 hidden bg-inverse-surface/40 backdrop-blur-sm flex items-center justify-center p-4"><div class="bg-surface-container-lowest rounded-2xl w-full max-w-lg p-6 shadow-xl border border-surface-container-high"><div class="flex items-center justify-between pb-3 border-b border-surface-container-high"><h3 class="font-headline-sm text-headline-sm text-on-surface">Formulir Pengajuan Usulan Formasi 2025</h3><button id="btn-cetak-profil" class="w-8 h-8 rounded-full flex items-center justify-center text-secondary hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button></div><form id="form-tambah-usulan" class="mt-4 space-y-3.5"><div class="flex flex-col gap-1"><label class="text-label-sm text-secondary font-medium">Jabatan yang Dibutuhkan</label><input required="" id="input-jabatan" type="text" placeholder="Contoh: Auditor Pertama, Arsiparis Muda" class="w-full px-3 py-2 rounded-xl bg-surface-container-low border-0 text-body-sm text-on-surface focus:ring-2 focus:ring-primary/30"></div><div class="flex flex-col gap-1"><label class="text-label-sm text-secondary font-medium">Unit Kerja / UPTD Penempatan</label><select id="input-satker" class="w-full px-3 py-2 rounded-xl bg-surface-container-low border-0 text-body-sm text-on-surface focus:ring-2 focus:ring-primary/30"><option value="Kantor Kecamatan Cicalengka">Kantor Kecamatan Cicalengka</option><option value="Paten Kantor Kecamatan">Paten Kantor Kecamatan</option><option value="Sekretariat Kecamatan">Sekretariat Kecamatan</option><option value="UPTD Puskesmas DTP">UPTD Puskesmas DTP</option><option value="UPTD Pendidikan Cicalengka">UPTD Pendidikan Cicalengka</option><option value="UPTD Pertanian &amp; Ketahanan">UPTD Pertanian &amp; Ketahanan</option><option value="Kantor Desa Cicalengka Wetan">Kantor Desa Cicalengka Wetan</option></select></div><div class="grid grid-cols-2 gap-3"><div class="flex flex-col gap-1"><label class="text-label-sm text-secondary font-medium">Kategori Formasi</label><select id="input-kategori" class="w-full px-3 py-2 rounded-xl bg-surface-container-low border-0 text-body-sm text-on-surface focus:ring-2 focus:ring-primary/30"><option value="CPNS">CPNS</option><option value="PPPK Penuh Waktu">PPPK Penuh Waktu</option><option value="PPPK Paruh Waktu">PPPK Paruh Waktu</option></select></div><div class="flex flex-col gap-1"><label class="text-label-sm text-secondary font-medium">Jumlah (Kebutuhan)</label><input id="input-kuota" type="number" min="1" max="20" value="1" class="w-full px-3 py-2 rounded-xl bg-surface-container-low border-0 text-body-sm text-on-surface focus:ring-2 focus:ring-primary/30"></div></div><div class="flex flex-col gap-1"><label class="text-label-sm text-secondary font-medium">Kualifikasi Pendidikan &amp; Alasan Urgensi</label><textarea id="input-kualifikasi" rows="2" placeholder="Contoh: S1 Teknik Informatika / Sistem Informasi untuk pemutakhiran SIKS-NG dan Digitalisasi PATEN" class="w-full px-3 py-2 rounded-xl bg-surface-container-low border-0 text-body-sm text-on-surface focus:ring-2 focus:ring-primary/30"></textarea></div><div class="pt-3 flex items-center justify-end gap-2 border-t border-surface-container-high"><button type="button" id="btn-cancel-modal" class="px-4 py-2 rounded-full text-label-md text-secondary hover:bg-surface-container-high transition-colors">Batal</button><button type="submit" class="px-4 py-2 rounded-full bg-primary text-white hover:bg-primary-container text-label-md transition-colors shadow-sm flex items-center gap-1.5" id="btn-cetak-profil"><span class="material-symbols-outlined text-[18px]">send</span><span class="">Kirim Usulan Formasi</span></button></div></form></div></div><!-- Modal: Lacak Disposisi Timeline --><div id="modal-lacak-disposisi" class="fixed inset-0 z-50 hidden bg-inverse-surface/40 backdrop-blur-sm flex items-center justify-center p-4"><div class="bg-surface-container-lowest rounded-2xl w-full max-w-md p-6 shadow-xl border border-surface-container-high"><div class="flex items-center justify-between pb-3 border-b border-surface-container-high"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-[22px]">track_changes</span><h3 class="font-headline-sm text-headline-sm text-on-surface">Status Disposisi e-Formasi</h3></div><button id="btn-cetak-profil" class="w-8 h-8 rounded-full flex items-center justify-center text-secondary hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button></div><div class="mt-4 space-y-4"><div class="flex items-start gap-3 hover:bg-surface-container" id="badge-tahun-aktif"><div class="w-7 h-7 rounded-full bg-tertiary text-white flex items-center justify-center text-[13px] flex-shrink-0 mt-0.5"><span class="material-symbols-outlined text-[16px]">check</span></div><div><p class="font-label-md text-on-surface font-bold">Penyusunan ABK Internal Kecamatan</p><p class="text-body-sm text-secondary">12 Okt 2024 - Divalidasi Camat Cicalengka</p></div></div><div class="flex items-start gap-3"><div class="w-7 h-7 rounded-full bg-tertiary text-white flex items-center justify-center text-[13px] flex-shrink-0 mt-0.5"><span class="material-symbols-outlined text-[16px]">check</span></div><div><p class="font-label-md text-on-surface font-bold">Verifikasi Berkas SI-ASN BKPSDM</p><p class="text-body-sm text-secondary">18 Okt 2024 - Dokumen dinyatakan lengkap &amp; eligible</p></div></div><div class="flex items-start gap-3"><div class="w-7 h-7 rounded-full bg-primary text-white flex items-center justify-center text-[13px] flex-shrink-0 mt-0.5"><span class="material-symbols-outlined text-[16px]">sync</span></div><div><p class="font-label-md text-primary font-bold">Sinkronisasi e-Formasi KemenPAN-RB</p><p class="text-body-sm text-secondary">Sedang Berjalan - Tahap Rekomendasi Alokasi Formasi Daerah</p></div></div><div class="flex items-start gap-3 opacity-60"><div class="w-7 h-7 rounded-full bg-surface-container-high text-secondary flex items-center justify-center text-[13px] flex-shrink-0 mt-0.5"><span class="material-symbols-outlined text-[16px]">pending</span></div><div><p class="font-label-md text-secondary font-bold">Penetapan SK Kebutuhan ASN 2025</p><p class="text-body-sm text-secondary">Estimasi penetapan: Desember 2024</p></div></div></div><div class="mt-5 pt-3 border-t border-surface-container-high flex justify-end"><button id="btn-close-lacak-footer" class="px-4 py-1.5 rounded-full bg-surface-container-high text-on-surface hover:bg-surface-container text-label-md">Tutup</button></div></div></div><!-- Modal: Detail Pensiun BUP Pertahun --><div id="modal-pensiun-detail" class="fixed inset-0 z-50 hidden bg-inverse-surface/40 backdrop-blur-sm flex items-center justify-center p-4"><div class="bg-surface-container-lowest rounded-2xl w-full max-w-lg p-6 shadow-xl border border-surface-container-high"><div class="flex items-center justify-between pb-3 border-b border-surface-container-high"><div><h3 id="pensiun-modal-title" class="font-headline-sm text-headline-sm text-on-surface">Rincian Pensiun ASN</h3><p id="pensiun-modal-subtitle" class="text-body-sm text-secondary"></p></div><button id="btn-cetak-profil" class="w-8 h-8 rounded-full flex items-center justify-center text-secondary hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button></div><div id="pensiun-modal-body" class="mt-4 max-h-72 overflow-y-auto space-y-2"></div><div class="mt-4 pt-3 border-t border-surface-container-high flex justify-between items-center"><span class="text-body-sm text-secondary">Data sinkron dengan BKN &amp; BKPSDM</span><button id="btn-cetak-profil" class="px-4 py-1.5 rounded-full bg-primary text-white text-label-md hover:bg-primary-container">Selesai</button></div></div></div><script id="app-interactions-handler">// Helper: Toast Notifier
function showToast(title, desc = '', icon = 'info', type = 'info') {
  const container = document.getElementById('toast-container');
  if (!container) return;
  const toast = document.createElement('div');
  const isSuccess = type === 'success';
  toast.className = `pointer-events-auto flex items-start gap-3 p-3.5 rounded-2xl bg-surface-container-lowest shadow-[0_10px_25px_-5px_rgba(0,0,0,0.12)] border border-surface-container-high text-on-surface transition-all duration-300 transform translate-y-2 opacity-0 max-w-sm`;
  toast.innerHTML = `
    <div class="w-7 h-7 rounded-full ${isSuccess ? 'bg-tertiary-fixed text-on-tertiary-fixed' : 'bg-primary-fixed text-primary'} flex items-center justify-center flex-shrink-0 mt-0.5">
      <span class="material-symbols-outlined text-[16px]">${icon}</span>
    </div>
    <div class="flex-1 min-w-0">
      <p class="font-label-md text-label-md font-bold text-on-surface">${title}</p>
      ${desc ? `<p class="text-body-sm text-secondary mt-0.5">${desc}</p>` : ''}
    </div>
    <button class="text-secondary hover:text-on-surface ml-1 p-0.5" onclick="this.parentElement.remove()">
      <span class="material-symbols-outlined text-[16px]">close</span>
    </button>
  `;
  container.appendChild(toast);
  requestAnimationFrame(() => {
    toast.classList.remove('translate-y-2', 'opacity-0');
  });
  setTimeout(() => {
    toast.classList.add('opacity-0', 'translate-y-2');
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}

// 1. Tambah Usulan Formasi Modal Logic
const btnTambahUsulan = document.getElementById('btn-tambah-usulan');
const modalTambah = document.getElementById('modal-tambah-usulan');
const closeModalTambah = document.getElementById('close-modal-tambah');
const btnCancelModal = document.getElementById('btn-cancel-modal');
const formTambah = document.getElementById('form-tambah-usulan');

if (btnTambahUsulan && modalTambah) {
  btnTambahUsulan.addEventListener('click', () => {
    modalTambah.classList.remove('hidden');
  });
}
[closeModalTambah, btnCancelModal].forEach(btn => {
  if (btn) btn.addEventListener('click', () => modalTambah.classList.add('hidden'));
});

if (formTambah) {
  formTambah.addEventListener('submit', (e) => {
    e.preventDefault();
    const jab = document.getElementById('input-jabatan').value;
    const satker = document.getElementById('input-satker').value;
    const kuota = document.getElementById('input-kuota').value;
    modalTambah.classList.add('hidden');
    showToast('Usulan Formasi Terkirim', `${kuota} formasi ${jab} untuk ${satker} berhasil diajukan ke BKPSDM Kab. Bandung.`, 'check_circle', 'success');
    formTambah.reset();
  });
}

// 2. Cetak Profil button
const btnCetak = document.getElementById('btn-cetak-profil');
if (btnCetak) {
  btnCetak.addEventListener('click', () => {
    showToast('Menyiapkan Laporan Cetak', 'Memformat berkas profil kepegawaian Kecamatan Cicalengka...', 'print', 'info');
    setTimeout(() => {
      window.print();
    }, 800);
  });
}

// 3. Tahun Aktif Selector Toggle
const badgeTahun = document.getElementById('badge-tahun-aktif');
const yearsList = ['Tahun 2024 / Aktif', 'Tahun 2025 / Estimasi', 'Tahun 2023 / Arsip'];
let curYearIdx = 0;
if (badgeTahun) {
  badgeTahun.style.cursor = 'pointer';
  badgeTahun.title = 'Klik untuk ganti tahun anggaran';
  badgeTahun.addEventListener('click', () => {
    curYearIdx = (curYearIdx + 1) % yearsList.length;
    const span = badgeTahun.querySelector('span:nth-child(2)');
    if (span) span.innerText = yearsList[curYearIdx];
    showToast('Filter Periode Berubah', `Menampilkan data untuk: ${yearsList[curYearIdx]}`, 'date_range', 'info');
  });
}

// 4. Village Filter Dropdown Simulation
const btnDesa = document.getElementById('btn-desa-filter');
const desaList = ['Semua 12 Desa', 'Ds. Cicalengka Wetan', 'Ds. Cicalengka Kulon', 'Ds. Babakan Peuteuy', 'Ds. Dampit', 'Ds. Narawita', 'Ds. Nagrog', 'Ds. Margaasih', 'Ds. Panenjoan', 'Ds. Tanjungwangi', 'Ds. Tenjolaya', 'Ds. Waluya'];
let curDesaIdx = 0;
if (btnDesa) {
  btnDesa.addEventListener('click', () => {
    curDesaIdx = (curDesaIdx + 1) % desaList.length;
    const targetDesa = desaList[curDesaIdx];
    const spanLabel = btnDesa.querySelector('span:nth-child(2)');
    if (spanLabel) spanLabel.innerText = targetDesa;
    
    // Dynamically adjust KPI numbers based on filter
    const totalEl = document.querySelector('main .font-metric-display');
    const pnsEl = document.querySelectorAll('main .font-metric-display')[1];
    const pppkPenuhEl = document.querySelectorAll('main .font-metric-display')[2];
    const pppkParuhEl = document.querySelectorAll('main .font-metric-display')[3];
    
    if (curDesaIdx === 0) {
      if (totalEl) totalEl.innerText = '485';
      if (pnsEl) pnsEl.innerText = '182';
      if (pppkPenuhEl) pppkPenuhEl.innerText = '198';
      if (pppkParuhEl) pppkParuhEl.innerText = '105';
    } else {
      const mockTotal = Math.floor(28 + (curDesaIdx * 3));
      const mockPns = Math.floor(mockTotal * 0.4);
      const mockPppk1 = Math.floor(mockTotal * 0.42);
      const mockPppk2 = mockTotal - mockPns - mockPppk1;
      if (totalEl) totalEl.innerText = mockTotal;
      if (pnsEl) pnsEl.innerText = mockPns;
      if (pppkPenuhEl) pppkPenuhEl.innerText = mockPppk1;
      if (pppkParuhEl) pppkParuhEl.innerText = mockPppk2;
    }
    showToast('Penyaringan Wilayah', `Data difilter untuk: ${targetDesa}`, 'location_on', 'info');
  });
}

// 5. Headcount vs Rasio Beban Toggle
const btnTabHeadcount = document.getElementById('btn-tab-headcount');
const btnTabRasio = document.getElementById('btn-tab-rasio');
let activeMetric = 'headcount';

function updateUnitChart(isRasio) {
  const chartCanvas = document.getElementById('alokasiUnitChart');
  if (chartCanvas && Chart) {
    const chartInstance = Chart.getChart(chartCanvas);
    if (chartInstance) {
      if (isRasio) {
        chartInstance.data.datasets[0].label = 'Indeks Beban Kerja (%)';
        chartInstance.data.datasets[0].data = [118, 105, 94, 88, 82, 85, 79, 74];
        chartInstance.options.scales.x.suggestedMax = 140;
      } else {
        chartInstance.data.datasets[0].label = 'Jumlah Aparatur (Orang)';
        chartInstance.data.datasets[0].data = [186, 64, 38, 22, 16, 15, 14, 13];
        chartInstance.options.scales.x.suggestedMax = 200;
      }
      chartInstance.update();
    }
  }
}

if (btnTabHeadcount && btnTabRasio) {
  btnTabHeadcount.addEventListener('click', () => {
    btnTabHeadcount.className = 'px-3 py-1 text-label-sm font-label-sm rounded-full bg-surface-container-lowest text-on-surface shadow-sm';
    btnTabRasio.className = 'px-3 py-1 text-label-sm font-label-sm rounded-full text-secondary hover:text-on-surface';
    updateUnitChart(false);
    showToast('Tampilan Berubah', 'Menampilkan sebaran jumlah aparatur (Headcount)', 'bar_chart', 'info');
  });

  btnTabRasio.addEventListener('click', () => {
    btnTabRasio.className = 'px-3 py-1 text-label-sm font-label-sm rounded-full bg-surface-container-lowest text-on-surface shadow-sm';
    btnTabHeadcount.className = 'px-3 py-1 text-label-sm font-label-sm rounded-full text-secondary hover:text-on-surface';
    updateUnitChart(true);
    showToast('Tampilan Berubah', 'Menampilkan Rasio Beban Kerja (ABK vs Ketersediaan)', 'analytics', 'info');
  });
}

// 6. Proyeksi Pensiun Year Cards Clickable
const modalPensiun = document.getElementById('modal-pensiun-detail');
const pensiunTitle = document.getElementById('pensiun-modal-title');
const pensiunSubtitle = document.getElementById('pensiun-modal-subtitle');
const pensiunBody = document.getElementById('pensiun-modal-body');
const closePensiun = document.getElementById('close-modal-pensiun');
const closePensiunFooter = document.getElementById('btn-close-pensiun-footer');

const pensiunData = {
  '2024': [
    { nama: 'Drs. H. Ahmad Solihin', nip: '196604121992031002', jabatan: 'Kasubag Umum & Kepegawaian', unit: 'Sekretariat Camat' },
    { nama: 'Hj. Siti Rohmah, S.Pd', nip: '196411081985012001', jabatan: 'Guru Madya SD', unit: 'UPTD Pendidikan' },
    { nama: 'Nanang Suherman', nip: '196602151990021004', jabatan: 'Pelaksana PATEN', unit: 'Paten Kantor Camat' }
  ],
  '2025': [
    { nama: 'Dra. Endang Widianingsih', nip: '196705141993032001', jabatan: 'Kepala Sekolah SDN Cicalengka 02', unit: 'UPTD Pendidikan' },
    { nama: 'dr. H. Rahmat Hidayat', nip: '196509201994031003', jabatan: 'Dokter Ahli Madya', unit: 'UPTD Puskesmas DTP' },
    { nama: 'Maman Surahman, S.Sos', nip: '196708101991011002', jabatan: 'Kasi Pemerintahan Desa', unit: 'Kecamatan Cicalengka' },
    { nama: 'Dedi Kusnadi', nip: '196701021992031005', jabatan: 'Penyuluh Pertanian Penyelia', unit: 'UPTD Pertanian' }
  ],
  '2026': [
    { nama: 'H. Asep Syaepudin, M.Si', nip: '196603121991031004', jabatan: 'Sekretaris Kecamatan (Puncak BUP)', unit: 'Sekretariat Kecamatan' },
    { nama: '8 Kepala Sekolah Dasar Negeri', nip: '1966xxxx...', jabatan: 'Kepala Sekolah SD Pembina & Inti', unit: 'UPTD Pendidikan' },
    { nama: '3 Pejabat Pengawas Tingkat Kecamatan', nip: '1966xxxx...', jabatan: 'Kepala Seksi Trantib & Pemberdayaan', unit: 'Kantor Kecamatan' },
    { nama: '7 Tenaga Fungsional Guru/Tendik', nip: '1966xxxx...', jabatan: 'Guru Kelas & Agama', unit: 'Wilayah Kerja Cicalengka' }
  ],
  '2027': [
    { nama: 'Ibu Nenden Kurniawati, S.Kep', nip: '196901151993022002', jabatan: 'Bidan Penyelia Puskesmas', unit: 'Puskesmas DTP' },
    { nama: 'Yayan Sofyan, SH', nip: '196904121994011001', jabatan: 'Pranata Humas & Pelayanan', unit: 'Paten Kecamatan' }
  ]
};

const yearBoxes = document.querySelectorAll('#cards-bup-years > div');
yearBoxes.forEach((box, i) => {
  const years = ['2024', '2025', '2026', '2027'];
  const targetYear = years[i];
  box.style.cursor = 'pointer';
  box.addEventListener('click', () => {
    if (modalPensiun && pensiunBody) {
      pensiunTitle.innerText = `Daftar ASN Pensiun (BUP) Tahun ${targetYear}`;
      pensiunSubtitle.innerText = targetYear === '2026' ? 'Tahun Puncak Pensiun 19 Pegawai di Kecamatan Cicalengka' : `Estimasi purna tugas reguler ${box.querySelector('.font-metric-display').innerText} ASN`;
      
      const list = pensiunData[targetYear] || [];
      pensiunBody.innerHTML = list.map(item => `
        <div class="p-3 rounded-xl bg-surface-container-low flex items-start justify-between gap-3">
          <div class="min-w-0">
            <p class="font-label-md text-on-surface font-bold truncate">${item.nama}</p>
            <p class="text-body-sm text-secondary">NIP: ${item.nip}</p>
            <p class="text-body-sm text-primary font-medium mt-0.5">${item.jabatan}</p>
          </div>
          <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-secondary text-[11px] whitespace-nowrap">${item.unit}</span>
        </div>
      `).join('');
      
      modalPensiun.classList.remove('hidden');
    }
  });
});

[closePensiun, closePensiunFooter].forEach(btn => {
  if (btn) btn.addEventListener('click', () => modalPensiun.classList.add('hidden'));
});

// 7. Prioritas Suksesi Roadmap click
const cardSuksesi = document.getElementById('card-prioritas-suksesi');
if (cardSuksesi) {
  cardSuksesi.style.cursor = 'pointer';
  cardSuksesi.addEventListener('click', () => {
    showToast('Roadmap Manajemen Talenta', 'Rencana suksesi 3 Pejabat Pengawas & 8 Kepala SD masuk seleksi talent pool Q1 2025.', 'emoji_events', 'info');
  });
}

// 8. Lacak Disposisi Modal
const btnLacak = document.getElementById('btn-lacak-disposisi');
const modalLacak = document.getElementById('modal-lacak-disposisi');
const closeLacak = document.getElementById('close-modal-lacak');
const closeLacakFooter = document.getElementById('btn-close-lacak-footer');

if (btnLacak && modalLacak) {
  btnLacak.addEventListener('click', () => modalLacak.classList.remove('hidden'));
}
[closeLacak, closeLacakFooter].forEach(btn => {
  if (btn) btn.addEventListener('click', () => modalLacak.classList.add('hidden'));
});

// 9. Unduh Dokumen ABK Action
const btnUnduh = document.getElementById('btn-unduh-abk');
if (btnUnduh) {
  btnUnduh.addEventListener('click', () => {
    showToast('Mengunduh Berkas ABK', 'Dokumen e-ABK_Kecamatan_Cicalengka_2024.pdf berhasil diunduh.', 'file_download', 'success');
  });
}

// 10. Daftar Usulan Lengkap link
const linkDaftar = document.getElementById('link-daftar-usulan');
if (linkDaftar) {
  linkDaftar.addEventListener('click', (e) => {
    e.preventDefault();
    showToast('Daftar Usulan Prioritas', 'Memuat 12 formasi usulan ABK terverifikasi BKPSDM.', 'list_alt', 'info');
  });
}

// 11. Table Badges clickable status detail
const badges = document.querySelectorAll('main .divide-y span.inline-flex');
badges.forEach(badge => {
  badge.style.cursor = 'pointer';
  badge.addEventListener('click', (e) => {
    e.stopPropagation();
    showToast('Status Usulan', `Posisi usulan berstatus '${badge.innerText.trim()}'. Tahapan verifikasi dapat dilihat di Lacak Disposisi.`, 'info', 'info');
  });
});

// 12. SPM Detail button
const btnSPM = document.querySelector('button:contains("Lihat SPM"), div.mt-6 > button');
if (btnSPM) {
  btnSPM.addEventListener('click', () => {
    showToast('Standar Pelayanan Minimal (SPM)', 'Tingkat kepatuhan PATEN Cicalengka: 98.4% (Kategori Sangat Memuaskan).', 'verified', 'success');
  });
}

// 13. Sidebar links smooth interactive state
const sidebarLinks = document.querySelectorAll('aside nav a');
sidebarLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    sidebarLinks.forEach(l => {
      l.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
      l.classList.add('text-on-surface-variant');
    });
    link.classList.remove('text-on-surface-variant');
    link.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
    showToast('Navigasi Menu', `Beralih ke tampilan: ${link.getAttribute('title') || 'Menu'}`, 'explore', 'info');
  });
});

// 14. Quick Action header buttons (Notification, Settings, Profile)
const notifBtn = document.querySelector('header button[aria-label="Notifications"]');
if (notifBtn) {
  notifBtn.addEventListener('click', () => {
    showToast('Pemberitahuan Sistem', '1 Usulan formasi PPPK disetujui BKN hari ini pukul 09:15 WIB.', 'notifications_active', 'info');
  });
}
const settingsBtn = document.querySelector('header button[aria-label="Settings quick access"]');
if (settingsBtn) {
  settingsBtn.addEventListener('click', () => {
    showToast('Pengaturan Modul', 'Membuka panel konfigurasi integrasi SI-ASN.', 'tune', 'info');
  });
}
</script></main></div>

</body></html>

<!-- Infrastruktur & Program MBG - Dashboard Cicalengka (Chart.js Ready) -->
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "surface-container-high": "#e3e8f7", "surface-bright": "#f9f9ff", "surface-tint": "#4e44e3", "surface": "#f9f9ff", "error-container": "#ffdad6", "secondary": "#595e6b", "on-primary-fixed-variant": "#3422cc", "surface-container-lowest": "#ffffff", "tertiary-container": "#006e4b", "on-secondary": "#ffffff", "on-secondary-fixed": "#161c26", "on-tertiary": "#ffffff", "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#c3c0ff", "surface-variant": "#dde2f1", "on-secondary-fixed-variant": "#414753", "surface-container-highest": "#dde2f1", "tertiary-fixed": "#6ffbbe", "tertiary": "#005338", "on-tertiary-fixed-variant": "#005236", "on-background": "#161c26", "on-tertiary-container": "#67f4b7", "background": "#f9f9ff", "primary": "#3625cd", "on-surface": "#161c26", "primary-fixed": "#e2dfff", "secondary-fixed": "#dde2f1", "surface-dim": "#d4dae9", "outline-variant": "#c7c4d8", "on-primary-fixed": "#0f0069", "on-error": "#ffffff", "on-surface-variant": "#464555", "inverse-on-surface": "#ecf1ff", "error": "#ba1a1a", "on-error-container": "#93000a", "primary-container": "#5046e5", "inverse-surface": "#2b313c", "inverse-primary": "#c3c0ff", "secondary-fixed-dim": "#c1c6d5", "surface-container": "#e8eefd", "tertiary-fixed-dim": "#4edea3", "on-primary-container": "#dbd8ff", "on-tertiary-fixed": "#002113", "on-secondary-container": "#5d636f", "outline": "#777587", "secondary-container": "#dae0ee", "on-primary": "#ffffff" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "space-xs": "0.375rem", "margin": "1.25rem", "space-lg": "1.5rem", "space-sm": "0.625rem", "gutter-desktop": "1.5rem", "space-md": "1rem", "margin-desktop": "2rem", "gutter": "1.25rem", "space-xl": "2rem" }, fontFamily: { "body-md": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "metric-display": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"] }, fontSize: { "body-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }], "headline-xl-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "headline-lg": ["26px", { "lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "700" }], "body-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }], "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }], "metric-display": ["30px", { "lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "700" }], "headline-sm": ["16px", { "lineHeight": "22px", "fontWeight": "700" }] } } } };</script></head><body class="bg-surface font-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-[72px] bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col items-center py-space-lg"><div class="mb-space-xl flex flex-col items-center justify-center"><a class="flex items-center justify-center" data-path="ringkasan" href="#"><div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center shadow-[0_4px_12px_rgba(54,37,205,0.25)]"><span class="material-symbols-outlined text-on-primary text-[22px]">dashboard</span></div></a></div><nav class="flex-1 flex flex-col items-center gap-space-sm w-full px-space-xs" data-active-classes="bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="ringkasan" href="#" title="Ringkasan Eksekutif"><span class="material-symbols-outlined text-[20px]">grid_view</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="demografi-kependudukan" href="#" title="Demografi &amp; Kependudukan"><span class="material-symbols-outlined text-[20px]">groups</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="kepegawaian" href="#" title="Kepegawaian &amp; Aparatur"><span class="material-symbols-outlined text-[20px]">badge</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center hover:bg-surface-container-high hover:text-on-surface transition-all bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]" data-path="infrastruktur-mbg" href="#" title="Infrastruktur &amp; MBG"><span class="material-symbols-outlined text-[20px]">apartment</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pendidikan-kesehatan" href="#" title="Pendidikan &amp; Kesehatan"><span class="material-symbols-outlined text-[20px]">local_hospital</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="laporan-analisis" href="#" title="Laporan &amp; Analisis"><span class="material-symbols-outlined text-[20px]">insert_chart</span></a></nav><div class="flex flex-col items-center gap-space-sm w-full px-space-xs pt-space-md"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pengaturan" href="#" title="Pengaturan Sistem"><span class="material-symbols-outlined text-[20px]">settings</span></a><button class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all" title="Keluar" type="button"><span class="material-symbols-outlined text-[20px]">logout</span></button></div></aside><div class="pl-[72px]"><header class="fixed top-0 left-[72px] right-0 h-20 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center px-gutter-desktop"><div class="w-full flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md flex-1 max-w-xl"><div class="flex items-center gap-space-sm pl-space-xs"><img alt="Brand logo. - Primary color: #1e3a8a
- Font: plusJakartaSans
- Mode: light
- Roundness: rounded-sm
" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XEmj8BA8WHZ6rBHU9dn0vDsK8_oFlnpaO0u2e-xmmevULi3IAdvEzBGmAIWiG6JylYypWC3KrIP2LpZ8_cnNqGZdiEftRUdqZ8dKOsJeUHh0fmSwvYrShObT5Ocr1Px1WRdGWtZiO8URSVyHDpNtfiiEdd53IelMEgiOhPQ9P6AzUVZDDqnSHWKTyxtp_e3QizJEGr0WLC2fwOW6hSbtDcH4xKbo-qZMKRnOEbziqS6yZq3prD0OxMkxk"><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight hidden sm:inline-block">CivicHub</span></div><div class="relative flex-1 hidden md:block"><span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span><input class="w-full pl-10 pr-space-md py-2.5 rounded-full bg-surface-container-lowest text-on-surface placeholder:text-outline text-body-sm font-body-sm shadow-[0_2px_8px_rgba(37,43,54,0.04)] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari data desa, metrik, atau penduduk..." type="text"></div></div><div class="flex items-center gap-space-sm"><div class="hidden lg:flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface text-label-md font-label-md"><span class="material-symbols-outlined text-primary text-[16px]">calendar_today</span><span class="">Hari ini, 24 Okt 2024</span></div><div class="relative"><button class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button" id="btn-village-selector"><span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span><span class="">Semua 12 Desa</span><span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span></button></div><button aria-label="Notifications" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all relative" type="button"><span class="material-symbols-outlined text-[19px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error ring-2 ring-surface-container-lowest"></span></button><button aria-label="Settings quick access" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all" type="button"><span class="material-symbols-outlined text-[19px]">tune</span></button><div class="flex items-center gap-space-xs pl-space-xs"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></div></header><main class="w-full pt-20 px-gutter-desktop pb-space-xl bg-surface min-h-screen"><div class="flex flex-col w-full">
<!-- Interactive Script for Filtering and Modal -->
<script>
    function filterMBG(status, btn) {
      const cards = document.querySelectorAll('.mbg-village-card');
      const buttons = document.querySelectorAll('.mbg-filter-btn');
      
      buttons.forEach(b => {
        b.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-sm');
        b.classList.add('bg-surface-container-low', 'text-on-surface-variant');
      });
      btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
      btn.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-sm');

      cards.forEach(card => {
        const cardStatus = card.getAttribute('data-status');
        if (status === 'all' || cardStatus === status) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    }

    function toggleModal(id) {
      const el = document.getElementById(id);
      if (el) {
        el.classList.toggle('hidden');
        el.classList.toggle('flex');
      }
    }
  </script>
<!-- Page Header -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-space-md mb-space-lg">
<div class="flex flex-col">
<!-- Breadcrumb -->
<nav class="flex items-center gap-space-xs text-body-sm font-body-sm text-secondary mb-1">
<span class="hover:text-primary cursor-pointer transition-colors">Beranda</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="hover:text-primary cursor-pointer transition-colors">Infrastruktur Wilayah</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-label-md font-semibold">Sentra MBG &amp; Pengairan</span>
</nav>
<!-- Title & Subtitle -->
<div class="flex items-center gap-space-sm flex-wrap">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          Infrastruktur Wilayah, Pengairan &amp; Sentra MBG
        </h1>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm cursor-pointer" id="pill-quarter-filter">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
          Q4 2024 Terkini
        </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">
        Monitoring real-time kemantapan jalan, keandalan jaringan irigasi tersier, dan kesiapan dapur gizi sehat di 12 desa Cicalengka
      </p>
</div>
<!-- Header Actions -->
<div class="flex items-center gap-space-xs flex-wrap sm:flex-nowrap">
<div class="hidden sm:flex items-center gap-1.5 px-3 py-2 rounded-full bg-surface-container-lowest shadow-sm text-label-md font-label-md text-secondary">
<span class="material-symbols-outlined text-primary text-[18px]">sync</span>
<span class="">PUPR &amp; BGN: Q4 2024</span>
</div>
<button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-sm hover:bg-surface-container-high transition-all" onclick="toggleModal('modal-kendala')">
<span class="material-symbols-outlined text-error text-[18px]">report_problem</span>
<span class="">+ Laporkan Kendala</span>
</button>
<button class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-inverse-surface text-inverse-on-surface text-label-md font-label-md shadow-md hover:opacity-95 transition-all" id="btn-download-coord">
<span class="material-symbols-outlined text-[18px]">download</span>
<span class="">Unduh Dokumen Koordinasi</span>
</button>
</div>
</div>
<!-- Top 4 Metric KPI Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-lg">
<!-- Card 1: Vibrant Hero Card (Indigo) -->
<div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#574AE8] to-[#463BC9] text-on-primary p-space-lg shadow-[0_14px_30px_-6px_rgba(80,70,229,0.28)] flex flex-col justify-between">
<div class="flex items-start justify-between">
<div>
<span class="font-label-md text-label-md uppercase tracking-wider text-on-primary-container">Konektivitas</span>
<p class="font-headline-sm text-headline-sm mt-0.5 text-on-primary">Kemantapan Jalan</p>
</div>
<div class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-on-primary shadow-sm hover:rotate-45 transition-transform cursor-pointer" id="kpi-btn-1">
<span class="material-symbols-outlined text-[18px]">north_east</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold tracking-tight">83.4%</span>
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-white/20 text-white text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[12px] mr-0.5">arrow_upward</span>+2.8%
          </span>
</div>
<div class="w-full bg-white/20 h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-white h-full rounded-full" style="width: 83.4%"></div>
</div>
<p class="font-body-sm text-body-sm text-on-primary-container mt-2">119.1 km dari 142.8 km kondisi mantap</p>
</div>
</div>
<!-- Card 2: White Card Efisiensi Irigasi -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-start justify-between">
<div>
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary">Ketahanan Pangan</span>
<p class="font-headline-sm text-headline-sm mt-0.5 text-on-surface">Efisiensi Irigasi</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface shadow-sm hover:rotate-45 transition-transform cursor-pointer" id="kpi-btn-2">
<span class="material-symbols-outlined text-[18px]">north_east</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">78.6%</span>
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">
            Stabil
          </span>
</div>
<div class="w-full bg-surface-container-high h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-tertiary h-full rounded-full" style="width: 78.6%"></div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Cakupan: 2.140 Ha Lahan Pertanian</p>
</div>
</div>
<!-- Card 3: White Card Pasar & Sentra Niaga -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-start justify-between">
<div>
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary">Ekonomi Lokal</span>
<p class="font-headline-sm text-headline-sm mt-0.5 text-on-surface">Pasar &amp; Niaga</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface shadow-sm hover:rotate-45 transition-transform cursor-pointer" id="kpi-btn-3">
<span class="material-symbols-outlined text-[18px]">north_east</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">3 Pasar</span>
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm">
            91% Terisi
          </span>
</div>
<div class="w-full bg-surface-container-high h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 91%"></div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">1.450 Kios Beroperasi Terverifikasi</p>
</div>
</div>
<!-- Card 4: White Card Cakupan Dapur MBG -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
<div class="flex items-start justify-between">
<div>
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary">Program MBG</span>
<p class="font-headline-sm text-headline-sm mt-0.5 text-on-surface">Cakupan Dapur MBG</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface shadow-sm hover:rotate-45 transition-transform cursor-pointer" id="kpi-btn-4">
<span class="material-symbols-outlined text-[18px]">north_east</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">85.0%</span>
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-tertiary-container text-on-tertiary-container text-label-sm font-label-sm">
            17 Dapur Aktif
          </span>
</div>
<div class="w-full bg-surface-container-high h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-tertiary-container h-full rounded-full" style="width: 85%"></div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Melayani: 14.800 Siswa &amp; Balita</p>
</div>
</div>
</div>
<!-- Middle Section: Asymmetric 2-Column Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg mb-space-lg">
<!-- Kolom Kiri: Kondisi Jalan Menurut Kewenangan & Proyek Strategis (7 Cols) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)]">
<!-- Header Sub-Card -->
<div class="flex items-center justify-between pb-space-sm mb-space-md">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">add_road</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Kondisi Jalan Menurut Kewenangan</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Tingkat kemantapan jalur distribusi pangan dan logistik</p>
</div>
</div>
<span class="text-label-sm font-label-sm px-2.5 py-1 rounded-full bg-surface-container-high text-secondary">Total: 142.8 km</span>
</div>
<!-- Chart.js Stacked Bar Chart for Kondisi Jalan -->
<div class="p-3.5 rounded-xl bg-surface-container-low mb-4">
<div class="flex items-center justify-between mb-2">
<span class="text-label-md font-semibold text-on-surface">Visualisasi Tingkat Kemantapan Jalan</span>
<div class="flex items-center gap-3 text-label-sm">
<span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-sm bg-[#3625cd]"></span>Mantap / Baik</span>
<span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-sm bg-[#818cf8]"></span>Sedang</span>
<span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-sm bg-[#ba1a1a]"></span>Rusak</span>
</div>
</div>
<div class="relative h-[190px] w-full">
<canvas id="roadConditionChart" width="590" height="190" style="display: block; box-sizing: border-box; height: 190px; width: 590.7px;"></canvas>
</div>
</div>
<!-- Progress Details Kemantapan Jalan -->
<div class="space-y-3">
<!-- Jalan Nasional -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between text-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary shrink-0"></span>
<span class="font-semibold text-on-surface">Jalan Nasional (Ruas Cicalengka Raya)</span>
<span class="text-label-sm text-secondary font-label-sm">14.2 km</span>
</div>
<div class="flex items-center gap-3 text-label-sm">
<span class="text-primary font-bold">94% Mantap (13.3 km)</span>
<span class="text-on-surface-variant">Sedang: 0.9 km</span>
</div>
</div>
<!-- Jalan Provinsi -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between text-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary-container shrink-0"></span>
<span class="font-semibold text-on-surface">Jalan Provinsi (Cicalengka - Majalaya / Garut)</span>
<span class="text-label-sm text-secondary font-label-sm">28.6 km</span>
</div>
<div class="flex items-center gap-3 text-label-sm">
<span class="text-primary-container font-bold">88% Mantap (25.2 km)</span>
<span class="text-on-surface-variant">Sedang: 3.4 km</span>
</div>
</div>
<!-- Jalan Kabupaten & Poros Desa -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between text-body-sm">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary shrink-0"></span>
<span class="font-semibold text-on-surface">Jalan Kabupaten &amp; Poros Desa Antar-Sentra</span>
<span class="text-label-sm text-secondary font-label-sm">100.0 km</span>
</div>
<div class="flex items-center gap-3 text-label-sm">
<span class="text-tertiary font-bold">76% Mantap (76.0 km)</span>
<span class="text-error font-semibold">Rusak: 6.0 km</span>
</div>
</div>
</div>
<!-- 4 Proyek Rekonstruksi & Pemeliharaan 2024 -->
<div class="mt-space-lg pt-space-md">
<div class="flex items-center justify-between mb-space-sm">
<h3 class="font-headline-sm text-headline-sm text-on-surface">Proyek Rekonstruksi &amp; Pemeliharaan Strategis (2024)</h3>
<span class="text-label-sm font-label-sm text-secondary">Realisasi Fisik Triwulan IV</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
<!-- Proyek 1 -->
<div class="p-3.5 rounded-xl bg-surface-container-high hover:bg-surface-container transition-colors flex flex-col justify-between">
<div>
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed">Finishing</span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">92%</span>
</div>
<h4 class="font-label-md text-label-md font-semibold text-on-surface mt-2">Ruas Cicalengka - Waluya</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Lapisan Hotmix AC-WC &amp; Bahu Jalan</p>
</div>
<div class="w-full bg-surface-container-lowest h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-tertiary h-full rounded-full" style="width: 92%"></div>
</div>
</div>
<!-- Proyek 2 -->
<div class="p-3.5 rounded-xl bg-surface-container-high hover:bg-surface-container transition-colors flex flex-col justify-between">
<div>
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant">Pengecoran</span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">68%</span>
</div>
<h4 class="font-label-md text-label-md font-semibold text-on-surface mt-2">Dampit - Tanjungwangi</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Beton Rigid fs 45 &amp; Drainase U-Ditch</p>
</div>
<div class="w-full bg-surface-container-lowest h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 68%"></div>
</div>
</div>
<!-- Proyek 3 -->
<div class="p-3.5 rounded-xl bg-surface-container-high hover:bg-surface-container transition-colors flex flex-col justify-between">
<div>
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-tertiary-container text-on-tertiary-container">Tuntas 100%</span>
<span class="font-headline-sm text-headline-sm font-bold text-tertiary-container">100%</span>
</div>
<h4 class="font-label-md text-label-md font-semibold text-on-surface mt-2">Poros Tenjolaya - Babakan Peuteuy</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Tambal Sulam &amp; Overlay Aspal Dingin</p>
</div>
<div class="w-full bg-surface-container-lowest h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-tertiary-container h-full rounded-full" style="width: 100%"></div>
</div>
</div>
<!-- Proyek 4 -->
<div class="p-3.5 rounded-xl bg-surface-container-high hover:bg-surface-container transition-colors flex flex-col justify-between">
<div>
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed">Abutment</span>
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">45%</span>
</div>
<h4 class="font-label-md text-label-md font-semibold text-on-surface mt-2">Jembatan Penghubung Nagrog</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Konstruksi Girder Baja Bentang 18m</p>
</div>
<div class="w-full bg-surface-container-lowest h-1.5 rounded-full mt-3 overflow-hidden">
<div class="bg-secondary h-full rounded-full" style="width: 45%"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Kolom Kanan: Keandalan DI & Pasar Rakyat (5 Cols) -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<!-- Card Keandalan Irigasi -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)]">
<div class="flex items-center justify-between pb-space-xs mb-space-sm">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed">
<span class="material-symbols-outlined text-[18px]">water</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Daerah Irigasi (DI)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kesiapan debit air penunjang bahan baku MBG</p>
</div>
</div>
<span class="text-label-sm font-label-sm px-2.5 py-1 rounded-full bg-surface-container-low text-secondary">4 DI Utama</span>
</div>
<!-- Chart.js DI Water Flow Monitoring Bar Chart -->
<div class="p-3.5 rounded-xl bg-surface-container-low mb-3">
<div class="flex items-center justify-between mb-1.5">
<span class="text-label-md font-semibold text-on-surface">Monitoring Debit Air Real-Time (m³/s)</span>
<span class="text-label-sm text-secondary">Target vs Realisasi</span>
</div>
<div class="relative h-[150px] w-full">
<canvas id="irrigationChart" width="393" height="150" style="display: block; box-sizing: border-box; height: 150px; width: 393.3px;"></canvas>
</div>
</div>
<div class="space-y-2.5">
<!-- DI 1 -->
<div class="flex items-center justify-between p-2.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="min-w-0 pr-2">
<h4 class="font-label-md text-label-md font-bold text-on-surface truncate">DI Cikaro</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Debit 1.42 m³/s · 820 Ha Sawah</p>
</div>
<div class="text-right shrink-0">
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">
                92% Normal
              </span>
</div>
</div>
<!-- DI 2 -->
<div class="flex items-center justify-between p-2.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="min-w-0 pr-2">
<h4 class="font-label-md text-label-md font-bold text-on-surface truncate">DI Cimanuk Hulu</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Debit 0.95 m³/s · 560 Ha Sawah</p>
</div>
<div class="text-right shrink-0">
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">
                84% Normal
              </span>
</div>
</div>
<!-- DI 3 -->
<div class="flex items-center justify-between p-2.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="min-w-0 pr-2">
<h4 class="font-label-md text-label-md font-bold text-on-surface truncate">DI Babakan</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Debit 0.62 m³/s · 450 Ha Sawah</p>
</div>
<div class="text-right shrink-0">
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-surface-container-high text-secondary text-label-sm font-label-sm">
                71% Normal
              </span>
</div>
</div>
<!-- DI 4 -->
<div class="flex items-center justify-between p-2.5 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="min-w-0 pr-2">
<h4 class="font-label-md text-label-md font-bold text-on-surface truncate">DI Citarik Cicalengka</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Debit 0.48 m³/s · 310 Ha Sawah</p>
</div>
<div class="text-right shrink-0">
<span class="inline-flex items-center px-2 py-0.5 rounded-full bg-error-container text-on-error-container text-label-sm font-label-sm">
                65% Pemeliharaan
              </span>
</div>
</div>
</div>
</div>
<!-- Card Pasar Rakyat Cicalengka -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)]">
<div class="flex items-center justify-between pb-space-xs mb-space-sm">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[18px]">storefront</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Pasar &amp; Pasokan Pangan</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pusat logistik protein, telur &amp; sayur segar</p>
</div>
</div>
<span class="text-label-sm font-label-sm text-secondary">3 Unit</span>
</div>
<div class="space-y-3">
<!-- Pasar 1 -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">shopping_basket</span>
</div>
<div>
<h4 class="font-label-md text-label-md font-bold text-on-surface">Pasar Resik Cicalengka</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pasar Induk · 920 Pedagang</p>
</div>
</div>
<div class="text-right">
<span class="font-headline-sm text-headline-sm text-primary font-bold">96%</span>
<p class="text-label-sm font-label-sm text-secondary">Okupansi</p>
</div>
</div>
<!-- Pasar 2 -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">store</span>
</div>
<div>
<h4 class="font-label-md text-label-md font-bold text-on-surface">Pasar Babakan Peuteuy</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pasar Kawasan · 320 Pedagang</p>
</div>
</div>
<div class="text-right">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">88%</span>
<p class="text-label-sm font-label-sm text-secondary">Okupansi</p>
</div>
</div>
<!-- Pasar 3 -->
<div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[20px]">pets</span>
</div>
<div>
<h4 class="font-label-md text-label-md font-bold text-on-surface">Pasar Hewan Waluya</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Sentra Tematik · 210 Pedagang</p>
</div>
</div>
<div class="text-right">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">82%</span>
<p class="text-label-sm font-label-sm text-secondary">Okupansi</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Bottom Section: Card Lebar Status Kesiapan Program Makan Bergizi Gratis (MBG) Nasional 12 Desa -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] mb-space-lg">
<!-- Top Bar inside Card -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md pb-space-md border-b-0">
<div>
<div class="flex items-center gap-2">
<div class="w-9 h-9 rounded-xl bg-tertiary flex items-center justify-center text-on-tertiary">
<span class="material-symbols-outlined text-[20px]">restaurant</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Status Kesiapan Program Makan Bergizi Gratis (MBG)</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pemantauan higienitas, kapasitas saji, dan rantai pasok dapur 12 desa se-Kecamatan Cicalengka</p>
</div>
</div>
</div>
<!-- Quick Metrics MBG & Chart.js Doughnut for Kesiapan MBG -->
<div class="flex items-center gap-space-sm flex-wrap">
<div class="p-2.5 rounded-xl bg-surface-container-low flex items-center gap-3">
<div class="relative w-14 h-14 shrink-0">
<canvas id="mbgDoughnutChart" width="56" height="56" style="display: block; box-sizing: border-box; height: 56px; width: 56px;"></canvas>
</div>
<div class="text-body-sm">
<p class="text-label-sm font-bold text-on-surface">Distribusi Kesiapan</p>
<p class="text-secondary text-[11px] leading-tight">9 Aktif · 2 Sertifikasi · 1 Persiapan</p>
</div>
</div>
<div class="px-3.5 py-1.5 rounded-xl bg-surface-container-low flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">inventory_2</span>
<div>
<p class="text-label-sm font-label-sm text-secondary">Kapasitas Harian</p>
<p class="font-headline-sm text-headline-sm font-bold text-on-surface">14.800 Porsi</p>
</div>
</div>
<div class="px-3.5 py-1.5 rounded-xl bg-surface-container-low flex items-center gap-2">
<span class="material-symbols-outlined text-tertiary text-[18px]">verified</span>
<div>
<p class="text-label-sm font-label-sm text-secondary">Ketepatan Distribusi</p>
<p class="font-headline-sm text-headline-sm font-bold text-tertiary">99.1% Tepat Waktu</p>
</div>
</div>
</div>
</div>
<!-- Filter Pills Tab -->
<div class="flex items-center justify-between gap-space-sm flex-wrap py-space-sm mb-space-sm">
<div class="flex items-center gap-2 flex-wrap">
<button class="mbg-filter-btn px-3.5 py-1.5 rounded-full text-label-md font-label-md bg-inverse-surface text-inverse-on-surface shadow-sm transition-all" onclick="filterMBG('all', this)">
          Semua Desa (12)
        </button>
<button class="mbg-filter-btn px-3.5 py-1.5 rounded-full text-label-md font-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high transition-all" onclick="filterMBG('aktif', this)">
          Aktif Beroperasi (9)
        </button>
<button class="mbg-filter-btn px-3.5 py-1.5 rounded-full text-label-md font-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high transition-all" onclick="filterMBG('sertifikasi', this)">
          Sertifikasi Higiene (2)
        </button>
<button class="mbg-filter-btn px-3.5 py-1.5 rounded-full text-label-md font-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high transition-all" onclick="filterMBG('persiapan', this)">
          Persiapan &amp; Renovasi (1)
        </button>
</div>
<div class="flex items-center gap-2 text-label-sm font-label-sm text-secondary">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>Aktif (75%)
        <span class="w-2 h-2 rounded-full bg-primary ml-2"></span>Sertifikasi (16.7%)
        <span class="w-2 h-2 rounded-full bg-secondary ml-2"></span>Persiapan (8.3%)
      </div>
</div>
<!-- Grid 12 Desa Modern Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-space-sm" id="mbg-grid">
<!-- Desa 1: Cicalengka Kulon -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Cicalengka Kulon</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Sentra Boga Mandiri</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Protein Tinggi &amp; Sayur Organik</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">2.000 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 2: Cicalengka Wetan -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Cicalengka Wetan</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Sentra Berkah Wetan</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Ayam Kampung + Sayur Bening</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">2.100 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 3: Waluya -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Waluya</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Dapur Waluya Sejahtera</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Telur Puyuh + Tempe Mendoan</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.500 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 4: Tenjolaya -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Tenjolaya</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Koperasi Tenjolaya Asri</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Daging Sapi Olahan Lokal</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.400 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 5: Babakan Peuteuy -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Babakan Peuteuy</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Sentra Peuteuy Higienis</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Ikan Mas Presto + Sayur Asem</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.350 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 6: Cikuya -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Cikuya</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Dapur Bunda Cikuya</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Fillet Lele Bioflok + Bayam</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.250 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 7: Nagrog -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Nagrog</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Boga Nagrog Bersama</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Ayam Semur + Buncis Wortel</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.300 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 8: Margaasih -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Margaasih</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Sentra Rasa Margaasih</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Rolade Daging + Labu Siam</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.200 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 9: Panenjoan -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="aktif">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Panenjoan</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">Aktif</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Dapur Mitra Panenjoan</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Menu Inti: Tenggiri Kuah Kuning + Tahu</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Kapasitas Saji</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">1.150 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 10: Dampit (Sertifikasi) -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="sertifikasi">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Dampit</span>
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm">Sertifikasi</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">BUMDes Dampit Lestari</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Tahap Akhir Uji Kelayakan Lab Dinkes</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Target Kapasitas</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">890 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 11: Narawita (Sertifikasi) -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="sertifikasi">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Narawita</span>
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm">Sertifikasi</span>
</div>
<p class="font-body-md text-body-md text-primary font-semibold mt-1">Sentra Narawita Mandiri</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Pemeriksaan Bakteriologis &amp; Uji Residu</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Target Kapasitas</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">860 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
<!-- Desa 12: Tanjungwangi (Persiapan) -->
<div class="mbg-village-card p-4 rounded-xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-status="persiapan">
<div>
<div class="flex items-start justify-between">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface">Tanjungwangi</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm">Persiapan</span>
</div>
<p class="font-body-md text-body-md text-secondary font-semibold mt-1">Eks Kantor KUD Mandiri</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Renovasi Sanitasi &amp; Instalasi Gas 40%</p>
</div>
<div class="mt-4 pt-3 flex items-center justify-between border-t border-outline-variant/20">
<span class="text-label-sm font-label-sm text-secondary">Target Kapasitas</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-on-surface">790 <span class="text-body-sm font-normal">porsi</span></span>
</div>
</div>
</div>
</div>
<!-- Modal Laporkan Kendala Lapangan -->
<div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-sm z-50 hidden items-center justify-center p-4" id="modal-kendala"><div class="bg-surface-container-lowest rounded-2xl max-w-lg w-full p-space-lg shadow-xl relative animate-in fade-in duration-200 border border-outline-variant/20"><div class="flex items-center justify-between pb-space-sm mb-space-sm border-b border-outline-variant/20"><div class="flex items-center gap-2"><div class="w-8 h-8 rounded-full bg-error-container text-on-error-container flex items-center justify-center"><span class="material-symbols-outlined text-[18px]">report_problem</span></div><div><h3 class="font-headline-md text-headline-md text-on-surface">Formulir Pelaporan Kendala Lapangan</h3><p class="font-body-sm text-body-sm text-on-surface-variant">Sistem Respon Cepat Terpadu Kecamatan Cicalengka</p></div></div><button class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-secondary hover:text-on-surface" onclick="toggleModal('modal-kendala')"><span class="material-symbols-outlined text-[18px]">close</span></button></div><form id="form-kendala" onsubmit="event.preventDefault(); submitKendalaForm();" class="space-y-3"><div><label class="block font-label-sm text-label-sm text-secondary mb-1">Kategori Kendala</label><select id="kendala-kategori" class="w-full px-3 py-2 rounded-xl bg-surface-container-low text-on-surface text-body-sm font-body-sm focus:outline-none focus:ring-2 focus:ring-primary/20"><option value="Jalan Poros Distribusi Rusak / Longsor">Kerusakan Jalan Poros Distribusi / Longsor</option><option value="Debit Saluran Irigasi Turun / Sedimentasi">Penurunan Debit Saluran Irigasi / Sedimentasi</option><option value="Kendala Fasilitas Higiene Dapur MBG">Kendala Fasilitas Higiene &amp; Air Bersih Dapur MBG</option><option value="Keterlambatan Pasokan Bahan Pangan Segar">Keterlambatan Pasokan Bahan Pangan Segar</option><option value="Gangguan Fasilitas Kios Pasar Rakyat">Gangguan Sanitasi / Kios Pasar Rakyat</option></select></div><div class="grid grid-cols-2 gap-2"><div><label class="block font-label-sm text-label-sm text-secondary mb-1">Lokasi Desa</label><select id="kendala-desa" class="w-full px-3 py-2 rounded-xl bg-surface-container-low text-on-surface text-body-sm font-body-sm focus:outline-none focus:ring-2 focus:ring-primary/20"><option>Cicalengka Kulon</option><option>Cicalengka Wetan</option><option>Waluya</option><option>Tenjolaya</option><option>Babakan Peuteuy</option><option>Cikuya</option><option>Nagrog</option><option>Margaasih</option><option>Panenjoan</option><option>Dampit</option><option>Narawita</option><option>Tanjungwangi</option></select></div><div><label class="block font-label-sm text-label-sm text-secondary mb-1">Tingkat Urgensi</label><select id="kendala-urgensi" class="w-full px-3 py-2 rounded-xl bg-surface-container-low text-on-surface text-body-sm font-body-sm focus:outline-none focus:ring-2 focus:ring-primary/20"><option value="Tinggi">Tinggi (Butuh &lt; 24 Jam)</option><option value="Sedang">Sedang (1 - 3 Hari)</option><option value="Rendah">Rutin / Berkala</option></select></div></div><div><label class="block font-label-sm text-label-sm text-secondary mb-1">Deskripsi Detail Kendala</label><textarea id="kendala-deskripsi" required="" class="w-full p-3 rounded-xl bg-surface-container-low text-on-surface text-body-sm font-body-sm placeholder:text-outline focus:outline-none focus:ring-2 focus:ring-primary/20 resize-none" placeholder="Tuliskan detail temuan lapangan, estimasi dampak terhadap dapur MBG atau transportasi warga..." rows="3"></textarea></div><div class="p-3 rounded-xl bg-primary-fixed/40 flex items-start gap-2 text-on-primary-fixed-variant text-body-sm"><span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">info</span><span class="">Laporan diteruskan otomatis ke tim reaksi teknis PUPR dan koordinator Satgas MBG desa.</span></div><div class="flex items-center justify-end gap-2 mt-space-md pt-space-sm"><button type="button" class="px-4 py-2 rounded-full text-label-md font-label-md text-secondary hover:bg-surface-container-high transition-colors" onclick="toggleModal('modal-kendala')">Batal</button><button type="submit" class="px-5 py-2 rounded-full bg-primary text-on-primary text-label-md font-label-md shadow-md hover:bg-primary-container transition-all flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">send</span>Kirimkan Laporan</button></div></form></div></div><div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-sm z-50 hidden items-center justify-center p-4" id="modal-detail-universal"><div class="bg-surface-container-lowest rounded-2xl max-w-lg w-full p-space-lg shadow-xl relative animate-in fade-in duration-200 border border-outline-variant/20"><div class="flex items-center justify-between pb-space-sm mb-space-sm border-b border-outline-variant/20"><div class="flex items-center gap-2"><div id="universal-modal-icon-wrap" class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center"><span class="material-symbols-outlined text-[18px]" id="universal-modal-icon">info</span></div><div><h3 class="font-headline-md text-headline-md text-on-surface" id="universal-modal-title">Detail Rincian</h3><p class="font-body-sm text-body-sm text-on-surface-variant" id="universal-modal-subtitle">Informasi Terkini Kecamatan Cicalengka</p></div></div><button class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-secondary hover:text-on-surface" onclick="toggleModal('modal-detail-universal')"><span class="material-symbols-outlined text-[18px]">close</span></button></div><div id="universal-modal-body" class="space-y-3"></div><div class="flex items-center justify-end gap-2 mt-space-md pt-space-sm border-t border-outline-variant/20"><button type="button" class="px-5 py-2 rounded-full bg-inverse-surface text-inverse-on-surface text-label-md font-label-md shadow-sm hover:opacity-90 transition-all" onclick="toggleModal('modal-detail-universal')">Tutup</button></div></div></div><div id="toast-notification" class="fixed bottom-6 right-6 z-50 hidden items-center gap-2.5 px-4 py-3 rounded-xl bg-inverse-surface text-inverse-on-surface shadow-xl text-body-sm font-medium transition-all"><span class="material-symbols-outlined text-tertiary-fixed text-[20px]" id="toast-icon">check_circle</span><span id="toast-message" class="">Aksi berhasil diproses</span></div>
<!-- Inline Script to auto-highlight Infrastructure item on app shell sidebar & Chart.js Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const navLinks = document.querySelectorAll('aside nav a');
      if (navLinks && navLinks.length >= 4) {
        navLinks.forEach((link, idx) => {
          link.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
          link.classList.add('text-on-surface-variant');
        });
        // 4th icon: infrastruktur-mbg (0-indexed: index 3)
        const infraLink = navLinks[3];
        if (infraLink) {
          infraLink.classList.remove('text-on-surface-variant');
          infraLink.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
        }
      }

      // Default Chart.js Font Styling
      Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
      Chart.defaults.color = '#595e6b';

      // 1. Horizontal Stacked Bar Chart for Road Conditions
      const roadCtx = document.getElementById('roadConditionChart');
      if (roadCtx) {
        new Chart(roadCtx, {
          type: 'bar',
          data: {
            labels: ['Nasional (14.2 km)', 'Provinsi (28.6 km)', 'Kab/Desa (100.0 km)'],
            datasets: [
              {
                label: 'Mantap (%)',
                data: [94, 88, 76],
                backgroundColor: '#3625cd',
                borderRadius: 4,
                barThickness: 18
              },
              {
                label: 'Sedang (%)',
                data: [6, 12, 18],
                backgroundColor: '#818cf8',
                borderRadius: 4,
                barThickness: 18
              },
              {
                label: 'Rusak (%)',
                data: [0, 0, 6],
                backgroundColor: '#ba1a1a',
                borderRadius: 4,
                barThickness: 18
              }
            ]
          },
          options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return `${context.dataset.label}: ${context.raw}%`;
                  }
                }
              }
            },
            scales: {
              x: {
                stacked: true,
                max: 100,
                grid: { color: 'rgba(218, 224, 238, 0.4)' },
                ticks: {
                  callback: val => val + '%',
                  font: { size: 10 }
                }
              },
              y: {
                stacked: true,
                grid: { display: false },
                ticks: { font: { size: 11, weight: '600' } }
              }
            }
          }
        });
      }

      // 2. Bar Chart for Daerah Irigasi Water Flow (m3/s)
      const irriCtx = document.getElementById('irrigationChart');
      if (irriCtx) {
        new Chart(irriCtx, {
          type: 'bar',
          data: {
            labels: ['DI Cikaro', 'DI Cimanuk', 'DI Babakan', 'DI Citarik'],
            datasets: [
              {
                label: 'Debit Aktual (m³/s)',
                data: [1.42, 0.95, 0.62, 0.48],
                backgroundColor: ['#005338', '#006e4b', '#4edea3', '#ba1a1a'],
                borderRadius: 6,
                barThickness: 24
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: context => `Debit: ${context.raw} m³/s`
                }
              }
            },
            scales: {
              y: {
                beginAtZero: true,
                max: 1.8,
                grid: { color: 'rgba(218, 224, 238, 0.4)' },
                ticks: {
                  callback: val => val + ' m³/s',
                  font: { size: 10 }
                }
              },
              x: {
                grid: { display: false },
                ticks: { font: { size: 11, weight: '500' } }
              }
            }
          }
        });
      }

      // 3. Doughnut Chart for Kesiapan Dapur MBG
      const mbgCtx = document.getElementById('mbgDoughnutChart');
      if (mbgCtx) {
        new Chart(mbgCtx, {
          type: 'doughnut',
          data: {
            labels: ['Aktif', 'Sertifikasi', 'Persiapan'],
            datasets: [{
              data: [9, 2, 1],
              backgroundColor: ['#005338', '#3625cd', '#94a3b8'],
              borderWidth: 2,
              borderColor: '#ffffff',
              hoverOffset: 3
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '72%',
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    const total = 12;
                    const pct = Math.round((context.raw / total) * 100);
                    return ` ${context.label}: ${context.raw} Desa (${pct}%)`;
                  }
                }
              }
            }
          }
        });
      }
    });
  </script>
</div></main></div>

<script>
function showCivicToast(message, icon = 'check_circle') {
  const toast = document.getElementById('toast-notification');
  const msg = document.getElementById('toast-message');
  const icn = document.getElementById('toast-icon');
  if (!toast || !msg) return;
  msg.textContent = message;
  if (icn) icn.textContent = icon;
  toast.classList.remove('hidden');
  toast.classList.add('flex');
  clearTimeout(window._civicToastTimer);
  window._civicToastTimer = setTimeout(() => {
    toast.classList.add('hidden');
    toast.classList.remove('flex');
  }, 3500);
}

function submitKendalaForm() {
  const cat = document.getElementById('kendala-kategori')?.value || 'Infrastruktur';
  const des = document.getElementById('kendala-desa')?.value || 'Cicalengka';
  const urg = document.getElementById('kendala-urgensi')?.value || 'Tinggi';
  toggleModal('modal-kendala');
  document.getElementById('form-kendala')?.reset();
  showCivicToast(`Laporan kendala [${des}] kategori ${cat} (Urgensi: ${urg}) berhasil dicatat!`, 'task_alt');
}

function openUniversalModal(opts) {
  const modal = document.getElementById('modal-detail-universal');
  const title = document.getElementById('universal-modal-title');
  const subtitle = document.getElementById('universal-modal-subtitle');
  const icon = document.getElementById('universal-modal-icon');
  const body = document.getElementById('universal-modal-body');
  if (!modal) return;
  if (title) title.textContent = opts.title;
  if (subtitle) subtitle.textContent = opts.subtitle || '';
  if (icon) icon.textContent = opts.icon || 'info';
  if (body) body.innerHTML = opts.content || '';
  modal.classList.remove('hidden');
  modal.classList.add('flex');
}

document.addEventListener('DOMContentLoaded', () => {
  // 1. Download Document handler
  const dlBtn = document.getElementById('btn-download-coord');
  if (dlBtn) {
    dlBtn.addEventListener('click', (e) => {
      e.preventDefault();
      showCivicToast('Mengunduh: Dokumen_Koordinasi_Infrastruktur_MBG_Cicalengka_Q4.pdf', 'download');
    });
  }

  // 2. Quarter pill toggle
  const qPill = document.getElementById('pill-quarter-filter');
  if (qPill) {
    const quarters = ['Q4 2024 Terkini', 'Q3 2024 Final', 'Q2 2024 Rekap', 'Q1 2024 Baseline'];
    let qIdx = 0;
    qPill.addEventListener('click', () => {
      qIdx = (qIdx + 1) % quarters.length;
      qPill.innerHTML = `<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> ${quarters[qIdx]}`;
      showCivicToast(`Periode data diubah ke ${quarters[qIdx]}`, 'tune');
    });
  }

  // 3. Village dropdown button
  const vBtn = document.getElementById('btn-village-selector');
  if (vBtn) {
    const villageList = ['Semua 12 Desa', 'Cicalengka Kulon', 'Cicalengka Wetan', 'Waluya', 'Tenjolaya', 'Babakan Peuteuy', 'Cikuya', 'Nagrog', 'Margaasih', 'Panenjoan', 'Dampit', 'Narawita', 'Tanjungwangi'];
    let vIdx = 0;
    vBtn.addEventListener('click', () => {
      vIdx = (vIdx + 1) % villageList.length;
      const labelSpan = vBtn.querySelector('span:nth-child(2)');
      if (labelSpan) labelSpan.textContent = villageList[vIdx];
      showCivicToast(`Filter wilayah aktif: ${villageList[vIdx]}`, 'location_on');
    });
  }

  // 4. KPI Card Modals
  const kpis = [
    {
      id: 'kpi-btn-1',
      title: 'Audit Kemantapan Jalan (142.8 km)',
      subtitle: 'Distribusi Logistik Pangan Antar-Desa',
      icon: 'add_road',
      content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Jalan Mantap (Baik)</span><strong class="text-primary">119.1 km (83.4%)</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Kondisi Sedang</span><strong class="text-secondary">17.7 km (12.4%)</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Perlu Rekonstruksi</span><strong class="text-error">6.0 km (4.2%)</strong></div><p class="text-[12px] text-on-surface-variant pt-1">Fokus Q4: Penuntasan overlay poros Babakan Peuteuy & pelebaran bahu jalan Waluya untuk kelancaran van distribusi MBG.</p></div>`
    },
    {
      id: 'kpi-btn-2',
      title: 'Efisiensi Sistem Irigasi Tersier',
      subtitle: 'Pasokan Air Sawah Padi & Hortikultura',
      icon: 'water',
      content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Luas Lahan Terlayani</span><strong>2.140 Hektar</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Debit Air Rata-rata</span><strong class="text-tertiary">3.47 m³/s</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Efisiensi Aliran Primer-Tersier</span><strong class="text-primary">78.6% (Stabil)</strong></div><p class="text-[12px] text-on-surface-variant pt-1">Pengerukan sedimentasi berkala di DI Citarik dijadwalkan selesai 28 November 2024.</p></div>`
    },
    {
      id: 'kpi-btn-3',
      title: 'Ekosistem Pasar & Pasokan Pangan',
      subtitle: 'Ketahanan Stok Protein, Sayur & Bahan Dapur',
      icon: 'storefront',
      content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Total Kios Aktif</span><strong>1.450 Kios (91% Terisi)</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Pasokan Telur & Ayam Segar</span><strong class="text-tertiary">Surplus (+18%)</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Stok Beras Premium Lokal</span><strong class="text-primary">42.5 Ton Tersedia</strong></div><p class="text-[12px] text-on-surface-variant pt-1">Dua kali seminggu dilakukan uji residu formalin dan pestisida bersama Labkesda.</p></div>`
    },
    {
      id: 'kpi-btn-4',
      title: 'Cakupan Dapur Gizi MBG Cicalengka',
      subtitle: 'Sasaran Murid SD, SMP & Balita Rentan',
      icon: 'restaurant',
      content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Total Penerima Manfaat</span><strong>14.800 Jiwa</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Dapur Aktif Beroperasi</span><strong class="text-tertiary">9 Sentra Dapur</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Target Kesiapan 100%</span><strong class="text-primary">Desember 2024</strong></div><p class="text-[12px] text-on-surface-variant pt-1">Tingkat kehadiran sekolah meningkat 4.2% sejak operasional sentra MBG bergulir penuh.</p></div>`
    }
  ];

  kpis.forEach(k => {
    const btn = document.getElementById(k.id);
    if (btn) {
      btn.addEventListener('click', () => openUniversalModal(k));
    }
  });

  // 5. Interactivity on Project cards
  const projectCards = document.querySelectorAll('main div.grid.grid-cols-1.sm\\:grid-cols-2.gap-space-sm > div');
  projectCards.forEach((card, idx) => {
    card.classList.add('cursor-pointer');
    card.addEventListener('click', () => {
      const title = card.querySelector('h4')?.textContent || 'Proyek';
      const desc = card.querySelector('p')?.textContent || '';
      openUniversalModal({
        title: `Proyek Strategis: ${title}`,
        subtitle: desc,
        icon: 'construction',
        content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl"><div class="flex justify-between font-semibold mb-1"><span>Realisasi Fisik Terkini</span><span class="text-primary">Triwulan IV 2024</span></div><p class="text-[12px] text-on-surface-variant">Pemeriksaan ketebalan aspal dan struktur drainase memenuhi SNI Bina Marga Jawa Barat.</p></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Status Pengawasan</span><strong class="text-tertiary">On-Track &bull; Nihil Kendala</strong></div></div>`
      });
    });
  });

  // 6. Interactivity on Market cards
  const marketCards = document.querySelectorAll('main .space-y-3 > div.p-3.rounded-xl.bg-surface-container-low');
  marketCards.forEach((card) => {
    const marketTitle = card.querySelector('h4');
    if (marketTitle) {
      card.classList.add('cursor-pointer', 'hover:bg-surface-container', 'transition-all');
      card.addEventListener('click', () => {
        const name = marketTitle.textContent;
        openUniversalModal({
          title: name,
          subtitle: 'Status Logistik Komoditas Pangan',
          icon: 'shopping_cart',
          content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Rantai Pasok MBG</span><strong class="text-tertiary">Langsung dari Petani Lokal</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Indeks Harga Beras</span><strong class="text-primary">Stabil (Rp 13.200/kg)</strong></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between"><span>Stok Telur & Ikan</span><strong class="text-tertiary">Aman 14 Hari</strong></div></div>`
        });
      });
    }
  });

  // 7. Interactivity on MBG Village Kitchen cards
  const villageCards = document.querySelectorAll('.mbg-village-card');
  villageCards.forEach(card => {
    card.classList.add('cursor-pointer');
    card.addEventListener('click', () => {
      const vName = card.querySelector('span.font-headline-sm')?.textContent || 'Desa';
      const kitchen = card.querySelector('p.font-body-md')?.textContent || 'Dapur MBG';
      const menu = card.querySelector('p.font-body-sm')?.textContent || '';
      openUniversalModal({
        title: `Spesifikasi Dapur: ${vName}`,
        subtitle: kitchen,
        icon: 'soup_kitchen',
        content: `<div class="space-y-2 text-body-sm"><div class="p-3 bg-surface-container-low rounded-xl"><span class="text-[11px] uppercase tracking-wider text-secondary font-bold">Paket Menu Gizi Seimbang</span><p class="font-bold text-on-surface mt-0.5">${menu}</p><div class="grid grid-cols-3 gap-2 mt-2 pt-2 border-t border-outline-variant/20 text-center"><div class="bg-surface-container-lowest p-1.5 rounded-lg"><span class="block text-[11px] text-secondary">Energi</span><strong class="text-primary">680 kkal</strong></div><div class="bg-surface-container-lowest p-1.5 rounded-lg"><span class="block text-[11px] text-secondary">Protein</span><strong class="text-tertiary">26.5 gram</strong></div><div class="bg-surface-container-lowest p-1.5 rounded-lg"><span class="block text-[11px] text-secondary">Serat</span><strong class="text-secondary">7.2 gram</strong></div></div></div><div class="p-3 bg-surface-container-low rounded-xl flex justify-between items-center"><span>Jadwal Distribusi Sekolah</span><strong class="text-primary text-[12px]">09.30 - 11.00 WIB</strong></div></div>`
      });
    });
  });
});
</script></body></html>

<!-- Pendidikan, Kesehatan & Potensi Desa - Dashboard Cicalengka (Chart.js Ready) -->
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport"><meta content="web_dashboard" name="shell-type"><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">tailwind.config = { darkMode: "class", theme: { extend: { colors: { "surface-container-high": "#e3e8f7", "surface-bright": "#f9f9ff", "surface-tint": "#4e44e3", "surface": "#f9f9ff", "error-container": "#ffdad6", "secondary": "#595e6b", "on-primary-fixed-variant": "#3422cc", "surface-container-lowest": "#ffffff", "tertiary-container": "#006e4b", "on-secondary": "#ffffff", "on-secondary-fixed": "#161c26", "on-tertiary": "#ffffff", "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#c3c0ff", "surface-variant": "#dde2f1", "on-secondary-fixed-variant": "#414753", "surface-container-highest": "#dde2f1", "tertiary-fixed": "#6ffbbe", "tertiary": "#005338", "on-tertiary-fixed-variant": "#005236", "on-background": "#161c26", "on-tertiary-container": "#67f4b7", "background": "#f9f9ff", "primary": "#3625cd", "on-surface": "#161c26", "primary-fixed": "#e2dfff", "secondary-fixed": "#dde2f1", "surface-dim": "#d4dae9", "outline-variant": "#c7c4d8", "on-primary-fixed": "#0f0069", "on-error": "#ffffff", "on-surface-variant": "#464555", "inverse-on-surface": "#ecf1ff", "error": "#ba1a1a", "on-error-container": "#93000a", "primary-container": "#5046e5", "inverse-surface": "#2b313c", "inverse-primary": "#c3c0ff", "secondary-fixed-dim": "#c1c6d5", "surface-container": "#e8eefd", "tertiary-fixed-dim": "#4edea3", "on-primary-container": "#dbd8ff", "on-tertiary-fixed": "#002113", "on-secondary-container": "#5d636f", "outline": "#777587", "secondary-container": "#dae0ee", "on-primary": "#ffffff" }, borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" }, spacing: { "space-xs": "0.375rem", "margin": "1.25rem", "space-lg": "1.5rem", "space-sm": "0.625rem", "gutter-desktop": "1.5rem", "space-md": "1rem", "margin-desktop": "2rem", "gutter": "1.25rem", "space-xl": "2rem" }, fontFamily: { "body-md": ["Plus Jakarta Sans"], "headline-xl-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"], "label-md": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "body-lg": ["Plus Jakarta Sans"], "body-sm": ["Plus Jakarta Sans"], "metric-display": ["Plus Jakarta Sans"], "headline-xl": ["Plus Jakarta Sans"], "label-sm": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"] }, fontSize: { "body-md": ["13px", { "lineHeight": "18px", "fontWeight": "500" }], "headline-xl-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "800" }], "headline-lg": ["26px", { "lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "700" }], "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "600" }], "headline-md": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "700" }], "body-lg": ["15px", { "lineHeight": "22px", "fontWeight": "500" }], "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }], "metric-display": ["30px", { "lineHeight": "36px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.03em", "fontWeight": "800" }], "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "700" }], "headline-sm": ["16px", { "lineHeight": "22px", "fontWeight": "700" }] } } } };</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head><body class="bg-surface font-body-md text-on-surface antialiased"><aside class="fixed left-0 top-0 h-full w-[72px] bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 flex flex-col items-center py-space-lg"><div class="mb-space-xl flex flex-col items-center justify-center"><a class="flex items-center justify-center" data-path="ringkasan" href="#"><div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center shadow-[0_4px_12px_rgba(54,37,205,0.25)]"><span class="material-symbols-outlined text-on-primary text-[22px]">dashboard</span></div></a></div><nav class="flex-1 flex flex-col items-center gap-space-sm w-full px-space-xs" data-active-classes="bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="ringkasan" href="#" title="Ringkasan Eksekutif"><span class="material-symbols-outlined text-[20px]">grid_view</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="demografi-kependudukan" href="#" title="Demografi &amp; Kependudukan"><span class="material-symbols-outlined text-[20px]">groups</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="kepegawaian" href="#" title="Kepegawaian &amp; Aparatur"><span class="material-symbols-outlined text-[20px]">badge</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="infrastruktur-mbg" href="#" title="Infrastruktur &amp; MBG"><span class="material-symbols-outlined text-[20px]">apartment</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center transition-all bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)]" data-path="pendidikan-kesehatan" href="#" title="Pendidikan &amp; Kesehatan"><span class="material-symbols-outlined text-[20px]">local_hospital</span></a><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="laporan-analisis" href="#" title="Laporan &amp; Analisis"><span class="material-symbols-outlined text-[20px]">insert_chart</span></a></nav><div class="flex flex-col items-center gap-space-sm w-full px-space-xs pt-space-md"><a class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-all" data-path="pengaturan" href="#" title="Pengaturan Sistem"><span class="material-symbols-outlined text-[20px]">settings</span></a><button class="w-11 h-11 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-error-container hover:text-on-error-container transition-all" title="Keluar" type="button"><span class="material-symbols-outlined text-[20px]">logout</span></button></div></aside><div class="pl-[72px]"><header class="fixed top-0 left-[72px] right-0 h-20 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center px-gutter-desktop"><div class="w-full flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md flex-1 max-w-xl"><div class="flex items-center gap-space-sm pl-space-xs"><img alt="Brand logo. - Primary color: #1e3a8a
- Font: plusJakartaSans
- Mode: light
- Roundness: rounded-sm
" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XEmj8BA8WHZ6rBHU9dn0vDsK8_oFlnpaO0u2e-xmmevULi3IAdvEzBGmAIWiG6JylYypWC3KrIP2LpZ8_cnNqGZdiEftRUdqZ8dKOsJeUHh0fmSwvYrShObT5Ocr1Px1WRdGWtZiO8URSVyHDpNtfiiEdd53IelMEgiOhPQ9P6AzUVZDDqnSHWKTyxtp_e3QizJEGr0WLC2fwOW6hSbtDcH4xKbo-qZMKRnOEbziqS6yZq3prD0OxMkxk"><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight hidden sm:inline-block">CivicHub</span></div><div class="relative flex-1 hidden md:block"><span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span><input class="w-full pl-10 pr-space-md py-2.5 rounded-full bg-surface-container-lowest text-on-surface placeholder:text-outline text-body-sm font-body-sm shadow-[0_2px_8px_rgba(37,43,54,0.04)] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari data desa, metrik, atau penduduk..." type="text"></div></div><div class="flex items-center gap-space-sm"><div class="hidden lg:flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low text-on-surface text-label-md font-label-md"><span class="material-symbols-outlined text-primary text-[16px]">calendar_today</span><span class="">Hari ini, 24 Okt 2024</span></div><div class="relative"><button class="flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-[0_2px_6px_rgba(37,43,54,0.04)] hover:bg-surface-container-high transition-colors" type="button"><span class="material-symbols-outlined text-tertiary text-[16px]">location_on</span><span class="">Semua 12 Desa</span><span class="material-symbols-outlined text-on-surface-variant text-[16px]">expand_more</span></button></div><button aria-label="Notifications" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all relative" type="button"><span class="material-symbols-outlined text-[19px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error ring-2 ring-surface-container-lowest"></span></button><button aria-label="Settings quick access" class="w-9 h-9 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface shadow-[0_2px_6px_rgba(37,43,54,0.04)] transition-all" type="button"><span class="material-symbols-outlined text-[19px]">tune</span></button><div class="flex items-center gap-space-xs pl-space-xs"><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shadow-sm"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></div></header><main class="w-full pt-20 px-gutter-desktop pb-space-xl bg-surface min-h-screen"><div class="flex flex-col w-full gap-space-lg">
<!-- Active Sidebar Highlighter Sync -->
<script>
    (function() {
      const aside = document.querySelector('aside');
      if (aside) {
        const links = aside.querySelectorAll('nav a');
        links.forEach(link => {
          if (link.getAttribute('data-path') === 'pendidikan-kesehatan') {
            link.classList.remove('text-on-surface-variant', 'hover:bg-surface-container-high', 'hover:text-on-surface');
            link.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-[0_4px_12px_rgba(37,43,54,0.18)]');
          }
        });
      }
    })();
  </script>
<!-- 1. Header & Actions Strip -->
<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md">
<div class="flex flex-col gap-1 min-w-0">
<div class="flex items-center gap-space-xs text-label-md font-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="">Sektor Layanan Dasar &amp; Potensi Wilayah</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-bold">Kecamatan Cicalengka</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mt-1">
        Pendidikan, Kesehatan Masyarakat &amp; Potensi Desa
      </h1>
<p class="font-body-md text-body-md text-on-surface-variant">
        Monitoring fasilitas sekolah, rasio tenaga pengajar, faskes terpadu, dan matriks klaster ekonomi 12 desa
      </p>
</div>
<!-- Actions & Badges -->
<div class="flex flex-wrap items-center gap-space-sm"><button id="syncLogPill" type="button" class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed shadow-sm font-label-sm text-label-sm hover:opacity-90 transition-opacity cursor-pointer" title="Klik untuk melihat riwayat sinkronisasi Dapodik &amp; SatuSehat"><span class="material-symbols-outlined text-[16px] text-tertiary">verified</span><span class="">Integrasi Dapodik &amp; SatuSehat 100%</span></button><div class="relative"><button type="button" class="flex items-center gap-space-xs px-3.5 py-2 rounded-xl bg-surface-container-lowest text-on-surface text-label-md font-label-md shadow-sm hover:bg-surface-container-high transition-colors cursor-pointer" id="filterWilayahBtn"><span class="material-symbols-outlined text-[18px] text-secondary">tune</span><span id="klasterBtnLabel" class="">Semua Klaster (12 Desa)</span><span class="material-symbols-outlined text-[16px] text-on-surface-variant">expand_more</span></button><div id="klasterDropdownMenu" class="hidden absolute right-0 mt-2 w-52 bg-surface-container-lowest rounded-xl shadow-[0_8px_24px_-4px_rgba(37,43,54,0.12)] border border-surface-container-high py-2 z-50"><button type="button" data-filter="all" class="dropdown-filter-item w-full text-left px-4 py-2 text-label-md hover:bg-surface-container-low flex items-center justify-between font-bold text-primary"><span class="">Semua Klaster</span><span class="text-[11px] px-2 py-0.5 rounded-full bg-primary-fixed">12</span></button><button type="button" data-filter="agro" class="dropdown-filter-item w-full text-left px-4 py-2 text-label-md hover:bg-surface-container-low flex items-center justify-between text-on-surface"><span class="">Agro &amp; Tani</span><span class="text-[11px] px-2 py-0.5 rounded-full bg-surface-container-high">5</span></button><button type="button" data-filter="industri" class="dropdown-filter-item w-full text-left px-4 py-2 text-label-md hover:bg-surface-container-low flex items-center justify-between text-on-surface"><span class="">Industri &amp; Konveksi</span><span class="text-[11px] px-2 py-0.5 rounded-full bg-surface-container-high">2</span></button><button type="button" data-filter="hub" class="dropdown-filter-item w-full text-left px-4 py-2 text-label-md hover:bg-surface-container-low flex items-center justify-between text-on-surface"><span class="">Perdagangan &amp; Hub</span><span class="text-[11px] px-2 py-0.5 rounded-full bg-surface-container-high">3</span></button><button type="button" data-filter="wisata" class="dropdown-filter-item w-full text-left px-4 py-2 text-label-md hover:bg-surface-container-low flex items-center justify-between text-on-surface"><span class="">Ekowisata</span><span class="text-[11px] px-2 py-0.5 rounded-full bg-surface-container-high">4</span></button></div></div><button id="openGisBtn" class="flex items-center gap-space-xs px-4 py-2 rounded-xl bg-surface-container-lowest text-on-surface hover:bg-surface-container-high transition-all text-label-md font-label-md shadow-sm cursor-pointer" type="button"><span class="material-symbols-outlined text-primary text-[18px]">map</span><span class="">Buka Peta Tematik GIS</span></button><button id="downloadDatasetBtn" class="flex items-center gap-space-xs px-4 py-2 rounded-xl bg-inverse-surface text-inverse-on-surface hover:bg-on-surface transition-all text-label-md font-label-md shadow-[0_4px_12px_rgba(37,43,54,0.18)] cursor-pointer" type="button"><span class="material-symbols-outlined text-[18px]">download</span><span class="">Unduh Dataset Lengkap</span></button></div>
</div>
<!-- 2. Top 4 Metric KPI Cards (Modern CRM Rounded Architecture) -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md">
<!-- Card 1: Vibrant Hero Card (Indigo Gradient) -->
<div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary-container to-primary p-space-lg text-on-primary shadow-[0_14px_30px_-6px_rgba(80,70,229,0.28)] flex flex-col justify-between min-h-[170px]">
<div class="flex items-start justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-primary-container">Layanan Pendidikan</span>
<p class="font-headline-sm text-headline-sm text-on-primary mt-0.5">Lembaga Sekolah</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">school</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-primary">148</span>
<span class="font-body-md text-body-md text-on-primary-container">Unit Sekolah</span>
</div>
<div class="mt-2.5 flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container-lowest/20 text-on-primary text-label-sm font-label-sm backdrop-blur-sm">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-fixed"></span>
            34 Negeri, 114 Swasta
          </span>
<span class="text-label-sm text-on-primary-container">PAUD - SMK</span>
</div>
</div>
</div>
<!-- Card 2: Total Siswa Aktif -->
<div class="relative rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between min-h-[170px]">
<div class="flex items-start justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Kapasitas Didik</span>
<p class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Siswa Terdaftar</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">groups</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">28.450</span>
<span class="font-body-md text-body-md text-on-surface-variant">Pelajar Aktif</span>
</div>
<div class="mt-2.5 flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[13px]">check_circle</span>
            Rasio 1:20 (Optimal)
          </span>
<span class="text-label-sm text-on-surface-variant">1.420 Guru Bersertifikat</span>
</div>
</div>
</div>
<!-- Card 3: Fasilitas Kesehatan -->
<div class="relative rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between min-h-[170px]">
<div class="flex items-start justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Infrastruktur Medis</span>
<p class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Fasilitas Kesehatan</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">local_hospital</span>
</div>
</div>
<div class="mt-4">
<div class="flex items-baseline gap-2">
<span class="font-metric-display text-metric-display font-extrabold text-on-surface">1 RSUD <span class="text-secondary font-medium text-headline-md">| 2 Puskesmas</span></span>
</div>
<div class="mt-2.5 flex items-center gap-2">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[13px] text-tertiary">hotel</span>
            195 TT Rawat Inap
          </span>
<span class="text-label-sm text-on-surface-variant">142 Posyandu RW Aktif</span>
</div>
</div>
</div>
<!-- Card 4: Indeks Desa Mandiri (IDM) -->
<div class="relative rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between min-h-[170px]">
<div class="flex items-start justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Pemberdayaan Wilayah</span>
<p class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Indeks Desa Mandiri</p>
</div>
<div class="w-8 h-8 rounded-full bg-surface-container-high text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">trending_up</span>
</div>
</div>
<div class="mt-2 flex items-center gap-3">
<div class="flex-1">
<div class="flex items-baseline gap-1.5 flex-wrap">
<span class="px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed font-headline-sm text-headline-sm font-bold">3 Mandiri</span>
<span class="px-2 py-0.5 rounded-md bg-primary-fixed text-on-primary-fixed-variant font-headline-sm text-headline-sm font-bold">7 Maju</span>
<span class="px-2 py-0.5 rounded-md bg-secondary-fixed text-on-secondary-fixed font-headline-sm text-headline-sm font-bold">2 Berkembang</span>
</div>
<div class="mt-2 flex items-center justify-between">
<span class="inline-flex items-center gap-1 text-label-sm text-tertiary font-bold">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
            0 Tertinggal
          </span>
<span class="text-[11px] text-on-surface-variant">Target 100% 2025</span>
</div>
</div>
<!-- Interactive Micro Doughnut for Village Status Breakdown -->
<div class="w-14 h-14 relative flex-shrink-0" title="Distribusi Status IDM: 3 Mandiri, 7 Maju, 2 Berkembang">
<canvas id="villageStatusChart" width="56" height="56" style="display: block; box-sizing: border-box; height: 56px; width: 56px;"></canvas>
</div>
</div>
</div>
</div>
<!-- 3. Middle Section: Asymmetric 2-Column Grid (Pendidikan vs Kesehatan) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Kolom Kiri: Metrik Pendidikan (7 Cols) -->
<div class="lg:col-span-7 rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">menu_book</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Metrik Pendidikan: Jenjang, Guru &amp; Siswa</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Distribusi kapasitas dan keseimbangan rasio beban pengajar per tingkat</p>
</div>
</div>
<button class="w-8 h-8 rounded-full bg-inverse-surface text-inverse-on-surface flex items-center justify-center shadow-sm hover:scale-105 transition-transform" title="Detail Dapodik">
<span class="material-symbols-outlined text-[16px]">north_east</span>
</button>
</div>
<!-- Interactive Multi-Bar Chart (Chart.js) -->
<div class="p-3.5 rounded-xl bg-surface-container-low mb-space-md">
<div class="flex items-center justify-between mb-2">
<span class="text-label-md font-bold text-on-surface">Komparasi Siswa &amp; Guru per Jenjang</span>
<div class="flex items-center gap-3 text-label-sm">
<span class="inline-flex items-center gap-1.5 text-on-surface"><span class="w-2.5 h-2.5 rounded-sm bg-primary"></span> Siswa Aktif</span>
<span class="inline-flex items-center gap-1.5 text-on-surface"><span class="w-2.5 h-2.5 rounded-sm bg-tertiary"></span> Tenaga Guru (x10)</span>
</div>
</div>
<div class="relative h-44 w-full">
<canvas id="educationMetricsChart" width="590" height="176" style="display: block; box-sizing: border-box; height: 176px; width: 590.7px;"></canvas>
</div>
</div>
<!-- Jenjang Breakdown Quick Cards -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5">
<!-- PAUD / TK -->
<div class="p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-primary-container"></span>
<span class="font-label-md text-label-md text-on-surface font-bold">PAUD / TK</span>
</div>
<div class="mt-2 space-y-0.5 text-body-sm text-on-surface-variant">
<div class="text-[11px]">54 Lembaga</div>
<div class="text-[11px] font-semibold text-on-surface">4.200 Siswa</div>
<div class="text-[11px] text-tertiary font-bold">Rasio 1:15</div>
</div>
</div>
<!-- SD / MI -->
<div class="p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<span class="font-label-md text-label-md text-on-surface font-bold">SD / MI</span>
</div>
<div class="mt-2 space-y-0.5 text-body-sm text-on-surface-variant">
<div class="text-[11px]">56 Sekolah</div>
<div class="text-[11px] font-semibold text-on-surface">13.800 Siswa</div>
<div class="text-[11px] text-on-surface-variant font-bold">Rasio 1:22</div>
</div>
</div>
<!-- SMP / MTs -->
<div class="p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span class="font-label-md text-label-md text-on-surface font-bold">SMP / MTs</span>
</div>
<div class="mt-2 space-y-0.5 text-body-sm text-on-surface-variant">
<div class="text-[11px]">22 Sekolah</div>
<div class="text-[11px] font-semibold text-on-surface">6.450 Siswa</div>
<div class="text-[11px] text-tertiary font-bold">Rasio 1:20</div>
</div>
</div>
<!-- SMA / SMK / MA -->
<div class="p-3 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<span class="font-label-md text-label-md text-on-surface font-bold">SMA / SMK</span>
</div>
<div class="mt-2 space-y-0.5 text-body-sm text-on-surface-variant">
<div class="text-[11px]">16 Lembaga</div>
<div class="text-[11px] font-semibold text-on-surface">4.000 Siswa</div>
<div class="text-[11px] text-primary-container font-bold">Rasio 1:19</div>
</div>
</div>
</div>
</div>
<!-- Banner Capaian Rata-Rata -->
<div class="mt-space-md p-3.5 rounded-xl bg-surface-container flex items-center justify-between gap-3">
<div class="flex items-center gap-2.5">
<span class="material-symbols-outlined text-primary text-[22px]">verified_user</span>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Rata-rata Rasio Cicalengka: 1:20</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Batas Maksimal Permendikbudristek No 47/2023: 1:28 • Standar Pendidikan Terpenuhi Sangat Baik.</p>
</div>
</div>
<span class="px-3 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm shadow-sm whitespace-nowrap">Status Baik</span>
</div>
</div>
<!-- Kolom Kanan: Kapasitas Faskes & Zero Stunting (5 Cols) -->
<div class="lg:col-span-5 rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-[22px]">health_and_safety</span>
</div>
<div>
<h2 class="font-headline-md text-headline-md text-on-surface">Kapasitas Faskes &amp; Zero Stunting</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kesiapan rujukan, jejaring puskesmas &amp; posyandu</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
</div>
<!-- RSUD Cicalengka Card -->
<div class="p-space-sm rounded-xl bg-surface-container-low mb-3">
<div class="flex items-start justify-between">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-lg bg-primary-fixed text-on-primary-fixed-variant flex items-center justify-center font-bold text-label-md">
                RS
              </div>
<div>
<p class="font-headline-sm text-headline-sm text-on-surface">RSUD Cicalengka (Tipe C)</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pusat Rujukan Bandung Timur</p>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm">IGD 24 Jam</span>
</div>
<div class="grid grid-cols-2 gap-2 mt-3 pt-2 border-t-0 bg-surface-container-lowest/80 rounded-lg p-2 text-body-sm">
<div class="flex items-center gap-1.5 text-on-surface">
<span class="material-symbols-outlined text-primary text-[16px]">single_bed</span>
<span class=""><strong>180</strong> Bed Pasien</span>
</div>
<div class="flex items-center gap-1.5 text-on-surface">
<span class="material-symbols-outlined text-tertiary text-[16px]">stethoscope</span>
<span class=""><strong>24</strong> Dokter Spesialis</span>
</div>
</div>
</div>
<!-- 2 Puskesmas Induk & DTP -->
<div class="grid grid-cols-2 gap-2.5 mb-3">
<div class="p-3 rounded-xl bg-surface-container-low">
<p class="font-label-md text-label-md text-on-surface font-bold">Puskesmas Cicalengka DTP</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Rawat Inap 15 Bed</p>
<span class="inline-block mt-2 px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold">Paripurna Kemenkes</span>
</div>
<div class="p-3 rounded-xl bg-surface-container-low">
<p class="font-label-md text-label-md text-on-surface font-bold">Puskesmas Sawahdadap</p>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Layanan Satelit Rawat Jalan</p>
<span class="inline-block mt-2 px-2 py-0.5 rounded-md bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold">Terakreditasi Utama</span>
</div>
</div>
<!-- Interactive Chart.js Radial / Doughnut Card for Zero Stunting -->
<div class="p-3.5 rounded-xl bg-gradient-to-r from-surface-container-low to-surface-container-high">
<div class="flex items-center justify-between mb-2">
<span class="font-label-md text-label-md text-on-surface font-bold">142 Posyandu RW Terpadu</span>
<span class="font-label-sm text-label-sm text-tertiary font-bold">Target Zero Stunting 2025</span>
</div>
<div class="flex items-center gap-4">
<!-- Doughnut Gauge Chart Container -->
<div class="relative w-28 h-28 flex-shrink-0 flex items-center justify-center">
<canvas id="stuntingGaugeChart" width="112" height="112" style="display: block; box-sizing: border-box; height: 112px; width: 112px;"></canvas>
<div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
<span class="font-headline-md text-[18px] font-extrabold text-tertiary leading-none">3.8%</span>
<span class="text-[10px] font-bold text-on-surface-variant mt-0.5">Stunting</span>
</div>
</div>
<div class="flex-1 space-y-2 text-body-sm">
<div class="p-2 rounded-lg bg-surface-container-lowest/80">
<div class="flex justify-between items-center text-[11px] mb-1">
<span class="text-on-surface-variant">Imunisasi Lengkap</span>
<span class="font-bold text-tertiary">96.4%</span>
</div>
<div class="w-full bg-surface-container-highest h-1.5 rounded-full overflow-hidden">
<div class="bg-tertiary h-full rounded-full" style="width: 96.4%;"></div>
</div>
</div>
<div class="p-2 rounded-lg bg-surface-container-lowest/80">
<div class="flex justify-between items-center text-[11px]">
<span class="text-on-surface-variant">Batas Toleransi Nasional</span>
<span class="font-bold text-on-surface">&lt; 14.0%</span>
</div>
<p class="text-[10px] text-tertiary font-semibold mt-0.5">Surplus terkendali: -10.2% di bawah batas</p>
</div>
</div>
</div>
</div>
</div>
<!-- Quick Action / Hotline -->
<div class="mt-4 pt-3 flex items-center justify-between text-label-md text-on-surface-variant"><button id="hotlineBtn" type="button" class="flex items-center gap-1.5 hover:text-primary transition-colors cursor-pointer text-left"><span class="material-symbols-outlined text-primary text-[16px]">call</span><span class="">Hotline Call Center IGD: 119 / (022) 7951234</span></button><button id="infoAlurPasienBtn" type="button" class="text-primary font-bold hover:underline cursor-pointer flex items-center gap-1"><span class="">Info Alur Pasien</span><span class="material-symbols-outlined text-[15px]">arrow_forward</span></button></div>
</div>
</div>
<!-- 4. Bottom Section: Matriks Potensi Unggulan Ekonomi 12 Desa -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_8px_24px_-4px_rgba(37,43,54,0.04)] flex flex-col gap-space-lg">
<!-- Section Top Header & Filters -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm uppercase">Klaster Ekonomi Desa</span>
<span class="text-on-surface-variant text-body-sm">• Basis Data BPS &amp; Kemendesa 2024</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mt-1">Matriks Potensi Unggulan 12 Desa</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Pemetaan komoditas strategis, tipologi geografis, dan profil kemandirian desa</p>
</div>
<!-- Filter Tabs Pills -->
<div class="flex items-center gap-1.5 p-1 rounded-full bg-surface-container-low overflow-x-auto" id="desaFilterTabs">
<button class="filter-tab active px-3.5 py-1.5 rounded-full bg-inverse-surface text-inverse-on-surface font-label-md text-label-md shadow-sm transition-all" data-filter="all">Semua Desa (12)</button>
<button class="filter-tab px-3.5 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all" data-filter="agro">Agro &amp; Tani</button>
<button class="filter-tab px-3.5 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all" data-filter="industri">Industri &amp; Konveksi</button>
<button class="filter-tab px-3.5 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all" data-filter="hub">Perdagangan &amp; Hub</button>
<button class="filter-tab px-3.5 py-1.5 rounded-full text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all" data-filter="wisata">Ekowisata</button>
</div>
</div>
<!-- Mini Visual Photo Highlights (3 Thematic Cards) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md"><div class="thematic-card relative overflow-hidden rounded-2xl h-44 shadow-sm group cursor-pointer" data-title="Lumbung Padi Organik Waluya &amp; Dampit" data-sector="Agrikultur &amp; Pangan" data-prod="1.450 Ton Gabah / Musim" data-market="Pasar Induk Gedebage &amp; Retail Beras Organik Bandung Raya" data-contact="Kelompok Tani Waluya Bersemi (0812-3344-5566)" data-desc="Klaster agrikultur terpadu dengan integrasi irigasi mikro bersumber dari mata air Cikareumbi. Menyuplai sertifikasi beras organik Grade-A untuk pasar modern dan katering sekolah program MBG."><img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Lumbung Padi Waluya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnhEPel3FPodr5sLcCVd6VC2LRMfBkIBHj5HP-msedYTzECoNlWp8xsGWeXZfJK-D_S2f7qg3eXjhuOMNsgyFXKoFcHc5xIO7uCRXRee7AZ6dV72PoPpe_MT-yv3mmqzzZJGapraBbL1Ik476ZaI5mliYhzgGKTHt9uKzcIbwtfy-qOILxotJC75rzUCWEcWBZ6dY2x6ZrPcUVY7WItkJqNhh6IA94LE2JvZ2DHseN3i7AgWEwlyCK"><div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/90 via-inverse-surface/40 to-transparent"></div><div class="absolute bottom-0 left-0 right-0 p-4 text-inverse-on-surface"><div class="flex items-center justify-between mb-1"><span class="px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm uppercase font-bold">Agrikultur &amp; Pangan</span><span class="text-[11px] underline opacity-90">Buka Dossier ↗</span></div><p class="font-headline-sm text-headline-sm mt-1">Lumbung Padi Organik Waluya &amp; Dampit</p><p class="font-body-sm text-body-sm text-surface-container-high opacity-90 line-clamp-1">Produksi 1.450 ton gabah/musim dengan sertifikasi organik bersubsidi</p></div></div><div class="thematic-card relative overflow-hidden rounded-2xl h-44 shadow-sm group cursor-pointer" data-title="Sentra Bordir &amp; Konveksi Tenjolaya" data-sector="Kreatif &amp; Tekstil" data-prod="320 Bengkel Aktif (78.000 Pcs/Bulan)" data-market="Pasar Grosir Tanah Abang Jakarta, Tegal Gubug &amp; Ekspor Malaysia" data-contact="Koperasi Kerajinan Bordir Mandiri Tenjolaya (0821-4455-6677)" data-desc="Pusat kerajinan bordir komputer dan manual terpadu yang mempekerjakan lebih dari 1.800 warga setempat. Memiliki kapasitas serapan suplai tekstil berskala nasional."><img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Sentra Bordir Tenjolaya" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDniCWteacklSqC8a05-9tzPCeMSfDcQ_2bvQwTG59ZcSnpmD0zpsxszHvcE-7EXZNgsrEsrrsvfutEf5J3PR4MYyItnvPlXYWb_zO1hyIrEVSPMS1eRncasKGUXoR3eujZA-1tMnN0NmHsTwnzWmoCvecS1-d0OVEtNWwTTdW3ObLcXjxj6_RnNawBkUU8ZeN7KutSvA-EJ90KDE1n_9wVE9yXYZ_zK5OND_h0aJE87J7ehF3PAXP1"><div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/90 via-inverse-surface/40 to-transparent"></div><div class="absolute bottom-0 left-0 right-0 p-4 text-inverse-on-surface"><div class="flex items-center justify-between mb-1"><span class="px-2 py-0.5 rounded-md bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm uppercase font-bold">Kreatif &amp; Tekstil</span><span class="text-[11px] underline opacity-90">Buka Dossier ↗</span></div><p class="font-headline-sm text-headline-sm mt-1">Sentra Bordir &amp; Konveksi Tenjolaya</p><p class="font-body-sm text-body-sm text-surface-container-high opacity-90 line-clamp-1">320 bengkel UMKM aktif memasok busana muslim Pasar Tanah Abang &amp; Ekspor</p></div></div><div class="thematic-card relative overflow-hidden rounded-2xl h-44 shadow-sm group cursor-pointer" data-title="Ekowisata Curug Cinulang &amp; Kareumbi" data-sector="Pariwisata Alam" data-prod="24.000 Wisatawan / Triwulan" data-market="Wisatawan Domestik Jabodetabek &amp; Bandung Raya" data-contact="POKDARWIS Pesona Curug Nagrog (0813-7788-9900)" data-desc="Zona ekowisata perbatasan Cicalengka-Sumedang yang mengintegrasikan air terjun kembar, outbound hutan lindung Masigit Kareumbi, sentra kedai kopi robusta lokal, dan konservasi rusa tutul."><img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Curug Cinulang" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxFo2bSVq6zMXqz7se_Sa094BGvUvYTbOCDlfr2zyAR39trDYeuk_XWsej_4IKZxVjhlViD7qw-DtFGF8j8MvjetpVcuMNGknYZLLrr-JSKB_swuuRwL8E6djcdNim1o2-EVM1x7yGxh4trBNredtV_51em4A3tWWU7Q3oB-KKUmYuZYddA9_Jyl8PotbH8J-ePGbaSSQA58zMOdIt93MVSsX9_OwUqt0Sw8_pHiycEytIRNlz_3wG"><div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/90 via-inverse-surface/40 to-transparent"></div><div class="absolute bottom-0 left-0 right-0 p-4 text-inverse-on-surface"><div class="flex items-center justify-between mb-1"><span class="px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm uppercase font-bold">Pariwisata Alam</span><span class="text-[11px] underline opacity-90">Buka Dossier ↗</span></div><p class="font-headline-sm text-headline-sm mt-1">Ekowisata Curug Cinulang &amp; Kareumbi</p><p class="font-body-sm text-body-sm text-surface-container-high opacity-90 line-clamp-1">Kawasan konservasi alam terpadu, camping ground, dan agrowisata kopi</p></div></div></div>
<!-- 12 Desa Modern Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-space-md cursor-pointer" id="desaCardsGrid">
<!-- 1. Cicalengka Kulon -->
<div class="desa-card hub p- space-md rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between p-4" data-category="hub">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm font-bold">Mandiri</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.892</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Cicalengka Kulon</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">storefront</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Pusat Perdagangan, UMKM Keripik Tempe, Grosir &amp; Fashion</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>142 Ha</strong></span>
<span class="">Populasi: <strong>11.840 Jiwa</strong></span>
<span class="text-tertiary font-bold">14 Posyandu</span>
</div>
</div>
<!-- 2. Cicalengka Wetan -->
<div class="desa-card hub p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="hub">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm font-bold">Mandiri</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.914</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Cicalengka Wetan</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">train</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Stasiun Commuter Line KA Cicalengka, Hub Logistik, Jasa Medis</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>168 Ha</strong></span>
<span class="">Populasi: <strong>13.210 Jiwa</strong></span>
<span class="text-tertiary font-bold">16 Posyandu</span>
</div>
</div>
<!-- 3. Waluya -->
<div class="desa-card agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="agro">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.785</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Waluya</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">agriculture</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Pertanian Padi Organik, Gabungan Kelompok Tani &amp; Pasar Agro</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>245 Ha</strong></span>
<span class="">Populasi: <strong>8.950 Jiwa</strong></span>
<span class="text-tertiary font-bold">11 Posyandu</span>
</div>
</div>
<!-- 4. Tenjolaya -->
<div class="desa-card industri p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="industri">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm font-bold">Mandiri</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.865</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Tenjolaya</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-primary-container flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">styler</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Sentra Bordir Tradisional, Konveksi Mukena, Gamis &amp; Pakaian Anak</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>190 Ha</strong></span>
<span class="">Populasi: <strong>10.420 Jiwa</strong></span>
<span class="text-tertiary font-bold">13 Posyandu</span>
</div>
</div>
<!-- 5. Babakan Peuteuy -->
<div class="desa-card industri agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="industri">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.762</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Babakan Peuteuy</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-on-surface flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">bakery_dining</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Olahan Makanan Tradisional (Wajit &amp; Ranginang), Padi Sawah Basah</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>210 Ha</strong></span>
<span class="">Populasi: <strong>9.130 Jiwa</strong></span>
<span class="text-tertiary font-bold">12 Posyandu</span>
</div>
</div>
<!-- 6. Cikuya -->
<div class="desa-card agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="agro">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.748</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Cikuya</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">spa</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Sentra Sayuran Daun, Greenhouse Hidroponik, Peternakan Unggas</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>285 Ha</strong></span>
<span class="">Populasi: <strong>7.820 Jiwa</strong></span>
<span class="text-tertiary font-bold">10 Posyandu</span>
</div>
</div>
<!-- 7. Panenjoan -->
<div class="desa-card hub p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="hub">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.771</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Panenjoan</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">apartment</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Kawasan Pemukiman Terpadu, Koridor Kuliner Khas Sunda, Jasa Pendidikan</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>175 Ha</strong></span>
<span class="">Populasi: <strong>12.600 Jiwa</strong></span>
<span class="text-tertiary font-bold">15 Posyandu</span>
</div>
</div>
<!-- 8. Margaasih -->
<div class="desa-card agro wisata p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="agro">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.739</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Margaasih</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">nature</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Agrowisata Buah Petik Sendiri, Perikanan Kolam Air Tawar &amp; Padi</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>220 Ha</strong></span>
<span class="">Populasi: <strong>8.400 Jiwa</strong></span>
<span class="text-tertiary font-bold">11 Posyandu</span>
</div>
</div>
<!-- 9. Nagrog -->
<div class="desa-card wisata p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="wisata">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.722</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Nagrog</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary-container flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">waterfall_chart</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Objek Wisata Curug Cinulang, Perkebunan Kopi Lereng Kareumbi</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>360 Ha</strong></span>
<span class="">Populasi: <strong>6.710 Jiwa</strong></span>
<span class="text-tertiary font-bold">9 Posyandu</span>
</div>
</div>
<!-- 10. Dampit -->
<div class="desa-card wisata agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="wisata">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-label-sm font-label-sm font-bold">Maju</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.710</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Dampit</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">terrain</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Kopi Robusta Pegunungan &amp; Destinasi Wisata Panorama Bukit Teletubbies</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>412 Ha</strong></span>
<span class="">Populasi: <strong>5.980 Jiwa</strong></span>
<span class="text-tertiary font-bold">8 Posyandu</span>
</div>
</div>
<!-- 11. Tanjungwangi -->
<div class="desa-card wisata agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="wisata">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm font-bold">Berkembang</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.684</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Tanjungwangi</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-secondary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">forest</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Ekowisata Hutan Pinus, Budidaya Madu Alami, Hasil Kebun Palawija</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>520 Ha</strong></span>
<span class="">Populasi: <strong>5.120 Jiwa</strong></span>
<span class="text-tertiary font-bold">7 Posyandu</span>
</div>
</div>
<!-- 12. Narawita -->
<div class="desa-card agro p-4 rounded-2xl bg-surface-container-low hover:bg-surface-container transition-all flex flex-col justify-between" data-category="agro">
<div class="flex items-start justify-between">
<div>
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm font-bold">Berkembang</span>
<span class="text-label-sm text-on-surface-variant">IDM 0.672</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mt-1.5">Desa Narawita</h3>
</div>
<div class="w-8 h-8 rounded-xl bg-surface-container-lowest text-tertiary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[18px]">eco</span>
</div>
</div>
<div class="mt-3">
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium">Potensi Unggulan:</p>
<p class="font-body-md text-body-md text-on-surface font-semibold">Pertanian Tembakau Tradisional, Hortikultura Cabai &amp; Bawang</p>
</div>
<div class="flex items-center justify-between pt-3 mt-3 border-t-0 bg-surface-container-lowest/60 rounded-xl p-2 text-label-sm text-on-surface-variant">
<span class="">Luas: <strong>310 Ha</strong></span>
<span class="">Populasi: <strong>6.350 Jiwa</strong></span>
<span class="text-tertiary font-bold">8 Posyandu</span>
</div>
</div>
</div>
</div>
<!-- Interactive JavaScript Filter Tabs & Chart.js Initializations -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Filter Tabs for 12 Village Potential Cards
      const filterButtons = document.querySelectorAll('#desaFilterTabs .filter-tab');
      const cards = document.querySelectorAll('#desaCardsGrid .desa-card');

      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          filterButtons.forEach(b => {
            b.classList.remove('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-sm');
            b.classList.add('text-on-surface-variant');
          });
          btn.classList.add('bg-inverse-surface', 'text-inverse-on-surface', 'shadow-sm');
          btn.classList.remove('text-on-surface-variant');

          const category = btn.getAttribute('data-filter');

          cards.forEach(card => {
            if (category === 'all') {
              card.style.display = 'flex';
            } else {
              if (card.classList.contains(category)) {
                card.style.display = 'flex';
              } else {
                card.style.display = 'none';
              }
            }
          });
        });
      });

      // 2. Chart.js: Mini Doughnut for Village IDM Status
      const villageCtx = document.getElementById('villageStatusChart');
      if (villageCtx) {
        new Chart(villageCtx, {
          type: 'doughnut',
          data: {
            labels: ['Mandiri (3)', 'Maju (7)', 'Berkembang (2)'],
            datasets: [{
              data: [3, 7, 2],
              backgroundColor: ['#6ffbbe', '#c3c0ff', '#dae0ee'],
              borderColor: '#ffffff',
              borderWidth: 2,
              hoverOffset: 3
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return ` ${context.label}: ${context.raw} Desa`;
                  }
                }
              }
            },
            cutout: '68%'
          }
        });
      }

      // 3. Chart.js: Education Multi-Bar Chart
      const eduCtx = document.getElementById('educationMetricsChart');
      if (eduCtx) {
        new Chart(eduCtx, {
          type: 'bar',
          data: {
            labels: ['PAUD / TK', 'SD / MI', 'SMP / MTs', 'SMA / SMK'],
            datasets: [
              {
                label: 'Siswa Aktif',
                data: [4200, 13800, 6450, 4000],
                backgroundColor: '#3625cd',
                borderRadius: 6,
                barPercentage: 0.6,
                categoryPercentage: 0.65
              },
              {
                label: 'Pendidik / Guru (x10)',
                data: [2800, 6200, 3100, 2100], // scaled x10 for clear visual comparison alongside student count
                backgroundColor: '#005338',
                borderRadius: 6,
                barPercentage: 0.6,
                categoryPercentage: 0.65
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
              mode: 'index',
              intersect: false,
            },
            plugins: {
              legend: { display: false },
              tooltip: {
                backgroundColor: '#2b313c',
                titleFont: { family: 'Plus Jakarta Sans', size: 12, weight: 'bold' },
                bodyFont: { family: 'Plus Jakarta Sans', size: 11 },
                padding: 10,
                cornerRadius: 8,
                callbacks: {
                  label: function(context) {
                    if (context.datasetIndex === 1) {
                      return ` Guru Riil: ${(context.raw / 10).toLocaleString('id-ID')} Orang`;
                    }
                    return ` Siswa: ${context.raw.toLocaleString('id-ID')} Murid`;
                  }
                }
              }
            },
            scales: {
              x: {
                grid: { display: false },
                ticks: {
                  font: { family: 'Plus Jakarta Sans', size: 11, weight: '600' },
                  color: '#464555'
                }
              },
              y: {
                beginAtZero: true,
                grid: { color: 'rgba(218, 224, 238, 0.45)' },
                ticks: {
                  font: { family: 'Plus Jakarta Sans', size: 10 },
                  color: '#5d636f',
                  callback: function(value) {
                    return value >= 1000 ? (value / 1000) + 'k' : value;
                  }
                }
              }
            }
          }
        });
      }

      // 4. Chart.js: Health Stunting Rate Gauge / Doughnut Chart
      const stuntingCtx = document.getElementById('stuntingGaugeChart');
      if (stuntingCtx) {
        new Chart(stuntingCtx, {
          type: 'doughnut',
          data: {
            labels: ['Prevalensi Terdata', 'Batas Aman Nasional', 'Sisa Populasi Balita Sehat'],
            datasets: [{
              data: [3.8, 10.2, 86.0],
              backgroundColor: ['#ba1a1a', '#dae0ee', '#006e4b'],
              borderWidth: 0,
              hoverOffset: 2
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return ` ${context.label}: ${context.raw}%`;
                  }
                }
              }
            },
            cutout: '74%'
          }
        });
      }
    });
  </script>
</div></main></div>

<div id="interactiveModalBackdrop" class="fixed inset-0 bg-inverse-surface/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4 transition-all"><div id="interactiveModalContent" class="bg-surface-container-lowest rounded-2xl shadow-[0_14px_30px_-6px_rgba(80,70,229,0.28)] max-w-2xl w-full p-space-lg relative max-h-[90vh] overflow-y-auto transform transition-all scale-95 opacity-0"><button id="closeModalBtn" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-container-highest flex items-center justify-center text-on-surface-variant transition-colors"><span class="material-symbols-outlined text-[18px]">close</span></button><div id="modalDynamicBody"></div></div></div><div id="toastNotice" class="fixed bottom-6 right-6 z-50 hidden items-center gap-3 px-4 py-3 rounded-xl bg-inverse-surface text-inverse-on-surface shadow-[0_4px_12px_rgba(37,43,54,0.18)] text-label-md transition-all"><span id="toastIcon" class="material-symbols-outlined text-tertiary-fixed text-[20px]">check_circle</span><span id="toastMessage" class="">Pemberitahuan</span></div><script>
(function() {
  function showToast(msg, icon) {
    const toast = document.getElementById('toastNotice');
    const toastMsg = document.getElementById('toastMessage');
    const toastIcon = document.getElementById('toastIcon');
    if (!toast) return;
    toastMsg.textContent = msg;
    toastIcon.textContent = icon || 'check_circle';
    toast.classList.remove('hidden');
    toast.classList.add('flex');
    setTimeout(() => {
      toast.classList.remove('flex');
      toast.classList.add('hidden');
    }, 3200);
  }

  const modalBackdrop = document.getElementById('interactiveModalBackdrop');
  const modalContent = document.getElementById('interactiveModalContent');
  const modalBody = document.getElementById('modalDynamicBody');
  const closeModalBtn = document.getElementById('closeModalBtn');

  function openModal(htmlContent) {
    if (!modalBackdrop || !modalBody) return;
    modalBody.innerHTML = htmlContent;
    modalBackdrop.classList.remove('hidden');
    setTimeout(() => {
      modalContent.classList.remove('scale-95', 'opacity-0');
      modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);
  }

  function closeModal() {
    if (!modalBackdrop) return;
    modalContent.classList.add('scale-95', 'opacity-0');
    modalContent.classList.remove('scale-100', 'opacity-100');
    setTimeout(() => {
      modalBackdrop.classList.add('hidden');
    }, 200);
  }

  if (closeModalBtn) {
    closeModalBtn.addEventListener('click', closeModal);
  }
  if (modalBackdrop) {
    modalBackdrop.addEventListener('click', (e) => {
      if (e.target === modalBackdrop) closeModal();
    });
  }

  // 1. GIS Map Modal Trigger
  const openGisBtn = document.getElementById('openGisBtn');
  if (openGisBtn) {
    openGisBtn.addEventListener('click', () => {
      showToast('Membuka Peta Tematik GIS Cicalengka...', 'map');
      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">layers</span>
          </div>
          <div>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Peta Geospasial Tematik Kecamatan Cicalengka</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Integrasi Layer Spasial: Fasilitas Pendidikan, Faskes & Klaster Ekonomi</p>
          </div>
        </div>
        <div class="w-full h-64 bg-surface-container-high rounded-xl overflow-hidden relative flex flex-col items-center justify-center p-4 border border-surface-container-highest">
          <div class="absolute inset-0 opacity-40 bg-[radial-gradient(#3625cd_1px,transparent_1px)] [background-size:16px_16px]"></div>
          <div class="relative z-10 flex flex-col items-center text-center">
            <span class="material-symbols-outlined text-primary text-[48px] animate-pulse">public</span>
            <p class="font-headline-sm font-bold text-on-surface mt-2">Layer Tematik Terhubung: 12 Polygon Desa Aktif</p>
            <p class="text-body-sm text-on-surface-variant mt-1 max-w-md">Menampilkan 148 Titik Sekolah (PAUD-SMK), 1 RSUD, 2 Puskesmas, dan 142 Posyandu RW</p>
          </div>
          <div class="absolute bottom-3 left-3 bg-surface-container-lowest/90 px-3 py-1 rounded-full text-label-sm font-bold shadow-sm flex items-center gap-1.5 text-tertiary">
            <span class="w-2 h-2 rounded-full bg-tertiary animate-ping"></span> Live GPS Tracker SatuSehat
          </div>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-4 text-center">
          <div class="p-3 rounded-xl bg-surface-container-low"><div class="text-label-sm text-on-surface-variant">Radius RSUD Cicalengka</div><div class="font-headline-sm font-bold text-on-surface">12 Menit Rujukan</div></div>
          <div class="p-3 rounded-xl bg-surface-container-low"><div class="text-label-sm text-on-surface-variant">Cakupan Puskesmas</div><div class="font-headline-sm font-bold text-tertiary">100% Terlayani</div></div>
          <div class="p-3 rounded-xl bg-surface-container-low"><div class="text-label-sm text-on-surface-variant">Akses Sekolah SD-SMP</div><div class="font-headline-sm font-bold text-primary">&lt; 1.5 KM / Desa</div></div>
        </div>
      `);
    });
  }

  // 2. Download Dataset Button
  const downloadBtn = document.getElementById('downloadDatasetBtn');
  if (downloadBtn) {
    downloadBtn.addEventListener('click', () => {
      showToast('Mengunduh Dataset_Pendidikan_Kesehatan_Potensi_12Desa.xlsx...', 'download_done');
    });
  }

  // 3. Sync Log Pill Modal
  const syncPill = document.getElementById('syncLogPill');
  if (syncPill) {
    syncPill.addEventListener('click', () => {
      showToast('Menampilkan Log Sinkronisasi API', 'sync');
      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">cloud_done</span>
          </div>
          <div>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Status Integrasi API Dapodik & SatuSehat</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Sinkronisasi Realtime Terakhir: Hari ini, 08:30 WIB</p>
          </div>
        </div>
        <div class="space-y-3">
          <div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-primary">school</span>
              <div>
                <div class="font-headline-sm text-headline-sm">Dapodik Kemendikbudristek</div>
                <div class="text-body-sm text-on-surface-variant">148 Satuan Pendidikan (100% Terverifikasi)</div>
              </div>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-bold">Normal 200 OK</span>
          </div>
          <div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-tertiary">health_and_safety</span>
              <div>
                <div class="font-headline-sm text-headline-sm">Kemenkes SatuSehat FHIR</div>
                <div class="text-body-sm text-on-surface-variant">RSUD Cicalengka, 2 Puskesmas, 142 Posyandu</div>
              </div>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-bold">Normal 200 OK</span>
          </div>
        </div>
      `);
    });
  }

  // 4. Hotline IGD Trigger
  const hotlineBtn = document.getElementById('hotlineBtn');
  if (hotlineBtn) {
    hotlineBtn.addEventListener('click', () => {
      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-error/10 text-error flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">emergency</span>
          </div>
          <div>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Panggilan Darurat Medis & IGD</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Pusat Komando Siaga 24 Jam Kecamatan Cicalengka</p>
          </div>
        </div>
        <div class="p-4 rounded-xl bg-error-container/40 border border-error/20 mb-4">
          <p class="text-body-md text-on-error-container font-semibold">Hubungi operator siaga ambulans dan penjemputan darurat pasien:</p>
          <div class="flex items-center gap-3 mt-3">
            <a href="tel:119" class="px-4 py-2 rounded-xl bg-error text-on-error font-bold text-label-md flex items-center gap-2 shadow-sm">
              <span class="material-symbols-outlined text-[18px]">call</span> Dial 119 (Bebas Pulsa)
            </a>
            <a href="tel:0227951234" class="px-4 py-2 rounded-xl bg-surface-container-lowest text-on-surface font-bold text-label-md flex items-center gap-2 border border-surface-container-high">
              (022) 7951234 (IGD RSUD)
            </a>
          </div>
        </div>
      `);
    });
  }

  // 5. Patient Pathway Modal Trigger
  const infoAlurPasienBtn = document.getElementById('infoAlurPasienBtn');
  if (infoAlurPasienBtn) {
    infoAlurPasienBtn.addEventListener('click', () => {
      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">conversion_path</span>
          </div>
          <div>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">Alur Rujukan Terpadu Faskes Cicalengka</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Mekanisme Penanganan Pasien BPJS & Umum</p>
          </div>
        </div>
        <div class="space-y-3">
          <div class="p-3.5 rounded-xl bg-surface-container-low flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-label-sm">1</span>
            <div>
              <p class="font-bold text-on-surface text-headline-sm">Faskes Tingkat Pertama (FKTP)</p>
              <p class="text-body-sm text-on-surface-variant">Pemeriksaan awal di Posyandu Prima, Klinik Swasta, atau Puskesmas Cicalengka DTP & Sawahdadap.</p>
            </div>
          </div>
          <div class="p-3.5 rounded-xl bg-surface-container-low flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-label-sm">2</span>
            <div>
              <p class="font-bold text-on-surface text-headline-sm">Rujukan Berjenjang Sistem Digital</p>
              <p class="text-body-sm text-on-surface-variant">Penerbitan surat rujukan online otomatis terintegrasi aplikasi Mobile JKN / SatuSehat.</p>
            </div>
          </div>
          <div class="p-3.5 rounded-xl bg-surface-container-low flex items-start gap-3">
            <span class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-label-sm">3</span>
            <div>
              <p class="font-bold text-on-surface text-headline-sm">Penanganan Lanjutan RSUD Cicalengka (Tipe C)</p>
              <p class="text-body-sm text-on-surface-variant">Layanan rawat inap 180 bed, poli 24 dokter spesialis, operasi bedah, & instalasi gawat darurat.</p>
            </div>
          </div>
        </div>
      `);
    });
  }

  // 6. Header Filter Wilayah Dropdown Menu Interaction
  const filterWilayahBtn = document.getElementById('filterWilayahBtn');
  const klasterDropdownMenu = document.getElementById('klasterDropdownMenu');
  const klasterBtnLabel = document.getElementById('klasterBtnLabel');

  if (filterWilayahBtn && klasterDropdownMenu) {
    filterWilayahBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      klasterDropdownMenu.classList.toggle('hidden');
    });
    document.addEventListener('click', (e) => {
      if (!filterWilayahBtn.contains(e.target)) {
        klasterDropdownMenu.classList.add('hidden');
      }
    });

    const dropdownItems = klasterDropdownMenu.querySelectorAll('.dropdown-filter-item');
    dropdownItems.forEach(item => {
      item.addEventListener('click', () => {
        const filter = item.getAttribute('data-filter');
        klasterBtnLabel.textContent = item.querySelector('span:first-child').textContent;
        klasterDropdownMenu.classList.add('hidden');
        showToast(`Memfilter klaster: ${klasterBtnLabel.textContent}`, 'filter_alt');

        // Sync with lower filter buttons
        const targetPill = document.querySelector(`#desaFilterTabs button[data-filter="${filter}"]`);
        if (targetPill) targetPill.click();
      });
    });
  }

  // 7. Spotlight Thematic Cards Dossier Modal
  const thematicCards = document.querySelectorAll('.thematic-card');
  thematicCards.forEach(card => {
    card.addEventListener('click', () => {
      const title = card.getAttribute('data-title');
      const sector = card.getAttribute('data-sector');
      const prod = card.getAttribute('data-prod');
      const market = card.getAttribute('data-market');
      const contact = card.getAttribute('data-contact');
      const desc = card.getAttribute('data-desc');

      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">verified</span>
          </div>
          <div>
            <span class="text-label-sm font-bold uppercase text-primary">${sector}</span>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">${title}</h3>
          </div>
        </div>
        <p class="text-body-md text-on-surface mb-4 leading-relaxed">${desc}</p>
        <div class="space-y-2.5 p-4 rounded-xl bg-surface-container-low mb-4 text-body-sm">
          <div class="flex justify-between border-b border-surface-container-high pb-2"><span class="text-on-surface-variant">Kapasitas / Volume:</span><span class="font-bold text-on-surface">${prod}</span></div>
          <div class="flex justify-between border-b border-surface-container-high pb-2"><span class="text-on-surface-variant">Jangkauan Pasar:</span><span class="font-bold text-on-surface">${market}</span></div>
          <div class="flex justify-between"><span class="text-on-surface-variant">Kontak Sentra / Pengelola:</span><span class="font-bold text-primary">${contact}</span></div>
        </div>
      `);
    });
  });

  // 8. Interactive 12 Desa Card Modal on Click
  const desaCards = document.querySelectorAll('#desaCardsGrid .desa-card');
  desaCards.forEach(card => {
    card.addEventListener('click', () => {
      const desaName = card.querySelector('h3') ? card.querySelector('h3').textContent : 'Profil Desa';
      const idmStatus = card.querySelector('.font-bold') ? card.querySelector('.font-bold').textContent : 'Status IDM';
      const potensi = card.querySelector('.font-semibold') ? card.querySelector('.font-semibold').textContent : '-';
      const details = card.querySelectorAll('.bg-surface-container-lowest\/60 span, .bg-surface-container-lowest\/80 span');
      let statText = [];
      details.forEach(s => statText.push(s.textContent.trim()));

      openModal(`
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-xl bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center">
            <span class="material-symbols-outlined text-[24px]">domain</span>
          </div>
          <div>
            <span class="text-label-sm font-bold uppercase text-tertiary">Profil Potensi Komprehensif</span>
            <h3 class="font-headline-md text-headline-md text-on-surface font-bold">${desaName}</h3>
          </div>
        </div>
        <div class="p-3.5 rounded-xl bg-surface-container-low mb-4">
          <div class="text-label-sm text-on-surface-variant font-medium">Klaster Unggulan Utama</div>
          <div class="font-headline-sm font-bold text-on-surface mt-1">${potensi}</div>
        </div>
        <div class="grid grid-cols-2 gap-3 text-body-sm">
          <div class="p-3 rounded-xl bg-surface-container-lowest border border-surface-container-high"><div class="text-on-surface-variant text-[11px]">Status Kemandirian Desa</div><div class="font-bold text-tertiary mt-0.5">${idmStatus}</div></div>
          <div class="p-3 rounded-xl bg-surface-container-lowest border border-surface-container-high"><div class="text-on-surface-variant text-[11px]">Layanan Kesehatan RW</div><div class="font-bold text-primary mt-0.5">${statText[2] || 'Posyandu Terpadu Aktif'}</div></div>
          <div class="p-3 rounded-xl bg-surface-container-lowest border border-surface-container-high"><div class="text-on-surface-variant text-[11px]">Luas Wilayah Terdata</div><div class="font-bold text-on-surface mt-0.5">${statText[0] || '-'}</div></div>
          <div class="p-3 rounded-xl bg-surface-container-lowest border border-surface-container-high"><div class="text-on-surface-variant text-[11px]">Estimasi Jumlah Warga</div><div class="font-bold text-on-surface mt-0.5">${statText[1] || '-'}</div></div>
        </div>
      `);
    });
  });
})();
</script></body></html>