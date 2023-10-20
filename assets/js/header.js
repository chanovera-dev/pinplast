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
    let nav = document.getElementById("menu-mobile");
    let body = document.getElementById("body");
    x.classList.toggle("change");
    
    if (nav.className === "menu-mobile") {
        nav.className += " active";
        body.classList.add("menu-active");
    } else {
        nav.className = "menu-mobile";
        body.classList.add("menu-inactive");
        setTimeout(function(x){
            body.classList.remove("menu-inactive");
            body.classList.remove("menu-active");
          }, 300);
    }
}

//brecarga el sitio si cambia la orientación de la pantalla
window.addEventListener("orientationchange", function() {
    var orientation = window.screen.orientation;
    if (orientation.type === "portrait-primary" || orientation.type === "portrait-secondary" || orientation.type === "landscape-primary" || orientation.type === "landscape-secondary") {
        location.reload();
    }
});