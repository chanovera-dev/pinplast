function scrollPage() {
  // detecta el scroll en el sitio y agrega clases según el evento desencadenado
  const body = document.body;
  const isHome = body.classList.contains('home');
  const is404 = body.classList.contains('error404');
  const header = document.querySelector(".main-header");
  const menu = document.querySelector(".main-header .menu");
  const scrollUp = "scroll-up";
  const scrollDown = "scroll-down";
  let categoriesList = document.getElementById('categories-list');
  let departmentsButton = document.getElementById('departments-button');
  let chevronDepartmentsButton = document.querySelector('.departments__button-arrow');
  let lastScroll = 0;

  if (isHome || is404) {
    categoriesList.classList.add('open');
    chevronDepartmentsButton.classList.add('rotate');
    departmentsButton.disabled = true;
  }
  
  window.addEventListener("scroll", () => {
    // Comprobar si la clase "open" está presente y eliminarla
    if (categoriesList.classList.contains('open')) {
      categoriesList.classList.remove('open');
      chevronDepartmentsButton.classList.remove('rotate');
    }

    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
      body.classList.remove(scrollUp);
      if (isHome || is404) {
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
  });
}
scrollPage();