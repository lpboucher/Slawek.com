var slideIndex = 2;
var x = [];
var runningSum = [];

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  x = Array.from(x);
  var i;
  var moveBy = 0;
  var slider = document.getElementById("slidercontainer");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.opacity = 0.4;
  }
  moveBy = runningSum[slideIndex-1] - (screen.availWidth - x[slideIndex-1].width) / 2;
  slider.style.transform = "translate(" + - moveBy + "px)";
  x[slideIndex-1].style.opacity = 1;
}
