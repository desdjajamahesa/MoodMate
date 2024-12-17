document.addEventListener('DOMContentLoaded', function() {
    const journalForm = document.getElementById('journalForm');
    const journalHistory = document.getElementById('journalHistory');

    // Tambahkan event listener untuk submit form
    if (journalForm) {
        journalForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const journalEntry = document.getElementById('journalEntry').value.trim();
            
            if (!journalEntry) {
                alert('Silakan tulis sesuatu di jurnal anda');
                return;
            }

            // Debug: Log the entry being sent
            console.log('Sending journal entry:', journalEntry);

            fetch('../backend/save_journal.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `entry=${encodeURIComponent(journalEntry)}`,
                credentials: 'same-origin'
            })
            .then(response => {
                // Debug: Log full response
                console.log('Full response:', response);
                return response.json();
            })
            .then(data => {
                console.log('Save journal response:', data);
                
                if (data.success) {
                    document.getElementById('journalEntry').value = '';
                    loadJournalHistory(); // Muat ulang history
                } else {
                    // Tampilkan pesan error yang lebih informatif
                    alert(data.message || 'Gagal menyimpan jurnal');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan jurnal: ' + error.message);
            });
        });
    }

    // Fungsi untuk memuat history jurnal (tetap sama seperti sebelumnya)
    function loadJournalHistory() {
        // ... (kode sebelumnya)
    }

    // Muat history jurnal saat halaman dimuat
    loadJournalHistory();
});