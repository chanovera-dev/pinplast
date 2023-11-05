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