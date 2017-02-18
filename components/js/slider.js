var slideIndex = 3;
var x = [];
var runningSum = [];
var direction = 1;

function plusDivs(n) {
  direction = n;
  showDivs(slideIndex += n);
}
function showDivs(n) {
  x = Array.from(x);
  var i;
  var body = document.getElementsByTagName("body");
  var moveBy = 0;
  var slider = document.getElementById("slidercontainer");
  var effectiveWidth;
  for (i = 0; i < x.length; i++) {
     x[i].style.opacity = 0.4;
  }
  switch(window.orientation)
    {
      case -90:
      case 90:
        effectiveWidth = screen.height;
        break;
      default:
        effectiveWidth = screen.width;
        break;
    }
  moveBy = runningSum[slideIndex-1] - (effectiveWidth - x[slideIndex-1].width) / 2;
  slider.style.transform = "translate(" + - moveBy + "px)";
  x[slideIndex-1].style.opacity = 1;
}
function addClones() {
    var imageList = [];
    var slider = document.getElementById("slidercontainer");
    imageList = Array.from(document.getElementsByClassName("photos"));
    slider.insertBefore(createNode("early", imageList),slider.firstChild);
    slider.appendChild(createNode("late", imageList));
}
//Creates a new list node and appends it a new object image
function createNode(location, images) {
    var newNode = document.createElement("li");
    var newImg = document.createElement("img");
    newImg.className += "photos";
    newNode.appendChild(newImg);
    if (location == "early") {
        newImg.src = images[images.length - 1].src;
        newImg.width = images[images.length - 1].width
    } else if (location == "late") {
        newImg.src = images[0].src;
        newImg.width = images[0].width
    }
    return newNode;
}
function getWidths() {
    var sumWidth;
    runningSum.push(0);
    x = document.getElementsByClassName("photos");
    for (i = 0; i < x.length; i++) {
        sumWidth = runningSum[i] + x[i].width;
        runningSum.push(sumWidth);
    }
}
function effectiveDeviceWidth() {
    var deviceWidth = window.orientation == 0 ? window.screen.width : window.screen.height;
    // iOS returns available pixels, Android returns pixels / pixel ratio
    if (navigator.userAgent.indexOf('Android') >= 0 && window.devicePixelRatio) {
        deviceWidth = deviceWidth / window.devicePixelRatio;
    }
    return deviceWidth;
}
