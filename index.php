<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Qur'an Digital Indonesia</title>

    <!-- SEO & Social Media Thumbnail (Open Graph) -->
    <meta property="og:title" content="Al-Qur'an Digital Indonesia" />
    <meta property="og:description" content="Baca Al-Qur'an digital dengan terjemahan Bahasa Indonesia dan audio murottal lengkap. Tersedia Mode Mushaf dan Mode List yang nyaman." />
    <meta property="og:image" content="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Al-Qur'an Digital Indonesia" />
    <meta name="twitter:description" content="Baca Al-Qur'an digital dengan terjemahan Bahasa Indonesia dan audio murottal lengkap." />
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?q=80&w=1200&auto=format&fit=crop" />

    <!-- Favicon: Ikon Kitab Hijau -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2310b981'%3E%3Cpath d='M11.25 4.533A2.25 2.25 0 0022.5 4.5c0-2.15-2.5-3.5-3-2.5-1 .5-3 2.25-3 3.25 0 1-2 .5-3 0 0 1-2 .5-3 0-1-1.25-3.5-2.5-3.5-2.25 0 001.5 4.533V21a1.5 1.5 0 001.5 1.5 1.5 1.5 0 011.5-1.5c1.5 0 3 .5 4.5 0 1.5.5 3 0 4.5 0 .5 1.5.5 1.5 1.5 1.5a1.5 1.5 0 001.5-1.5V4.533zM2.25 5.5c0-.5 1.5-1 3.75-1 2.25 0 3.75.5 3.75 1v14.5c0 .5-1.5 1-3.75 1-2.25 0-3.75-.5-3.75-1V5.5zm10.5-1c2.25 0 3.75.5 3.75 1v14.5c0 .5-1.5 1-3.75 1-2.25 0-3.75-.5-3.75-1V5.5c0-.5 1.5-1 3.75-1z'/%3E%3C/svg%3E">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Font Arab yang indah dan standar web */
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0fdf4;
            /* Hijau sangat muda */
        }

        .font-arab {
            font-family: 'Amiri', serif;
            line-height: 2.5;
            /* Default untuk List Mode */
        }

        /* Khusus Mode Mushaf */
        .mushaf-page {
            background-color: #fffbf2;
            /* Warna kertas krem */
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            text-align: justify;
            /* Rata kanan kiri */
            text-align-last: center;
            /* Baris terakhir tengah */
            direction: rtl;
        }

        /* FIX: Jarak baris disesuaikan menjadi 2.6 sesuai permintaan */
        .mushaf-page .font-arab {
            line-height: 2.6;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }

        /* Animasi Loading */
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #10b981;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Styling Nomor Ayat */
        .ayat-number-symbol {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='18' fill='none' stroke='%23059669' stroke-width='2'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            font-size: 0.85rem;
            color: #065f46;
            margin: 0 4px;
            vertical-align: middle;
            font-family: 'Amiri', serif;
            /* Menggunakan font Arab untuk angka */
            padding-top: 4px;
            /* Penyesuaian vertikal font Amiri */
        }

        /* Highlight Ayat Aktif */
        .active-ayat {
            background-color: rgba(16, 185, 129, 0.25);
            /* Emerald-500 dengan transparansi */
            border-radius: 6px;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.1);
        }
    </style>
</head>

