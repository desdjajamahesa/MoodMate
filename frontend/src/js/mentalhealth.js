const questionnaires = {
  Anxiety: {
    cardText:
      "Zung Self-Rating Anxiety Scale (SAS) adalah alat penilaian psikologis yang dirancang untuk mengukur tingkat kecemasan seseorang. Dikembangkan oleh Dr. William W.K. Zung pada tahun 1971, skala ini bertujuan untuk mengukur tingkat keparahan gejala kecemasan pada individu.",
    description: "Questioner ini bertujuan untuk mengetahui tingkat Anxiety Anda.",
    questions: [
      "Saya merasa lebih gelisah dan cemas dari biasanya",
      "Saya merasa takut tanpa alasan yang jelas",
      "Saya merasa panik",
      "Saya merasa tubuh saya seperti hancur berantakan dan akan hancur berkeping-keping",
      "Saya merasa semua baik-baik saja dan tidak akan ada hal buruk yang terjadi",
      "Kedua tangan dan kaki saya gemetar",
      "Saya sering terganggu oleh sakit kepala, leher, dan punggung",
      "Saya merasa badan saya lemah dan mudah lelah",
      "Saya merasa tenang dan dapat duduk dengan nyaman",
      "Saya merasa jantung saya berdebar-debar dengan keras dan cepat",
      "Saya sering mengalami pusing",
      "Saya sering pingsan atau merasa seperti ingin pingsan",
      "Saya dapat bernafas dengan mudah seperti biasanya",
      "Saya merasa kaku atau mati rasa dan kesemutan pada jari-jari dan kaki saya",
      "Saya merasa sakit perut atau gangguan pencernaan",
      "Saya merasa sering kencing daripada biasanya",
      "Tangan saya hangat dan kering seperti biasanya",
      "Wajah saya terasa panas dan kemerahan",
      "Tadi malam saya dapat tidur dan beristirahat pada malam hari dengan tenang",
      "Saya mengalami mimpi-mimpi buruk",
    ],
    options: ["Tidak Pernah", "Kadang-Kadang", "Sering", "Selalu"],
    scores: [
      { min: 20, max: 44, level: "Normal/Tidak Cemas" },
      { min: 45, max: 59, level: "Kecemasan Ringan" },
      { min: 60, max: 74, level: "Kecemasan Sedang" },
      { min: 75, max: 80, level: "Kecemasan Berat" },
    ],
    scoreMap: [1, 2, 3, 4],
  },
  Stress: {
    cardText:
      "Perceived Stress Scale adalah alat skrining yang dirancang untuk mengukur persepsi seseorang terhadap stres dalam kehidupannya. PSS pertama kali diperkenalkan oleh Sheldon Cohen pada tahun 1983 dan telah digunakan secara luas dalam berbagai penelitian untuk mengukur persepsi stres dalam populasi yang berbeda. Tes ini terdiri dari sepuluh pertanyaan yang mengevaluasi seberapa sering seseorang merasa kewalahan, tidak terkendali, atau tertekan oleh situasi dalam sebulan terakhir.",
    description: "Questioner ini bertujuan untuk mengetahui tingkat stress Anda.",
    questions: [
      "Selama sebulan terakhir, seberapa sering Anda marah karena sesuatu yang tidak terduga",
      "Selama sebulan terakhir, seberapa sering Anda merasa tidak mampu mengontrol hal-hal yang penting dalam kehidupan Anda",
      "Selama sebulan terakhir, seberapa sering Anda merasa gelisah dan tertekan",
      "Selama sebulan terakhir, seberapa sering Anda merasa yakin terhadap kemampuan diri untuk mengatasi masalah pribadi",
      "Selama sebulan terakhir, seberapa sering Anda merasa segala sesuatu yang terjadi sesuai dengan harapan Anda",
      "Selama sebulan terakhir, seberapa sering Anda merasa tidak mampu menyelesaikan hal-hal yang harus Anda kerjakan",
      "Selama sebulan terakhir, seberapa sering Anda mampu mengontrol <i>rasa mudah tersinggung</i> dalam kehidupan Anda",
      "Selama sebulan terakhir, seberapa sering Anda merasa lebih mampu mengatasi masalah jika dibandingkan dengan orang lain",
      "Selama sebulan terakhir, seberapa sering Anda marah karena adanya masalah yang tidak dapat Anda kendalikan",
      "Selama sebulan terakhir, seberapa sering Anda merasakan kesulitan yang menumpuk sehingga Anda tidak mampu untuk mengatasinya",
    ],
    options: ["0", "1", "2", "3", "4"],
    scores: [
      { min: 0, max: 13, level: "Stress Ringan" },
      { min: 14, max: 26, level: "Stress Sedang" },
      { min: 27, max: 40, level: "Stress Berat" },
    ],
    scoreMap: [0, 1, 2, 3, 4],
  },
  Depresi: {
    cardText:
      "Beck Depression Inventory (BDI) atau Inventaris Depresi Beck (IDB) adalah salah satu tes psikometri yang digunakan untuk mengukur tingkat depresi seseorang. Dikembangkan oleh psikiater Amerika Serikat, Aaron T.Beck, bersama koleganya dan diterbitkan pertama kali tahun 1961.",
    description: "Questioner ini bertujuan untuk mengetahui tingkat depresi Anda.",
    questions: [
      {
        topic: "Kesedihan",
        options: [
          { text: "Saya tidak merasa sedih", value: 0 },
          { text: "Saya sering merasa sedih", value: 1 },
          { text: "Saya sedih sepanjang waktu", value: 2 },
          { text: "Saya merasa sangat sedih atau tidak gembira, sampai saya tidak dapat menahannya", value: 3 },
        ],
      },
      {
        topic: "Pesimistik",
        options: [
          { text: "Saya tidak merasa berkecil hati terhadap masa depan", value: 0 },
          { text: "Saya merasa berkecil hati terhadap masa depan", value: 1 },
          { text: "Saya merasa bahwa tidak ada satupun yang dapat saya harapkan", value: 2 },
          { text: "Saya merasa putus asa dengan masa depan saya dan keadaan hanya menjadi semakin buruk", value: 3 },
        ],
      },
      {
        topic: "Kegagalan Masa Lalu",
        options: [
          { text: "Saya tidak menganggap diri saya gagal", value: 0 },
          { text: "Saya merasa lebih banyak mengalami kegagalan daripada rata-rata orang", value: 1 },
          { text: "Saat saya mengingat masa lalu, yang dapat saya lihat hanyalah banyak kegagalan", value: 2 },
          { text: "Saya merasa bahwa saya adalah orang yang gagal total", value: 3 },
        ],
      },
      {
        topic: "Kehilangan Kesenangan",
        options: [
          { text: "Saya memperoleh kesenangan dari semua hal yang saya nikmati", value: 0 },
          { text: "Saya kurang menikmati sesuatu seperti biasanya", value: 1 },
          { text: "Saya mendapat sedikit kesenangan dari hal-hal yang biasanya saya nikmati", value: 2 },
          { text: "Saya tidak mendapatkan kesenangan terhadap apa saja", value: 3 },
        ],
      },
      {
        topic: "Perasaan Bersalah",
        options: [
          { text: "Saya sama sekali tidak merasa bersalah", value: 0 },
          { text: "Saya merasa bersalah pada kebanyakan hal yang saya lakukan atau seharusnya yang saya lakukan", value: 1 },
          { text: "Saya sering merasa sangat bersalah", value: 2 },
          { text: "Saya merasa bersalah setiap waktu", value: 3 },
        ],
      },
      {
        topic: "Perasaan Merasa Dihukum",
        options: [
          { text: "Saya tidak merasa saya sedang dihukum", value: 0 },
          { text: "Saya merasa saya mungkin sedang dihukum", value: 1 },
          { text: "Saya mengharapkan untuk dihukum", value: 2 },
          { text: "Saya merasa sedang dihukum", value: 3 },
        ],
      },
      {
        topic: "Benci Diri Sendiri",
        options: [
          { text: "Saya tidak merasa kecewa terhadap diri saya sendiri", value: 0 },
          { text: "Saya kehilangan kepercayaan terhadap diri saya sendiri", value: 1 },
          { text: "Saya kecewa dengan diri saya", value: 2 },
          { text: "Saya tidak menyukai diri saya", value: 3 },
        ],
      },
      {
        topic: "Pengkritikan Terhadap Diri Sendiri",
        options: [
          { text: "Saya tidak merasa lebih buruk dari pada orang lain", value: 0 },
          { text: "Saya lebih kritis terhadap diri saya dari biasanya", value: 1 },
          { text: "Saya mengkritik diri saya untuk semua kesalahan saya", value: 2 },
          { text: "Saya menyalahkan diri saya untuk semua kejadian buruk yang terjadi", value: 3 },
        ],
      },
      {
        topic: "Pikiran Atau Keinginan Untuk Bunuh Diri",
        options: [
          { text: "Saya tidak mempunyai pikiran untuk bunuh diri", value: 0 },
          { text: "Saya mempunyai pikiran untuk bunuh diri, tapi saya takut", value: 1 },
          { text: "Saya merasa ingin bunuh diri", value: 2 },
          { text: "Saya ingin bunuh diri, bila ada kesempatan", value: 3 },
        ],
      },
      {
        topic: "Menangis",
        options: [
          { text: "Saya tidak menangis lebih seperti biasanya", value: 0 },
          { text: "Saya lebih menangis dari biasanya", value: 1 },
          { text: "Saya menangis sepanjang waktu", value: 2 },
          { text: "Saya sudah tidak sanggup lagi untuk menangis", value: 3 },
        ],
      },
      {
        topic: "Tidak Bisa Beristirahat",
        options: [
          { text: "Saya bisa beristirahat seperti biasanya", value: 0 },
          { text: "Saya merasa kurang bisa beristirahat seperti biasanya", value: 1 },
          { text: "Saya tidak bisa beristirahat atau sangat sulit untuk diam", value: 2 },
          { text: "Saya sangat tidak bisa beristirahat atau saya harus tetap bergerak untuk melakukan sesuatu", value: 3 },
        ],
      },
      {
        topic: "Kehilangan Minat",
        options: [
          { text: "Saya tidak kehilangan minat terhadap orang lain atau aktivitas tertentu", value: 0 },
          { text: "Saya sedikit berminat terhadap orang lain atau sesuatu hal dari pada keadaan sebelumnya", value: 1 },
          { text: "Saya kehilangan hampir seluruh minat terhadap orang atau hal lain", value: 2 },
          { text: "Sangat sulit untuk berminat terhadap apapun", value: 3 },
        ],
      },
      {
        topic: "Keragu-raguan",
        options: [
          { text: "Saya membuat keputusan sebaik keadaan sebelumnya", value: 0 },
          { text: "Saya sedikit kesulitan untuk membuat keputusan dari pada biasanya", value: 1 },
          { text: "Saya lebih sulit membuat keputusan dari pada biasanya", value: 2 },
          { text: "Saya kesulitan membuat keputusan apapun", value: 3 },
        ],
      },
      {
        topic: "Ketidakberanian",
        options: [
          { text: "Saya menganggap diri saya berani", value: 0 },
          { text: "Saya menganggap diri saya tidak berani dan tidak berguna seperti biasanya", value: 1 },
          { text: "Saya merasa sangat tidak berani dibandingkan dengan orang lain", value: 2 },
          { text: "Saya merasa diri saya sama sekali tidak berani", value: 3 },
        ],
      },
      {
        topic: "Kehilangan Energi",
        options: [
          { text: "Saya mempunyai banyak energi (tenaga) seperti biasanya", value: 0 },
          { text: "Saya kekurangan energi (tenaga) dibandingkan keadaan biasanya", value: 1 },
          { text: "Saya tidak mempunyai energi (tenaga) yang cukup untuk melakukan banyak hal", value: 2 },
          { text: "Saya tidak mempunyai banyak energi (tenaga) untuk melakukan apapun", value: 3 },
        ],
      },
      {
        topic: "Perubahan Pola Tidur",
        options: [
          { text: "Saya tidak mengalami perubahan pola tidur", value: 0 },
          { text: "Saya kadang-kadang tidur lebih dari biasanya", value: 1 },
          { text: "Saya kadang-kadang tidur kurang dari biasanya", value: 1 },
          { text: "Saya tidur lebih sering dari biasanya", value: 2 },
          { text: "Saya tidur lebih kurang dari biasanya", value: 2 },
          { text: "Saya tidur hampir sepanjang hari", value: 3 },
          { text: "Saya terbangun 1-2 jam lebih awal dan tidak dapat tidur lagi", value: 3 },
        ],
      },
      {
        topic: "Mudah Tersinggung",
        options: [
          { text: "Saya tidak mudah tersinggung seperti sebelumnya", value: 0 },
          { text: "Saya lebih mudah tersinggung dari pada sebelumnya", value: 1 },
          { text: "Saya lebih sering tersinggung dari pada sebelumnya", value: 2 },
          { text: "Saya tersinggung setiap saat", value: 3 },
        ],
      },
      {
        topic: "Perubahan Dalam Selera Makan",
        options: [
          { text: "Saya tidak mengalami perubahan selera makan", value: 0 },
          { text: "Selera makan saya kadang-kadang kurang dari pada biasanya", value: 1 },
          { text: "Selera makan saya kadang-kadang bertambah dari pada sebelumnya", value: 1 },
          { text: "Selera makan saya kurang dari pada sebelumnya", value: 2 },
          { text: "Selera makan saya lebih dari pada sebelumnya", value: 2 },
          { text: "Saya tidak selera makan sama sekali", value: 3 },
          { text: "Saya gila makan setiap saat", value: 3 },
        ],
      },
      {
        topic: "Kesulitan Berkonsentrasi",
        options: [
          { text: "Saya dapat berkonsentrasi baik seperti biasanya", value: 0 },
          { text: "Saya tidak berkonsentrasi sebaik sebelumnya", value: 1 },
          { text: "Sangat sulit untuk berkonsentrasi untuk jangka panjang", value: 2 },
          { text: "Saya tidak dapat berkonsentrasi pada apapun", value: 3 },
        ],
      },
      {
        topic: "Capek Atau Lelah",
        options: [
          { text: "Saya tidak merasa capek atau lelah dibandingkan keadaan sebelumnya", value: 0 },
          { text: "Saya mudah capek atau lelah dari pada biasanya", value: 1 },
          { text: "Saya sangat lelah atau capek dalam melakukan apapun dari pada biasanya", value: 2 },
          { text: "Saya terlalu capek atau lelah untuk melakukan hampir semua aktivitas dari pada biasanya", value: 3 },
        ],
      },
      {
        topic: "Kehilangan Minat Seks",
        options: [
          { text: "Saya tidak mempunyai perubahan dalam minat seks", value: 0 },
          { text: "Saya sedikit kurang tertarik terhadap seks dibandingkan biasanya", value: 1 },
          { text: "Saya kurang tertarik dengan seks sekarang", value: 2 },
          { text: "Saya kehilangan minat seks sepenuhnya", value: 3 },
        ],
      },
    ],
    scores: [
      { min: 0, max: 9, level: "Tidak Ada Depresi" },
      { min: 10, max: 18, level: "Depresi Ringan" },
      { min: 19, max: 29, level: "Depresi Sedang" },
      { min: 30, max: 63, level: "Depresi Berat" },
    ],
    scoreMap: null,
  },
};

