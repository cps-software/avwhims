/* Custom JS for Administraton Module */

// add event listener for each of the dashboard expand/collapse toggles
dashboardToggles.forEach(dbToggle => {
    dbToggle.addEventListener('click', () => {
        dbToggle.parentNode.classList.toggle('dashboard-active');
    })
})