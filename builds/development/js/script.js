/* Open */
function openContact() {
    document.getElementById("overlay").style.height = "100%";
    document.body.className+='modal-open';
    document.getElementById("scrollleft").style.display = "none";
    document.getElementById("scrollright").style.display = "none";
}

/* Close */
function closeContact() {
    document.getElementById("overlay").style.height = "0%";
    document.body.classList.remove('modal-open');
    document.getElementById("scrollleft").style.display = "inline-block";
    document.getElementById("scrollright").style.display = "inline-block";
}
/* Adjust text area in contact form automatically */
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

var slideIndex = 1;
var x = [];
var runningSum = [];

window.onload = function() {
    //var slideIndex = 1;
    runningSum.push(0);
    x = document.getElementsByClassName("photos");
    var sumWidth;
    for (i = 0; i < x.length; i++) {
        sumWidth = runningSum[i] + x[i].width;
        runningSum.push(sumWidth);
    }
    plusDivs(1);
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var moveBy = 0;
  var slider = document.getElementById("slidercontainer");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.opacity = 0.4;
  }
  moveBy = runningSum[slideIndex-1] - (screen.availWidth - x[slideIndex-1].width) / 2;
  slider.style.left = - moveBy + "px";
  x[slideIndex-1].style.opacity = 1;
}