<body class="text-gray-800 h-screen flex flex-col overflow-hidden">

    <!-- Header -->
    <header class="bg-emerald-600 text-white shadow-lg z-20 shrink-0">
        <div class="max-w-4xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer" onclick="goHome()">
                <div class="bg-white/20 p-2 rounded-lg">
                    <i class="fas fa-quran text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold leading-tight">Al-Qur'an Digital</h1>
                    <p class="text-xs text-emerald-100 opacity-90">Terjemahan Indonesia & Audio</p>
                </div>
            </div>

            <!-- Controls Kanan (Back & Toggle Mode) -->
            <div class="flex items-center gap-2">
                <!-- Toggle Mode (Hanya di Detail) -->
                <div id="modeToggleContainer" class="hidden bg-emerald-700 rounded-lg p-1 flex text-xs font-medium">
                    <button onclick="switchMode('list')" id="btnModeList" class="px-3 py-1 rounded bg-white text-emerald-700 shadow-sm transition">List</button>
                    <button onclick="switchMode('mushaf')" id="btnModeMushaf" class="px-3 py-1 rounded text-emerald-100 hover:text-white transition">Mushaf</button>
                </div>

                <!-- Tombol Kembali -->
                <button id="btnBack" onclick="goHome()" class="hidden w-8 h-8 flex items-center justify-center bg-white/10 hover:bg-white/20 rounded-full text-sm transition ml-2">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto relative bg-gray-50 scroll-smooth" id="mainContainer">

        <!-- SECTION: DAFTAR SURAT (HOME) -->
        <div id="homeView" class="max-w-4xl mx-auto px-4 py-6 transition-all duration-300">

            <!-- Pencarian & Last Read -->
            <div class="mb-6 space-y-4">
                <!-- Last Read Card -->
                <div id="lastReadContainer" class="hidden bg-gradient-to-r from-emerald-700 to-emerald-500 rounded-xl p-5 text-white shadow-md flex justify-between items-center relative overflow-hidden">
                    <div class="absolute right-0 bottom-0 opacity-10 transform translate-x-4 translate-y-4">
                        <i class="fas fa-book-open text-9xl"></i>
                    </div>
                    <div class="relative z-10">
                        <p class="text-xs font-medium opacity-90 mb-1"><i class="fas fa-history mr-1"></i> Terakhir Dibaca</p>
                        <h3 id="lastReadSurah" class="text-xl font-bold">Al-Fatihah</h3>
                        <p id="lastReadAyah" class="text-sm">Ayat 1</p>
                    </div>
                    <button onclick="continueReading()" class="relative z-10 bg-white text-emerald-700 px-4 py-2 rounded-lg font-bold text-sm hover:bg-emerald-50 transition shadow-sm">
                        Lanjut <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </div>

                <!-- Search Bar -->
                <div class="relative">
                    <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
                    <input type="text" id="searchInput" placeholder="Cari surat (contoh: Yasin, Al-Kahfi)..."
                        class="w-full pl-11 pr-4 py-3 rounded-xl border-none shadow-sm focus:ring-2 focus:ring-emerald-500 outline-none bg-white text-gray-700"
                        onkeyup="filterSurahs()">
                </div>
            </div>

            <!-- Grid Daftar Surat -->
            <div id="surahList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Loading State -->
                <div class="col-span-full flex flex-col items-center justify-center py-20 text-gray-400">
                    <div class="loader mb-4"></div>
                    <p>Memuat Daftar Surat...</p>
                </div>
            </div>
        </div>

        <!-- SECTION: DETAIL SURAT -->
        <div id="detailView" class="hidden max-w-3xl mx-auto min-h-full bg-white shadow-xl transition-all duration-300 relative">

            <!-- Header Surat Detail -->
            <div class="sticky top-0 bg-white/95 backdrop-blur-sm border-b z-10 px-4 py-3 flex justify-between items-center shadow-sm">
                <div>
                    <h2 id="detailSurahName" class="text-lg font-bold text-emerald-800">Nama Surat</h2>
                    <p id="detailSurahInfo" class="text-xs text-gray-500">Arti • Turun di • Jumlah Ayat</p>
                </div>
                <div class="flex gap-2">
                    <button onclick="scrollToTop()" class="p-2 text-gray-500 hover:text-emerald-600 rounded-full hover:bg-emerald-50" title="Ke Atas">
                        <i class="fas fa-arrow-up"></i>
                    </button>
                </div>
            </div>

            <!-- Bismillah Header -->
            <div id="bismillahContainer" class="py-8 text-center bg-emerald-50/50 border-b border-emerald-100">
                <div class="font-arab text-3xl md:text-4xl text-emerald-800 mb-2">بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</div>
            </div>

            <!-- Container Mode List -->
            <div id="ayatListMode" class="divide-y divide-gray-100 pb-20">
                <!-- Ayat List Rendered Here -->
            </div>

            <!-- Container Mode Mushaf -->
            <div id="ayatMushafMode" class="hidden pb-20 px-2 md:px-6 py-6 bg-gray-100/50">
                <!-- Mushaf Pages Rendered Here -->
            </div>

            <!-- Loading Ayat -->
            <div id="ayatLoader" class="hidden absolute inset-0 bg-white z-20 flex flex-col items-center justify-center">
                <div class="loader mb-4"></div>
                <p class="text-gray-500">Membuka Surat...</p>
            </div>
        </div>

    </main>

    <!-- Audio Player Floating -->
    <div id="audioPlayerContainer" class="hidden fixed bottom-0 left-0 right-0 bg-white border-t border-emerald-100 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.1)] p-3 z-30">
        <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
            <div class="flex-1 min-w-0">
                <p id="audioInfoText" class="text-sm font-bold text-emerald-800 truncate">Memutar Ayat...</p>
                <p class="text-xs text-gray-500 truncate">Qari: Mishary Rashid Alafasy</p>
            </div>
            <div class="flex items-center gap-3">
                <audio id="mainAudioPlayer" onended="audioEnded()" onplay="audioStarted()" onpause="audioPaused()"></audio>
                <button onclick="togglePlay()" id="playPauseBtn" class="w-10 h-10 bg-emerald-600 hover:bg-emerald-700 text-white rounded-full flex items-center justify-center shadow-lg transition transform active:scale-95">
                    <i class="fas fa-pause"></i>
                </button>
                <button onclick="stopAudio()" class="text-gray-400 hover:text-red-500 px-2 transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // --- STATE MANAGEMENT ---
        let allSurahsData = [];

        let currentOpenSurah = {
            arabic: null,
            indo: null,
            number: null
        };

        let viewMode = 'list'; // 'list' or 'mushaf'

        // Audio & TTS State
        let currentAyahIndex = -1; // 0-based index dalam array ayat surat aktif
        let isPlayingTranslation = false;

        // --- INITIALIZATION ---
        document.addEventListener('DOMContentLoaded', () => {
            fetchSurahList();
            checkLastRead();
        });

        // --- API FUNCTIONS ---

        async function fetchSurahList() {
            try {
                const response = await fetch('https://api.alquran.cloud/v1/surah');
                const data = await response.json();
                if (data.code === 200) {
                    allSurahsData = data.data;
                    renderSurahList(allSurahsData);
                } else {
                    showError('Gagal memuat data surat.');
                }
            } catch (error) {
                console.error(error);
                showError('Terjadi kesalahan koneksi.');
            }
        }

        async function openSurah(surahNumber) {
            // UI Updates
            document.getElementById('homeView').classList.add('hidden');
            document.getElementById('detailView').classList.remove('hidden');
            document.getElementById('btnBack').classList.remove('hidden');
            document.getElementById('modeToggleContainer').classList.remove('hidden');
            document.getElementById('ayatLoader').classList.remove('hidden');
            stopAudio();

            document.getElementById('bismillahContainer').style.display = (surahNumber === 1 || surahNumber === 9) ? 'none' : 'block';

            try {
                // Fetch Arab & Terjemahan
                const response = await fetch(`https://api.alquran.cloud/v1/surah/${surahNumber}/editions/quran-uthmani,id.indonesian`);
                const data = await response.json();

                if (data.code === 200) {
                    const arabicData = data.data[0];
                    const indoData = data.data[1];

                    currentOpenSurah = {
                        arabic: arabicData,
                        indo: indoData,
                        number: surahNumber
                    };

                    renderDetailSurahHeader(arabicData);

                    // Render kedua mode sekaligus agar switching cepat & referensi elemen ada
                    renderListMode();
                    renderMushafMode();

                    // Tampilkan mode yang sesuai
                    switchMode(viewMode);

                    localStorage.setItem('quran_last_surah', surahNumber);
                    localStorage.setItem('quran_last_surah_name', arabicData.englishName);
                }
            } catch (error) {
                console.error(error);
                alert('Gagal membuka surat. Periksa koneksi internet Anda.');
                goHome();
            } finally {
                document.getElementById('ayatLoader').classList.add('hidden');
            }
        }

        // --- RENDER LOGIC ---

        function renderSurahList(surahs) {
            const container = document.getElementById('surahList');
            container.innerHTML = '';
            surahs.forEach(surah => {
                const card = document.createElement('div');
                card.className = 'bg-white p-4 rounded-xl shadow-sm hover:shadow-md border border-transparent hover:border-emerald-200 transition cursor-pointer flex items-center gap-4 group';
                card.onclick = () => openSurah(surah.number);
                card.innerHTML = `
                    <div class="bg-emerald-50 text-emerald-600 font-bold w-10 h-10 rounded-lg flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition">${surah.number}</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-800 group-hover:text-emerald-700 transition">${surah.englishName}</h3>
                        <p class="text-xs text-gray-500">${surah.englishNameTranslation} • ${surah.numberOfAyahs} Ayat</p>
                    </div>
                    <div class="text-right"><span class="font-arab text-xl font-bold text-gray-700">${surah.name.replace('سُورَةُ ', '')}</span></div>
                `;
                container.appendChild(card);
            });
        }

        function renderDetailSurahHeader(surahData) {
            document.getElementById('detailSurahName').textContent = `${surahData.number}. ${surahData.englishName}`;
            document.getElementById('detailSurahInfo').textContent = `${surahData.englishNameTranslation} • ${surahData.revelationType === 'Meccan' ? 'Makkiyah' : 'Madaniyah'} • ${surahData.numberOfAyahs} Ayat`;
        }

        // --- MODE LIST RENDERER ---
        function renderListMode() {
            const container = document.getElementById('ayatListMode');
            container.innerHTML = '';

            const arabicData = currentOpenSurah.arabic;
            const indoData = currentOpenSurah.indo;

            arabicData.ayahs.forEach((ayah, index) => {
                const indoText = indoData.ayahs[index].text;
                const ayahNumber = ayah.numberInSurah;

                let arabicText = ayah.text;
                if (arabicData.number !== 1 && ayahNumber === 1 && arabicText.startsWith('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ')) {
                    arabicText = arabicText.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', '').trim();
                }

                const div = document.createElement('div');
                div.id = `list-ayah-${index}`; // ID berbasis Index
                div.className = 'p-5 hover:bg-gray-50 transition duration-300 relative group border-b border-gray-100 last:border-0';
                div.innerHTML = `
                    <div class="flex justify-between items-center mb-6 bg-gray-50/50 p-2 rounded-lg">
                        <div class="flex items-center gap-2">
                            <span class="bg-emerald-100 text-emerald-800 text-xs px-2 py-1 rounded-md font-bold">${arabicData.number}:${ayahNumber}</span>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="playAyahByIndex(${index})" class="text-gray-400 hover:text-emerald-600 transition" title="Putar"><i class="fas fa-play-circle text-xl"></i></button>
                            <button onclick="saveBookmark(${arabicData.number}, '${arabicData.englishName}', ${ayahNumber})" class="text-gray-400 hover:text-yellow-500 transition" title="Bookmark"><i class="fas fa-bookmark text-lg"></i></button>
                        </div>
                    </div>
                    <div class="text-right mb-6" dir="rtl">
                        <p class="font-arab text-3xl md:text-4xl text-gray-800 leading-[2.5] tracking-wide">${arabicText} <span class="ayat-number-symbol">${toArabicNumerals(ayahNumber)}</span></p>
                    </div>
                    <div class="text-left"><p class="text-gray-600 text-sm md:text-base leading-relaxed">${indoText}</p></div>
                `;
                container.appendChild(div);
            });
        }

        // --- MODE MUSHAF RENDERER ---
        function renderMushafMode() {
            const container = document.getElementById('ayatMushafMode');
            container.innerHTML = '';

            const arabicData = currentOpenSurah.arabic;

            // Grouping by Page
            const pages = {};
            arabicData.ayahs.forEach((ayah, index) => {
                const pageNum = ayah.page;
                if (!pages[pageNum]) pages[pageNum] = [];
                // Simpan index array juga untuk referensi audio
                pages[pageNum].push({
                    ...ayah,
                    originalIndex: index
                });
            });

            // Render setiap halaman
            Object.keys(pages).forEach(pageNum => {
                const ayahsInPage = pages[pageNum];

                const pageContainer = document.createElement('div');
                pageContainer.className = 'mushaf-page max-w-2xl mx-auto p-4 md:p-8 rounded-sm mb-6 relative';

                const pageFooter = document.createElement('div');
                pageFooter.className = 'absolute bottom-2 left-0 right-0 text-center text-xs text-gray-400 font-sans';
                pageFooter.textContent = `- ${pageNum} -`;

                // Gabungkan teks Arab
                let combinedText = '';
                ayahsInPage.forEach(item => {
                    let text = item.text;
                    const ayahNum = item.numberInSurah;
                    const index = item.originalIndex;

                    if (arabicData.number !== 1 && ayahNum === 1 && text.startsWith('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ')) {
                        text = text.replace('بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ', '').trim();
                    }

                    // Wrap setiap ayat dalam SPAN yang bisa diklik untuk audio
                    combinedText += `<span id="mushaf-ayah-${index}" class="cursor-pointer hover:bg-emerald-100/50 rounded transition duration-200 px-1" onclick="playAyahByIndex(${index})">${text} <span class="ayat-number-symbol">${toArabicNumerals(ayahNum)}</span></span> `;
                });

                const textBlock = document.createElement('div');
                textBlock.className = 'font-arab text-2xl md:text-3xl text-gray-800';
                textBlock.innerHTML = combinedText;

                pageContainer.appendChild(textBlock);
                pageContainer.appendChild(pageFooter);
                container.appendChild(pageContainer);
            });
        }

        // --- UI UTILITIES ---

        function switchMode(mode) {
            viewMode = mode;
            const btnList = document.getElementById('btnModeList');
            const btnMushaf = document.getElementById('btnModeMushaf');
            const containerList = document.getElementById('ayatListMode');
            const containerMushaf = document.getElementById('ayatMushafMode');

            if (mode === 'list') {
                btnList.className = 'px-3 py-1 rounded bg-white text-emerald-700 shadow-sm transition';
                btnMushaf.className = 'px-3 py-1 rounded text-emerald-100 hover:text-white transition';
                containerList.classList.remove('hidden');
                containerMushaf.classList.add('hidden');

                // Jika sedang main audio, pastikan highlight terlihat di mode list
                if (currentAyahIndex !== -1) highlightActiveAyah(currentAyahIndex);
                else checkAndScrollBookmark();

            } else {
                btnList.className = 'px-3 py-1 rounded text-emerald-100 hover:text-white transition';
                btnMushaf.className = 'px-3 py-1 rounded bg-white text-emerald-700 shadow-sm transition';
                containerList.classList.add('hidden');
                containerMushaf.classList.remove('hidden');

                if (currentAyahIndex !== -1) highlightActiveAyah(currentAyahIndex);
                else document.getElementById('mainContainer').scrollTo({
                    top: 0,
                    behavior: 'auto'
                });
            }
        }

        function checkAndScrollBookmark() {
            const lastSurah = localStorage.getItem('quran_last_surah');
            const lastAyah = localStorage.getItem('quran_last_ayah');

            if (currentOpenSurah.number == lastSurah && lastAyah) {
                // Cari index berdasarkan nomor ayat
                const index = currentOpenSurah.arabic.ayahs.findIndex(a => a.numberInSurah == lastAyah);
                if (index !== -1) {
                    setTimeout(() => {
                        const el = document.getElementById(`list-ayah-${index}`);
                        if (el && viewMode === 'list') {
                            el.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                        }
                    }, 500);
                }
            }
        }

        function goHome() {
            stopAudio();
            document.getElementById('detailView').classList.add('hidden');
            document.getElementById('modeToggleContainer').classList.add('hidden');
            document.getElementById('btnBack').classList.add('hidden');
            document.getElementById('homeView').classList.remove('hidden');
            checkLastRead();
        }

        function filterSurahs() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const filtered = allSurahsData.filter(surah =>
                surah.englishName.toLowerCase().includes(query) ||
                surah.englishNameTranslation.toLowerCase().includes(query) ||
                surah.number.toString().includes(query)
            );
            renderSurahList(filtered);
        }

        function scrollToTop() {
            document.getElementById('mainContainer').scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // --- AUDIO PLAYER SYSTEM (UNIFIED WITH TRANSLATION TTS) ---
        const audioPlayer = document.getElementById('mainAudioPlayer');
        const playerContainer = document.getElementById('audioPlayerContainer');
        const playPauseBtn = document.getElementById('playPauseBtn');

        function playAyahByIndex(index) {
            // Cancel any ongoing TTS or audio
            window.speechSynthesis.cancel();
            isPlayingTranslation = false;

            if (index < 0 || index >= currentOpenSurah.arabic.ayahs.length) {
                stopAudio(); // Selesai surat
                return;
            }

            currentAyahIndex = index;
            const ayah = currentOpenSurah.arabic.ayahs[index];
            const globalAyahNumber = ayah.number;
            const ayahNumberInSurah = ayah.numberInSurah;
            const surahName = currentOpenSurah.arabic.englishName;

            // Update UI Player
            const url = `https://cdn.islamic.network/quran/audio/128/ar.alafasy/${globalAyahNumber}.mp3`;
            document.getElementById('audioInfoText').textContent = `QS. ${surahName} : ${ayahNumberInSurah}`;
            playerContainer.classList.remove('hidden');

            audioPlayer.src = url;
            audioPlayer.play();

            // Highlight
            highlightActiveAyah(index);
        }

        function audioEnded() {
            if (viewMode === 'list') {
                // Jika Mode List, baca terjemahan dulu
                readTranslation(currentAyahIndex);
            } else {
                // Jika Mode Mushaf, langsung ayat berikutnya
                playAyahByIndex(currentAyahIndex + 1);
            }
        }

        function readTranslation(index) {
            const ayah = currentOpenSurah.indo.ayahs[index];
            if (!ayah) {
                // Fallback jika tidak ada data terjemahan
                playAyahByIndex(index + 1);
                return;
            }

            isPlayingTranslation = true;
            document.getElementById('audioInfoText').textContent = `Terjemahan Ayat ${currentOpenSurah.arabic.ayahs[index].numberInSurah}`;

            const utterance = new SpeechSynthesisUtterance(ayah.text);
            utterance.lang = 'id-ID';
            utterance.rate = 1.0;

            utterance.onend = function() {
                isPlayingTranslation = false;
                playAyahByIndex(index + 1);
            };

            // Error handling untuk TTS
            utterance.onerror = function(e) {
                console.error('TTS Error', e);
                isPlayingTranslation = false;
                playAyahByIndex(index + 1);
            };

            window.speechSynthesis.speak(utterance);

            // Pastikan tombol play/pause sinkron
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        }

        function highlightActiveAyah(index) {
            // Remove previous highlights
            document.querySelectorAll('.active-ayat').forEach(el => el.classList.remove('active-ayat'));

            // Highlight Mushaf Element
            const mushafEl = document.getElementById(`mushaf-ayah-${index}`);
            if (mushafEl) {
                mushafEl.classList.add('active-ayat');
                if (viewMode === 'mushaf') {
                    mushafEl.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }

            // Highlight List Element
            const listEl = document.getElementById(`list-ayah-${index}`);
            if (listEl) {
                listEl.classList.add('active-ayat');
                if (viewMode === 'list') {
                    listEl.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }
        }

        function togglePlay() {
            if (isPlayingTranslation) {
                // Kontrol Pause/Resume untuk TTS
                if (window.speechSynthesis.paused) {
                    window.speechSynthesis.resume();
                    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                } else {
                    window.speechSynthesis.pause();
                    playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                }
            } else {
                // Kontrol Pause/Resume untuk Audio Arab
                if (audioPlayer.paused) audioPlayer.play();
                else audioPlayer.pause();
            }
        }

        function stopAudio() {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            window.speechSynthesis.cancel(); // Stop TTS
            isPlayingTranslation = false;
            currentAyahIndex = -1;
            playerContainer.classList.add('hidden');
            document.querySelectorAll('.active-ayat').forEach(el => el.classList.remove('active-ayat'));
        }

        function audioStarted() {
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        }

        function audioPaused() {
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        }

        // --- HELPERS ---
        function saveBookmark(surahNum, surahName, ayahNum) {
            localStorage.setItem('quran_last_surah', surahNum);
            localStorage.setItem('quran_last_surah_name', surahName);
            localStorage.setItem('quran_last_ayah', ayahNum);
            const originalIcon = event.currentTarget.innerHTML;
            event.currentTarget.innerHTML = '<i class="fas fa-check text-emerald-600"></i>';
            setTimeout(() => {
                event.target.innerHTML = originalIcon;
            }, 1000);
        }

        function checkLastRead() {
            const surahName = localStorage.getItem('quran_last_surah_name');
            const ayahNum = localStorage.getItem('quran_last_ayah');
            const container = document.getElementById('lastReadContainer');
            if (surahName && ayahNum) {
                document.getElementById('lastReadSurah').textContent = surahName;
                document.getElementById('lastReadAyah').textContent = `Ayat ${ayahNum}`;
                container.classList.remove('hidden');
            } else {
                container.classList.add('hidden');
            }
        }

        function continueReading() {
            const surahNum = localStorage.getItem('quran_last_surah');
            if (surahNum) openSurah(surahNum);
        }

        function showError(msg) {
            document.getElementById('surahList').innerHTML = `<div class="col-span-full text-center text-red-500 py-10">${msg}</div>`;
        }

        function toArabicNumerals(num) {
            const arabicDigits = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
            return num.toString().split('').map(digit => arabicDigits[digit]).join('');
        }
    </script>
</body>

</html>