let panelOverlay = document.getElementById('panel-overlay');

function openMenuMobile() {
    document.getElementById('menu-mobile--wrapper').classList.add('open');
    panelOverlay.classList.add('show');
}

function closeMenuMobile() {
    document.getElementById('menu-mobile--wrapper').classList.remove('open');
    panelOverlay.classList.remove('show');
}

document.addEventListener("click", function(event) {
    if (event.target && event.target.id === 'panel-overlay') {
        closeMenuMobile();
        closeSidebarMobile();
    }
});

function openSidebar() {
    document.getElementById('sidebar-woocommerce--wrapper').classList.add('open');
    panelOverlay.classList.add('show');
}

function closeSidebarMobile() {
    document.getElementById('sidebar-woocommerce--wrapper').classList.remove('open');
    panelOverlay.classList.remove('show');
}


/* carga el svg4anybody después de que ha cargado todo el sitio */
document.addEventListener('DOMContentLoaded', function() {
    svg4everybody();
});