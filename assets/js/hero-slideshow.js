const slideshow = document.getElementById('slideshow');
const button1 = document.getElementById('slideshow-button1');
const button2 = document.getElementById('slideshow-button2');
const button3 = document.getElementById('slideshow-button3');

function left0() {slideshow.style.transform = "translateX(0)";}
function left33() {slideshow.style.transform = "translateX(-33.3333%)";}
function left66() {slideshow.style.transform = "translateX(-66.6666%)";}

button1.addEventListener('click', function(){
    left0();
    button2.classList.remove('active');
    button3.classList.remove('active');
});
button2.addEventListener('click', function(){
    left33();
    button1.classList.remove('active');
    button3.classList.remove('active');
});
button3.addEventListener('click', function(){
    left66();
    button1.classList.remove('active');
    button2.classList.remove('active');
});