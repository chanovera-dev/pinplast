let menuMobile = document.getElementById('menu-mobile--wrapper');
let sidebarMobile = document.getElementById('sidebar-woocommerce--wrapper');
let panelOverlay = document.getElementById('panel-overlay');

function openMenuMobile() {
    menuMobile.classList.add('open');
    panelOverlay.classList.add('show');
}

function closeMenuMobile() {
    menuMobile.classList.remove('open');
    panelOverlay.classList.remove('show');
}

document.addEventListener("click", function(event) {
    if (event.target && event.target.id === 'panel-overlay') {
        closeMenuMobile();
        closeSidebarMobile();
    }
});

function openSidebar() {
    sidebarMobile.classList.add('open');
    panelOverlay.classList.add('show');
}

function closeSidebarMobile() {
    sidebarMobile.classList.remove('open');
    panelOverlay.classList.remove('show');
}

/* carga el svg4anybody después de que ha cargado todo el sitio */
document.addEventListener('DOMContentLoaded', function() {
    svg4everybody();
});