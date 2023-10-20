document.addEventListener("DOMContentLoaded", function() {
  var width = window.innerWidth;
  var responsiveContent = document.getElementById('responsive-header');
  if (width < 769) {
      // Mostrar el contenido para pantallas pequeñas
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              responsiveContent.innerHTML = this.responseText;
          }
      };
      xhr.open("GET", ajax_object.ajax_url + "?action=get_little_screen_content", true);
      xhr.send();
  } else {
      // Mostrar el contenido para pantallas grandes
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              responsiveContent.innerHTML = this.responseText;
          }
      };
      xhr.open("GET", ajax_object.ajax_url + "?action=get_big_screen_content", true);
      xhr.send();
  }
});

/* arreglo del botón del menú y del menú */
function myFunction(x) {
    let nav = document.getElementById("menu-mobile--wrapper");
    let body = document.getElementById("body");
    x.classList.toggle("change");
    
    if (nav.className === "menu-mobile--wrapper") {
        nav.className += " active";
        body.classList.add("menu-active");
    } else {
        nav.className = "menu-mobile--wrapper";
        body.classList.add("menu-inactive");
        setTimeout(function(x){
            body.classList.remove("menu-inactive");
            body.classList.remove("menu-active");
          }, 300);
    }
}

document.addEventListener('click', function(event) {
    var isClickInsideMenu = document.getElementById('menu-mobile--wrapper').contains(event.target);
    var menu = document.getElementById('menu-mobile--wrapper');
    var body = document.getElementById('body');
    var button = document.getElementById('menu-mobile--button');

    if (!isClickInsideMenu && menu.classList.contains('active')) {
        menu.classList.remove('active');
        body.classList.remove('menu-active');
        body.classList.add('menu-inactive');
        button.classList.remove('change');
        setTimeout(function() {
            body.classList.remove('menu-inactive');
        }, 300);
    }
});


// recarga el sitio si cambia la orientación de la pantalla
window.addEventListener("orientationchange", function() {
    var orientation = window.screen.orientation;
    if (orientation.type === "portrait-primary" || orientation.type === "portrait-secondary" || orientation.type === "landscape-primary" || orientation.type === "landscape-secondary") {
        location.reload();
    }
});

