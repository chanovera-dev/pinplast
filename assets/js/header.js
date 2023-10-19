document.addEventListener("DOMContentLoaded", function() {
  var width = window.innerWidth;
  var responsiveContent = document.getElementById('responsive-header');
  if (width < 768) {
      // Mostrar el contenido para pantallas pequeñas
      responsiveContent.textContent = 'Pantalla pequeña';
  } else {
      // Mostrar el contenido para pantallas grandes
      responsiveContent.textContent = 'Pantalla grande';
  }
});