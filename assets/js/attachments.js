/* arreglo del botón del menú y del menú */
const openMobileMenuButton = document.getElementById('open-menu-mobile--button');
const closeMobileMenuButton = document.getElementById('close-menu-mobile');
const menuMobile = document.getElementById('menu-mobile--wrapper')
const cabecera = document.getElementById('main-header');
const contenido = document.getElementById('main');
const pie = document.getElementById('main-footer');

openMobileMenuButton.addEventListener("click", function() {
  menuMobile.classList.add('open');
});

closeMobileMenuButton.addEventListener("click", function() {
  menuMobile.classList.remove('open');
});

cabecera.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click(); // Simula un clic en el botón de cerrar el menú
  }
});

contenido.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click(); // Simula un clic en el botón de cerrar el menú
  }
});

pie.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click(); // Simula un clic en el botón de cerrar el menú
  }
});

/* carga en svg4anybody después de que ha cargado todo el sitio */
document.addEventListener('DOMContentLoaded', function() {
    svg4everybody();
});



// detecta el scroll en el sitio y agrega clases según el evento desencadenado
const body = document.body;
const header = document.querySelector(".main-header");
const menu = document.querySelector(".main-header .menu");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }
  
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});



// muestra y oculta el cuadro de búsqueda
let searchbarButtonOpen = document.getElementById('open-searchbar--button');
let searchbarButtonClose = document.getElementById('close-searchbar--button');
let searchForm = document.getElementById('searchform-wrapper');

searchbarButtonOpen.addEventListener('click', function() {  
    searchForm.classList.add('active');
});

searchbarButtonClose.addEventListener('click', function() {  
    searchForm.classList.remove('active');
});