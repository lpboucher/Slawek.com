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
/* Add use of escape as event */
document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) {
        closeModal();
    }
});
