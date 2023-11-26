const slideshowContainerArrivals = document.getElementById('arrivals-list');
const prevButtonArrivals = document.getElementById('backward-button__arrivals');
const nextButtonArrivals = document.getElementById('forward-button__arrivals');
let currentImageIndexArrivals = 0;

function updateSlideshowArrivals() {
    const translateX = -16.6666 * currentImageIndexArrivals;
    slideshowContainerArrivals.style.transform = `translateX(${translateX}%)`;

    if (currentImageIndexArrivals === 0) {
      prevButtonArrivals.disabled = true;
      prevButtonArrivals.classList.add('disable');
    } else {
      prevButtonArrivals.disabled = false;
      prevButtonArrivals.classList.remove('disable');
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
      
    if (currentImageIndexArrivals === numero) {
        nextButtonArrivals.disabled = true;
        nextButtonArrivals.classList.add('disable');
    } else {
        nextButtonArrivals.disabled = false;
        nextButtonArrivals.classList.remove('disable');
    }
  }

  prevButtonArrivals.addEventListener('click', () => {
    currentImageIndexArrivals--;
    updateSlideshowArrivals();
  });

  nextButtonArrivals.addEventListener('click', () => {
    currentImageIndexArrivals++;
    updateSlideshowArrivals();
  });