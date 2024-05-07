/* Here's the JavaScript */

// create constants for elements we want to work with
const toggle = document.getElementById('toggle');

const actionDashboard = document.getElementById('action-dashboard');
const actionPatient = document.getElementById('action-patient');
const actionPrescriber = document.getElementById('action-prescriber');
const actionAdministration = document.getElementById('action-administration');
const actionLog = document.getElementById('action-log');
const actionProfile = document.getElementById('action-profile');

const dashboardToggles = document.querySelectorAll('.dashboard-toggle');

// Add Event Listener to Toggle element to expand/contract the nav area
toggle.addEventListener('click', () => {
  document.getElementById('main').classList.toggle('show-nav');
  document.getElementById('nav').classList.toggle('show-nav');
});

// Add keyboard shortcut listener (command + b) to expand/contracct the nav area
document.body.addEventListener('keydown', function (e) {
  if ((e.metaKey) && (e.key === 'b')) {
    document.getElementById('main').classList.toggle('show-nav');
    document.getElementById('nav').classList.toggle('show-nav');
  }
});

// Add Event Listener to actionDashboard element to load index page
actionDashboard.addEventListener('click', () => {
  window.location = "../dashboard/";
});

// Add Event Listener to actionPatient element to load patients page
actionPatient.addEventListener('click', () => {
  window.location = "../patient";
});

// Add Event Listener to actionPrescribers element to load providers page
actionPrescriber.addEventListener('click', () => {
  window.location = "#";
});

// Add Event Listener to actionAdministration element to load administration page
actionAdministration.addEventListener('click', () => {
  window.location = "../administration/";
});

// Add Event Listener to actionLogs element to load logs page
actionLog.addEventListener('click', () => {
  window.location = "../log/";
});

// Add Event Listener to actionProfile element to load profile page
actionProfile.addEventListener('click', () => {
  window.location = "../profile/";
  // window.location = "/avdrms/profile/";
});
