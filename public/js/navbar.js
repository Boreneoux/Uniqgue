// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const Profile = document.querySelector('#profile')
const navProfile = document.querySelector('#nav-profile')

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('-left-full');
    navMenu.classList.toggle('left-0');
});

Profile.addEventListener('click', function(){
    navProfile.classList.toggle('hidden');
});