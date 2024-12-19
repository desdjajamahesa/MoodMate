document.addEventListener("DOMContentLoaded", function () {
  // Pastikan elemen ada sebelum event listener ditambahkan
  const riwayatBtn = document.getElementById("riwayatBtn");
  const nextBtn = document.getElementById("nextBtn");

  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      renderMoodOptionsPage(selectedMood);
    });
  }

  if (riwayatBtn) {
    riwayatBtn.addEventListener("click", loadMoodHistory);
  } else {
    console.error("Element with ID 'riwayatBtn' not found.");
  }
});


let selectedMood = 4; // Default mood
let selectedOptions = []; // Pilihan mood di Second Page
let selectedActivities = []; // Aktivitas di Final Page
let selectedPersons = []; // Orang/lingkungan di Final Page


// Data mood options
const moodOptions = {
  1: ["Putus asa", "Sedih", "Lelah", "Cemas", "Jengkel", "Marah", "Kesal", "Kecewa", "Khawatir", "Malu", "Stress", "Takut", "Kesepian", "Merasa Bersalah", "Tidak Semangat", "Tidak Peduli", "Frustasi"],
  2: ["Putus asa", "Sedih", "Lelah", "Cemas", "Jengkel", "Marah", "Kesal", "Kecewa", "Khawatir", "Malu", "Stress", "Takut", "Kesepian", "Merasa Bersalah", "Tidak Semangat", "Tidak Peduli", "Frustasi"],
  3: ["Putus asa", "Sedih", "Lelah", "Cemas", "Jengkel", "Marah", "Kesal", "Kecewa", "Khawatir", "Malu", "Stress", "Takut", "Kesepian", "Merasa Bersalah", "Tidak Semangat", "Tidak Peduli", "Frustasi"],
  4: ["Tenang", "Damai", "Tidak Peduli", "Lelah"],
  5: ["Senang", "Penuh Semangat", "Bahagia", "Gembira", "Puas", "Terkejut", "Bersyukur", "Tenang", "Damai", "Bangga", "Percaya Diri", "Lega"],
  6: ["Senang", "Penuh Semangat", "Bahagia", "Gembira", "Puas", "Terkejut", "Bersyukur", "Tenang", "Damai", "Bangga", "Percaya Diri", "Lega"],
  7: ["Senang", "Penuh Semangat", "Bahagia", "Gembira", "Puas", "Terkejut", "Bersyukur", "Tenang", "Damai", "Bangga", "Percaya Diri", "Lega"],
};

// Data aktivitas dan orang
const activityOptions = [
  "Berolahraga", "Melakukan Hobi", "Bermain Game", "Spiritualitas", "Tidur lebih awal",
  "Makan makanan sehat", "Berbelanja", "Membaca", "Menonton Film", "Bersantai",
  "Kencan", "Bekerja", "Mengerjakan Tugas", "Melakukan Perawatan/Skincare"
];
const personOptions = ["Komunitas", "Keluarga", "Teman", "Pasangan"];

// Data pemetaan mood slider
const moodMap = {
  1: ["../src/assets/images/emotions/sangat-tidak-senang.png", "Sangat Tidak Senang"],
  2: ["../src/assets/images/emotions/tidak-senang.png", "Tidak Senang"],
  3: ["../src/assets/images/emotions/sedikit-tidak-senang.png", "Sedikit Tidak Senang"],
  4: ["../src/assets/images/emotions/netral.png", "Netral"],
  5: ["../src/assets/images/emotions/sedikit-senang.png", "Sedikit Senang"],
  6: ["../src/assets/images/emotions/senang.png", "Senang"],
  7: ["../src/assets/images/emotions/sangat-senang.png", "Sangat Senang"],
};

