setTimeout(function() {
        document.getElementById('loading').style.display = 'none';
    }, 1400); // using setTimeout to simulate page-load

function showImage(smSrc, lgSrc) {
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
/* Add use of escape as event */
document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) {
        closeHighRes();
    }
});
