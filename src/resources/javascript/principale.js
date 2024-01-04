/// slideshow promotion

let slideIndex = 1;
let previous = document.querySelector('.previous')
let next = document.querySelector('.next')
let slides = document.querySelectorAll('.promotion')



showSlides(slideIndex);
autoSlide();
function showSlides(index) {
    if (index > slides.length) {
        slideIndex = 1;
    } if (index < 1) {
        slideIndex = slides.length;
    } slides.forEach(slide => {
        slide.style.display = "none";
    });

    slides[slideIndex - 1 ].style.display = "block";
}

previous.addEventListener('click', function () {
    showSlides(slideIndex -= 1);
})

next.addEventListener('click', function (n) {
    showSlides(slideIndex += 1);
})

function autoSlide() {
    showSlides(slideIndex += 1);
    setTimeout(autoSlide, 10000);
}