// Event listener untuk slider
document.addEventListener("DOMContentLoaded", function () {
  const moodRange = document.getElementById("moodRange");
  const moodImage = document.getElementById("moodImage");
  const moodText = document.getElementById("moodText");

  moodRange.addEventListener("input", function () {
    selectedMood = parseInt(this.value);

    // Menggunakan switch case untuk slider
    switch (selectedMood) {
      case 1:
        moodImage.src = moodMap[1][0];
        moodText.textContent = moodMap[1][1];
        break;
      case 2:
        moodImage.src = moodMap[2][0];
        moodText.textContent = moodMap[2][1];
        break;
      case 3:
        moodImage.src = moodMap[3][0];
        moodText.textContent = moodMap[3][1];
        break;
      case 4:
        moodImage.src = moodMap[4][0];
        moodText.textContent = moodMap[4][1];
        break;
      case 5:
        moodImage.src = moodMap[5][0];
        moodText.textContent = moodMap[5][1];
        break;
      case 6:
        moodImage.src = moodMap[6][0];
        moodText.textContent = moodMap[6][1];
        break;
      case 7:
        moodImage.src = moodMap[7][0];
        moodText.textContent = moodMap[7][1];
        break;
    }
  });

  // Tombol Next untuk ke halaman kedua
  document.getElementById("nextBtn").addEventListener("click", function () {
    renderMoodOptionsPage(selectedMood);
  });
});

// Halaman kedua: Pilihan mood
function renderMoodOptionsPage(moodValue) {
  const moodTrackerWrapper = document.querySelector(".mood-tracker-wrapper");
  const options = moodOptions[moodValue];

  moodTrackerWrapper.innerHTML = `
    <div class="mood-tracker p-4">
      <h6 class="fw-bold mb-4 text-center">Apa yang paling menggambarkan perasaan Anda?</h6>
      <div id="optionsContainer" class="mood-options mb-4">
        ${options.map((option, index) => `
          <div class="option-item">
            <input class="form-check-input" type="checkbox" id="option-${index}" value="${option}">
            <label class="form-check-label" for="option-${index}">${option}</label>
          </div>
        `).join('')}
      </div>
      <div class="text-center mt-4">
        <button id="submitBtn" class="btn btn-success rounded-pill px-4 py-2">Next</button>
      </div>
    </div>
  `;

  document.querySelectorAll(".form-check-input").forEach((input) => {
    input.addEventListener("change", function () {
      selectedOptions = Array.from(document.querySelectorAll(".form-check-input:checked"))
        .map(input => input.value);
    });
  });

  document.getElementById("submitBtn").addEventListener("click", function () {
    if (selectedOptions.length > 0) {
      renderActivityPage();
    } else {
      alert("Silakan pilih setidaknya satu perasaan sebelum melanjutkan.");
    }
  });
}

function renderActivityPage() {
  const moodTrackerWrapper = document.querySelector(".mood-tracker-wrapper");

  moodTrackerWrapper.innerHTML = `
    <div class="mood-tracker p-4">
      <h6 class="fw-bold text-center mb-4">Apa yang memberikan dampak terbesar bagi kamu?</h6>
      
      <!-- Activity Options -->
      <div id="activityContainer" class="mood-options mb-4">
        <h6 class="fw-semibold mb-3">Pilih aktivitas:</h6>
        ${activityOptions.map((activity, index) => `
          <div class="option-item">
            <input class="form-check-input" type="checkbox" id="activity-${index}" value="${activity}">
            <label class="form-check-label" for="activity-${index}">${activity}</label>
          </div>
        `).join('')}
      </div>

      <!-- Person Options -->
      <div id="personContainer" class="mood-options mb-4">
        <h6 class="fw-semibold mb-3">Atau lingkungan?</h6>
        ${personOptions.map((person, index) => `
          <div class="option-item">
            <input class="form-check-input" type="checkbox" id="person-${index}" value="${person}">
            <label class="form-check-label" for="person-${index}">${person}</label>
          </div>
        `).join('')}
      </div>

      <!-- Done Button -->
      <div class="text-center mt-4">
        <button id="doneBtn" class="btn btn-primary rounded-pill px-4 py-2">Selesai</button>
      </div>
    </div>
  `;

  // Event listener untuk checkbox activity
  document.querySelectorAll("#activityContainer .form-check-input").forEach((input) => {
    input.addEventListener("change", function () {
      selectedActivities = Array.from(document.querySelectorAll("#activityContainer .form-check-input:checked"))
        .map(input => input.value);
    });
  });

  // Event listener untuk checkbox person
  document.querySelectorAll("#personContainer .form-check-input").forEach((input) => {
    input.addEventListener("change", function () {
      selectedPersons = Array.from(document.querySelectorAll("#personContainer .form-check-input:checked"))
        .map(input => input.value);
    });
  });

  // Button Done
  document.getElementById("doneBtn").addEventListener("click", renderFinalPage);
}


