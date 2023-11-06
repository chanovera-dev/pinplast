/* arreglo del botón del menú y del menú */
function myFunction(x) {
    let nav = document.getElementById("menu-mobile--wrapper");
    let header = document.getElementById("main-header");
    let main = document.getElementById("main");
    let footer = document.getElementById("main-footer");
    x.classList.toggle("change");

    if (!nav.classList.contains("active")) {
        nav.classList.add("active");
        header.classList.add("menu-active");
        main.classList.add("menu-active");
        footer.classList.add("menu-active");
    } else {
        nav.classList.remove("active");
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