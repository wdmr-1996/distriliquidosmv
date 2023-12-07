const mobileMenuToggle = document.getElementById('mobile-menu');
const menu = document.querySelector('.menu');

mobileMenuToggle.addEventListener('click', () => {
    menu.classList.toggle('show-menu');
});