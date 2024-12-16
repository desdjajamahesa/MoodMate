document.querySelectorAll('.sidebar-link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
    e.target.classList.add('active');

    // Update the main content area based on the selected menu item
    updateMainContent(e.target.textContent);
  });
});

function updateMainContent(menuText) {
  const mainContentArea = document.querySelector('.main-content-mood-tracker');
  mainContentArea.innerHTML = `<h5>You selected: ${menuText}</h5>`;
  // Add your logic to update the main content area here
}