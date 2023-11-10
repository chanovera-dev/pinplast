const slideshow = document.getElementById('slideshow');
const button1 = document.getElementById('slideshow-button1');
const button2 = document.getElementById('slideshow-button2');
const button3 = document.getElementById('slideshow-button3');

function left0() {slideshow.style.transform = "translateX(0)";}
function left33() {slideshow.style.transform = "translateX(-33.3333%)";}
function left66() {slideshow.style.transform = "translateX(-66.6666%)";}

button1.addEventListener('click', function(){
    left0();
    button1.classList.add('active');
    button2.classList.remove('active');
    button3.classList.remove('active');
});
button2.addEventListener('click', function(){
    left33();
    button2.classList.add('active');
    button1.classList.remove('active');
    button3.classList.remove('active');
});
button3.addEventListener('click', function(){
    left66();
    button3.classList.add('active');
    button1.classList.remove('active');
    button2.classList.remove('active');
});



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



const slideshowContainerArrivals = document.getElementById('arrivals-list');
const prevButtonArrivals = document.getElementById('backward-button__arrivals');
const nextButtonArrivals = document.getElementById('forward-button__arrivals');
let currentImageIndexArrivals = 0;

function updateSlideshowArrivals() {
    const translateX = -12.5 * currentImageIndexArrivals;
    slideshowContainerArrivals.style.transform = `translateX(${translateX}%)`;

    if (currentImageIndex === 0) {
      prevButtonArrivals.disabled = true;
      prevButtonArrivals.classList.add('disable');
    } else {
      prevButtonArrivals.disabled = false;
      prevButtonArrivals.classList.remove('disable');
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