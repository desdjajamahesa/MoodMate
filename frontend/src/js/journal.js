document.addEventListener("DOMContentLoaded", function () {
    const journalForm = document.getElementById("journalForm");
    const journalEntry = document.getElementById("journalEntry");
    const journalHistory = document.getElementById("journalHistory");

    function loadJournalHistory() {
        fetch("../../backend/load_journal.php")
            .then(response => response.json())
            .then(data => {
                journalHistory.innerHTML = "";
                if (data.length > 0) {
                    data.forEach(entry => {
                        const li = document.createElement("li");
                        li.classList.add("list-group-item");
                        li.innerHTML = `
                            <p class="mb-1"><strong>${entry.created_at}</strong></p>
                            <p class="mb-0">${entry.content}</p>
                        `;
                        journalHistory.appendChild(li);
                    });
                } else {
                    journalHistory.innerHTML = '<li class="list-group-item">Belum ada catatan jurnal.</li>';
                }
            })
            .catch(() => {
                alert("Gagal memuat riwayat jurnal.");
                journalHistory.innerHTML = '<li class="list-group-item text-danger">Gagal memuat riwayat jurnal.</li>';
            });
    }

    journalForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const entryText = journalEntry.value.trim();

        if (entryText === "") {
            alert("Tulis catatan Anda terlebih dahulu.");
            return;
        }

        fetch("../../backend/save_journal.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `entry=${encodeURIComponent(entryText)}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Catatan berhasil disimpan!");
                journalEntry.value = "";
                loadJournalHistory();
            } else {
                alert(data.message || "Gagal menyimpan jurnal.");
            }
        })
        .catch(() => alert("Terjadi kesalahan saat menyimpan catatan."));
    });

    loadJournalHistory();
});