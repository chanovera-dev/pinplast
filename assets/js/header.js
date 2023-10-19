document.addEventListener("DOMContentLoaded", function() {
  var width = window.innerWidth;
  var responsiveContent = document.getElementById('responsive-header');
  if (width < 768) {
      // Mostrar el contenido para pantallas pequeñas
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              responsiveContent.innerHTML = this.responseText;
          }
      };
      xhttp.open("GET", "<?php echo get_template_directory_uri(); ?>/parts/header/little-screen.php", true);
      xhttp.send();
  } else {
      // Mostrar el contenido para pantallas grandes
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              responsiveContent.innerHTML = this.responseText;
          }
      };
      xhttp.open("GET", "<?php echo get_template_directory_uri(); ?>/parts/header/big-screen.php", true);
      xhttp.send();
  }
});
