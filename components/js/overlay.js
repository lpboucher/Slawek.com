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
    var box = document.getElementById("contact-content");
    var totalHeight = screen.height;
    var factor = 0.4;
    //if (window.orientation == "undefined") {
    //    box.style.height = (factor * totalHeight)+"px";
    //    box.style.height = (box.scrollHeight)+"px";
    //}
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
/* Open */
function openModal() {
    var input = document.getElementById("show-menu");
    var mobile = document.getElementById("mobilemenu");
    var nodes = document.getElementsByClassName("mobileonly");
    input.checked = false;
    document.getElementById("overlay").style.height = "100%";
    document.body.className+='modal-open';
    document.getElementById("scrollleft").style.display = "none";
    document.getElementById("scrollright").style.display = "none";
}
/* Close */
function closeModal() {
    var input = document.getElementById("show-menu");
    var mobile = document.getElementById("mobilemenu");
    var nodes = document.getElementsByClassName("mobileonly");
    input.checked = false;
    document.getElementById("overlay").style.height = "0%";
    document.body.classList.remove('modal-open');
    if (screen.width >= 1200) {
        document.getElementById("scrollleft").style.display = "table";
        document.getElementById("scrollright").style.display = "table";
    }
}

function checkBox() {
    var input = input = document.getElementById("show-menu");
}
