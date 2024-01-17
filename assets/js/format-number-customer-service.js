document.addEventListener('DOMContentLoaded', function() {
  let numerosContacto = document.querySelectorAll('.customer-service');
  
  numerosContacto.forEach(function(numeroContacto) {
      let numeroCompleto = numeroContacto.textContent;
      let numeroFormateado = formatoNumero(numeroCompleto);
      numeroContacto.textContent = numeroFormateado;
  });
});

function formatoNumero(numero) {
  numero = numero.slice(0, 0) + '(' + numero.slice(0);
  numero = numero.slice(0, 4) + ') ' + numero.slice(4);
  numero = numero.slice(0, 9) + '-' + numero.slice(9);
  return numero;
}
