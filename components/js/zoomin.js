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
