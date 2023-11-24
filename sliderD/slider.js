var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeD", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " activeD";
}

document.addEventListener('keydown', function(event) {
  if (event.code === 'ArrowLeft') {
    plusSlides(-1);
  } else if (event.code === 'ArrowRight') {
    plusSlides(1);
  }
});

$(document).ready(function () {
  $(".custom-carousel .item").click(function () {
    $(".custom-carousel .item").not($(this)).removeClass("active");
    $(this).toggleClass("active");
  });
});

    const sezionespiegazione = document.getElementById("slideshow-container-impara");
    const bottonespiegazione = document.getElementById("bottone-spiegazione");
    const sezionestoria = document.getElementById("slideshow-container-storia");
    const bottonestoria = document.getElementById("bottone-storia");
    bottonespiegazione.onclick = function () {
      if (bottonespiegazione.style.display !== "none") {
        sezionespiegazione.style.display = "block";
        sezionestoria.style.display = "none";
      }
    };
    bottonestoria.onclick = function () {
      if (bottonestoria.style.display !== "none") {
        sezionespiegazione.style.display = "none";
        sezionestoria.style.display = "block";
      }
    };