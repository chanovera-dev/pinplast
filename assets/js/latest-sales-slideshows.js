const slideshowContainerLatest = document.querySelector('.sale-products .slideshow-products--wrapper .woocommerce .products');
const prevButtonLatest = document.getElementById('backward-button__latest-sales');
const nextButtonLatest = document.getElementById('forward-button__latest-sales');
let currentImageIndexLatest = 0;

function updateSlideshowLatest() {
    const translateX = -12.5 * currentImageIndexLatest;
    slideshowContainerLatest.style.transform = `translateX(${translateX}%)`;

    if (currentImageIndexLatest === 0) {
      prevButtonLatest.disabled = true;
      prevButtonLatest.classList.add('disable');
    } else {
      prevButtonLatest.disabled = false;
      prevButtonLatest.classList.remove('disable');
    }

    switch (true) {
        case window.innerWidth >= 1024:
            numero = 3;
            break;
        case window.innerWidth >= 768:
            numero = 4;
            break;
        default:
            numero = 5;
            break;
    }
      
    if (currentImageIndexLatest === numero) {
        nextButtonLatest.disabled = true;
        nextButtonLatest.classList.add('disable');
    } else {
        nextButtonLatest.disabled = false;
        nextButtonLatest.classList.remove('disable');
    }
  }

  prevButtonLatest.addEventListener('click', () => {
    currentImageIndexLatest--;
    updateSlideshowLatest();
  });

  nextButtonLatest.addEventListener('click', () => {
    currentImageIndexLatest++;
    updateSlideshowLatest();
  });