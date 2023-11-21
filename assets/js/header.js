/* arreglo del botón del menú y del menú */
function myFunction(x) {
    let nav = document.getElementById("menu-mobile--wrapper");
    let body = document.getElementById("body");
    let header = document.getElementById("responsive-header");
    let main = document.getElementById("main");
    let footer = document.getElementById("main-footer");
    x.classList.toggle("change");

    if (!nav.classList.contains("active")) {
        nav.classList.add("active");
        body.classList.add("menu-active");
        header.classList.add("menu-active");
        main.classList.add("menu-active");
        footer.classList.add("menu-active");
    } else {
        nav.classList.remove("active");
        body.classList.remove("menu-active");
        header.classList.add("menu-inactive");
        main.classList.add("menu-inactive");
        footer.classList.add("menu-inactive");
        setTimeout(function() {
            header.classList.remove("menu-inactive");
            header.classList.remove("menu-active");
            main.classList.remove("menu-inactive");
            main.classList.remove("menu-active");
            footer.classList.remove("menu-inactive");
            footer.classList.remove("menu-active");
        }, 300);
    }
}



// Obtén referencia al elemento body
let main = document.getElementById("main");

// Agrega un evento de click al elemento body
main.addEventListener("click", function() {
    // Obtén referencia al botón del menú (suponiendo que su id sea "menu-button")
    let menuButton = document.querySelector(".menu-mobile--button");
    let menuOpen = document.querySelector(".bars.change");
    let nav = document.getElementById("menu-mobile--wrapper");
    // Llama a la función myFunction y pasa el botón del menú como argumento
    if(nav.classList.contains("active")){
        myFunction(menuButton);
        menuOpen.classList.remove("change");
    }
});

// Obtén referencia al elemento body
let footer = document.getElementById("main-footer");

// Agrega un evento de click al elemento body
footer.addEventListener("click", function() {
    // Obtén referencia al botón del menú (suponiendo que su id sea "menu-button")
    let menuButton = document.querySelector(".menu-mobile--button");
    let menuOpen = document.querySelector(".bars.change");
    let nav = document.getElementById("menu-mobile--wrapper");
    // Llama a la función myFunction y pasa el botón del menú como argumento
    if(nav.classList.contains("active")){
        myFunction(menuButton);
        menuOpen.classList.remove("change");
    }
});



let BotonSubMenu = document.querySelectorAll(".menu-item-has-children a");
let SubMenu = document.querySelectorAll(".menu-item-has-children .sub-menu");

BotonSubMenu.forEach(function(boton) {
    boton.addEventListener("click", function(event) {
        // Evita que el enlace se comporte como un enlace normal
        event.preventDefault();
        
        // Agrega la clase "open" a los elementos del submenú correspondientes
        let parentItem = this.parentElement;
        let subMenu = parentItem.querySelector(".sub-menu");
        subMenu.classList.toggle("open");

        // Agrega la clase "open" a los elementos de iconSubMenu
        BotonSubMenu.forEach(function(icon) {
            icon.classList.toggle("open");
        });
    });
});



let BotonSubMenuPrimary = document.querySelectorAll("#menu-primary .menu-item-has-children a");
let SubMenuPrimary = document.querySelectorAll("#menu-primary .menu-item-has-children .sub-menu");

BotonSubMenuPrimary.forEach(function(botonPrimary) {
    botonPrimary.addEventListener("mouseover", function(event) {
        // Evita que el enlace se comporte como un enlace normal
        event.preventDefault();
        
        // Agrega la clase "open" a los elementos del submenú correspondientes
        let parentItem = this.parentElement;
        let subMenu = parentItem.querySelector(".sub-menu");
        subMenu.classList.add("open");

        // Agrega la clase "open" a los elementos de iconSubMenu
        BotonSubMenu.forEach(function(icon) {
            icon.classList.add("open");
        });
    });

    botonPrimary.addEventListener("mouseout", function(event) {
        // Remueve la clase "open" cuando se retira el mouse del enlace
        let parentItem = this.parentElement;
        let subMenu = parentItem.querySelector(".sub-menu");
        subMenu.classList.remove("open");

        // Remueve la clase "open" de los elementos de iconSubMenu
        BotonSubMenu.forEach(function(icon) {
            icon.classList.remove("open");
        });
    });
});



// muestra y oculta el cuadro de búsqueda
let searchButton = document.getElementById('bi-search');
let searchButtonClose = document.getElementById('bi-x-circle');
let searchForm = document.getElementById('searchform');

searchButton.addEventListener('click', function() {  
    searchForm.classList.add('active');
});

searchButtonClose.addEventListener('click', function() {  
    searchForm.classList.remove('active');
});


// detecta el scroll en el sitio
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