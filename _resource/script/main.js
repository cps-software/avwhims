/* Here's the JavaScript */

// create constants for elements we want to work with
const toggle = document.getElementById('toggle');

const actionDashboard = document.getElementById('action-dashboard');
const actionPatient = document.getElementById('action-patient');
const actionProvider = document.getElementById('action-provider');
const actionFacility = document.getElementById('action-facility');
const actionClinicalApi = document.getElementById('action-clinical-api');
const actionPatientApi = document.getElementById('action-patient-api');
const actionReport = document.getElementById('action-report');
const actionAdministration = document.getElementById('action-administration');
const actionHelp = document.getElementById('action-help');
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

// Add Event Listener to actionPatient element to load patient page
actionPatient.addEventListener('click', () => {
  window.location = "../patient";
});

// Add Event Listener to actionProvider element to load provider page
actionProvider.addEventListener('click', () => {
  window.location = "../provider";
});

// Add Event Listener to actionFacility element to load log page
actionFacility.addEventListener('click', () => {
  window.location = "../facility";
});

// Add Event Listener to actionClinicalApi element to load report page
actionClinicalApi.addEventListener('click', () => {
  window.location = "../clinical_api";
});

// Add Event Listener to actionPatientApi element to load report page
actionPatientApi.addEventListener('click', () => {
  window.location = "../patient_api";
});

// Add Event Listener to actionReport element to load report page
actionReport.addEventListener('click', () => {
  window.location = "../report";
});

// Add Event Listener to actionAdministration element to load administration page
actionAdministration.addEventListener('click', () => {
  window.location = "../administration/";
});

// Add Event Listener to actionProfile element to load profile page
actionProfile.addEventListener('click', () => {
  window.location = "../profile/";
});

// add event listener for each of the dashboard expand/collapse toggles
dashboardToggles.forEach(dbToggle => {
  dbToggle.addEventListener('click', () => {
    dbToggle.parentNode.classList.toggle('dashboard-active');
  })
});

// add module list action-active class to make icon white
function toggleModuleIcon(module) {
  document.getElementById(module).classList.toggle('action-active');
}