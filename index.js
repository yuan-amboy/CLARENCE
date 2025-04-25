// Tab switching
const tabs = document.querySelectorAll('.form-tab');
const forms = document.querySelectorAll('.form-section');
const switchLinks = document.querySelectorAll('.switch-form');

function switchTab(tabId) {
    // Remove active class from all tabs and forms
    tabs.forEach(tab => tab.classList.remove('active'));
    forms.forEach(form => form.classList.remove('active'));
    
    // Add active class to selected tab and form
    document.querySelector(`.form-tab[data-tab="${tabId}"]`).classList.add('active');
    document.getElementById(`${tabId}-form`).classList.add('active');
}

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const tabId = tab.getAttribute('data-tab');
        switchTab(tabId);
    });
});

switchLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const formId = link.getAttribute('data-form');
        switchTab(formId);
    });
});