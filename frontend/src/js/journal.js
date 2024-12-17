document.getElementById('journalForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const content = document.getElementById('journalEntry').value.trim();
    if (!content) {
        alert('Isi catatan tidak boleh kosong');
        return;
    }

    // Kirim data ke server menggunakan fetch
    fetch('save_journal.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ content: content }) // Ubah body menjadi URLSearchParams
    })
    .then(response => response.json()) // Menangani response JSON
    .then(data => {
        if (data.success) {
            alert('Catatan berhasil disimpan!');
            location.reload(); // Reload halaman untuk memperbarui history
        } else {
            alert('Error: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
});
