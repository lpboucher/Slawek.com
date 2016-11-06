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
