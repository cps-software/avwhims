/**********************************************************************
 * Custome JavaScript for Facility module
 **********************************************************************/

/* example curl command
curl -X GET 'https://sandbox-api.va.gov/services/va_facilities/v1/facilities?type=health&page=1&per_page=15' \
--header 'apikey: Kflx3OeZBPy7SeGkVaMweJeyKlY147n3' \
--header 'accept: application/json'
*/

// Constants to help with VA Facilites API flow
const BASE_URL = "https://sandbox-api.va.gov/services/va_facilities/v1/facilities"
const HEALTH_TYPE = "health";
const PER_PAGE = 20;
const API_KEY = "Kflx3OeZBPy7SeGkVaMweJeyKlY147n3";
const ACCEPT_TYPE = "application/json";

// Constant for facility display area container
const facilityDisplay = document.getElementById('facility-container');

let page = 1;

// add listener for when main facility page loads
document.addEventListener("DOMContentLoaded", () => {
  getFacility('report', page);
})

// add listener for facility list footer previous button
document.getElementById('button-previous').addEventListener('click', getPreviousPage);

function getPreviousPage() {
  if (page > 1) {
    page--;
  }
  else {
    // var audio = new Audio('../_image/impact-rubble-smash-betacut-1-00-01.mp3');
    // var audio = new Audio('../_image/dj-air-horn-jam-fx-1-00-04.mp3');
    var audio = new Audio('../_image/Dance-the-Night-Away.m4a');
    audio.play();

  }
  getFacility('report', page);
}

// add listener for facility list footer next button
document.getElementById('button-next').addEventListener('click', getNextPage);

function getNextPage() {
  page++;
  getFacility('report', page);
}

// add listener for Show JSON Facilities submenu link click
document.getElementById('show-json-facilities').addEventListener('click', getFacilityJson);

function getFacilityJson() {
  getFacility('json', page);
}

function getFacility(qualifier, page) {
  let data = null;
  let req = BASE_URL + "?type=" + HEALTH_TYPE + "&page=" + page + "&per_page=" + PER_PAGE;

  // create XHR object that will interact with VA Facilities API server
  const xhr = new XMLHttpRequest();

  // this may actually default to false, so don't need statement
  xhr.withCredentials = false;

  // add listener to respond with ready state changes
  xhr.addEventListener('readystatechange', function () {
    if (this.readyState === this.DONE) {
      let originalValue = this.responseText;
      let jsonValue = JSON.parse(originalValue);
      let prettyValue = JSON.stringify(JSON.parse(originalValue), undefined, 2);

      if (qualifier === 'json') {
        // display JSON formatted responseText
        facilityDisplay.innerHTML = req + '<br><br>' + prettyValue;
      } else if (qualifier === 'report') {
        let facilityReport = req + '<br><br>';

        // parse JSON payload to get specific values for the specified keys
        const sizeOfJsonArray = jsonValue.data.length;

        facilityReport +=
          '<table>' +
          '<tr>' +
          '<th>Facility ID</th>' +
          '<th>Parent ID</th>' +
          '<th>Facility Name</th>' +
          '<th>City</th>' +
          '<th>State</th>' +
          '<th>VISN</th>' +
          '<th>Status</th>' +
          '</tr>';

        for (i = 0; i < sizeOfJsonArray; i++) {
          facilityReport +=
            `<tr>` +
            `<td><a href="#">${jsonValue.data[i].id}</a></td> ` +
            `<td><a href="#">${jsonValue.data[i].attributes.parent.id}</a></td> ` +
            `<td><a href="#">${jsonValue.data[i].attributes.name}</a></td> ` +
            `<td>${jsonValue.data[i].attributes.address.physical.city}</td> ` +
            `<td>${jsonValue.data[i].attributes.address.physical.state}</td> ` +
            `<td>${jsonValue.data[i].attributes.visn}</td> ` +
            `<td>${jsonValue.data[i].attributes.operatingStatus.code}</td> ` +
            '</tr>';
        }

        facilityReport += '</table>';

        displayFacilities(facilityReport);
      };
    }
  });

  xhr.open('GET', req);
  xhr.setRequestHeader('apikey', API_KEY);
  xhr.setRequestHeader('accept', ACCEPT_TYPE);
  xhr.send(data);
}

function displayFacilities(facilityReport) {
  facilityDisplay.innerHTML = facilityReport;
}
