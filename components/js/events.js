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
        } else if (slideIndex < 2 && direction == -1) {
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
