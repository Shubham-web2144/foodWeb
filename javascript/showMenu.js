let navIcon = document.querySelector('.navIcon');
let navList = document.querySelector('.navList');

navIcon.addEventListener('click', () => {
    navList.classList.toggle('active');
})