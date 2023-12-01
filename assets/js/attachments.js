if (window.innerWidth < 991) {
  /* arreglo del botón del menú y del menú */
  const openMobileMenuButton = document.getElementById('open-menu-mobile--button');
  const closeMobileMenuButton = document.getElementById('close-menu-mobile');
  const menuMobile = document.getElementById('menu-mobile--wrapper')
  const cuerpo = document.getElementById('body');
  const cabecera = document.getElementById('main-header');
  const contenido = document.getElementById('main');
  let pie = document.getElementById('main-footer');

  openMobileMenuButton.addEventListener("click", function() {
    menuMobile.classList.add('open');
    cabecera.classList.add('menu-mobile-open');
    contenido.classList.add('menu-mobile-open');
    pie.classList.add('menu-mobile-open');
    cuerpo.style.overflow = 'hidden';
  });

  closeMobileMenuButton.addEventListener("click", function() {
    menuMobile.classList.remove('open');
    cabecera.classList.remove('menu-mobile-open');
    contenido.classList.remove('menu-mobile-open');
    pie.classList.remove('menu-mobile-open');
    cuerpo.style.overflow = 'inherit';
  });

  contenido.addEventListener("click", function() {
    if (menuMobile.classList.contains('open')) {
      closeMobileMenuButton.click();
      cabecera.classList.add('menu-mobile-close');
      contenido.classList.add('menu-mobile-close');
      pie.classList.add('menu-mobile-close');
      cuerpo.style.overflow = 'inherit';
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
}

pie.addEventListener("click", function() {
  if (menuMobile.classList.contains('open')) {
    closeMobileMenuButton.click();
    cabecera.classList.add('menu-mobile-close');
    contenido.classList.add('menu-mobile-close');
    pie.classList.add('menu-mobile-close');
    cuerpo.style.overflow = 'inherit';
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



// Agrega el botón para abrir el submenú en el menú mobile
document.addEventListener("DOMContentLoaded", function() {
  // Obtener todos los elementos li con la clase 'menu-item-has-children'
  var menuItems = document.querySelectorAll('.menu-item-has-children');

  // Iterar sobre cada elemento y agregar el botón con el SVG
  menuItems.forEach(function(item) {
    // Crear un nuevo botón
    var button = document.createElement('button');
    // Agregar la clase 'mobile-links__item-toggle' al botón
    button.classList.add('mobile-links__item-toggle');
    button.setAttribute('onclick', 'toggleSubMenu(this)');
    
    // Crear el elemento SVG
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
    svg.setAttribute('width', '16');
    svg.setAttribute('height', '16');
    svg.setAttribute('fill', 'currentColor');
    svg.setAttribute('class', 'bi bi-chevron-down');
    svg.setAttribute('viewBox', '0 0 16 16');

    // Crear el elemento path dentro del SVG
    var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    path.setAttribute('fill-rule', 'evenodd');
    path.setAttribute('d', 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z');

    // Agregar el path al elemento SVG
    svg.appendChild(path);
    // Agregar el SVG al botón
    button.appendChild(svg);

    // Agregar el botón al elemento li sin borrar su contenido existente
    item.appendChild(button);
  });
});

  // función toggle para el botón del submenú mobile
  function toggleSubMenu(button) {
    let subMenu = button.closest('li').querySelector('.sub-menu');
    subMenu.classList.toggle('open');
    button.classList.toggle('rotate');
  }