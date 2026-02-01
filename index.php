<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Qur'an Digital Indonesia</title>

    <!-- SEO & Open Graph -->
    <meta property="og:title" content="Al-Qur'an Digital Indonesia" />
    <meta property="og:description" content="Baca Al-Qur'an digital dengan terjemahan Bahasa Indonesia, Tafsir, dan audio murottal lengkap." />
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
                            bg: '#111827', // gray-900
                            card: '#1f2937', // gray-800
                            text: '#f3f4f6', // gray-100
                            sub: '#9ca3af' // gray-400
                        }
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
        }

        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Tipografi Arab Dinamis */
        .font-arab {
            font-family: 'Amiri', 'Scheherazade New', serif;
            line-height: var(--arabic-line-height);
            font-size: var(--arabic-font-size);
        }

        /* Mode Mushaf Paper Effect */
        .mushaf-page {
            background-color: #fffbf2;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23d4d4d4' fill-opacity='0.1'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z'/%3E%3C/g%3E%3C/svg%3E");
            border: 1px solid #e5e7eb;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-align: justify;
            text-align-last: center;
            direction: rtl;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .dark .mushaf-page {
            background-color: #1f2937;
            border-color: #374151;
        }

        .dark .mushaf-page .font-arab {
            color: #e5e7eb;
        }

        .mushaf-page .font-arab {
            line-height: 2.3;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }

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

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

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
            background-color: rgba(0, 0, 0, 0.5);
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100 h-screen flex flex-col overflow-hidden transition-colors duration-300">

    <!-- Header -->
    <header class="bg-gradient-to-r from-emerald-600 to-teal-700 dark:from-emerald-900 dark:to-teal-900 text-white shadow-lg z-20 shrink-0 transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer group" onclick="goHome()">
                <div class="bg-white/20 p-2 rounded-lg group-hover:bg-white/30 transition">
                    <i class="fas fa-quran text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold leading-tight tracking-tight">Al-Qur'an <span class="text-emerald-200">Pro</span></h1>
                    <p class="text-[10px] text-emerald-100 uppercase tracking-widest opacity-90">Digital & Audio</p>
                </div>
            </div>

            <!-- Controls Kanan -->
            <div class="flex items-center gap-2 md:gap-3">

                <!-- Toggle Dark Mode -->
                <button onclick="toggleTheme()" id="themeToggleBtn" class="w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-full transition text-emerald-100 hover:text-white" title="Ganti Tema">
                    <i class="fas fa-moon"></i>
                </button>

                <!-- Tombol Settings -->
                <button onclick="toggleSettings()" class="w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-full transition">
                    <i class="fas fa-cog"></i>
                </button>

                <!-- Toggle Mode (Hanya di Detail) -->
                <div id="modeToggleContainer" class="hidden bg-emerald-800/50 rounded-lg p-1 flex text-xs font-medium">
                    <button onclick="switchMode('list')" id="btnModeList" class="px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition">List</button>
                    <button onclick="switchMode('mushaf')" id="btnModeMushaf" class="px-3 py-1 rounded text-emerald-100 hover:text-white hover:bg-white/10 transition">Mushaf</button>
                </div>

                <!-- Tombol Kembali -->
                <button id="btnBack" onclick="goHome()" class="hidden w-9 h-9 flex items-center justify-center bg-white/10 hover:bg-red-500/80 rounded-full text-sm transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto relative scroll-smooth bg-gray-50 dark:bg-gray-900 transition-colors duration-300" id="mainContainer">

        <!-- SECTION: DAFTAR SURAT & JUZ (HOME) -->
        <div id="homeView" class="max-w-4xl mx-auto px-4 py-6 transition-all duration-300">

            <!-- Last Read Card -->
            <div id="lastReadContainer" class="hidden mb-6 bg-gradient-to-br from-emerald-700 to-teal-600 dark:from-emerald-900 dark:to-teal-800 rounded-2xl p-5 text-white shadow-xl flex justify-between items-center relative overflow-hidden group">
                <div class="absolute -right-4 -bottom-6 opacity-20 transform rotate-12 transition group-hover:scale-110 duration-700">
                    <i class="fas fa-book-open text-9xl"></i>
                </div>
                <div class="relative z-10">
                    <p class="text-xs font-medium text-emerald-200 mb-1 flex items-center gap-1"><i class="fas fa-history text-[10px]"></i> Terakhir Dibaca</p>
                    <h3 id="lastReadSurah" class="text-2xl font-bold tracking-tight">Al-Fatihah</h3>
                    <p id="lastReadAyah" class="text-sm opacity-90">Ayat 1</p>
                </div>
                <button onclick="continueReading()" class="relative z-10 bg-white/10 backdrop-blur-md border border-white/20 text-white px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-white hover:text-emerald-700 transition shadow-lg">
                    Lanjut <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>

            <!-- Tab Navigation (Surah / Juz) -->
            <div class="flex gap-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <button onclick="switchHomeTab('surah')" id="tabSurah" class="pb-2 border-b-2 border-emerald-600 text-emerald-700 dark:text-emerald-400 font-bold text-sm px-2">Daftar Surat</button>
                <button onclick="switchHomeTab('juz')" id="tabJuz" class="pb-2 border-b-2 border-transparent text-gray-500 dark:text-gray-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium text-sm px-2 transition">Juz Amma</button>
            </div>

            <!-- Search Bar -->
            <div class="relative mb-6">
                <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                <input type="text" id="searchInput" placeholder="Cari surat..."
                    class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 transition"
                    onkeyup="filterSurahs()">
            </div>

            <!-- Content Container -->
            <div id="homeContentArea">
                <!-- Grid Daftar Surat -->
                <div id="surahList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <div class="col-span-full flex flex-col items-center justify-center py-20 text-gray-400 dark:text-gray-500">
                        <div class="loader mb-4"></div>
                        <p class="text-sm">Memuat Al-Qur'an...</p>
                    </div>
                </div>

                <!-- Daftar Juz (Simple List for Juz 30 - Example) -->
                <div id="juzList" class="hidden grid grid-cols-1 md:grid-cols-2 gap-3">
                    <!-- Populated by JS -->
                </div>
            </div>
        </div>

        <!-- SECTION: DETAIL SURAT -->
        <div id="detailView" class="hidden max-w-3xl mx-auto min-h-full bg-white dark:bg-gray-900 shadow-2xl transition-all duration-300 relative">

            <!-- Header Surat Detail (Sticky) -->
            <div class="sticky top-0 bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 z-10 px-4 py-3 flex justify-between items-center shadow-sm transition-colors">
                <div>
                    <h2 id="detailSurahName" class="text-lg font-bold text-gray-800 dark:text-gray-100">Nama Surat</h2>
                    <div class="flex items-center gap-2 text-[11px] text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wide">
                        <span id="detailSurahType" class="bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">MAKKIYAH</span>
                        <span id="detailSurahAyahCount">0 AYAT</span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="scrollToTop()" class="w-8 h-8 rounded-full bg-gray-50 dark:bg-gray-800 hover:bg-emerald-50 dark:hover:bg-gray-700 text-gray-400 hover:text-emerald-600 transition flex items-center justify-center">
                        <i class="fas fa-arrow-up text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Bismillah Calligraphy -->
            <div id="bismillahContainer" class="py-10 text-center bg-gradient-to-b from-emerald-50/50 to-white dark:from-gray-800 dark:to-gray-900 transition-colors">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Basmala.svg" class="h-12 md:h-16 mx-auto opacity-80 dark:invert dark:opacity-70" alt="Bismillah">
            </div>

            <!-- Container Mode List -->
            <div id="ayatListMode" class="divide-y divide-gray-100 dark:divide-gray-800 pb-32">
                <!-- Ayat List Rendered Here -->
            </div>

            <!-- Container Mode Mushaf -->
            <div id="ayatMushafMode" class="hidden pb-32 px-1 md:px-6 py-6 bg-gray-200 dark:bg-[#111827]">
                <!-- Mushaf Pages Rendered Here -->
            </div>

            <!-- Loading Ayat -->
            <div id="ayatLoader" class="hidden absolute inset-0 bg-white dark:bg-gray-900 z-20 flex flex-col items-center justify-center">
                <div class="loader mb-4"></div>
                <p class="text-gray-500 dark:text-gray-400 text-sm">Membuka lembaran...</p>
            </div>
        </div>

    </main>

    <!-- MODAL: SETTINGS -->
    <div id="settingsModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 modal-overlay" onclick="toggleSettings()"></div>
        <div class="absolute bottom-0 left-0 right-0 md:top-1/2 md:left-1/2 md:bottom-auto md:-translate-x-1/2 md:-translate-y-1/2 md:w-96 bg-white dark:bg-gray-800 rounded-t-2xl md:rounded-2xl shadow-2xl p-6 transform transition-transform duration-300 translate-y-full md:translate-y-0 text-gray-800 dark:text-gray-100" id="settingsContent">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-bold">Pengaturan</h3>
                <button onclick="toggleSettings()" class="text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button>
            </div>

            <!-- Font Size -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-3">Ukuran Huruf Arab</label>
                <div class="flex items-center gap-4">
                    <span class="text-xs">A</span>
                    <input type="range" min="20" max="60" value="32" id="fontSizeSlider" oninput="updateFontSize(this.value)">
                    <span class="text-xl font-bold">A</span>
                </div>
                <div class="mt-4 p-4 bg-emerald-50 dark:bg-gray-900 rounded-lg text-center border border-emerald-100 dark:border-gray-700">
                    <p class="font-arab text-emerald-800 dark:text-emerald-400" id="fontPreview">بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                </div>
            </div>

            <!-- Audio Qari -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">Pilih Qari (Pembaca)</label>
                <select id="qariSelector" onchange="changeQari(this.value)" class="w-full p-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg text-sm focus:ring-emerald-500 focus:border-emerald-500 text-gray-800 dark:text-gray-200">
                    <option value="ar.alafasy">Mishary Rashid Alafasy</option>
                    <option value="ar.abdurrahmaansudais">Abdurrahmaan As-Sudais</option>
                    <option value="ar.saoodshuraym">Sa'ud ash-Shuraym</option>
                    <option value="ar.saadalghamdi">Saad Al-Ghamdi</option>
                    <option value="ar.husary">Mahmoud Khalil Al-Husary</option>
                    <option value="ar.abdulbasitmurattal">Abdul Basit (Murattal)</option>
                    <option value="ar.mahermuaiqly">Maher Al-Muaiqly</option>
                </select>
            </div>

            <!-- Info -->
            <div class="text-center text-xs text-gray-400 mt-4 border-t border-gray-100 dark:border-gray-700 pt-4">
                Versi 3.1 • Data dari AlQuran.cloud & Kemenag
            </div>
        </div>
    </div>

    <!-- MODAL: TAFSIR -->
    <div id="tafsirModal" class="fixed inset-0 z-50 hidden flex items-center justify-center px-4">
        <div class="absolute inset-0 modal-overlay" onclick="closeTafsir()"></div>
        <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-lg w-full max-h-[80vh] flex flex-col transition-colors">
            <div class="p-4 border-b dark:border-gray-700 flex justify-between items-center bg-gray-50 dark:bg-gray-700 rounded-t-xl">
                <div>
                    <h3 class="font-bold text-gray-800 dark:text-gray-100">Tafsir Ayat</h3>
                    <p class="text-xs text-emerald-600 dark:text-emerald-400" id="tafsirTitle">Surat ... Ayat ...</p>
                </div>
                <button onclick="closeTafsir()" class="w-8 h-8 rounded-full bg-white dark:bg-gray-600 hover:bg-red-50 text-gray-400 hover:text-red-500 shadow-sm flex items-center justify-center transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6 overflow-y-auto leading-relaxed text-gray-700 dark:text-gray-300 text-sm md:text-base text-justify" id="tafsirContent">
                <div class="flex justify-center py-10">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="p-3 border-t dark:border-gray-700 bg-gray-50 dark:bg-gray-700 rounded-b-xl text-center">
                <p class="text-[10px] text-gray-400">Sumber: Tafsir Kemenag RI</p>
            </div>
        </div>
    </div>

    <!-- MODAL: AUDIO ERROR & QUICK SWITCH -->
    <div id="audioErrorModal" class="fixed inset-0 z-[60] hidden flex items-center justify-center px-4">
        <div class="absolute inset-0 modal-overlay"></div>
        <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl max-w-sm w-full p-6 text-center transform transition-all scale-100">
            <div class="w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-exclamation-triangle text-2xl text-red-500"></i>
            </div>
            <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-2">Gagal Memutar Audio</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                Sumber audio Qari saat ini tidak dapat diakses atau koneksi terganggu. Silakan pilih Qari lain untuk melanjutkan.
            </p>

            <div class="mb-6 text-left">
                <label class="block text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wide mb-2">Ganti Qari:</label>
                <select id="quickQariSelector" class="w-full p-3 bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl text-sm focus:ring-emerald-500 focus:border-emerald-500 text-gray-800 dark:text-gray-200 outline-none cursor-pointer">
                    <option value="ar.alafasy">Mishary Rashid Alafasy</option>
                    <option value="ar.abdurrahmaansudais">Abdurrahmaan As-Sudais</option>
                    <option value="ar.saoodshuraym">Sa'ud ash-Shuraym</option>
                    <option value="ar.saadalghamdi">Saad Al-Ghamdi</option>
                    <option value="ar.husary">Mahmoud Khalil Al-Husary</option>
                    <option value="ar.abdulbasitmurattal">Abdul Basit (Murattal)</option>
                    <option value="ar.mahermuaiqly">Maher Al-Muaiqly</option>
                </select>
            </div>

            <div class="flex gap-3">
                <button onclick="closeAudioErrorModal()" class="flex-1 py-2.5 rounded-xl border border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition">Batal</button>
                <button onclick="retryAudioWithNewQari()" class="flex-1 py-2.5 rounded-xl bg-emerald-600 text-white font-bold hover:bg-emerald-700 shadow-lg shadow-emerald-200/50 dark:shadow-none transition flex items-center justify-center gap-2">
                    <i class="fas fa-redo"></i> Putar Ulang
                </button>
            </div>
        </div>
    </div>

    <!-- Audio Player Floating -->
    <div id="audioPlayerContainer" class="hidden fixed bottom-4 left-4 right-4 md:left-auto md:right-8 md:w-96 bg-white/95 dark:bg-gray-800/95 backdrop-blur-md border border-emerald-100 dark:border-gray-700 rounded-2xl shadow-2xl p-4 z-40 ring-1 ring-black/5 transition-colors">
        <div class="flex items-center justify-between gap-4">
            <div class="flex-1 min-w-0">
                <p id="audioInfoText" class="text-sm font-bold text-gray-800 dark:text-gray-100 truncate">Memutar Ayat...</p>
                <p class="text-[10px] text-emerald-600 dark:text-emerald-400 font-medium tracking-wide uppercase">Qari: <span id="currentQariName">Mishary</span></p>
            </div>
            <div class="flex items-center gap-2">
                <!-- Play/Pause -->
                <button onclick="togglePlay()" id="playPauseBtn" class="w-10 h-10 bg-emerald-600 hover:bg-emerald-500 text-white rounded-full flex items-center justify-center shadow-lg transition transform active:scale-90">
                    <i class="fas fa-pause"></i>
                </button>
                <!-- Stop -->
                <button onclick="stopAudio()" class="w-8 h-8 text-gray-400 dark:text-gray-500 hover:text-red-500 bg-gray-50 dark:bg-gray-700 rounded-full flex items-center justify-center transition">
                    <i class="fas fa-stop text-xs"></i>
                </button>
            </div>
        </div>
        <!-- Progress Bar (Simple) -->
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1 mt-3 overflow-hidden">
            <div id="audioProgress" class="bg-emerald-500 h-1 rounded-full w-0 transition-all duration-300"></div>
        </div>
        <audio id="mainAudioPlayer" onended="audioEnded()" ontimeupdate="updateProgress()"></audio>
    </div>

    <script>
        // --- CONFIG & STATE ---
        const API_BASE = 'https://api.alquran.cloud/v1';
        let allSurahsData = [];
        let viewMode = 'list';
        let isDarkMode = false;

        let currentState = {
            surah: null, // Full object
            surahNum: 0,
            indo: null, // Translation
            qariId: localStorage.getItem('quran_qari') || 'ar.alafasy',
            isPlaying: false,
            isPlayingTranslation: false,
            currentAyahIndex: -1,
            currentAudioSrc: ''
        };

        // --- INIT ---
        document.addEventListener('DOMContentLoaded', () => {
            initTheme();
            fetchSurahList();
            checkLastRead();
            loadSettings();
            document.getElementById('qariSelector').value = currentState.qariId;

            // Add error listener to audio player
            const audio = document.getElementById('mainAudioPlayer');
            audio.addEventListener('error', (e) => {
                console.error("Audio Error Event:", e);
                // Only handle error if we were trying to play
                if (currentState.isPlaying) {
                    handleAudioError();
                }
            });
        });

        // --- THEME MANAGEMENT ---
        function initTheme() {
            const savedTheme = localStorage.getItem('quran_theme');
            if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                enableDarkMode(true);
            } else {
                enableDarkMode(false);
            }
        }

        function toggleTheme() {
            isDarkMode = !isDarkMode;
            enableDarkMode(isDarkMode);
            localStorage.setItem('quran_theme', isDarkMode ? 'dark' : 'light');
        }

        function enableDarkMode(enable) {
            isDarkMode = enable;
            const html = document.documentElement;
            const btn = document.getElementById('themeToggleBtn');
            if (enable) {
                html.classList.add('dark');
                btn.innerHTML = '<i class="fas fa-sun text-yellow-300"></i>';
            } else {
                html.classList.remove('dark');
                btn.innerHTML = '<i class="fas fa-moon"></i>';
            }
        }

        // --- FETCH DATA ---
        async function fetchSurahList() {
            try {
                const res = await fetch(`${API_BASE}/surah`);
                const data = await res.json();
                if (data.code === 200) {
                    allSurahsData = data.data;
                    renderSurahList(allSurahsData);
                    renderJuzList();
                }
            } catch (e) {
                document.getElementById('surahList').innerHTML = `<p class="text-red-500 col-span-3 text-center">Gagal koneksi server.</p>`;
            }
        }

        async function openSurah(surahNumber) {
            window.scrollTo(0, 0);
            document.getElementById('homeView').classList.add('hidden');
            document.getElementById('detailView').classList.remove('hidden');
            document.getElementById('btnBack').classList.remove('hidden');
            document.getElementById('modeToggleContainer').classList.remove('hidden');
            document.getElementById('ayatLoader').classList.remove('hidden');

            stopAudio();
            document.getElementById('bismillahContainer').style.display = (surahNumber == 9) ? 'none' : 'block';

            try {
                const res = await fetch(`${API_BASE}/surah/${surahNumber}/editions/quran-uthmani,id.indonesian`);
                const data = await res.json();

                if (data.code === 200) {
                    currentState.surah = data.data[0];
                    currentState.indo = data.data[1];
                    currentState.surahNum = surahNumber;

                    renderHeader(currentState.surah);
                    renderListMode();
                    renderMushafMode();

                    localStorage.setItem('quran_last_surah', surahNumber);
                    localStorage.setItem('quran_last_surah_name', currentState.surah.englishName);

                    switchMode(viewMode);
                }
            } catch (e) {
                alert('Gagal memuat surat. Cek koneksi internet.');
                goHome();
            } finally {
                document.getElementById('ayatLoader').classList.add('hidden');
            }
        }

        // --- RENDER FUNCTIONS ---
        function renderSurahList(surahs) {
            const container = document.getElementById('surahList');
            container.innerHTML = '';
            surahs.forEach(s => {
                const el = document.createElement('div');
                el.className = 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-[0_2px_8px_-2px_rgba(0,0,0,0.05)] hover:shadow-lg border border-transparent hover:border-emerald-100 dark:hover:border-gray-600 hover:-translate-y-1 transition-all cursor-pointer flex items-center gap-4 group';
                el.onclick = () => openSurah(s.number);
                el.innerHTML = `
                    <div class="relative w-10 h-10 flex items-center justify-center">
                        <svg class="absolute w-full h-full text-emerald-100 dark:text-gray-700 group-hover:text-emerald-500 transition duration-300" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L22 12L12 22L2 12L12 2Z"/></svg>
                        <span class="relative z-10 text-emerald-600 dark:text-emerald-400 group-hover:text-white text-xs font-bold transition">${s.number}</span>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-800 dark:text-gray-100 text-sm">${s.englishName}</h3>
                        <p class="text-[10px] text-gray-500 dark:text-gray-400 uppercase tracking-wide">${s.englishNameTranslation}</p>
                    </div>
                    <div class="text-right">
                         <span class="font-arab text-lg text-gray-600 dark:text-gray-300">${s.name.replace('سُورَةُ ', '')}</span>
                         <p class="text-[10px] text-gray-400 dark:text-gray-500 mt-1">${s.numberOfAyahs} Ayat</p>
                    </div>
                `;
                container.appendChild(el);
            });
        }

        function renderJuzList() {
            const container = document.getElementById('juzList');
            container.innerHTML = '';
            for (let i = 1; i <= 30; i++) {
                const el = document.createElement('div');
                el.className = 'bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 hover:border-emerald-300 cursor-pointer flex justify-between items-center group';
                el.innerHTML = `<span class="font-bold text-gray-700 dark:text-gray-200">Juz ${i}</span> <i class="fas fa-chevron-right text-gray-300 dark:text-gray-600 group-hover:text-emerald-500 text-xs"></i>`;
                el.onclick = () => {
                    alert('Fitur navigasi per Juz lengkap akan hadir di update berikutnya! Silakan pilih lewat Surat dulu.');
                    switchHomeTab('surah');
                };
                container.appendChild(el);
            }
        }

        function renderHeader(surah) {
            document.getElementById('detailSurahName').textContent = `${surah.number}. ${surah.englishName}`;
            document.getElementById('detailSurahType').textContent = surah.revelationType;
            document.getElementById('detailSurahAyahCount').textContent = `${surah.numberOfAyahs} AYAT`;
        }

        function renderListMode() {
            const container = document.getElementById('ayatListMode');
            container.innerHTML = '';
            currentState.surah.ayahs.forEach((ayah, idx) => {
                const translation = currentState.indo.ayahs[idx].text;
                let text = ayah.text;
                if (currentState.surah.number !== 1 && idx === 0) {
                    text = text.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', '').trim();
                }
                const div = document.createElement('div');
                div.id = `ayah-list-${idx}`;
                div.className = 'p-5 hover:bg-emerald-50/30 dark:hover:bg-emerald-900/10 transition duration-300 relative group scroll-mt-24';
                div.innerHTML = `
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex gap-2">
                             <div class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 font-bold text-xs flex items-center justify-center">${ayah.numberInSurah}</div>
                        </div>
                        <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity bg-white dark:bg-gray-800 shadow-sm rounded-full p-1 border dark:border-gray-700">
                            <button onclick="playAyah(${idx})" class="w-8 h-8 rounded-full hover:bg-emerald-100 dark:hover:bg-emerald-900 text-emerald-600 dark:text-emerald-400 flex items-center justify-center" title="Putar Audio"><i class="fas fa-play text-xs"></i></button>
                            <button onclick="openTafsirModal(${currentState.surah.number}, ${ayah.numberInSurah})" class="w-8 h-8 rounded-full hover:bg-blue-100 dark:hover:bg-blue-900 text-blue-600 dark:text-blue-400 flex items-center justify-center" title="Baca Tafsir"><i class="fas fa-book-open text-xs"></i></button>
                            <button onclick="bookmarkAyah(${ayah.numberInSurah})" class="w-8 h-8 rounded-full hover:bg-yellow-100 dark:hover:bg-yellow-900 text-yellow-500 flex items-center justify-center" title="Tandai"><i class="fas fa-bookmark text-xs"></i></button>
                        </div>
                    </div>
                    <div class="text-right mb-6 pl-4" dir="rtl">
                        <p class="font-arab text-gray-800 dark:text-gray-100 leading-relaxed text-justify">${text}</p>
                    </div>
                    <div class="text-left pr-4">
                        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">${translation}</p>
                    </div>
                `;
                container.appendChild(div);
            });
        }

        function renderMushafMode() {
            const container = document.getElementById('ayatMushafMode');
            container.innerHTML = '';
            const pages = {};
            currentState.surah.ayahs.forEach((ayah, idx) => {
                if (!pages[ayah.page]) pages[ayah.page] = [];
                pages[ayah.page].push({
                    ...ayah,
                    idx
                });
            });
            Object.keys(pages).forEach(pageNum => {
                const pageAyahs = pages[pageNum];
                const pageDiv = document.createElement('div');
                pageDiv.className = 'mushaf-page max-w-xl mx-auto p-6 md:p-10 mb-6 rounded shadow-sm relative transition-colors';
                let html = '<div class="font-arab text-gray-800 dark:text-gray-200 leading-loose text-justify">';
                pageAyahs.forEach(item => {
                    let text = item.text;
                    if (currentState.surah.number !== 1 && item.idx === 0) {
                        text = text.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', '').trim();
                    }
                    html += `<span id="ayah-mushaf-${item.idx}" class="hover:bg-yellow-200/50 dark:hover:bg-yellow-700/30 cursor-pointer rounded transition px-0.5" onclick="playAyah(${item.idx})">${text} <span class="ayat-number-symbol">${toArabicNum(item.numberInSurah)}</span></span> `;
                });
                html += '</div><div class="text-center text-[10px] text-gray-400 dark:text-gray-500 mt-4 tracking-widest">- ' + pageNum + ' -</div>';
                pageDiv.innerHTML = html;
                container.appendChild(pageDiv);
            });
        }

        // --- FEATURES: AUDIO & TTS ---
        const audio = document.getElementById('mainAudioPlayer');

        async function playAyah(index) {
            // Stop any ongoing speech
            if ('speechSynthesis' in window) {
                window.speechSynthesis.cancel();
            }
            currentState.isPlayingTranslation = false;

            if (index < 0 || index >= currentState.surah.ayahs.length) {
                stopAudio();
                return;
            }

            currentState.currentAyahIndex = index;
            currentState.isPlaying = true;

            const ayah = currentState.surah.ayahs[index];
            const qari = currentState.qariId;

            document.getElementById('audioPlayerContainer').classList.remove('hidden');
            document.getElementById('audioInfoText').textContent = `QS. ${currentState.surah.englishName} : ${ayah.numberInSurah}`;
            document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-pause"></i>';

            highlightAyah(index);

            const newSrc = `https://cdn.islamic.network/quran/audio/128/${qari}/${ayah.number}.mp3`;

            // Force update src if needed
            if (currentState.currentAudioSrc !== newSrc) {
                currentState.currentAudioSrc = newSrc;
                audio.src = newSrc;
                // audio.load() is called implicitly when src changes, but calling it explicitly can be safer
                audio.load();

                // Logging for debug
                console.log("Loading audio:", newSrc);
            }

            try {
                await audio.play();
            } catch (error) {
                console.error("Playback failed (caught via try-catch):", error);
                // Note: The error listener on the audio element will catch most load errors
            }
        }

        function handleAudioError() {
            // Don't fully stop, just pause UI state to let user fix it
            document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-play"></i>';
            showAudioErrorModal();
        }

        function showAudioErrorModal() {
            // Pre-select current faulty Qari so user knows what to change
            document.getElementById('quickQariSelector').value = currentState.qariId;
            document.getElementById('audioErrorModal').classList.remove('hidden');
        }

        function closeAudioErrorModal() {
            document.getElementById('audioErrorModal').classList.add('hidden');
        }

        function retryAudioWithNewQari() {
            const newQari = document.getElementById('quickQariSelector').value;

            // Update State & Storage
            currentState.qariId = newQari;
            localStorage.setItem('quran_qari', newQari);

            // Sync main settings dropdown
            document.getElementById('qariSelector').value = newQari;

            // Update UI Name
            const selectEl = document.getElementById('qariSelector');
            const name = selectEl.options[selectEl.selectedIndex].text;
            document.getElementById('currentQariName').textContent = name.split(' ')[0];

            closeAudioErrorModal();

            // Force Retry
            if (currentState.currentAyahIndex !== -1) {
                currentState.currentAudioSrc = ''; // Reset src to force reload
                playAyah(currentState.currentAyahIndex);
            }
        }

        function audioEnded() {
            // Check Logic: Jika List Mode, baca terjemahan. Jika tidak, lanjut ayat.
            if (viewMode === 'list') {
                readTranslation(currentState.currentAyahIndex);
            } else {
                playAyah(currentState.currentAyahIndex + 1);
            }
        }

        function readTranslation(index) {
            const indoText = currentState.indo.ayahs[index].text;
            currentState.isPlayingTranslation = true;

            document.getElementById('audioInfoText').textContent = `Terjemahan Ayat ${currentState.surah.ayahs[index].numberInSurah}`;

            const utterance = new SpeechSynthesisUtterance(indoText);
            utterance.lang = 'id-ID';
            utterance.rate = 0.95; // Sedikit diperlambat agar jelas

            utterance.onend = function() {
                currentState.isPlayingTranslation = false;
                playAyah(index + 1); // Lanjut ke ayat Arab berikutnya
            };

            utterance.onerror = function(e) {
                console.log('TTS Error:', e);
                currentState.isPlayingTranslation = false;
                playAyah(index + 1); // Skip jika error
            };

            window.speechSynthesis.speak(utterance);
        }

        function togglePlay() {
            if (currentState.isPlayingTranslation) {
                // Logic Pause/Resume untuk TTS
                if (window.speechSynthesis.paused) {
                    window.speechSynthesis.resume();
                    document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-pause"></i>';
                } else {
                    window.speechSynthesis.pause();
                    document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-play"></i>';
                }
            } else {
                // Logic Pause/Resume untuk Audio Arab
                if (audio.paused) {
                    audio.play().catch(e => console.error("Resume failed:", e));
                    document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-pause"></i>';
                } else {
                    audio.pause();
                    document.getElementById('playPauseBtn').innerHTML = '<i class="fas fa-play"></i>';
                }
            }
        }

        function stopAudio() {
            audio.pause();
            currentState.currentAudioSrc = ''; // Reset src tracking
            if ('speechSynthesis' in window) window.speechSynthesis.cancel(); // Stop TTS

            currentState.isPlaying = false;
            currentState.isPlayingTranslation = false;
            currentState.currentAyahIndex = -1;

            document.getElementById('audioPlayerContainer').classList.add('hidden');
            removeHighlights();
        }

        function updateProgress() {
            if (audio.duration) {
                const percent = (audio.currentTime / audio.duration) * 100;
                document.getElementById('audioProgress').style.width = `${percent}%`;
            }
        }

        function highlightAyah(index) {
            removeHighlights();
            const listEl = document.getElementById(`ayah-list-${index}`);
            const mushafEl = document.getElementById(`ayah-mushaf-${index}`);

            if (listEl) {
                listEl.classList.add('active-ayat');
                if (viewMode === 'list') scrollIntoViewIfNeeded(listEl);
            }
            if (mushafEl) {
                mushafEl.classList.add('active-ayat');
                if (viewMode === 'mushaf') scrollIntoViewIfNeeded(mushafEl);
            }
        }

        function removeHighlights() {
            document.querySelectorAll('.active-ayat').forEach(el => el.classList.remove('active-ayat'));
        }

        function scrollIntoViewIfNeeded(target) {
            const rect = target.getBoundingClientRect();
            if (rect.top < 100 || rect.bottom > window.innerHeight) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }

        // --- FEATURES: TAFSIR ---
        async function openTafsirModal(surahNum, ayahNum) {
            const modal = document.getElementById('tafsirModal');
            const content = document.getElementById('tafsirContent');
            const title = document.getElementById('tafsirTitle');

            modal.classList.remove('hidden');
            content.innerHTML = '<div class="flex justify-center py-10"><div class="loader"></div></div>';
            title.textContent = `Surat ${currentState.surah.englishName} Ayat ${ayahNum}`;

            try {
                const res = await fetch(`${API_BASE}/ayah/${surahNum}:${ayahNum}/id.jalalayn`);
                const data = await res.json();
                if (data.code === 200) {
                    content.innerHTML = `<p class="mb-4 font-bold text-gray-800 dark:text-gray-100">Tafsir Jalalayn:</p><p>${data.data.text}</p>`;
                } else {
                    content.innerHTML = '<p class="text-red-500">Tafsir tidak ditemukan.</p>';
                }
            } catch (e) {
                content.innerHTML = '<p class="text-red-500">Gagal memuat tafsir.</p>';
            }
        }

        function closeTafsir() {
            document.getElementById('tafsirModal').classList.add('hidden');
        }

        // --- FEATURES: SETTINGS & UTILS ---
        function toggleSettings() {
            const modal = document.getElementById('settingsModal');
            const content = document.getElementById('settingsContent');
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    content.classList.remove('translate-y-full');
                }, 10);
            } else {
                content.classList.add('translate-y-full');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }

        function updateFontSize(val) {
            document.documentElement.style.setProperty('--arabic-font-size', `${val}px`);
            document.getElementById('fontPreview').style.fontSize = `${val}px`;
            localStorage.setItem('quran_font_size', val);
        }

        function changeQari(val) {
            currentState.qariId = val;
            localStorage.setItem('quran_qari', val);

            // Update UI Name
            const selectEl = document.getElementById('qariSelector');
            const name = selectEl.options[selectEl.selectedIndex].text;
            document.getElementById('currentQariName').textContent = name.split(' ')[0];

            // If audio is currently active (playing or paused), force reload
            // We do this by clearing the currentSrc tracker so playAyah sees it as a "new" source
            if (currentState.currentAyahIndex !== -1) {
                currentState.currentAudioSrc = '';
                playAyah(currentState.currentAyahIndex);
            }
        }

        function loadSettings() {
            const size = localStorage.getItem('quran_font_size');
            if (size) {
                updateFontSize(size);
                document.getElementById('fontSizeSlider').value = size;
            }
        }

        function switchMode(mode) {
            viewMode = mode;
            document.getElementById('btnModeList').className = mode === 'list' ? 'px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition' : 'px-3 py-1 rounded text-emerald-100 hover:text-white transition';
            document.getElementById('btnModeMushaf').className = mode === 'mushaf' ? 'px-3 py-1 rounded bg-white text-emerald-800 shadow-sm transition' : 'px-3 py-1 rounded text-emerald-100 hover:text-white transition';
            document.getElementById('ayatListMode').classList.toggle('hidden', mode !== 'list');
            document.getElementById('ayatMushafMode').classList.toggle('hidden', mode !== 'mushaf');
            if (currentState.currentAyahIndex !== -1) highlightAyah(currentState.currentAyahIndex);
        }

        function switchHomeTab(tab) {
            const isSurah = tab === 'surah';
            document.getElementById('tabSurah').className = isSurah ? 'pb-2 border-b-2 border-emerald-600 text-emerald-700 dark:text-emerald-400 font-bold text-sm px-2' : 'pb-2 border-b-2 border-transparent text-gray-500 dark:text-gray-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium text-sm px-2 transition';
            document.getElementById('tabJuz').className = !isSurah ? 'pb-2 border-b-2 border-emerald-600 text-emerald-700 dark:text-emerald-400 font-bold text-sm px-2' : 'pb-2 border-b-2 border-transparent text-gray-500 dark:text-gray-400 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium text-sm px-2 transition';
            document.getElementById('surahList').classList.toggle('hidden', !isSurah);
            document.getElementById('juzList').classList.toggle('hidden', isSurah);
        }

        function filterSurahs() {
            const q = document.getElementById('searchInput').value.toLowerCase();
            const filtered = allSurahsData.filter(s =>
                s.englishName.toLowerCase().includes(q) ||
                s.englishNameTranslation.toLowerCase().includes(q) ||
                s.number.toString().includes(q)
            );
            renderSurahList(filtered);
        }

        function goHome() {
            stopAudio();
            document.getElementById('detailView').classList.add('hidden');
            document.getElementById('homeView').classList.remove('hidden');
            document.getElementById('btnBack').classList.add('hidden');
            document.getElementById('modeToggleContainer').classList.add('hidden');
            checkLastRead();
        }

        function bookmarkAyah(ayahNum) {
            localStorage.setItem('quran_last_surah', currentState.surahNum);
            localStorage.setItem('quran_last_ayah', ayahNum);
            alert('Penanda disimpan!');
            checkLastRead();
        }

        function checkLastRead() {
            const name = localStorage.getItem('quran_last_surah_name');
            const ayah = localStorage.getItem('quran_last_ayah');
            if (name && ayah) {
                document.getElementById('lastReadContainer').classList.remove('hidden');
                document.getElementById('lastReadSurah').textContent = name;
                document.getElementById('lastReadAyah').textContent = `Ayat ${ayah}`;
            }
        }

        function continueReading() {
            const num = localStorage.getItem('quran_last_surah');
            if (num) openSurah(num);
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        function toArabicNum(num) {
            const digits = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
            return num.toString().split('').map(d => digits[d]).join('');
        }
    </script>
</body>

</html>