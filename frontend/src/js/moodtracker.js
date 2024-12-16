// Event listener untuk input range
document.getElementById('moodRange').addEventListener('input', function() {
  const moodValue = parseInt(this.value);
  const moodImage = document.getElementById('moodImage');
  const moodText = document.getElementById('moodText');

  // Ubah gambar dan teks sesuai nilai slider
  switch (moodValue) {
      case 1:
          moodImage.src = "../src/assets/images/emotions/sangat-tidak-senang.png";
          moodText.textContent = "Sangat Tidak Senang";
          break;
      case 2:
          moodImage.src = "../src/assets/images/emotions/tidak-senang.png";
          moodText.textContent = "Tidak Senang";
          break;
      case 3:
          moodImage.src = "../src/assets/images/emotions/sedikit-tidak-senang.png";
          moodText.textContent = "Sedikit Tidak Senang";
          break;
      case 4:
          moodImage.src = "../src/assets/images/emotions/netral.png";
          moodText.textContent = "Netral";
          break;
      case 5:
          moodImage.src = "../src/assets/images/emotions/sedikit-senang.png";
          moodText.textContent = "Sedikit Senang";
          break;
      case 6:
          moodImage.src = "../src/assets/images/emotions/senang.png";
          moodText.textContent = "Senang";
          break;
      case 7:
          moodImage.src = "../src/assets/images/emotions/sangat-senang.png";
          moodText.textContent = "Sangat Senang";
          break;
  }
});

// Event listener untuk button "Next"
document.getElementById('nextBtn').addEventListener('click', function() {
  alert("Fitur ini akan menampilkan pertanyaan berikutnya!");
  // Anda bisa menambahkan redirect atau logika lain di sini
});
