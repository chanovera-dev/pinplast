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
            // Resolución mayor a 1024 y 768
            numero = 4;
            break;
        case window.innerWidth >= 768:
            // Resolución mayor a 768 pero menor o igual a 1024
            numero = 5;
            break;
        default:
            // Resolución menor o igual a 768
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