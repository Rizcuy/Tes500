<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Kuis Bahasa Jepang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-xl bg-white shadow-xl rounded-2xl p-6 md:p-8 border border-slate-100">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <div>
                <h1 id="header-title" class="text-xl font-bold text-slate-800">Platform Kuis Jepang</h1>
                <p id="header-subtitle" class="text-xs text-slate-500 mt-1">Pilih latihan kosakata dengan mudah</p>
            </div>
            <div id="score-badge" class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold hidden">
                Skor: <span id="current-score">0</span>
            </div>
        </div>

        <!-- Start Screen (Pilih Kategori & Masukkan Nama) -->
        <div id="start-screen" class="py-4">
            <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">あ</div>
            <h2 class="text-lg font-bold text-slate-700 mb-4 text-center">Siap Menguji Hafalan?</h2>
            
            <div class="mb-4">
                <label for="nama-user" class="block text-xs font-semibold text-slate-600 mb-1">Nama Anda:</label>
                <input type="text" id="nama-user" placeholder="Masukkan nama..." class="w-full p-3 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500">
            </div>

            <label class="block text-xs font-semibold text-slate-600 mb-2">Pilih Kategori Kuis:</label>
            <div id="category-container" class="space-y-2 mb-6">
                <!-- Tombol Kategori akan ter-generate otomatis dari data soal di bawah -->
            </div>
        </div>

        <!-- Quiz Screen -->
        <div id="quiz-screen" class="hidden">
            <div class="flex justify-between items-center mb-4 text-xs font-medium text-slate-400">
                <span id="question-progress">Soal 1 dari 50</span>
                <span id="timer" class="bg-amber-50 text-amber-700 px-2 py-0.5 rounded">Waktu: <span id="time-left">30</span>s</span>
            </div>

            <!-- Progress Bar -->
            <div class="w-full bg-slate-100 h-2 rounded-full mb-6 overflow-hidden">
                <div id="progress-bar" class="bg-indigo-600 h-full transition-all duration-300" style="width: 2%;"></div>
            </div>

            <!-- Question Box -->
            <div class="bg-slate-50 border border-slate-200/80 rounded-2xl p-6 text-center mb-6 shadow-sm">
                <p id="question-label" class="text-xs font-semibold text-indigo-600 uppercase tracking-wider mb-2">Terjemahkan</p>
                <h3 id="question-text" class="text-4xl font-bold text-slate-800 my-3">--</h3>
            </div>

            <!-- Options Container -->
            <div id="options-container" class="grid grid-cols-1 gap-3"></div>

            <!-- Next Button -->
            <button id="next-btn" onclick="nextQuestion()" class="w-full mt-6 bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 px-6 rounded-xl transition duration-200 hidden">
                Soal Selanjutnya
            </button>
        </div>

        <!-- Result Screen -->
        <div id="result-screen" class="hidden text-center py-8">
            <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold">🎉</div>
            <h2 class="text-2xl font-bold text-slate-800 mb-2">Kuis Selesai!</h2>
            <p class="text-sm text-slate-500 mb-6">Nilai Anda telah otomatis tersimpan ke database.</p>
            
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 mb-6">
                <div class="text-4xl font-extrabold text-indigo-600 mb-1"><span id="final-score">0</span></div>
                <p class="text-xs text-slate-500" id="result-message">Kerja bagus!</p>
            </div>

            <button onclick="location.reload()" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition duration-200 shadow-lg shadow-indigo-100">
                Pilih Kuis Lain / Ulangi
            </button>
        </div>

    </div>

    <script>
        const databaseKuis = {
            "Kanji Anzen (Keselamatan Kerja)": [
                { kanji: "安全道路", hiragana: "あんぜんつうろ", arti: "Jalur/Jalan Aman" },
                { kanji: "安全第ー", hiragana: "あんぜんだいいち", arti: "Utamakan Selamat" },
                { kanji: "立入禁止", hiragana: "たちいりきんし", arti: "Dilarang Masuk" },
                { kanji: "火気厳禁", hiragana: "かきげんきん", arti: "Larangan Menyalakan Api" },
                { kanji: "保護具着用", hiragana: "ほごぐちゃくよう", arti: "Kenakan Alat Pelindung" },
                { kanji: "頭上注意", hiragana: "ずじょうちゅい", arti: "Hati-hati Sebelah Atas" },
                { kanji: "足元注意", hiragana: "あしもとちゅい", arti: "Hati-hati Langkah" },
                { kanji: "点検中", hiragana: "てんけんちゅう", arti: "Sedang Diperiksa" },
                { kanji: "合図確認", hiragana: "あいずかくにん", arti: "Memastikan Isyarat" },
                { kanji: "感電注意", hiragana: "かんでんちゅい", arti: "Hati-hati Kena Listrik" },
                { kanji: "通電中", hiragana: "つうでんちゅう", arti: "Sedang Dialiri Listrik" },
                { kanji: "持出禁止", hiragana: "もちだしきんし", arti: "Dilarang Membawa Keluar" },
                { kanji: "注水厳禁", hiragana: "ちゅうすいげんきん", arti: "Larangan Menyiram Air" },
                { kanji: "触るな", hiragana: "さわるな", arti: "Dilarang Menyentuh" },
                { kanji: "取扱注意", hiragana: "とりあつかいちゅい", arti: "Penanganan dengan Hati-hati" },
                { kanji: "天地無用", hiragana: "てんちむよう", arti: "Jangan Dibolak-balik" },
                { kanji: "左右確認", hiragana: "さゆうかくにん", arti: "Pastikan Kanan dan Kiri" },
                { kanji: "通行禁止", hiragana: "つうこうきんし", arti: "Dilarang Lewat" },
                { kanji: "整理整頓", hiragana: "せいりせいとん", arti: "Penyusunan/Pemberesan" },
                { kanji: "消火器", hiragana: "しょうかき", arti: "Alat Pemadam Api" },
                { kanji: "修理中", hiragana: "しゅうりちゅう", arti: "Sedang Diperbaiki" },
                { kanji: "禁煙", hiragana: "きんえん", arti: "Dilarang Merokok" },
                { kanji: "喫煙所", hiragana: "きつえんじょ", arti: "Tempat Merokok" },
                { kanji: "稼動中", hiragana: "かどうちゅう", arti: "Mesin Sedang Hidup/Jalan" },
                { kanji: "休止中", hiragana: "きゅしちゅう", arti: "Mesin Sedang Mati/Berhenti" },
                { kanji: "組立中", hiragana: "くみたてちゅう", arti: "Sedang dalam Perakitan" },
                { kanji: "停電作業中", hiragana: "ていでんさぎょうちゅう", arti: "Listrik Dimatikan karena Sedang Ada Pekerjaan" },
                { kanji: "解体中", hiragana: "かいたいちゅう", arti: "Sedang Dibongkar" },
                { kanji: "測定中", hiragana: "そくていちゅう", arti: "Sedang dalam Pengukuran" },
                { kanji: "計測中", hiragana: "けいそくちゅう", arti: "Sedang Diukur" },
                { kanji: "点検励行", hiragana: "てんけんれいこう", arti: "Pelaksanaan Pemeriksaan" },
                { kanji: "停止確認", hiragana: "ていしかくにん", arti: "Pemastian Berhenti" },
                { kanji: "指差し呼称", hiragana: "ゆびさしこしょう", arti: "Penunjukkan dengan Jari Sambil Menyebutkan" },
                { kanji: "復唱励行", hiragana: "ふくしょうれいこう", arti: "Pelaksanaan Perintah Ulang" },
                { kanji: "手洗励行", hiragana: "てあらいれいこう", arti: "Pelaksanaan Cuci Tangan" },
                { kanji: "非常口", hiragana: "ひじょうぐち", arti: "Pintu Darurat" },
                { kanji: "危険物", hiragana: "きけんぶつ", arti: "Benda Berbahaya" },
                { kanji: "有害物", hiragana: "ゆうがいぶつ", arti: "Benda Merugikan" },
                { kanji: "毒劇物", hiragana: "どくげきぶつ", arti: "Benda Beracun" },
                { kanji: "気を付けよ", hiragana: "きをつけよ", arti: "Marilah Berhati-hati" },
                { kanji: "危険", hiragana: "きけん", arti: "Bahaya" },
                { kanji: "危険信号", hiragana: "きけんしんごう", arti: "Tanda Penunjuk Bahaya" },
                { kanji: "使用禁止", hiragana: "しようきんし", arti: "Dilarang Menggunakan" },
                { kanji: "清掃清潔", hiragana: "せいそうせいけつ", arti: "Menjaga Kebersihan" },
                { kanji: "救急箱", hiragana: "きゅうきゅうばこ", arti: "Kotak Obat Darurat" },
                { kanji: "止まれ", hiragana: "とまれ", arti: "Berhenti" },
                { kanji: "工事中", hiragana: "こうじちゅう", arti: "Sedang Dibangun" },
                { kanji: "開口部注意", hiragana: "かいこうぶちゅうい", arti: "Awas Ada Lubang" },
                { kanji: "高圧注意", hiragana: "こうあつちゅうい", arti: "Awas Tegangan Tinggi" },
                { kanji: "故障中", hiragana: "こしょうちゅう", arti: "Dalam Keadaan Rusak" }
            ]
        };

        let selectedCategoryName = "";
        let rawVocab = [];
        let questions = [];
        let currentIndex = 0;
        let score = 0;
        let timer;
        let timeLeft = 30;
        let isAnswered = false;
        let namaUser = "";

        window.onload = function() {
            const container = document.getElementById('category-container');
            container.innerHTML = '';
            
            for (let kat in databaseKuis) {
                const btn = document.createElement('button');
                btn.className = "w-full p-4 bg-white border border-slate-200 hover:border-indigo-500 hover:bg-indigo-50/50 rounded-xl font-semibold text-slate-700 text-left transition duration-200 flex justify-between items-center shadow-sm";
                btn.innerHTML = `<span>${kat}</span> <span class="text-xs bg-slate-100 text-slate-500 px-2 py-1 rounded-md">${databaseKuis[kat].length} Soal</span>`;
                btn.onclick = () => mulaiQuiz(kat);
                container.appendChild(btn);
            }
        };

        function shuffleArray(array) {
            let currentIndex = array.length, randomIndex;
            while (currentIndex != 0) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex--;
                [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
            }
            return array;
        }

        function mulaiQuiz(kategori) {
            namaUser = document.getElementById('nama-user').value.trim();
            if (!namaUser) {
                alert('Mohon masukkan nama Anda terlebih dahulu!');
                document.getElementById('nama-user').focus();
                return;
            }

            selectedCategoryName = kategori;
            rawVocab = databaseKuis[kategori];
            questions = shuffleArray([...rawVocab]);
            currentIndex = 0;
            score = 0;
            
            document.getElementById('start-screen').classList.add('hidden');
            document.getElementById('result-screen').classList.add('hidden');
            document.getElementById('quiz-screen').classList.remove('hidden');
            document.getElementById('score-badge').classList.remove('hidden');
            document.getElementById('header-title').innerText = kategori;
            document.getElementById('header-subtitle').innerText = `Peserta: ${namaUser}`;
            
            loadQuestion();
        }

        function loadQuestion() {
            isAnswered = false;
            clearInterval(timer);
            timeLeft = 30;
            document.getElementById('time-left').innerText = timeLeft;
            document.getElementById('next-btn').classList.add('hidden');
            
            document.getElementById('question-progress').innerText = `Soal ${currentIndex + 1} dari ${questions.length}`;
            let progressPercent = ((currentIndex + 1) / questions.length) * 100;
            document.getElementById('progress-bar').style.width = `${progressPercent}%`;
            document.getElementById('current-score').innerText = score;

            const currentItem = questions[currentIndex];
            const questionType = Math.floor(Math.random() * 3);
            
            let questionText = "";
            let questionLabelText = "";
            let correctAnswer = "";
            let optionPoolKey = "";

            if (questionType === 0) {
                questionLabelText = "Pilih Cara Baca Hiragana yang Tepat";
                questionText = currentItem.kanji;
                correctAnswer = currentItem.hiragana;
                optionPoolKey = "hiragana";
            } else if (questionType === 1) {
                questionLabelText = "Pilih Kanji yang Tepat";
                questionText = currentItem.hiragana;
                correctAnswer = currentItem.kanji;
                optionPoolKey = "kanji";
            } else {
                questionLabelText = "Pilih Arti Bahasa Indonesia yang Tepat";
                questionText = currentItem.kanji;
                correctAnswer = currentItem.arti;
                optionPoolKey = "arti";
            }

            document.getElementById('question-label').innerText = questionLabelText;
            document.getElementById('question-text').innerText = questionText;

            let wrongOptions = rawVocab
                .filter(item => item[optionPoolKey] !== correctAnswer)
                .map(item => item[optionPoolKey]);
            
            wrongOptions = shuffleArray(wrongOptions);
            let options = [correctAnswer, wrongOptions[0], wrongOptions[1], wrongOptions[2]];
            options = shuffleArray(options);

            const optionsContainer = document.getElementById('options-container');
            optionsContainer.innerHTML = '';

            options.forEach(opt => {
                const button = document.createElement('button');
                button.className = "w-full p-4 text-left font-medium bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-indigo-300 transition duration-150 text-slate-700 flex justify-between items-center";
                button.innerHTML = `<span>${opt}</span>`;
                button.onclick = () => selectAnswer(button, opt, correctAnswer);
                optionsContainer.appendChild(button);
            });

            startTimer();
        }

        function startTimer() {
            timer = setInterval(() => {
                timeLeft--;
                document.getElementById('time-left').innerText = timeLeft;
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    handleTimeOut();
                }
            }, 1000);
        }

        function handleTimeOut() {
            if (isAnswered) return;
            isAnswered = true;
            
            const buttons = document.getElementById('options-container').children;
            const qText = document.getElementById('question-text').innerText;
            let correctVal = "";
            const found = rawVocab.find(i => i.kanji === qText || i.hiragana === qText);
            if (found) {
                if (qText === found.kanji && document.getElementById('question-label').innerText.includes("Hiragana")) {
                    correctVal = found.hiragana;
                } else if (qText === found.hiragana) {
                    correctVal = found.kanji;
                } else {
                    correctVal = found.arti;
                }
            }

            for (let btn of buttons) {
                btn.disabled = true;
                if (btn.querySelector('span').innerText === correctVal) {
                    btn.classList.add('bg-emerald-50', 'border-emerald-500', 'text-emerald-700');
                } else {
                    btn.classList.add('opacity-50');
                }
            }
            showNextButton();
        }

        function selectAnswer(selectedButton, selectedOption, correctAnswer) {
            if (isAnswered) return;
            isAnswered = true;
            clearInterval(timer);

            const buttons = document.getElementById('options-container').children;

            if (selectedOption === correctAnswer) {
                score += 10;
                selectedButton.classList.add('bg-emerald-50', 'border-emerald-500', 'text-emerald-700', 'font-semibold');
                document.getElementById('current-score').innerText = score;
            } else {
                selectedButton.classList.add('bg-rose-50', 'border-rose-500', 'text-rose-700');
                for (let btn of buttons) {
                    if (btn.querySelector('span').innerText === correctAnswer) {
                        btn.classList.add('bg-emerald-50', 'border-emerald-500', 'text-emerald-700');
                    }
                }
            }

            for (let btn of buttons) {
                btn.disabled = true;
                if (btn !== selectedButton && btn.querySelector('span').innerText !== correctAnswer) {
                    btn.classList.add('opacity-50');
                }
            }
            showNextButton();
        }

        function showNextButton() {
            const nextBtn = document.getElementById('next-btn');
            nextBtn.classList.remove('hidden');
            if (currentIndex === questions.length - 1) {
                nextBtn.innerText = "Lihat Hasil Akhir & Simpan Nilai";
            } else {
                nextBtn.innerText = "Soal Selanjutnya";
            }
        }

        function nextQuestion() {
            currentIndex++;
            if (currentIndex < questions.length) {
                loadQuestion();
            } else {
                showResult();
            }
        }

        function showResult() {
            document.getElementById('quiz-screen').classList.add('hidden');
            document.getElementById('score-badge').classList.add('hidden');
            document.getElementById('result-screen').classList.remove('hidden');
            
            document.getElementById('final-score').innerText = `Skor Akhir: ${score}`;

            fetch('simpan_nilai.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `nama=${encodeURIComponent(namaUser)}&kategori=${encodeURIComponent(selectedCategoryName)}&skor=${score}`
            })
            .then(response => response.text())
            .then(data => console.log('Status Database:', data))
            .catch(error => console.error('Gagal menyimpan ke database:', error));
        }
    </script>
</body>
</html>
