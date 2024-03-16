<!DOCTYPE html>

<head>
    <title>Home</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="slideshow-container:center">
        <div class="slide fade">
            <img style="width: 1255px" src="img/1.png" alt="Slide 1">
        </div>
        <div class="slide fade">
            <img style="width: 1255px" src="img/2.png" alt="Slide 2">
        </div>
        <div class="slide fade">
            <img style="width: 1255px" src="img/3.png" alt="Slide 3">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    <script src="script.js"></script>
</body>

</html>

<style>
.slideshow-container {
    position: relative;
    max-width: 800px;
    margin: relative;
    z-index: -1000;
}

.slide {
    display: none;
}

.fade {
    animation-name: fade;
    animation-duration: 3.5s;
    margin: 45px;
    height: auto;
    width: 100%;
    border-radius: 20px;
}

@keyframes fade {
    from {opacity: .5} 
    to {opacity: 2}
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #cdc6c3;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.8s ease;
}

.active {
    background-color: #e7d7c9;
}
</style>

<script>
    var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2500);
}
</script>