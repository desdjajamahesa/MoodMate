document.getElementById('journalForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append('content', document.getElementById('journalEntry').value.trim());
    formData.append('image', document.getElementById('journalImage').files[0]);

    fetch('../../backend/save_journal.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data); // Debugging
        if (data.success) {
            alert('Jurnal berhasil disimpan!');
            loadJournalHistory(); // Reload history
            document.getElementById('journalForm').reset();
            document.getElementById('imagePreview').classList.add('d-none');
        } else {
            alert('Error: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
});
