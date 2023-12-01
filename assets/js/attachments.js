/* arreglo del botón del menú y del menú */
const openMobileMenuButton = document.getElementById('open-menu-mobile--button');
const closeMobileMenuButton = document.getElementById('close-menu-mobile');
const menuMobile = document.getElementById('menu-mobile--wrapper')
const cabecera = document.getElementById('main-header');
const contenido = document.getElementById('main');
const pie = document.getElementById('main-footer');

openMobileMenuButton.addEventListener("click", function() {
  menuMobile.classList.add('open');
  cabecera.classList.add('menu-mobile-open');
  contenido.classList.add('menu-mobile-open');
  pie.classList.add('menu-mobile-open');
});

closeMobileMenuButton.addEventListener("click", function() {
  menuMobile.classList.remove('open');
  cabecera.classList.remove('menu-mobile-open');
  contenido.classList.remove('menu-mobile-open');
  pie.classList.remove('menu-mobile-open');
});

contenido.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click();
    cabecera.classList.add('menu-mobile-close');
    contenido.classList.add('menu-mobile-close');
    pie.classList.add('menu-mobile-close');
      setTimeout(function() {
        cabecera.classList.remove('menu-mobile-open');
        contenido.classList.remove('menu-mobile-open');
        pie.classList.remove('menu-mobile-open');
        cabecera.classList.remove('menu-mobile-close');
        contenido.classList.remove('menu-mobile-close');
        pie.classList.remove('menu-mobile-close');
    }, 300); 
  }
});

pie.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click();
    cabecera.classList.add('menu-mobile-close');
    contenido.classList.add('menu-mobile-close');
    pie.classList.add('menu-mobile-close');
      setTimeout(function() {
        cabecera.classList.remove('menu-mobile-open');
        contenido.classList.remove('menu-mobile-open');
        pie.classList.remove('menu-mobile-open');
        cabecera.classList.remove('menu-mobile-close');
        contenido.classList.remove('menu-mobile-close');
        pie.classList.remove('menu-mobile-close');
    }, 300);
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
if (window.innerWidth < 767) {
  let searchbarButtonOpen = document.getElementById('open-searchbar--button');
  let searchbarButtonClose = document.getElementById('close-searchbar--button');
  let searchForm = document.getElementById('searchform-wrapper');

  searchbarButtonOpen.addEventListener('click', function() {  
      searchForm.classList.add('active');
  });

  searchbarButtonClose.addEventListener('click', function() {  
      searchForm.classList.remove('active');
  });
}



// Obtén todos los elementos <li> con la clase 'menu-item-has-children'
var elementosConChildren = document.querySelectorAll('.menu-item-has-children');

// Crea un nuevo elemento SVG
var svgElemento = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
svgElemento.setAttribute('class', 'mobile-links__item-arrow');
svgElemento.setAttribute('width', '12');
svgElemento.setAttribute('height', '7');

// Crea un nuevo elemento <use> dentro del SVG
var useElemento = document.createElementNS('http://www.w3.org/2000/svg', 'use');
useElemento.setAttribute('xlink:href', '<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-rounded-down-12x7');

// Agrega el <use> al SVG
svgElemento.appendChild(useElemento);

// Itera sobre cada elemento y agrega el elemento SVG al final de su contenido
elementosConChildren.forEach(function(elemento) {
  // Agrega el elemento SVG al final del contenido del <li>
  elemento.appendChild(svgElemento.cloneNode(true)); // Clona el elemento SVG para evitar problemas de referencia
});
