function menuMobileWithChildrens() {
    // Obtener todos los elementos li con la clase 'menu-item-has-children'
    let menuItems = document.querySelectorAll('#menu-mobile .menu .menu-item-has-children');

    // Iterar sobre cada elemento y agregar el botón con el SVG
    menuItems.forEach(function(item) {
        // Crear un nuevo botón
        var button = document.createElement('button');
        // Agregar la clase 'mobile-links__item-toggle' al botón
        button.classList.add('mobile-links__item-toggle');
        button.setAttribute('onclick', 'toggleSubMenu(this)');
        
        // Crear el elemento SVG
        var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        svg.setAttribute('width', '16');
        svg.setAttribute('height', '16');
        svg.setAttribute('fill', 'currentColor');
        svg.setAttribute('class', 'bi bi-chevron-down');
        svg.setAttribute('viewBox', '0 0 16 16');

        // Crear el elemento path dentro del SVG
        var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute('fill-rule', 'evenodd');
        path.setAttribute('d', 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z');

        // Agregar el path al elemento SVG
        svg.appendChild(path);
        // Agregar el SVG al botón
        button.appendChild(svg);

        // Agregar el botón al elemento li sin borrar su contenido existente
        item.appendChild(button);
    });
}
menuMobileWithChildrens();

function menuTopBarWithChildrens() {
    // Obtener todos los elementos li con la clase 'menu-item-has-children'
    let menuItems = document.querySelectorAll('.top-bar nav .menu .menu-item-has-children');

    // Iterar sobre cada elemento y agregar el botón con el SVG y texto
    menuItems.forEach(function(item) {
        // Obtener el enlace más cercano al elemento li
        var link = item.querySelector('a');

        // Crear un nuevo botón
        var button = document.createElement('button');
        // Agregar la clase 'mobile-links__item-toggle' al botón
        button.classList.add('mobile-links__item-toggle');
        button.setAttribute('onclick', 'toggleSubMenu(this)');

        // Obtener el texto del enlace
        var linkText = link.innerText;

        // Crear un nuevo elemento de texto con el contenido del enlace
        var buttonText = document.createTextNode(linkText);

        // Agregar el texto al botón
        button.appendChild(buttonText);

        // Crear el elemento SVG
        var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        svg.setAttribute('width', '16');
        svg.setAttribute('height', '16');
        svg.setAttribute('fill', 'currentColor');
        svg.setAttribute('class', 'bi bi-chevron-down');
        svg.setAttribute('viewBox', '0 0 16 16');

        // Crear el elemento path dentro del SVG
        var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute('fill-rule', 'evenodd');
        path.setAttribute('d', 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z');

        // Agregar el path al elemento SVG
        svg.appendChild(path);
        // Agregar el SVG al botón
        button.appendChild(svg);

        // Reemplazar el contenido del enlace con el botón
        link.innerHTML = '';
        link.appendChild(button);

        // Deshabilitar el enlace
        link.setAttribute('href', 'javascript:void(0)');
        link.setAttribute('disabled', 'true');
    });
}
menuTopBarWithChildrens();


function menuBottomBarWithChildrens() {
    // Obtener el contenedor principal
    let menuContainer = document.querySelector('.bottom-bar .primary .menu');

    // Agregar evento mouseover para delegar la lógica a los elementos hijo
    menuContainer.addEventListener('mouseover', function(event) {
        let target = event.target;

        // Verificar si el elemento objetivo es un elemento 'a' dentro de 'menu-item-has-children'
        if (target && target.tagName === 'A' && target.closest('.menu-item-has-children')) {
            // Cerrar cualquier otro sub-menu abierto
            closeOtherSubMenus();

            let item = target.closest('.menu-item-has-children');
            let subMenu = item.querySelector('.sub-menu');

            // Agregar la clase 'open'
            subMenu.classList.add('open');

            // Crear el elemento SVG
            var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
            svg.setAttribute('width', '16');
            svg.setAttribute('height', '16');
            svg.setAttribute('fill', 'currentColor');
            svg.setAttribute('class', 'bi bi-chevron-down');
            svg.setAttribute('viewBox', '0 0 16 16');

            // Crear el elemento path dentro del SVG
            var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path.setAttribute('fill-rule', 'evenodd');
            path.setAttribute('d', 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z');

            // Agregar el path al elemento SVG
            svg.appendChild(path);

            // Agregar el SVG al contenido de la etiqueta <a>
            target.appendChild(svg);
        }
    });

    // Agregar evento mouseleave para delegar la lógica a los elementos hijo
    menuContainer.addEventListener('mouseleave', function(event) {
        let target = event.target;

        // Verificar si el elemento objetivo es un elemento 'a' dentro de 'menu-item-has-children'
        if (target && target.tagName === 'A' && target.closest('.menu-item-has-children')) {
            let item = target.closest('.menu-item-has-children');
            let subMenu = item.querySelector('.sub-menu');

            // Configurar un temporizador para remover la clase 'open' después de 3 segundos
            setTimeout(function() {
                subMenu.classList.remove('open');
                // Eliminar el icono SVG
                let svg = target.querySelector('svg');
                if (svg) {
                    svg.remove();
                }
            }, 1000);
        }
    });
}


// Llamar a la función después de cargar el DOM
document.addEventListener('DOMContentLoaded', menuBottomBarWithChildrens);



function closeAllSubMenus() {
    let subMenus = document.querySelectorAll(".menu-item-has-children .sub-menu");
    let chevrons = document.querySelectorAll('.mobile-links__item-toggle');
    
    document.addEventListener("click", function(event) {
        // Cierra todos los menús al hacer clic fuera de ellos
        if (!event.target.closest(".menu-item-has-children")) {
            subMenus.forEach(function(subMenu) {
                subMenu.classList.remove("open");
            });

            chevrons.forEach(function(chevron) {
                chevron.classList.remove('rotate');
            });
        }
    });
}
closeAllSubMenus();


  
// función toggle para el botón del submenú mobile
function toggleSubMenu(button) {
    let parentLi = button.closest('li');
    let subMenu = parentLi.querySelector('.sub-menu');
    let chevrons = document.querySelectorAll('.mobile-links__item-toggle');
    
    // Cerrar todos los demás submenús
    let allSubMenus = document.querySelectorAll('.sub-menu');
    allSubMenus.forEach((menu) => {
        if (menu !== subMenu && menu.classList.contains('open')) {
            menu.classList.remove('open');
        }
    });

    // Alternar la clase 'open' para el submenú actual
    subMenu.classList.toggle('open');

    // Alternar la clase 'rotate' para el botón actual
    button.classList.toggle('rotate');

    // Quitar la clase 'rotate' de los demás elementos con la clase '.mobile-links__item-toggle'
    chevrons.forEach((chevron) => {
        if (chevron !== button && chevron.classList.contains('rotate')) {
            chevron.classList.remove('rotate');
        }
    });
}



function menuCategories() {
    // Obtén referencias a los elementos por sus ID
    let departmentsButton = document.getElementById('departments-button');
    let chevronDepartmentsButton = document.querySelector('.departments__button-arrow');
    let categoriesList = document.getElementById('categories-list');

    // Agrega un evento de clic al botón
    departmentsButton.addEventListener('click', function () {
        // Alternar la clase 'open' en el elemento con ID 'categories-list'
        categoriesList.classList.toggle('open');
        chevronDepartmentsButton.classList.toggle('rotate');
    });
}
document.addEventListener('DOMContentLoaded', menuCategories);