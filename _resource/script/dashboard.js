// create constants for elements we want to work with

// Security Message Modal
const securityDialog = document.getElementById('security-dialog');
const securityButton = document.getElementById('security-button');

// add listener for when dashboard page loads
document.addEventListener("DOMContentLoaded", () => {
    if (!sessionStorage.getItem("accepted")) {
        securityDialog.showModal();
        sessionStorage.setItem("accepted", "true");
    }
})

// add listener for security notice acceptance button
securityButton.addEventListener("click", () => {
    securityDialog.close();
})

/*************** Add New Application ***************/

// set up constant to be able to select the multi-step form
const multiStepForm = document.querySelector("[data-multi-step]");
const formSteps = [...multiStepForm.querySelectorAll("[data-step]")];

let currentStep = formSteps.findIndex(step => {
    return step.classList.contains("form-active")
});

console.log(currentStep);

if (currentStep < 0) {
    currentStep = 0;
    showCurrentStep();
}

multiStepForm.addEventListener("click", e => {
    if (e.target.matches("[data-next-step]")) {
        currentStep += 1;
    } else if (e.target.matches("[data-previous-step]")) {
        currentStep -= 1;
    }
    showCurrentStep();
});

function showCurrentStep() {
    formSteps.forEach((step, index) => {
        step.classList.toggle("form-active", index === currentStep);
    })
};