/*------------ SLIDER -------------*/
$(document).ready(function() {
  const $slider = $(".slider");
  const $slides = $(".slide");
  const interval = 10000;
  let currentSlide = 0;
  function nextSlide() {
    currentSlide = (currentSlide + 1) % $slides.length;
    updateSliderPosition();
  }
  function updateSliderPosition() {
    $slider.css("transform", `translateX(-${currentSlide * 100}%)`);
  }
  function startSlider() {
    setInterval(nextSlide, interval);
  }
  startSlider();
  updateSliderPosition();
});
/*------------ SLIDER -------------*/