let currentQuestionnaire = null;
let currentQuestionIndex = 0;
let userAnswers = [];
let isRunning = false;

function renderCards() {
  const container = document.getElementById("pre-define-container");
  container.innerHTML = "";
  for (const type in questionnaires) {
    container.innerHTML += `
      <div class="card shadow-sm" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title fw-bold">${type}</h5>
          <p class="card-text">${questionnaires[type].description}</p>
          <button id="btn-${type}" class="btn btn-primary" onclick="selectQuestionnaire('${type}')">Pilih</button>
        </div>
      </div>
    `;
  }
}

function selectQuestionnaire(type) {
  if (isRunning) return alert("Selesaikan questioner yang sedang berjalan terlebih dahulu.");
  currentQuestionnaire = questionnaires[type];
  currentQuestionIndex = 0;
  userAnswers = [];
  document.getElementById("selected-title").textContent = `Questioner ${type}`;
  document.getElementById("questionnaire-description").textContent = currentQuestionnaire.cardText;
  document.getElementById("questionnaire-info").style.display = "block";
  document.getElementById("default-text").style.display = "none";
}

function startQuestionnaire() {
  isRunning = true;
  document.getElementById("questionnaire-info").style.display = "none";
  document.getElementById("question-container").style.display = "block";
  disableButtons();
  displayQuestion();
}

