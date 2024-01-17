// Función para manejar el scroll
function handleScroll() {
  // Comprobar si la clase "open" está presente y eliminarla
  if (categoriesList.classList.contains('open')) {
    categoriesList.classList.remove('open');
    chevronDepartmentsButton.classList.remove('rotate');
  }

  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    if (isHome) {
      categoriesList.classList.add('open');
      chevronDepartmentsButton.classList.add('rotate');
      departmentsButton.disabled = true;
    }
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
    departmentsButton.disabled = false;
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
    departmentsButton.disabled = false;
  }
  lastScroll = currentScroll;
}

// Función para inicializar el scroll y las referencias a elementos
function initializeScroll() {
  const body = document.body;
  const isHome = body.classList.contains('home');
  const categoriesList = document.getElementById('categories-list');
  const departmentsButton = document.getElementById('departments-button');
  const chevronDepartmentsButton = document.querySelector('.departments__button-arrow');
  let lastScroll = 0;

  window.addEventListener("scroll", handleScroll);
}

// Llamada inicial para configurar el scroll
initializeScroll();

// Luego, después de cargar contenido AJAX, vuelve a inicializar el scroll
// y las referencias a elementos llamando a initializeScroll nuevamente.
// Asegúrate de hacer esto después de que el contenido AJAX esté en el DOM.
// Ejemplo:
// ajaxLoadContent().then(() => {
//   initializeScroll();
// });

// Función de ejemplo para cargar contenido AJAX
function ajaxLoadContent() {
  // Simulación de carga AJAX
  return new Promise((resolve) => {
    setTimeout(() => {
      // Código para cargar el contenido aquí
      resolve();
    }, 1000);
  });
}
