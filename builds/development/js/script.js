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
        addClones();
        getWidths();
        showDivs(slideIndex);
    };
};

document.getElementById("slidercontainer").addEventListener('transitionend',function() {
    var slider = document.getElementById("slidercontainer");
    if (document.body.id === "index") {
        if (slideIndex > x.length - 1 && direction == 1) {
            slideIndex = 2;
            document.body.className += "notransition";
            moveBy = runningSum[slideIndex-1] - (screen.availWidth - x[slideIndex-1].width) / 2;
            slider.style.transform = "translate(" + - moveBy + "px)";
            x[slideIndex-1].style.opacity = 1;
            setTimeout(function() {
                document.body.className = "";
            }, 100);
        }; 
        if (slideIndex < 2 && direction == -1) {
            slideIndex = x.length - 1;
            document.body.className += "notransition";
            moveBy = runningSum[slideIndex-1] - (screen.availWidth - x[slideIndex-1].width) / 2;
            slider.style.transform = "translate(" + - moveBy + "px)";
            x[slideIndex-1].style.opacity = 1;
            setTimeout(function() {
                document.body.className = "";
            }, 100);
        };
    };
})

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

var slideIndex = 3;
var x = [];
var runningSum = [];
var direction = 1;

function plusDivs(n) {
  direction = n;
  showDivs(slideIndex += n);
  /*if (n > 0) {
      direction = "forward";
  } else if (n < 0) {
      direction = "backward";
  }*/
}
function showDivs(n) {
  x = Array.from(x);
  var i;
  var body = document.getElementsByTagName("body");
  var moveBy = 0;
  var slider = document.getElementById("slidercontainer");
  for (i = 0; i < x.length; i++) {
     x[i].style.opacity = 0.4;
  }
  moveBy = runningSum[slideIndex-1] - (screen.availWidth - x[slideIndex-1].width) / 2;
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
    } else if (location == "late") {
        newImg.src = images[0].src;
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

var triggerElementID = null; // this variable is used to identity the triggering element
var fingerCount = 0;
var startX = 0;
var startY = 0;
var curX = 0;
var curY = 0;
var deltaX = 0;
var deltaY = 0;
var horzDiff = 0;
var vertDiff = 0;
var minLength = 72; // the shortest distance the user may swipe
var swipeLength = 0;
var swipeAngle = null;
var swipeDirection = null;

function processingRoutine() {
    var swipedElement = document.getElementById(triggerElementID);
    if (document.body.id === "index") {
    	if ( swipeDirection == 'left' ) {
    		plusDivs(1);
    	} else if ( swipeDirection == 'right' ) {
    		plusDivs(-1);
    	} else if ( swipeDirection == 'up' ) {
    	} else if ( swipeDirection == 'down' ) {
    	}
    }
    /*if (document.body.id === "gallery") {
        if ( swipeDirection == 'left' ) {
    		showNext(1);
    	} else if ( swipeDirection == 'right' ) {
    		showNext(-1);
    	} else if ( swipeDirection == 'up' ) {
    	} else if ( swipeDirection == 'down' ) {
    	}
    }*/
}

function touchStart(event,passedName) {
		// disable the standard ability to select the touched object
		event.preventDefault();
		// get the total number of fingers touching the screen
		fingerCount = event.touches.length;
		// since we're looking for a swipe (single finger) and not a gesture (multiple fingers),
		// check that only one finger was used
		if ( fingerCount == 1 ) {
			// get the coordinates of the touch
			startX = event.touches[0].pageX;
			startY = event.touches[0].pageY;
			// store the triggering element ID
			triggerElementID = passedName;
		} else {
			// more than one finger touched so cancel
			touchCancel(event);
		}
	}

function touchMove(event) {
	event.preventDefault();
	if ( event.touches.length == 1 ) {
		curX = event.touches[0].pageX;
		curY = event.touches[0].pageY;
	} else {
		touchCancel(event);
	}
}

function touchEnd(event) {
	event.preventDefault();
	// check to see if more than one finger was used and that there is an ending coordinate
	if ( fingerCount == 1 && curX != 0 ) {
		// use the Distance Formula to determine the length of the swipe
		swipeLength = Math.round(Math.sqrt(Math.pow(curX - startX,2) + Math.pow(curY - startY,2)));
		// if the user swiped more than the minimum length, perform the appropriate action
		if ( swipeLength >= minLength ) {
			caluculateAngle();
			determineSwipeDirection();
			processingRoutine();
			touchCancel(event); // reset the variables
		} else {
			touchCancel(event);
		}
	} else {
		touchCancel(event);
	}
}

function touchCancel(event) {
	// reset the variables back to default values
	fingerCount = 0;
	startX = 0;
	startY = 0;
	curX = 0;
	curY = 0;
	deltaX = 0;
	deltaY = 0;
	horzDiff = 0;
	vertDiff = 0;
	swipeLength = 0;
	swipeAngle = null;
	swipeDirection = null;
	triggerElementID = null;
}
function caluculateAngle() {
		var X = startX-curX;
		var Y = curY-startY;
		var Z = Math.round(Math.sqrt(Math.pow(X,2)+Math.pow(Y,2))); //the distance - rounded - in pixels
		var r = Math.atan2(Y,X); //angle in radians (Cartesian system)
		swipeAngle = Math.round(r*180/Math.PI); //angle in degrees
		if ( swipeAngle < 0 ) { swipeAngle =  360 - Math.abs(swipeAngle); }
	}

function determineSwipeDirection() {
	if ( (swipeAngle <= 45) && (swipeAngle >= 0) ) {
		swipeDirection = 'left';
	} else if ( (swipeAngle <= 360) && (swipeAngle >= 315) ) {
		swipeDirection = 'left';
	} else if ( (swipeAngle >= 135) && (swipeAngle <= 225) ) {
		swipeDirection = 'right';
	} else if ( (swipeAngle > 45) && (swipeAngle < 135) ) {
		swipeDirection = 'down';
	} else {
		swipeDirection = 'up';
	}
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
    }, 500)
    current = imageList[index + n];
}

function insertHighRes(nextSrc) {
    var newImg;
    newImg = nextSrc.split("/");
    newImg.splice(6, 0, "HighRes");
    newImg = newImg.join("/");
    return newImg;
}