function disableButtons() {
  document.querySelectorAll(".btn-primary").forEach((btn) => (btn.disabled = true));
}

function enableButtons() {
  document.querySelectorAll(".btn-primary").forEach((btn) => (btn.disabled = false));
}

function displayQuestion() {
  const question = currentQuestionnaire.questions[currentQuestionIndex];
  let optionsHTML = "";

  // Tentukan class dinamis untuk container
  const isDepresi = currentQuestionnaire === questionnaires.Depresi;
  const optionContainerClass = isDepresi ? "depression-container" : "horizontal-container";

  if (isDepresi && question.options) {
    // Opsi untuk Depresi (vertikal)
    optionsHTML = question.options
      .map(
        (opt, index) => `
          <div class="form-check">
            <input type="radio" name="answer" value="${opt.value}" id="opt-${index}" class="form-check-input">
            <label for="opt-${index}" class="form-check-label">${opt.text}</label>
          </div>`
      )
      .join("");
  } else {
    // Opsi untuk Anxiety dan Stress (horizontal)
    optionsHTML = currentQuestionnaire.options
      .map(
        (opt, index) => `
          <div class="radio-option">
            <input type="radio" name="answer" value="${index}" id="opt-${index}" class="radio-button">
            <label for="opt-${index}" class="radio-label">${opt}</label>
          </div>`
      )
      .join("");
  }

  // Tampilkan di dalam container
  document.getElementById("question-container").innerHTML = `
    <h5 class="fw-bold">Pertanyaan ${currentQuestionIndex + 1}</h5>
    <p>${question.topic || question}</p>
    <div class="${optionContainerClass}">${optionsHTML}</div>
    <button class="btn btn-primary mt-3" id="nextButton" disabled onclick="nextQuestion()">Next</button>
  `;

  // Aktifkan tombol "Next" jika radio button dipilih
  document.querySelectorAll("input[name='answer']").forEach((radio) => {
    radio.addEventListener("change", () => {
      document.getElementById("nextButton").disabled = false;
    });
  });
}

