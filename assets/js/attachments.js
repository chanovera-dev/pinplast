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



document.addEventListener('DOMContentLoaded', function() {
    svg4everybody();
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