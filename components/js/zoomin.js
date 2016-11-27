function showImage(smSrc, lgSrc) {
    document.getElementById('lightbox').src = smSrc;
    showLargeImagePanel();
    unselectAll();
    setTimeout(function() {
        document.getElementById('lightbox').src = lgSrc;
    }, 1)
}
function showLargeImagePanel() {
    document.getElementById('imgPanel').style.width = '100%';
}
function unselectAll() {
    if(document.selection)
        document.selection.empty();
    if(window.getSelection)
        window.getSelection().removeAllRanges();
}
