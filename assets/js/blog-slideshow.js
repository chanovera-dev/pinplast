const slideshowContainerBlog = document.querySelector('.blog .posts');
const prevButtonBlog = document.getElementById('backward-button__blog');
const nextButtonBlog = document.getElementById('forward-button__blog');
let currentImageIndexBlog = 0;

function updateSlideshowBlog() {
    const translateX = -16.6666 * currentImageIndexBlog;
    slideshowContainerBlog.style.transform = `translateX(${translateX}%)`;

    if (currentImageIndexBlog === 0) {
      prevButtonBlog.disabled = true;
      prevButtonBlog.classList.add('disable');
    } else {
      prevButtonBlog.disabled = false;
      prevButtonBlog.classList.remove('disable');
    }

    switch (true) {
        case window.innerWidth >= 1024:
            numero = 4;
            break;
        case window.innerWidth >= 768:
            numero = 5;
            break;
        default:
            numero = 5;
            break;
    }
      
    if (currentImageIndexBlog === numero) {
        nextButtonBlog.disabled = true;
        nextButtonBlog.classList.add('disable');
    } else {
        nextButtonBlog.disabled = false;
        nextButtonBlog.classList.remove('disable');
    }
}

prevButtonBlog.addEventListener('click', () => {
  currentImageIndexBlog--;
  updateSlideshowBlog();
});

nextButtonBlog.addEventListener('click', () => {
  currentImageIndexBlog++;
  updateSlideshowBlog();
});
