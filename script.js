let slideIndex = 0;
let slideTimeout;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("slides");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  clearTimeout(slideTimeout);
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

function plusSlides(n) {
  slideIndex += n - 1;
  showSlides();

let slides = document.getElementsByClassName("slides");
  if (slideIndex >= slides.length) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  showSlides()
}