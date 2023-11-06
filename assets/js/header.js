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

/* cerrar menú si se presiona cualquier parte de la página */
let body = document.getElementById("body");

if(body.addEventListener){
    let nav = document.getElementById("menu-mobile--wrapper");
    let button = document.querySelector(".btn-menu .bars");
    body.addEventListener('click', function(){
        if(document.querySelector(".menu-mobile--wrapper.active")){
            nav.classList.remove('active');
            button.classList.remove('change');
        }
        
   });
}