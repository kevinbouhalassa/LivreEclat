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

/* function colorToggle() {
    var body = document.body;
    var p = document.querySelectorAll('.change');
    var logo = document.getElementById('logoImg');
    var titre = document.querySelectorAll('.titre');
    var infos = document.querySelectorAll('.Infos');
    var resume = document.getElementById('resume');
    var label = document.querySelectorAll('label');
    var confirmation = document.getElementById('confirmation');
    body.classList.toggle("modenoir");
    resume.classList.toggle("color");
    confirmation.classList.toggle("color");
    titre.forEach(element => {
        element.classList.toggle("modeblanc")
    });
    infos.forEach(element => {
        element.classList.toggle("modeblanc")
    });
    p.forEach(function (element) {
        element.classList.toggle("color")
    })
    label.forEach(function (element) {
        element.classList.toggle("color");
    })
   logo.src = "src/resources/images/LivrEclatBlanc.png";
} */
