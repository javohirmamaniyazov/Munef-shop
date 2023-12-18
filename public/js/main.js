const imgs = document.querySelectorAll(".img-select a");
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
  imgItem.addEventListener("click", (event) => {
    event.preventDefault();
    imgId = parseInt(imgItem.dataset.id);
    slideImage();
  });
});

function slideImage() {
  const displayWidth = document.querySelector(
    ".img-showcase img:first-child"
  ).clientWidth;

  document.querySelector(".img-showcase").style.transform = `translateX(${
    -(imgId - 1) * displayWidth
  }px)`;
}

window.addEventListener("resize", slideImage);

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("productLink").addEventListener("click", function () {
    document.getElementById("loadingGif").style.display = "block";
  });
  window.addEventListener("load", function () {
    document.getElementById("loadingGif").style.display = "none";
  });
});

// carousel

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

var slideInterval = setInterval(function () {
  slideIndex++;
  showSlides(slideIndex);
}, 5000);

var slideshowContainer = document.getElementsByClassName(
  "slideshow-container"
)[0];
slideshowContainer.addEventListener("mouseenter", function () {
  clearInterval(slideInterval);
});

slideshowContainer.addEventListener("mouseleave", function () {
  slideInterval = setInterval(function () {
    slideIndex++;
    showSlides(slideIndex);
  }, 3000);
});

