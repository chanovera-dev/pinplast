document.addEventListener("DOMContentLoaded", function() {
  var width = window.innerWidth;
  var responsiveContent = document.getElementById('responsive-header');
  if (width < 768) {
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
    var nav = document.getElementById("menu-mobile");
    x.classList.toggle("change");
    
    if (nav.className === "menu-mobile") {
        nav.className += " active";
    } else {
        nav.className = "menu-mobile active inactive";
        setTimeout(function(){
          nav.className = "menu-mobile";
        }, 2000);
    }
}