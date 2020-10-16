



function showSlides() {
    var i;
    var slides = document.getElementsByClassName("anumySlides");
    var dots = document.getElementsByClassName("anudot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" anuactive", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " anuactive";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}