function nextQuestion() {
  const selectedAnswer = document.querySelector("input[name='answer']:checked").value;

  // Jika Depresi, nilai langsung dari value opsi, jika bukan, gunakan scoreMap
  if (currentQuestionnaire.scoreMap) {
    userAnswers.push(currentQuestionnaire.scoreMap[selectedAnswer]);
  } else {
    userAnswers.push(parseInt(selectedAnswer)); // Untuk Depresi
  }

  if (currentQuestionIndex < currentQuestionnaire.questions.length - 1) {
    currentQuestionIndex++;
    displayQuestion();
  } else {
    displayResult();
  }
}

function displayResult() {
  const totalScore = userAnswers.reduce((a, b) => a + b, 0);
  const result = currentQuestionnaire.scores.find((score) => totalScore >= score.min && totalScore <= score.max);

  document.getElementById("question-container").innerHTML = `
  <h4 class="fw-bold">Hasil Questioner</h4>
  <p class="fs-5">Skor Anda: <strong>${totalScore}</strong></p>
  <p class="fs-5">Tingkat: <strong>${result.level}</strong></p>
  <div class="d-flex justify-content-center gap-3 mt-3">
    <button class="btn btn-success" onclick="resetQuestionnaire()">Selesai</button>
    <a href="../../frontend/dashboard/article.php" class="btn btn-primary">Kunjungi Artikel Terkait</a>
  </div>
`;
  isRunning = false;
  enableButtons();
}

function resetQuestionnaire() {
  document.getElementById("default-text").style.display = "block";
  document.getElementById("question-container").style.display = "none";
}

renderCards();
