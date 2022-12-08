const menuToggle = document.querySelector ('.menu-toggle input')
const nav = document.querySelector ('nav ul')

menuToggle.addEventListener ('click', function ()  {
    nav.classList.toggle('slide'); 
});
 
const item = document.querySelectorAll('ul li')