document.addEventListener('keyup', function(e) {
    if (document.body.id == "gallery") {
        if (e.keyCode == 27) {
            closeHighRes();
            closeModal();
        } else if (e.keyCode == 37) {
            showNext(-1);
        } else if (e.keyCode == 39) {
            showNext(1);
        }
    } else if (document.body.id == "index") {
        if (e.keyCode == 27) {
            closeModal();
        } else if (e.keyCode == 37) {
            plusDivs(-1);
        } else if (e.keyCode == 39) {
            plusDivs(1);
        }
    }
});

window.onload = function(){
    if (document.body.id === "gallery") {
        setTimeout(function() {
            document.getElementById('loading').style.display = 'none';
        }, 1600); // using setTimeout to simulate page-load
    };
    if (document.body.id === "index") {
        runningSum.push(0);
        x = document.getElementsByClassName("photos");
        var sumWidth;
        for (i = 0; i < x.length; i++) {
            sumWidth = runningSum[i] + x[i].width;
            runningSum.push(sumWidth);
        }
        showDivs(slideIndex);
    };
};

/* Open */
function openContact() {
    document.getElementById("about-content").style.display = "none";
    document.getElementById("contact-content").style.display = "block";
    openModal();
}
function openAbout() {
    document.getElementById("contact-content").style.display = "none";
    document.getElementById("about-content").style.display = "block";
    openModal();
}
/* Adjust text area in contact form automatically */
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
/* Open */
function openModal() {
    document.getElementById("overlay").style.height = "100%";
    document.body.className+='modal-open';
    document.getElementById("scrollleft").style.display = "none";
    document.getElementById("scrollright").style.display = "none";
}
/* Close */
function closeModal() {
    document.getElementById("overlay").style.height = "0%";
    document.body.classList.remove('modal-open');
    document.getElementById("scrollleft").style.display = "inline-block";
    document.getElementById("scrollright").style.display = "inline-block";
}

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

var current;

function showImage(currentImage, smSrc, lgSrc) {
    current = currentImage.firstChild;
    document.getElementById('lightbox').src = smSrc;
    showLargeImagePanel();
    unselectAll();
    setTimeout(function() {
        document.getElementById('lightbox').src = lgSrc;
    }, 1)
}
function showLargeImagePanel() {
    //document.body.className+='modal-open';
    document.getElementById('imgPanel').style.display = 'block';
}
function unselectAll() {
    if(document.selection)
        document.selection.empty();
    if(window.getSelection)
        window.getSelection().removeAllRanges();
}

function closeHighRes() {
    document.getElementById("imgPanel").style.display = "none";
    //document.body.classList.remove('modal-open');
}

function showNext(n) {
    var imageList = [];
    var index;
    imageList = Array.from(document.getElementsByClassName("galleryitems"));
    index = imageList.indexOf(current);
    document.getElementById('lightbox').src = imageList[index + n].src;
    setTimeout(function() {
        document.getElementById('lightbox').src = insertHighRes(imageList[index + n].src);
    }, 1000)
    current = imageList[index + n];
}

function insertHighRes(nextSrc) {
    var newImg;
    newImg = nextSrc.split("/");
    newImg.splice(6, 0, "HighRes");
    newImg = newImg.join("/");
    return newImg;
}