function renderFinalPage() {
  const moodTrackerWrapper = document.querySelector(".mood-tracker-wrapper");

  moodTrackerWrapper.innerHTML = `
    <div class="mood-tracker p-4 text-center">
      <h3 class="fw-bold mb-4">Mood Tracking Selesai!</h3>
      <p class="fs-5 mb-3">Terima kasih sudah menggunakan Mood Tracker hari ini.</p>

      <!-- Tampilkan hasil -->
      <div class="text-start mt-4">
        <p><strong>Mood Utama :</strong> ${moodMap[selectedMood][1]}</p>
        <p><strong>Perasaan Kamu :</strong> ${selectedOptions.join(", ") || "Tidak ada"}</p>
        <p><strong>Aktivitas yang dipilih :</strong> ${selectedActivities.join(", ") || "Tidak ada"}</p>
        <p><strong>Lingkungan/Orang yang dipilih :</strong> ${selectedPersons.join(", ") || "Tidak ada"}</p>
      </div>

      <!-- Button Selesai -->
      <button class="btn btn-primary rounded-pill px-4 py-2 mt-4" onclick="location.reload()">Selesai</button>
    </div>
  `;
}

document.addEventListener("DOMContentLoaded", function () {
  // Fungsi untuk menyimpan data ke database
  function saveMoodToDatabase() {
    const payload = {
      mood_value: selectedMood,
      mood_options: selectedOptions.join(", "),
      activities: selectedActivities.join(", "),
      persons: selectedPersons.join(", "),
    };

    console.log("Payload:", payload);

    fetch("../../backend/process_mood.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Mood berhasil disimpan!");
          renderFinalPage(); // Tampilkan halaman konfirmasi
        } else {
          alert("Error: " + data.error);
        }
      })
      .catch((error) => console.error("Error:", error));
  }

  // Tombol Done untuk menyimpan ke database
  document.getElementById("doneBtn").addEventListener("click", saveMoodToDatabase);

  // Tombol "Cek Data Mood Kamu"
  document.getElementById("riwayatBtn").addEventListener("click", loadMoodHistory);

  // Fungsi untuk menampilkan history mood
  function loadMoodHistory() {
    fetch("../../backend/get_mood.php")
      .then((response) => response.json())
      .then((data) => {
        const moodTrackerWrapper = document.querySelector(".mood-tracker-wrapper");
        if (data.length > 0) {
          moodTrackerWrapper.innerHTML = `
            <div class="mood-tracker p-4">
              <h3 class="fw-bold mb-4 text-center">Riwayat Mood Kamu</h3>
              <ul class="list-group">
                ${data
                  .map(
                    (entry) => `
                  <li class="list-group-item">
                    <strong>${entry.timestamp}</strong> - Mood: ${entry.mood_value}, 
                    Perasaan: ${entry.mood_options}, 
                    Aktivitas: ${entry.activities}, 
                    Lingkungan: ${entry.persons}
                  </li>
                `
                  )
                  .join("")}
              </ul>
              <div class="text-center mt-4">
                <button class="btn btn-primary rounded-pill px-4 py-2" onclick="location.reload()">Kembali</button>
              </div>
            </div>
          `;
        } else {
          alert("Belum ada data mood yang tersimpan.");
        }
      })
      .catch((error) => console.error("Error loading history:", error));
  }
});