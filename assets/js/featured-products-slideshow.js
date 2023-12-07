const slideshowContainer = document.getElementById('featured-products-list');
const prevButton = document.getElementById('backward-button__featured-products');
const nextButton = document.getElementById('forward-button__featured-products');
let currentImageIndex = 0;

function updateSlideshow() {
    const translateX = -12.5 * currentImageIndex;
    slideshowContainer.style.transform = `translateX(${translateX}%)`;

    if (currentImageIndex === 0) {
      prevButton.disabled = true;
      prevButton.classList.add('disable');
    } else {
      prevButton.disabled = false;
      prevButton.classList.remove('disable');
    }

    switch (true) {
        case window.innerWidth >= 1024:
            numero = 4;
            break;
        case window.innerWidth >= 768:
            numero = 5;
            break;
        default:
            numero = 7;
            break;
    }
      
    if (currentImageIndex === numero) {
        nextButton.disabled = true;
        nextButton.classList.add('disable');
    } else {
        nextButton.disabled = false;
        nextButton.classList.remove('disable');
    }
  }

  prevButton.addEventListener('click', () => {
    currentImageIndex--;
    updateSlideshow();
  });

  nextButton.addEventListener('click', () => {
    currentImageIndex++;
    updateSlideshow();
  });