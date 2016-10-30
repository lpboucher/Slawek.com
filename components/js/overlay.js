/* Open */
function openContact() {
    document.getElementById("overlay").style.height = "100%";
    document.body.className+='modal-open';
}

/* Close */
function closeContact() {
    document.getElementById("overlay").style.height = "0%";
    document.body.classList.remove('modal-open');
}
/* Adjust text area in contact form automatically */
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
