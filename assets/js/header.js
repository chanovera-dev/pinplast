jQuery(document).ready(function($) {
  var width = $(window).width();
  if (width < 768) {
      // Mostrar el contenido para pantallas pequeñas
      $('#responsive-content').text('Pantalla pequeña');
  } else {
      // Mostrar el contenido para pantallas grandes
      $('#responsive-content').text('Pantalla grande');
  }
});