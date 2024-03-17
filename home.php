<!DOCTYPE html>

<head>
    <title>Home</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="slideshow-container:center">
        <div class="slide fade">
            <img style="width: 255px" src="https://i.pinimg.com/564x/74/3a/da/743adaab3bff5e5d2fed5f0f1f97bae2.jpg" alt="Slide 1">
        </div>
        <div class="slide fade">
            <img style="width: 255px" src="https://i.pinimg.com/736x/ec/bb/fb/ecbbfb5c4dce4e6095429ccb32f40280.jpg" alt="Slide 2">
        </div>
        <div class="slide fade">
            <img style="width: 255px" src="https://i.pinimg.com/564x/6b/2a/23/6b2a237d810f0def80f6b170a3c373c6.jpg" alt="Slide 3">
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    <script src="script.js"></script>
    <?php include "footer.php"; ?>
</body>

</html>

<style>
body {
	background-color: #d4b2a7;
	background-size: cover;
	width: 100%;
	height: 100vh;
	position: relative;
    z-index: -1000;
}

body:before {
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
    z-index: -1000;
}

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