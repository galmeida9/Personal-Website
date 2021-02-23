var slideIndex = 0;
var timeout
var time = 7000

plusDivs(0)

function plusDivs(n) {
    clearTimeout(timeout)
    showDivs(slideIndex += n);
    timeout = setTimeout(function(){ plusDivs(1); }, time);
}

function currentDiv(n) {
    clearTimeout(timeout)
    showDivs(slideIndex = n);
    timeout = setTimeout(function(){ plusDivs(1); }, time);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("timelineSlide");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    var isOpen = x[slideIndex-1].classList.contains('slide-in');
    x[slideIndex-1].setAttribute("class", !isOpen ? "timelineSlide slide-out" : "timelineSlide slide-on")
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
}
