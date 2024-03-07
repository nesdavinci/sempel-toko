<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="slideshow-container">
        <div class="slide fade">
            <img style="width: 250px" src="https://i.pinimg.com/564x/4e/8b/17/4e8b17098d5755a280b68efaadcd340f.jpg" alt="Slide 1">
        </div>
        <div class="slide fade">
            <img style="width: 250px" src="https://i.pinimg.com/564x/fd/54/1f/fd541fa0893214c6e475d577ef2e6a9f.jpg" alt="Slide 2">
        </div>
        <div class="slide fade">
            <img style="width: 250px" src="https://i.pinimg.com/564x/f1/cc/17/f1cc17c389c51717443c05850ddd166b.jpg" alt="Slide 3">
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
    margin: auto;
    }

    .slide {
    display: none;
}

.fade {
    animation-name: fade;
    animation-duration: 2.5s;
    margin: 45px;
    height: auto;
    width: 100%;
    border-radius: 20px;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #d4b2a7;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
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