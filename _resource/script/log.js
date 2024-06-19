/* Custom JS for Logs Module */
const hl7MessageDialog = document.getElementById('hl7message-dialog');
const hl7MessageButton = document.getElementById('hl7message-button');

// temporary simple function to show HL7 Message modal
// build out content via JavaScript before displaying specific message
function showHl7Msg(id) {
    hl7MessageDialog.showModal();
}

// document.addEventListener("DOMContentLoaded", () => {
//     if (!sessionStorage.getItem("accepted")) {
//         securityDialog.showModal();
//         sessionStorage.setItem("accepted", "true");
//     }
// })

// add listener for HL7 Message modal close button
hl7MessageButton.addEventListener("click", () => {
    hl7MessageDialog.close();
})
