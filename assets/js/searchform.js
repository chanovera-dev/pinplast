// muestra y oculta el cuadro de búsqueda
if (window.innerWidth < 767) {
    let searchbarButtonOpen = document.getElementById('open-searchbar--button');
    let searchbarButtonClose = document.getElementById('close-searchbar--button');
    let searchForm = document.getElementById('searchform-wrapper');
    let slide = document.querySelector('.slideshow-wrapper .slideshow .slide');
  
    searchbarButtonOpen.addEventListener('click', function() {  
        searchForm.classList.add('active');
    });
  
    searchbarButtonClose.addEventListener('click', function() {  
        searchForm.classList.remove('active');
    });
}