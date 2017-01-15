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
