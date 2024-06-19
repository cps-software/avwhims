// any extra needed JS will go here

// root scope variables
const rootVariables = document.querySelector(':root');

// Profile color theme selection
const colorTheme = document.getElementById('color-theme');

// add event listener for when color theme selection changes
colorTheme.addEventListener('change', (e) => {
    const colorModeSelected = colorTheme.value;

    if (colorModeSelected == 'light') {
        rootVariables.style.setProperty('--primary-background', '#fff');
        rootVariables.style.setProperty('--primary-text', '#000');
        rootVariables.style.setProperty('--nav-text', '#000');
        rootVariables.style.setProperty('--nav-color', '#f8f9f9');
    }

    if (colorModeSelected == 'dark') {
        rootVariables.style.setProperty('--primary-background', 'lightgray');
        rootVariables.style.setProperty('--primary-text', '#000');
        rootVariables.style.setProperty('--nav-text', '#f0eb8d');
        rootVariables.style.setProperty('--nav-color', '#222831');
    }

    if (colorModeSelected == 'accessibility') {
        rootVariables.style.setProperty('--primary-background', '#35374b');
        rootVariables.style.setProperty('--primary-text', '#fba834');
        rootVariables.style.setProperty('--nav-text', '#fba834');
        rootVariables.style.setProperty('--nav-color', '#445069');
    }
})