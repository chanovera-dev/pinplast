/* arreglo del botón del menú y del menú */
function myFunction(x) {
    let nav = document.getElementById("menu-mobile--wrapper");
    let body = document.getElementById("body");
    x.classList.toggle("change");

    if (!nav.classList.contains("active")) {
        nav.classList.add("active");
        body.classList.add("menu-active");
    } else {
        nav.classList.remove("active");
        body.classList.add("menu-inactive");
        setTimeout(function() {
            body.classList.remove("menu-inactive");
            body.classList.remove("menu-active");
        }, 300);
    }
}

// Obtén referencia al elemento body
let main = document.getElementById("main");

// Agrega un evento de click al elemento body
main.addEventListener("click", function() {
    // Obtén referencia al botón del menú (suponiendo que su id sea "menu-button")
    let menuButton = document.querySelector(".menu-mobile--button");
    // Llama a la función myFunction y pasa el botón del menú como argumento
    if(nav.classList.contains("active")){
        myFunction(menuButton);
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