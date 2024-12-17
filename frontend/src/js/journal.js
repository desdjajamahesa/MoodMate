document.addEventListener('DOMContentLoaded', function() {
    const journalForm = document.getElementById('journalForm');
    const journalHistory = document.getElementById('journalHistory');

    // Debug: Log form dan history element
    console.log('Journal Form:', journalForm);
    console.log('Journal History:', journalHistory);

    // Fungsi untuk memuat history jurnal
    function loadJournalHistory() {
        console.log('Memuat riwayat jurnal...');
        
        fetch('../backend/get_journal_history.php', {
            method: 'GET',
            credentials: 'same-origin' // Penting untuk membawa session
        })
        .then(response => {
            console.log('Response status:', response.status);
            return response.json();
        })
        .then(data => {
            console.log('Response data:', data);

            if (data.success && Array.isArray(data.journals)) {
                journalHistory.innerHTML = ''; // Bersihkan entri yang ada
                
                if (data.journals.length === 0) {
                    const noEntriesMessage = document.createElement('li');
                    noEntriesMessage.className = 'list-group-item text-center text-muted';
                    noEntriesMessage.textContent = 'Belum ada catatan jurnal';
                    journalHistory.appendChild(noEntriesMessage);
                    return;
                }

                data.journals.forEach(entry => {
                    const entryElement = document.createElement('li');
                    entryElement.className = 'list-group-item';
                    
                    const date = new Date(entry.created_at);
                    const formattedDate = date.toLocaleDateString('id-ID', {
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric'
                    });
                    
                    entryElement.innerHTML = `
                        <div class="d-flex justify-content-between">
                            <span>${entry.content}</span>
                            <small class="text-muted">${formattedDate}</small>
                        </div>
                    `;
                    journalHistory.appendChild(entryElement);
                });
            } else {
                console.error('Gagal memuat jurnal:', data);
                
                const errorMessage = document.createElement('li');
                errorMessage.className = 'list-group-item text-danger';
                errorMessage.textContent = data.message || 'Gagal memuat riwayat jurnal';
                journalHistory.appendChild(errorMessage);
            }
        })
        .catch(error => {
            console.error('Error memuat history jurnal:', error);
            
            const errorMessage = document.createElement('li');
            errorMessage.className = 'list-group-item text-danger';
            errorMessage.textContent = 'Terjadi kesalahan saat memuat riwayat jurnal';
            journalHistory.appendChild(errorMessage);
        });
    }

    // Tambahkan event listener untuk submit form
    if (journalForm) {
        journalForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const journalEntry = document.getElementById('journalEntry').value.trim();
            
            if (!journalEntry) {
                alert('Silakan tulis sesuatu di jurnal anda');
                return;
            }

            fetch('../backend/save_journal.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `entry=${encodeURIComponent(journalEntry)}`,
                credentials: 'same-origin' // Penting untuk membawa session
            })
            .then(response => response.json())
            .then(data => {
                console.log('Save journal response:', data);
                
                if (data.success) {
                    document.getElementById('journalEntry').value = '';
                    loadJournalHistory(); // Muat ulang history
                } else {
                    alert(data.message || 'Gagal menyimpan jurnal');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menyimpan jurnal');
            });
        });
    }

    // Muat history jurnal saat halaman dimuat
    loadJournalHistory();
});