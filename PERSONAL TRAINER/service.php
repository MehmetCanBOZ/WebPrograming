<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="style2.css" type="text/css">
        <script src="functions.js" async></script>
        <meta charset="utf-8">
        <link rel="prefetch" href="images/logo.png">
        <link rel="prefetch" href="images/logo2.png">
        <link rel="prefetch" href="images/services/cardio.jpg">
        <link rel="prefetch" href="images/services/core.jpg">
        <link rel="prefetch" href="images/services/muscle.jpg">
        <link rel="prefetch" href="images/services/posture.jpg">
        <link rel="prefetch" href="images/services/trx.jpg">
        <link rel="prefetch" href="images/services/weight.jpg">
        <title>SERVICES</title>
    </head>
    <body>
       
        
        <section class="container-info-services">
            <div class="info-services">
                <h1 style="font-size: 35px">SERVICES</h1>
                <p>We offer plenty of options, both <strong>individual</strong> and <strong>group</strong> workouts.<br> You can train with a group in one of our scheduled classes or do an individual more intensive workout with one of our <a href="instructors.html">instructors</a>. <br>We offer 6 different types of workouts in both categories (individual and group):</p>
            </div>
        </section>
             
        <div class="slideshow-container">
            
            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="images/services/cardio.jpg" style="width:100%" alt="Cardio-Fitness">
                <div class="text">CARDIO FITNESS</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="images/services/core.jpg" style="width:100%" alt="Core-Strength">
                <div class="text">CORE STRENGTH</div>
            </div>
           
            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="images/services/weight.jpg"   style="width:100%" alt="Weight-Loss">
                <div class="text">WEIGHT-LOSS</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>
        

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>
           
        </div>
        
        
        
        <script>    
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active-services", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active-services";
            }
        </script>
        
    </body>
</html> 