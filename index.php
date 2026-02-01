<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muslim Pro Indonesia - Al-Qur'an & Ibadah</title>

    <!-- SEO & Open Graph -->
    <meta property="og:title" content="Muslim Pro Indonesia" />
    <meta property="og:description" content="Aplikasi Al-Qur'an Digital, Jadwal Sholat, Arah Kiblat, Asmaul Husna, dan Tasbih Digital." />
    <meta property="og:image" content="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" />
    <meta name="theme-color" content="#059669">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2310b981'%3E%3Cpath d='M11.25 4.533A2.25 2.25 0 0022.5 4.5c0-2.15-2.5-3.5-3-2.5-1 .5-3 2.25-3 3.25 0 1-2 .5-3 0 0 1-2 .5-3 0-1-1.25-3.5-2.5-3.5-2.25 0 001.5 4.533V21a1.5 1.5 0 001.5 1.5 1.5 1.5 0 011.5-1.5c1.5 0 3 .5 4.5 0 1.5.5 3 0 4.5 0 .5 1.5.5 1.5 1.5 1.5a1.5 1.5 0 001.5-1.5V4.533zM2.25 5.5c0-.5 1.5-1 3.75-1 2.25 0 3.75.5 3.75 1v14.5c0 .5-1.5 1-3.75 1-2.25 0-3.75-.5-3.75-1V5.5zm10.5-1c2.25 0 3.75.5 3.75 1v14.5c0 .5-1.5 1-3.75 1-2.25 0-3.75-.5-3.75-1V5.5c0-.5 1.5-1 3.75-1z'/%3E%3C/svg%3E">

    <!-- Tailwind dengan Konfigurasi Dark Mode -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            bg: '#111827',     // gray-900
                            card: '#1f2937',   // gray-800
                            text: '#f3f4f6',   // gray-100
                            sub: '#9ca3af'     // gray-400
                        },
                        gold: '#fbbf24'
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'spin-slow': 'spin 3s linear infinite',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&family=Scheherazade+New:wght@400;700&display=swap');

        :root {
            --arabic-font-size: 32px;
            --arabic-line-height: 2.2;
            --bottom-nav-height: 70px;
        }

        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
            -webkit-tap-highlight-color: transparent;
        }

        /* Tipografi Arab Dinamis */
        .font-arab {
            font-family: 'Amiri', 'Scheherazade New', serif;
            line-height: var(--arabic-line-height);
            font-size: var(--arabic-font-size);
        }

        /* Mode Mushaf - REAL BOOK EFFECT */
        .mushaf-page {
            /* Warna kertas krem lembut */
            background-color: #fffef2; 
            
            /* Bingkai Ganda: Hijau Luar, Emas Dalam */
            border: 2px solid #059669; /* Emerald 600 */
            outline: 2px solid #d97706; /* Amber 600 */
            outline-offset: -8px; /* Membuat garis masuk ke dalam */
            
            padding: 3rem 1.5rem; /* Padding luas agar teks tidak mepet */
            margin: 0 auto 2rem auto;
            border-radius: 4px;
            
            /* Shadow halus untuk efek kertas melayang sedikit */
            box-shadow: 
                0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
            
            text-align: justify;
            text-align-last: center;
            direction: rtl;
            
            /* Font adjustment specific for Mushaf mode to look like a book */
            font-size: calc(var(--arabic-font-size) * 1.15); 
            line-height: 2.5; 
        }

        /* Dark Mode Mushaf */
        .dark .mushaf-page {
            background-color: #1f2937; /* Dark Grey Paper */
            border-color: #065f46; /* Darker Green */
            outline-color: #92400e; /* Darker Amber */
            color: #e5e7eb;
        }

        /* Hiasan Sudut (Optional: Simpel Saja) */
        .mushaf-page::before {
            content: "۞";
            position: absolute;
            top: 5px;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Amiri', serif;
            color: #d97706; /* Amber */
            font-size: 1.2rem;
            opacity: 0.8;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #10b981; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #059669; }

        /* Loader */
        .loader {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #10b981;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
        }
        .dark .loader {
            border-color: #374151;
            border-top-color: #10b981;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* Styles */
        .ayat-number-symbol {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='18' fill='none' stroke='%23059669' stroke-width='2' stroke-opacity='0.4'/%3E%3Cpath d='M20 5 L20 35 M5 20 L35 20' stroke='none'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            font-size: 0.7em;
            color: #047857;
            margin: 0 6px;
            vertical-align: middle;
            font-family: 'Amiri', serif;
        }
        
        .dark .ayat-number-symbol {
            color: #34d399;
            filter: brightness(1.2);
        }

        .active-ayat {
            background-color: rgba(16, 185, 129, 0.15);
            border-radius: 8px;
            transition: all 0.5s ease;
        }
        .dark .active-ayat {
            background-color: rgba(16, 185, 129, 0.25);
            box-shadow: 0 0 0 1px rgba(16, 185, 129, 0.3);
        }

        /* Modal Overlay */
        .modal-overlay {
            background-color: rgba(0,0,0,0.5);
            backdrop-filter: blur(2px);
        }
        
        /* Range Slider */
        input[type=range] {
            -webkit-appearance: none;
            width: 100%;
            background: transparent;
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #10b981;
            margin-top: -8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 4px;
            background: #d1fae5;
            border-radius: 2px;
        }
        .dark input[type=range]::-webkit-slider-runnable-track {
            background: #374151;
        }

        /* Bottom Nav Styling */
        .bottom-nav-item {
            position: relative;
            transition: all 0.3s ease;
        }
        .bottom-nav-item.active {
            color: #10b981;
        }
        .bottom-nav-item.active::after {
            content: '';
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
            background-color: #10b981;
            border-radius: 0 0 4px 4px;
        }
        
        /* Tasbih Button Animation */
        .tasbih-btn:active {
            transform: scale(0.95);
        }

        /* Modern Compass Styling */
        .compass-modern-container {
            width: 260px;
            height: 260px;
            margin: 0 auto;
            position: relative;
            border-radius: 50%;
            box-shadow: 
                inset 0 0 20px rgba(0,0,0,0.05),
                0 10px 30px rgba(0,0,0,0.1);
        }
        .dark .compass-modern-container {
            box-shadow: 
                inset 0 0 20px rgba(0,0,0,0.5),
                0 10px 30px rgba(0,0,0,0.3);
        }

        /* Compass Rose */
        .compass-rose {
            width: 100%;
            height: 100%;
            position: relative;
            border-radius: 50%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'%3E%3Ccircle cx='150' cy='150' r='148' fill='none' stroke='%239ca3af' stroke-width='1' stroke-opacity='0.3'/%3E%3Cpath d='M150 10 L150 20 M150 280 L150 290 M10 150 L20 150 M280 150 L290 150' stroke='%239ca3af' stroke-width='2'/%3E%3Cpath d='M150 10 L150 25' stroke='%23ef4444' stroke-width='4'/%3E%3Ctext x='150' y='45' text-anchor='middle' font-family='sans-serif' font-weight='bold' font-size='24' fill='%23ef4444'%3EN%3C/text%3E%3Ctext x='150' y='275' text-anchor='middle' font-family='sans-serif' font-weight='bold' font-size='24' fill='%239ca3af'%3ES%3C/text%3E%3Ctext x='270' y='158' text-anchor='middle' font-family='sans-serif' font-weight='bold' font-size='24' fill='%239ca3af'%3EE%3C/text%3E%3Ctext x='30' y='158' text-anchor='middle' font-family='sans-serif' font-weight='bold' font-size='24' fill='%239ca3af'%3EW%3C/text%3E%3C/svg%3E");
            background-size: cover;
            transition: transform 0.1s linear;
        }

        .qibla-indicator-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        
        .qibla-icon-marker {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .fixed-heading-pointer {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            filter: drop-shadow(0 2px 2px rgba(0,0,0,0.3));
        }
        
        .aligned-glow {
            box-shadow: 0 0 30px rgba(16, 185, 129, 0.6) !important;
            border: 2px solid #10b981 !important;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100 h-screen flex flex-col overflow-hidden transition-colors duration-300">

    <!-- Header -->
    <header class="bg-gradient-to-r from-emerald-600 to-teal-700 dark:from-emerald-900 dark:to-teal-900 text-white shadow-lg z-20 shrink-0 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer group" onclick="switchMainTab('quran')">
                <div class="bg-white/20 p-2 rounded-lg group-hover:bg-white/30 transition">
                    <i class="fas fa-kaaba text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold leading-tight tracking-tight" id="headerTitle">Muslim <span class="text-emerald-200">Pro</span></h1>
                    <p class="text-[10px] text-emerald-100 uppercase tracking-widest opacity-90" id="headerSubtitle">Indonesia</p>
                </div>
            </div>

            <!-- Controls Kanan -->
            <div class="flex items-center gap-2 md:gap-3">
                <button onclick="toggleTheme()" id="themeToggleBtn" class="w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-full transition text-emerald-100 hover:text-white" title="Ganti Tema"><i class="fas fa-moon"></i></button>
                <button onclick="toggleSettings()" class="w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-full transition"><i class="fas fa-cog"></i></button>
                <div id="modeToggleContainer" class="hidden bg-emerald-800/50 rounded-lg p-1 flex text-xs font-medium">
                    <button onclick="switchMode('list')" id="btnModeList" class="px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition">List</button>
                    <button onclick="switchMode('mushaf')" id="btnModeMushaf" class="px-3 py-1 rounded text-emerald-100 hover:text-white hover:bg-white/10 transition">Mushaf</button>
                </div>
                <button id="btnBack" onclick="goHome()" class="hidden w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-red-500/80 rounded-full text-sm transition"><i class="fas fa-times"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto relative scroll-smooth bg-gray-50 dark:bg-gray-900 transition-colors duration-300 pb-[80px]" id="mainContainer">

        <!-- TAB: QURAN -->
        <div id="view-quran" class="block">
            <div id="homeView" class="max-w-4xl mx-auto px-4 py-6 transition-all duration-300">
                <div id="quoteContainer" class="mb-6 bg-gradient-to-r from-amber-100 to-orange-100 dark:from-amber-900/30 dark:to-orange-900/30 rounded-xl p-4 border border-amber-200 dark:border-amber-800/50 flex items-start gap-4">
                    <div class="bg-amber-200/50 dark:bg-amber-800/50 p-2 rounded-lg text-amber-700 dark:text-amber-400"><i class="fas fa-lightbulb text-xl"></i></div>
                    <div><h4 class="font-bold text-amber-800 dark:text-amber-200 text-sm mb-1">Mutiara Hari Ini</h4><p class="text-xs text-amber-900/80 dark:text-amber-100/80 italic">"Maka sesungguhnya bersama kesulitan ada kemudahan." (QS. Al-Insyirah: 5)</p></div>
                </div>
                <div id="lastReadContainer" class="hidden mb-6 bg-gradient-to-br from-emerald-700 to-teal-600 dark:from-emerald-900 dark:to-teal-800 rounded-2xl p-5 text-white shadow-xl flex justify-between items-center relative overflow-hidden group">
                    <div class="absolute -right-4 -bottom-6 opacity-20 transform rotate-12 transition group-hover:scale-110 duration-700"><i class="fas fa-book-open text-9xl"></i></div>
                    <div class="relative z-10"><p class="text-xs font-medium text-emerald-200 mb-1 flex items-center gap-1"><i class="fas fa-history text-[10px]"></i> Terakhir Dibaca</p><h3 id="lastReadSurah" class="text-2xl font-bold tracking-tight">Al-Fatihah</h3><p id="lastReadAyah" class="text-sm opacity-90">Ayat 1</p></div>
                    <button onclick="continueReading()" class="relative z-10 bg-white/10 backdrop-blur-md border border-white/20 text-white px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-white hover:text-emerald-700 transition shadow-lg">Lanjut <i class="fas fa-arrow-right ml-2"></i></button>
                </div>
                <div class="relative mb-6">
                    <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" id="searchInput" placeholder="Cari surat..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 transition" onkeyup="filterSurahs()">
                </div>
                <div id="surahList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <div class="col-span-full flex flex-col items-center justify-center py-20 text-gray-400 dark:text-gray-500"><div class="loader mb-4"></div><p class="text-sm">Memuat Al-Qur'an...</p></div>
                </div>
            </div>
            <div id="detailView" class="hidden max-w-3xl mx-auto min-h-full bg-white dark:bg-gray-900 shadow-2xl transition-all duration-300 relative">
                <div class="sticky top-0 bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 z-10 px-4 py-3 flex justify-between items-center shadow-sm transition-colors">
                    <div><h2 id="detailSurahName" class="text-lg font-bold text-gray-800 dark:text-gray-100">Nama Surat</h2><div class="flex items-center gap-2 text-[11px] text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wide"><span id="detailSurahType" class="bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">MAKKIYAH</span><span id="detailSurahAyahCount">0 AYAT</span></div></div>
                    <div class="flex gap-2"><button onclick="scrollToTop()" class="w-8 h-8 rounded-full bg-gray-50 dark:bg-gray-800 hover:bg-emerald-50 dark:hover:bg-gray-700 text-gray-400 hover:text-emerald-600 transition flex items-center justify-center"><i class="fas fa-arrow-up text-xs"></i></button></div>
                </div>
                <div id="bismillahContainer" class="py-10 text-center bg-gradient-to-b from-emerald-50/50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Basmala.svg" class="h-12 md:h-16 mx-auto opacity-80 dark:invert dark:opacity-70" alt="Bismillah"></div>
                <div id="ayatListMode" class="divide-y divide-gray-100 dark:divide-gray-800 pb-32"></div>
                <div id="ayatMushafMode" class="hidden pb-32 px-1 md:px-6 py-6 bg-gray-200 dark:bg-[#111827]"></div>
                <div id="ayatLoader" class="hidden absolute inset-0 bg-white dark:bg-gray-900 z-20 flex flex-col items-center justify-center"><div class="loader mb-4"></div><p class="text-gray-500 dark:text-gray-400 text-sm">Membuka lembaran...</p></div>
            </div>
        </div>

        <!-- TAB: SHOLAT -->
        <div id="view-sholat" class="hidden max-w-lg mx-auto px-4 py-6">
            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-2xl p-6 text-white shadow-lg mb-6 relative overflow-hidden">
                <div class="absolute -right-10 -top-10 opacity-10"><i class="fas fa-mosque text-9xl"></i></div>
                <div class="text-center relative z-10">
                    <p class="text-sm opacity-90 mb-1" id="locationText"><i class="fas fa-map-marker-alt mr-1"></i> Mendeteksi Lokasi...</p>
                    <h2 class="text-4xl font-bold mb-1" id="nextPrayerTime">--:--</h2>
                    <p class="text-emerald-200 text-sm font-medium" id="nextPrayerName">Menuju Waktu Sholat</p>
                </div>
            </div>
            <div class="flex gap-2 mb-6 bg-gray-100 dark:bg-gray-800 p-1 rounded-xl">
                <button onclick="toggleSholatView('jadwal')" id="btnSholatJadwal" class="flex-1 py-2 rounded-lg bg-white dark:bg-gray-700 shadow text-sm font-bold text-emerald-600 dark:text-emerald-400 transition">Jadwal Sholat</button>
                <button onclick="toggleSholatView('kiblat')" id="btnSholatKiblat" class="flex-1 py-2 rounded-lg text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-white/50 dark:hover:bg-gray-700/50 transition">Arah Kiblat</button>
            </div>
            <div id="sholatJadwalContainer" class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
                <div class="p-4 border-b border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-700/50">
                    <h3 class="font-bold text-gray-700 dark:text-gray-200 flex items-center gap-2"><i class="far fa-calendar-alt text-emerald-500"></i> Jadwal Hari Ini</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1" id="currentDate">...</p>
                </div>
                <div id="prayerTimesList" class="divide-y divide-gray-100 dark:divide-gray-700"><div class="p-4 text-center text-gray-400 text-sm">Memuat data jadwal...</div></div>
            </div>
            <div id="sholatKiblatContainer" class="hidden flex flex-col items-center justify-center py-6 text-center">
                <h3 class="font-bold text-gray-800 dark:text-gray-100 mb-1 text-xl">Pencari Kiblat</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400 mb-8" id="kiblatInfo">Menunggu Kalibrasi...</p>
                <div class="compass-modern-container relative mb-8 flex items-center justify-center border-4 border-white dark:border-gray-600 bg-white dark:bg-gray-800 transition-all duration-300" id="compassRing">
                    <div class="fixed-heading-pointer text-red-500 text-4xl"><i class="fas fa-caret-down"></i></div>
                    <div id="compassRose" class="compass-rose">
                        <div id="qiblaIndicatorWrapper" class="qibla-indicator-wrapper">
                            <div class="qibla-icon-marker"><i class="fas fa-kaaba text-3xl text-yellow-500 drop-shadow-md"></i><div class="h-10 w-1 bg-yellow-400/50 rounded-full mt-1"></div></div>
                        </div>
                    </div>
                    <div class="absolute w-3 h-3 bg-red-500 rounded-full border-2 border-white z-10"></div>
                </div>
                <button onclick="initCompassSensor()" id="btnStartCompass" class="mb-6 px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full font-bold shadow-lg flex items-center gap-2 transition transform active:scale-95"><i class="fas fa-compass"></i> Kalibrasi / Mulai Kompas</button>
                <div class="max-w-xs text-xs bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-300 p-3 rounded-lg border border-blue-100 dark:border-blue-800"><i class="fas fa-info-circle mr-1"></i> Putar HP Anda sampai ikon Ka'bah sejajar dengan panah merah di atas. Lingkaran akan menyala hijau jika pas.</div>
            </div>
        </div>

        <!-- TAB: DOA -->
        <div id="view-doa" class="hidden max-w-3xl mx-auto px-4 py-6">
            <div class="relative mb-6">
                <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                <input type="text" id="searchDoaInput" placeholder="Cari doa (misal: makan, tidur)..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm focus:ring-2 focus:ring-emerald-500 outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 transition" onkeyup="filterDoa()">
            </div>
            <div id="doaListContainer" class="grid gap-3"></div>
        </div>

        <!-- TAB: ASMAUL HUSNA -->
        <div id="view-asmaulhusna" class="hidden max-w-4xl mx-auto px-4 py-6">
            <div class="text-center mb-6">
                <h2 class="font-arab text-3xl text-emerald-600 dark:text-emerald-400">وَلِلَّهِ ٱلْأَسْمَآءُ ٱلْحُسْنَىٰ</h2>
                <p class="text-xs text-gray-500 mt-2">"Hanya milik Allah asmaa-ul husna (nama-nama yang maha indah)"</p>
            </div>
            <div id="asmaulHusnaGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 pb-20">
                <div class="col-span-full text-center py-10"><div class="loader mx-auto"></div></div>
            </div>
        </div>

        <!-- TAB: TASBIH -->
        <div id="view-tasbih" class="hidden h-full flex flex-col items-center justify-center p-6 relative">
            <div class="absolute top-6 right-6"><button onclick="resetTasbih()" class="text-gray-400 hover:text-red-500 transition" title="Reset Hitungan"><i class="fas fa-redo-alt text-xl"></i></button></div>
            <div class="text-center mb-10"><h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200">Tasbih Digital</h2><p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Ketuk lingkaran untuk bertasbih</p></div>
            <button onclick="countTasbih()" class="tasbih-btn w-64 h-64 rounded-full bg-gradient-to-br from-emerald-500 to-teal-600 shadow-[0_10px_40px_-10px_rgba(16,185,129,0.5)] flex items-center justify-center text-white relative active:scale-95 transition-all duration-100 select-none">
                <div class="absolute inset-2 border-4 border-white/20 rounded-full"></div>
                <div class="text-center"><span id="tasbihCounter" class="block text-7xl font-bold tracking-tighter">0</span><span class="text-emerald-100 text-sm uppercase tracking-widest mt-2">Subhanallah</span></div>
            </button>
            <div class="mt-8 flex gap-4">
                <button onclick="setTasbihTarget(33)" class="px-4 py-2 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 text-sm text-gray-600 dark:text-gray-300 hover:border-emerald-500 transition">Target 33</button>
                <button onclick="setTasbihTarget(99)" class="px-4 py-2 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 text-sm text-gray-600 dark:text-gray-300 hover:border-emerald-500 transition">Target 99</button>
            </div>
        </div>
    </main>

    <!-- NAVBAR -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 z-30 pb-safe">
        <div class="max-w-md mx-auto flex justify-around items-center h-[70px]">
            <button onclick="switchMainTab('quran')" id="nav-quran" class="bottom-nav-item active flex flex-col items-center justify-center w-full h-full text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400"><i class="fas fa-book-quran text-xl mb-1"></i><span class="text-[10px] font-medium">Al-Qur'an</span></button>
            <button onclick="switchMainTab('sholat')" id="nav-sholat" class="bottom-nav-item flex flex-col items-center justify-center w-full h-full text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400"><i class="fas fa-mosque text-xl mb-1"></i><span class="text-[10px] font-medium">Sholat</span></button>
            <button onclick="switchMainTab('doa')" id="nav-doa" class="bottom-nav-item flex flex-col items-center justify-center w-full h-full text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400"><i class="fas fa-praying-hands text-xl mb-1"></i><span class="text-[10px] font-medium">Doa</span></button>
            <button onclick="switchMainTab('asmaulhusna')" id="nav-asmaulhusna" class="bottom-nav-item flex flex-col items-center justify-center w-full h-full text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400"><i class="fas fa-star text-xl mb-1"></i><span class="text-[10px] font-medium">Asmaul</span></button>
            <button onclick="switchMainTab('tasbih')" id="nav-tasbih" class="bottom-nav-item flex flex-col items-center justify-center w-full h-full text-gray-400 hover:text-emerald-500 dark:hover:text-emerald-400"><i class="fas fa-fingerprint text-xl mb-1"></i><span class="text-[10px] font-medium">Tasbih</span></button>
        </div>
    </nav>

    <!-- MODAL: ASMAUL HUSNA DETAIL -->
    <div id="asmaulHusnaModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
        <div class="absolute inset-0 modal-overlay" onclick="closeAsmaulHusnaModal()"></div>
        <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl max-w-sm w-full p-6 text-center transform transition-all scale-100 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-emerald-50 to-transparent dark:from-emerald-900/20 pointer-events-none"></div>
            <button onclick="closeAsmaulHusnaModal()" class="absolute top-4 right-4 text-gray-400 hover:text-red-500 transition z-10"><i class="fas fa-times"></i></button>
            
            <div class="relative z-10 mt-4">
                <div class="w-16 h-16 mx-auto bg-emerald-100 dark:bg-emerald-900 rounded-full flex items-center justify-center mb-4 border-4 border-white dark:border-gray-700 shadow-lg">
                    <span id="ahModalNumber" class="font-bold text-emerald-600 dark:text-emerald-400 text-xl">99</span>
                </div>
                <h2 id="ahModalArabic" class="font-arab text-5xl text-gray-800 dark:text-gray-100 mb-2 leading-tight py-2"></h2>
                <h3 id="ahModalLatin" class="text-lg font-bold text-emerald-600 dark:text-emerald-400 uppercase tracking-widest mb-6"></h3>
                
                <div class="text-left space-y-3">
                     <div class="bg-emerald-50 dark:bg-emerald-900/30 rounded-xl p-3 border border-emerald-100 dark:border-emerald-800">
                        <p class="text-[10px] text-emerald-600 dark:text-emerald-400 uppercase font-bold mb-1">Arti (Indo)</p>
                        <p id="ahModalIndo" class="text-gray-800 dark:text-gray-200 font-medium">...</p>
                    </div>
                    
                    <div class="bg-gray-50 dark:bg-gray-700/30 rounded-xl p-3 border border-gray-100 dark:border-gray-700">
                        <p class="text-[10px] text-gray-400 uppercase font-bold mb-1">Meaning (En)</p>
                        <p id="ahModalEnglish" class="text-gray-600 dark:text-gray-300 italic text-sm">...</p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-3 border border-gray-100 dark:border-gray-700 shadow-sm max-h-40 overflow-y-auto">
                        <p class="text-[10px] text-gray-400 uppercase font-bold mb-2">Penjelasan</p>
                        <p id="ahModalDesc" class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed text-justify">...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL: SETTINGS (Sama) -->
    <div id="settingsModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 modal-overlay" onclick="toggleSettings()"></div>
        <div class="absolute bottom-0 left-0 right-0 md:top-1/2 md:left-1/2 md:bottom-auto md:-translate-x-1/2 md:-translate-y-1/2 md:w-96 bg-white dark:bg-gray-800 rounded-t-2xl md:rounded-2xl shadow-2xl p-6 transform transition-transform duration-300 translate-y-full md:translate-y-0 text-gray-800 dark:text-gray-100" id="settingsContent">
            <div class="flex justify-between items-center mb-6"><h3 class="text-lg font-bold">Pengaturan</h3><button onclick="toggleSettings()" class="text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-3">Ukuran Huruf Arab</label><div class="flex items-center gap-4"><span class="text-xs">A</span><input type="range" min="20" max="60" value="32" id="fontSizeSlider" oninput="updateFontSize(this.value)"><span class="text-xl font-bold">A</span></div><div class="mt-4 p-4 bg-emerald-50 dark:bg-gray-900 rounded-lg text-center border border-emerald-100 dark:border-gray-700"><p class="font-arab text-emerald-800 dark:text-emerald-400" id="fontPreview">بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p></div></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">Pilih Qari (Pembaca)</label><select id="qariSelector" onchange="changeQari(this.value)" class="w-full p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm focus:ring-emerald-500 focus:border-emerald-500 text-gray-800 dark:text-gray-200"><option value="ar.alafasy">Mishary Rashid Alafasy</option><option value="ar.abdurrahmaansudais">Abdurrahmaan As-Sudais</option><option value="ar.saoodshuraym">Sa'ud ash-Shuraym</option><option value="ar.saadalghamdi">Saad Al-Ghamdi</option><option value="ar.husary">Mahmoud Khalil Al-Husary</option><option value="ar.abdulbasitmurattal">Abdul Basit (Murattal)</option><option value="ar.mahermuaiqly">Maher Al-Muaiqly</option></select></div>
            <div class="text-center text-xs text-gray-400 mt-4 border-t border-gray-100 dark:border-gray-700 pt-4">Versi 5.3 - Asmaul Husna Lengkap</div>
        </div>
    </div>

    <!-- MODAL: TAFSIR & ERROR (Sama) -->
    <div id="tafsirModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4"><div class="absolute inset-0 modal-overlay" onclick="closeTafsir()"></div><div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-lg w-full max-h-[80vh] flex flex-col transition-colors"><div class="p-4 border-b dark:border-gray-700 flex justify-between items-center bg-gray-50 dark:bg-gray-700 rounded-t-xl"><div><h3 class="font-bold text-gray-800 dark:text-gray-100">Tafsir Ayat</h3><p class="text-xs text-emerald-600 dark:text-emerald-400" id="tafsirTitle">Surat ... Ayat ...</p></div><button onclick="closeTafsir()" class="w-8 h-8 rounded-full bg-white dark:bg-gray-600 hover:bg-red-50 text-gray-400 hover:text-red-500 shadow-sm flex items-center justify-center transition"><i class="fas fa-times"></i></button></div><div class="p-6 overflow-y-auto leading-relaxed text-gray-700 dark:text-gray-300 text-sm md:text-base text-justify" id="tafsirContent"><div class="flex justify-center py-10"><div class="loader"></div></div></div></div></div>
    <div id="audioErrorModal" class="fixed inset-0 z-[60] hidden flex items-center justify-center px-4"><div class="absolute inset-0 modal-overlay"></div><div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl max-w-sm w-full p-6 text-center"><div class="w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4"><i class="fas fa-exclamation-triangle text-2xl text-red-500"></i></div><h3 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-2">Gagal Memutar Audio</h3><p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Sumber audio Qari saat ini bermasalah. Pilih Qari lain:</p><div class="mb-6"><select id="quickQariSelector" class="w-full p-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-sm focus:ring-emerald-500 outline-none"><option value="ar.alafasy">Mishary Rashid Alafasy</option><option value="ar.saadalghamdi">Saad Al-Ghamdi</option><option value="ar.husary">Mahmoud Khalil Al-Husary</option></select></div><div class="flex gap-3"><button onclick="closeAudioErrorModal()" class="flex-1 py-2.5 rounded-xl border border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 font-medium">Batal</button><button onclick="retryAudioWithNewQari()" class="flex-1 py-2.5 rounded-xl bg-emerald-600 text-white font-bold hover:bg-emerald-700">Putar Ulang</button></div></div></div>

    <!-- AUDIO PLAYER -->
    <div id="audioPlayerContainer" class="hidden fixed bottom-[85px] left-4 right-4 md:left-auto md:right-8 md:w-96 bg-white/95 dark:bg-gray-800/95 backdrop-blur-md border border-emerald-100 dark:border-gray-700 rounded-2xl shadow-2xl p-4 z-20 ring-1 ring-black/5 transition-colors"><div class="flex items-center justify-between gap-4"><div class="flex-1 min-w-0"><p id="audioInfoText" class="text-sm font-bold text-gray-800 dark:text-gray-100 truncate">Memutar Ayat...</p><p class="text-[10px] text-emerald-600 dark:text-emerald-400 font-medium tracking-wide uppercase">Qari: <span id="currentQariName">Mishary</span></p></div><div class="flex items-center gap-2"><button onclick="togglePlay()" id="playPauseBtn" class="w-10 h-10 bg-emerald-600 hover:bg-emerald-500 text-white rounded-full flex items-center justify-center shadow-lg transition transform active:scale-90"><i class="fas fa-pause"></i></button><button onclick="stopAudio()" class="w-8 h-8 text-gray-400 dark:text-gray-500 hover:text-red-500 bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center transition"><i class="fas fa-stop text-xs"></i></button></div></div><div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1 mt-3 overflow-hidden"><div id="audioProgress" class="bg-emerald-500 h-1 rounded-full w-0 transition-all duration-300"></div></div><audio id="mainAudioPlayer" onended="audioEnded()" ontimeupdate="updateProgress()"></audio></div>

    <script>
        // --- CONSTANTS ---
        const API_BASE = 'https://api.alquran.cloud/v1';
        let allSurahsData = [], asmaulHusnaData = [], viewMode = 'list', isDarkMode = false;
        let currentState = { surah: null, surahNum: 0, indo: null, qariId: localStorage.getItem('quran_qari') || 'ar.alafasy', isPlaying: false, isPlayingTranslation: false, currentAyahIndex: -1, currentAudioSrc: '', tasbihCount: parseInt(localStorage.getItem('tasbih_count') || 0), qiblaAngle: 0 };

        // --- ASMAUL HUSNA DATA LENGKAP (Indonesian) ---
        const asmaulHusnaDetails = {
            1: { indo: "Yang Maha Pengasih", desc: "Allah memiliki kasih sayang yang sangat luas, meliputi seluruh makhluk-Nya di dunia, baik yang beriman maupun kafir, tanpa terkecuali." },
            2: { indo: "Yang Maha Penyayang", desc: "Kasih sayang Allah yang abadi dan khusus diberikan kepada hamba-hamba-Nya yang beriman, terutama di akhirat kelak." },
            3: { indo: "Yang Maha Merajai", desc: "Allah adalah Raja dari segala raja, penguasa mutlak alam semesta yang mengatur segala urusan tanpa butuh bantuan siapapun." },
            4: { indo: "Yang Maha Suci", desc: "Allah Maha Suci dari segala kekurangan, aib, dan kesalahan. Dia bersih dari segala sifat yang tidak layak bagi keagungan-Nya." },
            5: { indo: "Yang Maha Memberi Kesejahteraan", desc: "Allah adalah sumber kedamaian dan keselamatan. Dia yang menyelamatkan hamba-hamba-Nya dari segala bahaya dan bencana." },
            6: { indo: "Yang Maha Memberi Keamanan", desc: "Allah yang memberikan rasa aman dan ketenangan hati kepada hamba-hamba-Nya yang beriman." },
            7: { indo: "Yang Maha Pemelihara", desc: "Allah Maha Mengawasi dan Memelihara segala sesuatu. Tidak ada satu pun yang luput dari pengawasan-Nya." },
            8: { indo: "Yang Maha Perkasa", desc: "Allah memiliki kekuatan mutlak yang tidak bisa dikalahkan oleh siapapun. Kehendak-Nya pasti terjadi." },
            9: { indo: "Yang Maha Kuasa", desc: "Allah Maha Memaksa segala kehendak-Nya kepada makhluk-Nya. Dia yang memperbaiki keadaan makhluk-Nya." },
            10: { indo: "Yang Maha Memiliki Kebesaran", desc: "Hanya Allah yang pantas memiliki kebesaran dan kesombongan. Segala makhluk adalah kecil di hadapan-Nya." },
            11: { indo: "Yang Maha Pencipta", desc: "Allah yang menciptakan segala sesuatu dari tiada menjadi ada, sesuai dengan kehendak dan rancangan-Nya." },
            12: { indo: "Yang Maha Melepaskan", desc: "Allah yang mengadakan dan mewujudkan makhluk dengan rupa dan bentuk yang berbeda-beda." },
            13: { indo: "Yang Maha Membentuk Rupa", desc: "Allah yang memberikan bentuk dan rupa kepada setiap makhluk-Nya dengan sebaik-baik bentuk." },
            14: { indo: "Yang Maha Pengampun", desc: "Allah menutupi dosa-dosa hamba-Nya dan mengampuninya berulang kali, sebesar apapun dosa tersebut." },
            15: { indo: "Yang Maha Memaksa", desc: "Allah memiliki kekuasaan mutlak untuk menundukkan segala sesuatu agar tunduk pada kehendak-Nya." },
            16: { indo: "Yang Maha Pemberi Karunia", desc: "Allah memberi karunia dan rezeki kepada hamba-Nya tanpa mengharap balasan, terus-menerus dan berlimpah." },
            17: { indo: "Yang Maha Pemberi Rezeki", desc: "Allah yang menjamin dan membagikan rezeki kepada seluruh makhluk-Nya, baik materi maupun spiritual." },
            18: { indo: "Yang Maha Pembuka Rahmat", desc: "Allah membuka pintu rahmat, rezeki, dan penyelesaian masalah bagi hamba-hamba-Nya." },
            19: { indo: "Yang Maha Mengetahui", desc: "Pengetahuan Allah meliputi segala sesuatu, yang tampak maupun yang tersembunyi, yang lalu maupun yang akan datang." },
            20: { indo: "Yang Maha Menyempitkan", desc: "Allah berkuasa menahan atau menyempitkan rezeki dan kehidupan bagi siapa yang dikehendaki-Nya sebagai ujian." },
            21: { indo: "Yang Maha Melapangkan", desc: "Allah melapangkan rezeki dan hati hamba-hamba-Nya, memberikan kemudahan dan keleluasaan." },
            22: { indo: "Yang Maha Merendahkan", desc: "Allah merendahkan derajat orang-orang kafir, zalim, dan sombong." },
            23: { indo: "Yang Maha Meninggikan", desc: "Allah meninggikan derajat orang-orang yang beriman, berilmu, dan bertakwa." },
            24: { indo: "Yang Maha Memuliakan", desc: "Allah memberikan kemuliaan kepada siapa yang dikehendaki-Nya dengan ketaatan dan pertolongan." },
            25: { indo: "Yang Maha Menghinakan", desc: "Allah menghinakan musuh-musuh-Nya dan orang-orang yang durhaka dengan azab dan kehinaan." },
            26: { indo: "Yang Maha Mendengar", desc: "Allah mendengar segala suara dan doa, baik yang diucapkan maupun yang disembunyikan dalam hati." },
            27: { indo: "Yang Maha Melihat", desc: "Penglihatan Allah meliputi segala sesuatu, tidak ada yang luput dari pandangan-Nya sekecil apapun." },
            28: { indo: "Yang Maha Menetapkan", desc: "Allah adalah hakim yang paling adil, yang menetapkan hukum dan keputusan bagi makhluk-Nya." },
            29: { indo: "Yang Maha Adil", desc: "Allah Maha Adil dalam segala keputusan dan tindakan-Nya, tidak pernah menzalimi hamba-Nya." },
            30: { indo: "Yang Maha Lembut", desc: "Allah Maha Lembut dalam mengatur urusan makhluk-Nya dan memberikan kebaikan melalui jalan yang tidak terduga." },
            31: { indo: "Yang Maha Mengenal", desc: "Allah mengetahui hakekat segala sesuatu secara mendalam dan rinci." },
            32: { indo: "Yang Maha Penyantun", desc: "Allah tidak cepat-cepat menghukum hamba-Nya yang berbuat dosa, tetapi memberi kesempatan untuk bertaubat." },
            33: { indo: "Yang Maha Agung", desc: "Keagungan Allah tidak dapat dijangkau oleh akal manusia, Dia Maha Besar di atas segala sesuatu." },
            34: { indo: "Yang Maha Pengampun", desc: "Allah mengampuni dosa-dosa besar dan kecil, serta menutupi aib hamba-Nya." },
            35: { indo: "Yang Maha Pembalas Budi", desc: "Allah menghargai amal sedikit dengan balasan yang berlipat ganda." },
            36: { indo: "Yang Maha Tinggi", desc: "Kedudukan dan Dzat Allah Maha Tinggi di atas segala makhluk-Nya." },
            37: { indo: "Yang Maha Besar", desc: "Allah Maha Besar dalam Dzat, Sifat, dan Perbuatan-Nya, melebihi bayangan siapapun." },
            38: { indo: "Yang Maha Memelihara", desc: "Allah menjaga dan memelihara alam semesta beserta isinya agar tetap seimbang." },
            39: { indo: "Yang Maha Pemberi Kecukupan", desc: "Allah memberi kecukupan dan makanan (rezeki) kepada seluruh makhluk-Nya." },
            40: { indo: "Yang Maha Membuat Perhitungan", desc: "Allah mencatat dan menghitung segala amal perbuatan hamba-Nya dengan sangat teliti." },
            41: { indo: "Yang Maha Luhur", desc: "Allah memiliki keagungan dan kemuliaan yang sempurna, serta kekuasaan yang mutlak." },
            42: { indo: "Yang Maha Pemurah", desc: "Kebaikan dan kemurahan Allah tidak terbatas, Dia memberi tanpa diminta." },
            43: { indo: "Yang Maha Mengawasi", desc: "Allah selalu mengawasi setiap gerak-gerik dan bisikan hati hamba-Nya." },
            44: { indo: "Yang Maha Mengabulkan", desc: "Allah mengabulkan doa hamba-hamba-Nya yang memohon kepada-Nya." },
            45: { indo: "Yang Maha Luas", desc: "Rahmat, ilmu, dan rezeki Allah sangat luas, mencakup segala sesuatu." },
            46: { indo: "Yang Maha Bijaksana", desc: "Setiap tindakan dan ciptaan Allah mengandung hikmah yang sempurna." },
            47: { indo: "Yang Maha Mengasihi", desc: "Allah mencintai hamba-hamba-Nya yang saleh dan Dia dicintai oleh mereka." },
            48: { indo: "Yang Maha Mulia", desc: "Allah memiliki kemuliaan yang sempurna dalam Dzat dan Sifat-Nya." },
            49: { indo: "Yang Maha Membangkitkan", desc: "Allah akan membangkitkan manusia dari alam kubur pada hari kiamat untuk dihisab." },
            50: { indo: "Yang Maha Menyaksikan", desc: "Allah menyaksikan segala sesuatu, tidak ada yang tersembunyi dari saksi-Nya." },
            51: { indo: "Yang Maha Benar", desc: "Allah adalah kebenaran mutlak, janji-Nya benar, dan firman-Nya benar." },
            52: { indo: "Yang Maha Memelihara", desc: "Allah adalah tempat bersandar bagi hamba-hamba-Nya yang bertawakkal." },
            53: { indo: "Yang Maha Kuat", desc: "Kekuatan Allah sangat dahsyat dan tidak ada yang mampu melemahkan-Nya." },
            54: { indo: "Yang Maha Kokoh", desc: "Kekuatan Allah sangat teguh dan tidak akan pernah goyah." },
            55: { indo: "Yang Maha Melindungi", desc: "Allah adalah pelindung dan penolong bagi orang-orang yang beriman." },
            56: { indo: "Yang Maha Terpuji", desc: "Allah berhak atas segala pujian karena kesempurnaan Dzat dan perbuatan-Nya." },
            57: { indo: "Yang Maha Menghitung", desc: "Allah mengetahui jumlah segala sesuatu satu per satu dengan rinci." },
            58: { indo: "Yang Maha Memulai", desc: "Allah yang memulai penciptaan makhluk dari ketiadaan." },
            59: { indo: "Yang Maha Mengembalikan", desc: "Allah yang akan mengembalikan makhluk setelah kematian mereka pada hari kiamat." },
            60: { indo: "Yang Maha Menghidupkan", desc: "Allah yang memberi kehidupan kepada makhluk dan menghidupkan hati dengan cahaya iman." },
            61: { indo: "Yang Maha Mematikan", desc: "Allah yang menetapkan kematian bagi setiap makhluk yang bernyawa." },
            62: { indo: "Yang Maha Hidup", desc: "Allah Maha Hidup kekal abadi, tidak pernah mati, mengantuk, ataupun tidur." },
            63: { indo: "Yang Maha Mandiri", desc: "Allah berdiri sendiri, tidak butuh kepada siapapun, sedangkan makhluk butuh kepada-Nya." },
            64: { indo: "Yang Maha Penemu", desc: "Allah menemukan apa saja yang Dia kehendaki, tidak ada yang luput dari-Nya." },
            65: { indo: "Yang Maha Mulia", desc: "Allah memiliki kemuliaan dan keagungan yang tiada taranya." },
            66: { indo: "Yang Maha Esa", desc: "Allah Maha Tunggal, tidak ada sekutu bagi-Nya dalam Dzat maupun Sifat." },
            67: { indo: "Yang Maha Esa (Tempat Bergantung)", desc: "Allah adalah satu-satunya tempat bergantung segala makhluk untuk memenuhi kebutuhan mereka." }, // Ahad
            68: { indo: "Yang Maha Dibutuhkan", desc: "Allah adalah tempat tumpuan segala hajat dan kebutuhan makhluk." }, // Samad
            69: { indo: "Yang Maha Menentukan", desc: "Allah memiliki kekuasaan penuh untuk menentukan segala sesuatu." },
            70: { indo: "Yang Maha Berkuasa", desc: "Allah berkuasa atas segala sesuatu dan tidak ada yang bisa menghalangi-Nya." },
            71: { indo: "Yang Maha Mendahulukan", desc: "Allah mendahulukan siapa saja yang Dia kehendaki untuk diangkat derajatnya." },
            72: { indo: "Yang Maha Mengakhirkan", desc: "Allah mengakhirkan siapa saja yang Dia kehendaki sesuai hikmah-Nya." },
            73: { indo: "Yang Maha Awal", desc: "Allah adalah yang pertama tanpa permulaan." },
            74: { indo: "Yang Maha Akhir", desc: "Allah adalah yang terakhir tanpa kesudahan setelah segala sesuatu musnah." },
            75: { indo: "Yang Maha Nyata", desc: "Keberadaan Allah nyata melalui tanda-tanda kekuasaan-Nya di alam semesta." },
            76: { indo: "Yang Maha Ghaib", desc: "Dzat Allah tersembunyi dari penglihatan mata di dunia ini." },
            77: { indo: "Yang Maha Memerintah", desc: "Allah yang menguasai dan mengurus segala urusan alam semesta." },
            78: { indo: "Yang Maha Tinggi", desc: "Allah Maha Tinggi dan bersih dari segala sifat kekurangan." },
            79: { indo: "Yang Maha Penderma", desc: "Allah sumber segala kebaikan dan kebajikan yang melimpah." },
            80: { indo: "Yang Maha Penerima Taubat", desc: "Allah selalu menerima taubat hamba-Nya yang kembali kepada-Nya dengan tulus." },
            81: { indo: "Yang Maha Pemberi Balasan", desc: "Allah akan membalas setiap perbuatan dosa dengan hukuman yang adil." },
            82: { indo: "Yang Maha Pemaaf", desc: "Allah Maha Pemaaf, menghapuskan dosa dan kesalahan hamba-Nya." },
            83: { indo: "Yang Maha Pengasuh", desc: "Allah sangat belas kasihan dan santun terhadap hamba-hamba-Nya." },
            84: { indo: "Penguasa Kerajaan", desc: "Allah adalah pemilik mutlak segala kerajaan di langit dan di bumi." },
            85: { indo: "Pemilik Kebesaran dan Kemuliaan", desc: "Hanya Allah yang memiliki keagungan yang sempurna dan kemuliaan yang abadi." },
            86: { indo: "Yang Maha Pemberi Keadilan", desc: "Allah menegakkan keadilan dan mengumpulkan manusia untuk dihisab dengan adil." },
            87: { indo: "Yang Maha Mengumpulkan", desc: "Allah akan mengumpulkan seluruh manusia pada hari kiamat." },
            88: { indo: "Yang Maha Kaya", desc: "Allah Maha Kaya, tidak butuh kepada apapun dari makhluk-Nya." },
            89: { indo: "Yang Maha Pemberi Kekayaan", desc: "Allah yang memberikan kekayaan dan kecukupan kepada siapa yang dikehendaki-Nya." },
            90: { indo: "Yang Maha Mencegah", desc: "Allah mencegah terjadinya sesuatu atau menahan rezeki sesuai hikmah-Nya." },
            91: { indo: "Yang Maha Pemberi Derita", desc: "Allah kuasa menimpakan bahaya atau musibah sebagai ujian atau hukuman." },
            92: { indo: "Yang Maha Pemberi Manfaat", desc: "Segala manfaat dan kebaikan bersumber dari Allah semata." },
            93: { indo: "Yang Maha Bercahaya", desc: "Allah adalah cahaya langit dan bumi, yang menerangi hati hamba-Nya dengan iman." },
            94: { indo: "Yang Maha Pemberi Petunjuk", desc: "Allah yang memberikan petunjuk ke jalan yang lurus." },
            95: { indo: "Yang Maha Pencipta", desc: "Allah menciptakan sesuatu yang baru tanpa contoh sebelumnya." },
            96: { indo: "Yang Maha Kekal", desc: "Allah Maha Kekal abadi ketika segala sesuatu hancur binasa." },
            97: { indo: "Yang Maha Pewaris", desc: "Allah yang tetap ada dan mewarisi bumi beserta isinya setelah semua makhluk mati." },
            98: { indo: "Yang Maha Pandai", desc: "Allah memberi petunjuk kepada kebenaran dan kebaikan dengan bijaksana." },
            99: { indo: "Yang Maha Sabar", desc: "Allah tidak tergesa-gesa menyiksa orang yang durhaka, memberi tangguh agar mereka sadar." }
        };

        // --- INIT ---
        document.addEventListener('DOMContentLoaded', () => {
            initTheme();
            fetchSurahList();
            checkLastRead();
            loadSettings();
            initDoaList();
            updateTasbihDisplay();
            document.getElementById('qariSelector').value = currentState.qariId;
            const audio = document.getElementById('mainAudioPlayer');
            audio.addEventListener('error', (e) => { if(currentState.isPlaying) handleAudioError(); });
        });

        // --- CORE FUNCTIONS (Navigation, Theme, etc) ---
        function switchMainTab(tab) {
            document.querySelectorAll('.bottom-nav-item').forEach(el => el.classList.remove('active', 'text-emerald-600', 'dark:text-emerald-400'));
            document.getElementById(`nav-${tab}`).classList.add('active', 'text-emerald-600', 'dark:text-emerald-400');
            ['quran','sholat','doa','asmaulhusna','tasbih'].forEach(v => document.getElementById(`view-${v}`).classList.add('hidden'));
            document.getElementById(`view-${tab}`).classList.remove('hidden');
            if(tab === 'sholat') loadSholatTimes();
            if(tab === 'asmaulhusna' && asmaulHusnaData.length === 0) loadAsmaulHusna();
            if(tab === 'quran') {
                document.getElementById('headerTitle').innerHTML = 'Muslim <span class="text-emerald-200">Pro</span>';
                document.getElementById('headerSubtitle').textContent = 'Indonesia';
                if(!document.getElementById('detailView').classList.contains('hidden')) {
                    document.getElementById('btnBack').classList.remove('hidden');
                    document.getElementById('modeToggleContainer').classList.remove('hidden');
                }
            } else {
                const titles = { sholat: 'Jadwal Sholat', doa: 'Kumpulan Doa', tasbih: 'Tasbih Digital', asmaulhusna: 'Asmaul Husna' };
                document.getElementById('headerTitle').textContent = titles[tab];
                document.getElementById('headerSubtitle').textContent = 'Ibadah Harian';
                document.getElementById('btnBack').classList.add('hidden');
                document.getElementById('modeToggleContainer').classList.add('hidden');
            }
        }

        // --- ASMAUL HUSNA LOGIC ---
        async function loadAsmaulHusna() {
            try {
                const res = await fetch(`https://api.aladhan.com/v1/asmaAlHusna`);
                const data = await res.json();
                if(data.code === 200) {
                    asmaulHusnaData = data.data;
                    renderAsmaulHusna();
                }
            } catch(e) { document.getElementById('asmaulHusnaGrid').innerHTML = '<p class="text-center text-red-500 col-span-full">Gagal memuat data.</p>'; }
        }

        function renderAsmaulHusna() {
            const container = document.getElementById('asmaulHusnaGrid');
            container.innerHTML = '';
            asmaulHusnaData.forEach((item, index) => {
                const detail = asmaulHusnaDetails[item.number] || { indo: item.en.meaning, desc: "-" };
                const el = document.createElement('div');
                el.className = 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col items-center justify-center text-center h-44 hover:-translate-y-1 transition cursor-pointer group relative overflow-hidden';
                el.onclick = () => openAsmaulHusnaModal(index);
                el.innerHTML = `
                    <div class="absolute top-2 right-2 text-gray-200 dark:text-gray-700 text-4xl font-arab opacity-20 pointer-events-none group-hover:scale-150 transition">${item.name}</div>
                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-400 font-bold text-xs flex items-center justify-center mb-2 z-10">${item.number}</div>
                    <h3 class="font-arab text-2xl text-gray-800 dark:text-gray-100 mb-1 z-10">${item.name}</h3>
                    <p class="text-xs font-bold text-emerald-600 dark:text-emerald-400 uppercase tracking-wide mb-1 z-10">${item.transliteration}</p>
                    <p class="text-[10px] text-gray-500 dark:text-gray-400 line-clamp-2 px-2 z-10">${detail.indo}</p>
                `;
                container.appendChild(el);
            });
        }

        function openAsmaulHusnaModal(index) {
            const item = asmaulHusnaData[index];
            const detail = asmaulHusnaDetails[item.number] || { indo: "Tidak tersedia", desc: "Penjelasan belum tersedia." };
            
            document.getElementById('ahModalNumber').textContent = item.number;
            document.getElementById('ahModalArabic').textContent = item.name;
            document.getElementById('ahModalLatin').textContent = item.transliteration;
            document.getElementById('ahModalEnglish').textContent = item.en.meaning;
            
            // New Indonesian Data
            document.getElementById('ahModalIndo').textContent = detail.indo;
            document.getElementById('ahModalDesc').textContent = detail.desc;
            
            document.getElementById('asmaulHusnaModal').classList.remove('hidden');
        }
        function closeAsmaulHusnaModal() { document.getElementById('asmaulHusnaModal').classList.add('hidden'); }

        // --- COMPASS, SHOLAT, DOA, TASBIH, QURAN (Logic tetap sama, diringkas) ---
        async function loadSholatTimes() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(async (pos) => {
                    const lat = pos.coords.latitude, lng = pos.coords.longitude;
                    document.getElementById('locationText').innerHTML = `<i class="fas fa-map-marker-alt mr-1"></i> Koordinat: ${lat.toFixed(2)}, ${lng.toFixed(2)}`;
                    calculateQibla(lat, lng);
                    try {
                        const ts = Math.floor(new Date().getTime() / 1000);
                        const res = await fetch(`https://api.aladhan.com/v1/timings/${ts}?latitude=${lat}&longitude=${lng}&method=20`);
                        const data = await res.json();
                        if(data.code === 200) renderPrayerList(data.data);
                    } catch(e) {}
                }, () => fetchSholatJakarta());
            } else fetchSholatJakarta();
        }
        async function fetchSholatJakarta() {
            calculateQibla(-6.2088, 106.8456);
            try { const res = await fetch(`https://api.aladhan.com/v1/timingsByCity?city=Jakarta&country=Indonesia&method=20`); const data = await res.json(); if(data.code===200) renderPrayerList(data.data); } catch(e){}
        }
        function renderPrayerList(data) {
            const t = data.timings;
            document.getElementById('currentDate').textContent = `${data.date.readable} / ${data.date.hijri.day} ${data.date.hijri.month.en} ${data.date.hijri.year}`;
            const prayers = [{id:'Fajr',n:'Subuh',i:'fa-cloud-sun'},{id:'Dhuhr',n:'Dzuhur',i:'fa-sun'},{id:'Asr',n:'Ashar',i:'fa-cloud-sun-rain'},{id:'Maghrib',n:'Maghrib',i:'fa-moon'},{id:'Isha',n:'Isya',i:'fa-star'}];
            let html='', found=false, now=new Date(), minNow=now.getHours()*60+now.getMinutes();
            prayers.forEach(p=>{
                const [h,m] = t[p.id].split(':').map(Number);
                let isNext=false; if(!found && (h*60+m)>minNow){ isNext=true; found=true; document.getElementById('nextPrayerTime').textContent=t[p.id]; document.getElementById('nextPrayerName').textContent=`Menuju ${p.n}`; }
                html += `<div class="flex justify-between items-center p-4 ${isNext?'bg-emerald-50 dark:bg-emerald-900/20':''} hover:bg-gray-50 dark:hover:bg-gray-700/50 transition"><div class="flex items-center gap-3"><div class="w-8 h-8 rounded-full ${isNext?'bg-emerald-100 text-emerald-600':'bg-gray-100 text-gray-400'} dark:bg-gray-700 flex items-center justify-center"><i class="fas ${p.i} text-xs"></i></div><span class="font-medium text-gray-700 dark:text-gray-200">${p.n}</span></div><span class="font-bold font-mono text-lg ${isNext?'text-emerald-600':'text-gray-600 dark:text-gray-400'}">${t[p.id]}</span></div>`;
            });
            if(!found){ document.getElementById('nextPrayerTime').textContent=t['Fajr']; document.getElementById('nextPrayerName').textContent="Menuju Subuh (Besok)"; }
            document.getElementById('prayerTimesList').innerHTML = html;
        }
        function toggleSholatView(view) {
            document.getElementById('sholatJadwalContainer').classList.toggle('hidden', view!=='jadwal');
            document.getElementById('sholatKiblatContainer').classList.toggle('hidden', view!=='kiblat');
            document.getElementById('btnSholatJadwal').className = view==='jadwal' ? "flex-1 py-2 rounded-lg bg-white dark:bg-gray-700 shadow text-sm font-bold text-emerald-600 dark:text-emerald-400 transition" : "flex-1 py-2 rounded-lg text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-white/50 dark:hover:bg-gray-700/50 transition";
            document.getElementById('btnSholatKiblat').className = view==='kiblat' ? "flex-1 py-2 rounded-lg bg-white dark:bg-gray-700 shadow text-sm font-bold text-emerald-600 dark:text-emerald-400 transition" : "flex-1 py-2 rounded-lg text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-white/50 dark:hover:bg-gray-700/50 transition";
        }
        function calculateQibla(lat, lng) {
            const PI = Math.PI, phiK = 21.422487*PI/180.0, lambdaK = 39.826206*PI/180.0, phi = lat*PI/180.0, lambda = lng*PI/180.0;
            const psi = 180.0/PI * Math.atan2(Math.sin(lambdaK-lambda), Math.cos(phi)*Math.tan(phiK)-Math.sin(phi)*Math.cos(lambdaK-lambda));
            currentState.qiblaAngle = Math.round(psi < 0 ? psi + 360 : psi);
            document.getElementById('kiblatInfo').textContent = `Arah Kiblat: ${currentState.qiblaAngle}° dari Utara`;
            document.getElementById('qiblaIndicatorWrapper').style.transform = `rotate(${currentState.qiblaAngle}deg)`;
        }
        function initCompassSensor() {
            if (typeof DeviceOrientationEvent.requestPermission === 'function') {
                DeviceOrientationEvent.requestPermission().then(r => { if(r==='granted') { window.addEventListener('deviceorientation', handleOrientation, true); document.getElementById('btnStartCompass').classList.add('hidden'); } else alert('Izin ditolak.'); });
            } else { window.addEventListener('deviceorientation', handleOrientation, true); document.getElementById('btnStartCompass').classList.add('hidden'); }
        }
        function handleOrientation(e) {
            let heading = e.webkitCompassHeading || (360 - e.alpha);
            document.getElementById('compassRose').style.transform = `rotate(${-heading}deg)`;
            let diff = Math.abs(heading - currentState.qiblaAngle);
            if(diff > 180) diff = 360 - diff;
            const ring = document.getElementById('compassRing');
            if(diff < 5) { ring.classList.add('aligned-glow'); if(navigator.vibrate) navigator.vibrate(50); } else ring.classList.remove('aligned-glow');
        }

        // --- Doa & Tasbih Logic ---
        const doaData = [{title:"Doa Sebelum Makan",arab:"بِسْمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ",trans:"Bismillaahirrohmaanirrohiim",arti:"Dengan menyebut nama Allah yang Maha Pengasih lagi Maha Penyayang."},{title:"Doa Sesudah Makan",arab:"اَلْحَمْدُ ِللهِ الَّذِىْ اَطْعَمَنَا وَسَقَانَا وَجَعَلَنَا مُسْلِمِيْنَ",trans:"Alhamdu lillaahil ladzii ath'amanaa wa saqoonaa wa ja'alanaa muslimiin",arti:"Segala puji bagi Allah yang telah memberi makan kami dan minuman kami, serta menjadikan kami sebagai orang-orang islam."},{title:"Doa Sebelum Tidur",arab:"بِسْمِكَ اللّهُمَّ اَحْيَا وَ بِسْمِكَ اَمُوْتُ",trans:"Bismika Allahumma ahyaa wa bismika amuut",arti:"Dengan nama-Mu ya Allah aku hidup, dan dengan nama-Mu aku mati."},{title:"Doa Bangun Tidur",arab:"اَلْحَمْدُ ِللهِ الَّذِىْ اَحْيَانَا بَعْدَمَآ اَمَاتَنَا وَاِلَيْهِ النُّشُوْرُ",trans:"Alhamdulillahil ladzi ahyana ba'da ma amatana wailaihin nusyur",arti:"Segala puji bagi Allah yang telah menghidupkan kami sesudah kami mati (membangunkan dari tidur) dan hanya kepada-Nya kami dikembalikan."}];
        function initDoaList() { renderDoa(doaData); }
        function renderDoa(data) {
            const c = document.getElementById('doaListContainer'); c.innerHTML='';
            data.forEach(d => {
                const el = document.createElement('div'); el.className = 'bg-white dark:bg-gray-800 p-5 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 hover:border-emerald-300 transition cursor-pointer group';
                el.innerHTML = `<h3 class="font-bold text-gray-800 dark:text-gray-100 text-lg group-hover:text-emerald-600 transition">${d.title}</h3><div class="mt-4 hidden group-hover:block transition-all duration-500"><p class="font-arab text-2xl text-right text-gray-700 dark:text-gray-200 mb-2 leading-loose">${d.arab}</p><p class="text-xs text-emerald-600 dark:text-emerald-400 italic mb-1">${d.trans}</p><p class="text-sm text-gray-600 dark:text-gray-400">"${d.arti}"</p></div><div class="mt-2 text-center text-gray-300 text-xs group-hover:hidden"><i class="fas fa-chevron-down"></i> Ketuk untuk baca</div>`;
                el.onclick=()=>{ el.querySelector('div.mt-4').classList.remove('hidden'); el.querySelector('div.text-center').classList.add('hidden'); }; c.appendChild(el);
            });
        }
        function filterDoa() { renderDoa(doaData.filter(d => d.title.toLowerCase().includes(document.getElementById('searchDoaInput').value.toLowerCase()))); }
        function countTasbih() { currentState.tasbihCount++; updateTasbihDisplay(); if(navigator.vibrate) navigator.vibrate(50); const btn = document.querySelector('.tasbih-btn'); btn.classList.add('scale-95'); setTimeout(()=>btn.classList.remove('scale-95'),100); }
        function resetTasbih() { if(confirm('Reset?')) { currentState.tasbihCount=0; updateTasbihDisplay(); } }
        function updateTasbihDisplay() { document.getElementById('tasbihCounter').textContent = currentState.tasbihCount; localStorage.setItem('tasbih_count', currentState.tasbihCount); }
        function setTasbihTarget(n) { alert(`Target: ${n}`); }

        // --- Common Utils (Theme, Quran fetch, etc) ---
        function initTheme() { if(localStorage.getItem('quran_theme')==='dark'||(!localStorage.getItem('quran_theme')&&window.matchMedia('(prefers-color-scheme: dark)').matches)) enableDarkMode(true); }
        function toggleTheme() { isDarkMode=!isDarkMode; enableDarkMode(isDarkMode); localStorage.setItem('quran_theme', isDarkMode?'dark':'light'); }
        function enableDarkMode(e) { isDarkMode=e; document.documentElement.classList.toggle('dark',e); document.getElementById('themeToggleBtn').innerHTML = e ? '<i class="fas fa-sun text-yellow-300"></i>' : '<i class="fas fa-moon"></i>'; }
        
        async function fetchSurahList() { try{const r=await fetch(`${API_BASE}/surah`);const d=await r.json();if(d.code===200){allSurahsData=d.data;renderSurahList(allSurahsData);}}catch(e){} }
        async function openSurah(n) {
            document.getElementById('homeView').classList.add('hidden'); document.getElementById('detailView').classList.remove('hidden'); document.getElementById('btnBack').classList.remove('hidden'); document.getElementById('modeToggleContainer').classList.remove('hidden'); document.getElementById('ayatLoader').classList.remove('hidden'); stopAudio(); document.getElementById('bismillahContainer').style.display=(n==9)?'none':'block';
            try { const r=await fetch(`${API_BASE}/surah/${n}/editions/quran-uthmani,id.indonesian`); const d=await r.json(); if(d.code===200){ currentState.surah=d.data[0]; currentState.indo=d.data[1]; currentState.surahNum=n; renderHeader(currentState.surah); renderListMode(); renderMushafMode(); localStorage.setItem('quran_last_surah', n); localStorage.setItem('quran_last_surah_name', currentState.surah.englishName); switchMode(viewMode); } } catch(e){ alert('Gagal load surat.'); goHome(); } finally { document.getElementById('ayatLoader').classList.add('hidden'); }
        }
        function renderSurahList(s) { document.getElementById('surahList').innerHTML = s.map(x=>`<div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow-[0_2px_8px_-2px_rgba(0,0,0,0.05)] hover:shadow-lg border border-transparent hover:border-emerald-100 dark:hover:border-gray-600 hover:-translate-y-1 transition-all cursor-pointer flex items-center gap-4 group" onclick="openSurah(${x.number})"><div class="relative w-10 h-10 flex items-center justify-center"><svg class="absolute w-full h-full text-emerald-100 dark:text-gray-700 group-hover:text-emerald-500 transition duration-300" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L22 12L12 22L2 12L12 2Z"/></svg><span class="relative z-10 text-emerald-600 dark:text-emerald-400 group-hover:text-white text-xs font-bold transition">${x.number}</span></div><div class="flex-1"><h3 class="font-bold text-gray-800 dark:text-gray-100 text-sm">${x.englishName}</h3><p class="text-[10px] text-gray-500 dark:text-gray-400 uppercase tracking-wide">${x.englishNameTranslation}</p></div><div class="text-right"><span class="font-arab text-lg text-gray-600 dark:text-gray-300">${x.name.replace('سُورَةُ ','')}</span><p class="text-[10px] text-gray-400 dark:text-gray-500 mt-1">${x.numberOfAyahs} Ayat</p></div></div>`).join(''); }
        function renderHeader(s) { document.getElementById('detailSurahName').textContent=`${s.number}. ${s.englishName}`; document.getElementById('detailSurahType').textContent=s.revelationType; document.getElementById('detailSurahAyahCount').textContent=`${s.numberOfAyahs} AYAT`; }
        function renderListMode() {
            document.getElementById('ayatListMode').innerHTML = currentState.surah.ayahs.map((a,i)=> {
                let txt = a.text; if(currentState.surah.number!==1 && i===0) txt = txt.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ','').trim();
                return `<div id="ayat-list-${i}" class="p-5 hover:bg-emerald-50/30 dark:hover:bg-emerald-900/10 transition duration-300 relative group scroll-mt-24"><div class="flex justify-between items-start mb-4"><div class="flex gap-2"><div class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 font-bold text-xs flex items-center justify-center">${a.numberInSurah}</div></div><div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity bg-white dark:bg-gray-800 shadow-sm rounded-full p-1 border dark:border-gray-700"><button onclick="playAyah(${i})" class="w-8 h-8 rounded-full hover:bg-emerald-100 dark:hover:bg-emerald-900 text-emerald-600 dark:text-emerald-400 flex items-center justify-center"><i class="fas fa-play text-xs"></i></button><button onclick="openTafsirModal(${currentState.surah.number},${a.numberInSurah})" class="w-8 h-8 rounded-full hover:bg-blue-100 dark:hover:bg-blue-900 text-blue-600 dark:text-blue-400 flex items-center justify-center"><i class="fas fa-book-open text-xs"></i></button><button onclick="bookmarkAyah(${a.numberInSurah})" class="w-8 h-8 rounded-full hover:bg-yellow-100 dark:hover:bg-yellow-900 text-yellow-500 flex items-center justify-center"><i class="fas fa-bookmark text-xs"></i></button></div></div><div class="text-right mb-6 pl-4" dir="rtl"><p class="font-arab text-gray-800 dark:text-gray-100 leading-relaxed text-justify">${txt}</p></div><div class="text-left pr-4"><p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">${currentState.indo.ayahs[i].text}</p></div></div>`;
            }).join('');
        }
        function renderMushafMode() {
            const pages={}; currentState.surah.ayahs.forEach((a,i)=>{ if(!pages[a.page])pages[a.page]=[]; pages[a.page].push({...a,idx:i}); });
            document.getElementById('ayatMushafMode').innerHTML = Object.keys(pages).map(pn => {
                return `<div class="mushaf-page max-w-xl mx-auto p-6 md:p-10 mb-6 rounded shadow-sm relative transition-colors"><div class="font-arab text-gray-800 dark:text-gray-200 leading-loose text-justify">` + pages[pn].map(it => {
                    let txt = it.text; if(currentState.surah.number!==1 && it.idx===0) txt = txt.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ','').trim();
                    return `<span id="ayah-mushaf-${it.idx}" class="hover:bg-yellow-200/50 dark:hover:bg-yellow-700/30 cursor-pointer rounded transition px-0.5" onclick="playAyah(${it.idx})">${txt} <span class="ayat-number-symbol">${toArabicNum(it.numberInSurah)}</span></span>`;
                }).join(' ') + `</div><div class="text-center text-[10px] text-gray-400 dark:text-gray-500 mt-4 tracking-widest">- ${pn} -</div></div>`;
            }).join('');
        }
        
        async function playAyah(idx) {
            if('speechSynthesis' in window) window.speechSynthesis.cancel(); currentState.isPlayingTranslation=false;
            if(idx<0||idx>=currentState.surah.ayahs.length){ stopAudio(); return; }
            currentState.currentAyahIndex=idx; currentState.isPlaying=true;
            const ayah=currentState.surah.ayahs[idx]; const qari=currentState.qariId;
            document.getElementById('audioPlayerContainer').classList.remove('hidden'); document.getElementById('audioInfoText').textContent=`QS. ${currentState.surah.englishName} : ${ayah.numberInSurah}`; document.getElementById('playPauseBtn').innerHTML='<i class="fas fa-pause"></i>'; highlightAyah(idx);
            const audio=document.getElementById('mainAudioPlayer'); const src=`https://cdn.islamic.network/quran/audio/128/${qari}/${ayah.number}.mp3`;
            if(currentState.currentAudioSrc!==src){ currentState.currentAudioSrc=src; audio.src=src; audio.load(); }
            try{ await audio.play(); } catch(e){ handleAudioError(); }
        }
        function audioEnded() { if(viewMode==='list') readTranslation(currentState.currentAyahIndex); else playAyah(currentState.currentAyahIndex+1); }
        function readTranslation(i) {
            currentState.isPlayingTranslation=true; document.getElementById('audioInfoText').textContent=`Terjemahan Ayat ${currentState.surah.ayahs[i].numberInSurah}`;
            const u=new SpeechSynthesisUtterance(currentState.indo.ayahs[i].text); u.lang='id-ID'; u.rate=0.95;
            u.onend=()=>{ currentState.isPlayingTranslation=false; playAyah(i+1); }; u.onerror=()=>{ currentState.isPlayingTranslation=false; playAyah(i+1); }; window.speechSynthesis.speak(u);
        }
        function togglePlay() { const a=document.getElementById('mainAudioPlayer'); if(currentState.isPlayingTranslation){ if(window.speechSynthesis.paused) window.speechSynthesis.resume(); else window.speechSynthesis.pause(); } else { if(a.paused) a.play().catch(()=>{}); else a.pause(); } document.getElementById('playPauseBtn').innerHTML = (a.paused && !window.speechSynthesis.speaking) ? '<i class="fas fa-play"></i>' : '<i class="fas fa-pause"></i>'; }
        function stopAudio() { document.getElementById('mainAudioPlayer').pause(); if('speechSynthesis' in window) window.speechSynthesis.cancel(); currentState.isPlaying=false; currentState.isPlayingTranslation=false; document.getElementById('audioPlayerContainer').classList.add('hidden'); removeHighlights(); }
        function updateProgress() { const a=document.getElementById('mainAudioPlayer'); if(a.duration) document.getElementById('audioProgress').style.width=`${(a.currentTime/a.duration)*100}%`; }
        function highlightAyah(i) { removeHighlights(); const l=document.getElementById(`ayah-list-${i}`), m=document.getElementById(`ayah-mushaf-${i}`); if(l){l.classList.add('active-ayat'); if(viewMode==='list') scrollIntoViewIfNeeded(l);} if(m){m.classList.add('active-ayat'); if(viewMode==='mushaf') scrollIntoViewIfNeeded(m);} }
        function removeHighlights() { document.querySelectorAll('.active-ayat').forEach(e=>e.classList.remove('active-ayat')); }
        function scrollIntoViewIfNeeded(t) { const r=t.getBoundingClientRect(); if(r.top<100||r.bottom>window.innerHeight) t.scrollIntoView({behavior:'smooth',block:'center'}); }
        function handleAudioError() { document.getElementById('audioErrorModal').classList.remove('hidden'); document.getElementById('playPauseBtn').innerHTML='<i class="fas fa-play"></i>'; }
        function closeAudioErrorModal() { document.getElementById('audioErrorModal').classList.add('hidden'); }
        function retryAudioWithNewQari() { changeQari(document.getElementById('quickQariSelector').value); document.getElementById('qariSelector').value = currentState.qariId; closeAudioErrorModal(); }
        function goHome() { stopAudio(); document.getElementById('detailView').classList.add('hidden'); document.getElementById('homeView').classList.remove('hidden'); document.getElementById('btnBack').classList.add('hidden'); document.getElementById('modeToggleContainer').classList.add('hidden'); checkLastRead(); }
        function checkLastRead() { if(localStorage.getItem('quran_last_surah_name')){ document.getElementById('lastReadContainer').classList.remove('hidden'); document.getElementById('lastReadSurah').textContent=localStorage.getItem('quran_last_surah_name'); document.getElementById('lastReadAyah').textContent=`Ayat ${localStorage.getItem('quran_last_ayah')}`; } }
        function continueReading() { const n=localStorage.getItem('quran_last_surah'); if(n) openSurah(n); }
        function scrollToTop() { window.scrollTo({top:0, behavior:'smooth'}); }
        function filterSurahs() { const q=document.getElementById('searchInput').value.toLowerCase(); renderSurahList(allSurahsData.filter(s=>s.englishName.toLowerCase().includes(q)||s.englishNameTranslation.toLowerCase().includes(q)||s.number.toString().includes(q))); }
        function toArabicNum(n) { return n.toString().split('').map(d=>['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'][d]).join(''); }
        function toggleSettings() { const m=document.getElementById('settingsModal'),c=document.getElementById('settingsContent'); if(m.classList.contains('hidden')){m.classList.remove('hidden');setTimeout(()=>c.classList.remove('translate-y-full'),10);}else{c.classList.add('translate-y-full');setTimeout(()=>m.classList.add('hidden'),300);} }
        function updateFontSize(v) { document.documentElement.style.setProperty('--arabic-font-size',`${v}px`); document.getElementById('fontPreview').style.fontSize=`${v}px`; localStorage.setItem('quran_font_size',v); }
        function changeQari(v) { currentState.qariId=v; localStorage.setItem('quran_qari',v); const s=document.getElementById('qariSelector'); document.getElementById('currentQariName').textContent=s.options[s.selectedIndex].text.split(' ')[0]; if(currentState.currentAyahIndex!==-1){currentState.currentAudioSrc=''; playAyah(currentState.currentAyahIndex);} }
        function loadSettings() { const s=localStorage.getItem('quran_font_size'); if(s){ updateFontSize(s); document.getElementById('fontSizeSlider').value=s; } }
        function switchMode(m) { viewMode=m; document.getElementById('btnModeList').className=m==='list'?'px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition':'px-3 py-1 rounded text-emerald-100 hover:text-white transition'; document.getElementById('btnModeMushaf').className=m==='mushaf'?'px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition':'px-3 py-1 rounded text-emerald-100 hover:text-white transition'; document.getElementById('ayatListMode').classList.toggle('hidden',m!=='list'); document.getElementById('ayatMushafMode').classList.toggle('hidden',m!=='mushaf'); if(currentState.currentAyahIndex!==-1) highlightAyah(currentState.currentAyahIndex); }
        function closeTafsir() { document.getElementById('tafsirModal').classList.add('hidden'); }
        async function openTafsirModal(s,a) { const m=document.getElementById('tafsirModal'); m.classList.remove('hidden'); document.getElementById('tafsirContent').innerHTML='<div class="flex justify-center py-10"><div class="loader"></div></div>'; document.getElementById('tafsirTitle').textContent=`Surat ${currentState.surah.englishName} Ayat ${a}`; try{ const r=await fetch(`${API_BASE}/ayah/${s}:${a}/id.jalalayn`); const d=await r.json(); if(d.code===200) document.getElementById('tafsirContent').innerHTML=`<p class="mb-4 font-bold text-gray-800 dark:text-gray-100">Tafsir Jalalayn:</p><p>${d.data.text}</p>`; } catch(e){ document.getElementById('tafsirContent').innerHTML='<p class="text-red-500">Gagal.</p>'; } }
    </script>
</body>
</html>