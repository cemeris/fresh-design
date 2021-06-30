<!DOCTYPE html>
<html>
    <head>
        <title>www.freshdesign.lv</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.scss">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php"> SĀKUMS </a></li>
                    <li><a href="private.php"> PRIVĀTAIS INTERJERS </a></li>
                    <li><a href="public.php"> SABIEDRISKAIS INTERJERS </a></li>
                    <li><a href="about.php"> PAR MANI </a></li>
                    <li><a href="contacts.php"> KONTAKTI </a></li>
                </ul>
            </nav>
        </div>

        </div>
    </header>
    <img class="logo" src="image/logo.gif" alt="Fresh Design">
<!--Added slideshow-->
        <div class="slideshow-container">
            <div class="mySlides fade slide_1"></div>
            <div class="mySlides fade slide_2"></div>
            <div class="mySlides fade slide_3"></div>
            <div class="mySlides fade slide_4"></div>
            <br>
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
              <span class="dot"></span> 
            </div>
        </div>
<!--End of slideshow-->


<!--Start of slideshow script -->      
        <script>

            var slideIndex = 0;
            showSlides();
        
            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
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
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
        </script>
<!--End of slideshow script -->
<!-- Added menu pictures-->
        <div class="container">
            <img class="menu_picture" src="image/private.jpg" alt="Privātais Interjers">
                <a class="menu_picture_text" href="private.php">PRIVĀTAIS INTERJERS</a>
            <img class="menu_picture" src="image/public.jpg" alt="Publiskais Interjers">
                <a class="menu_picture_text" href="private.php">PUBLISKAIS INTERJERS</a>
            <img class="menu_picture" src="image/about_me.jpg" alt="Par Mums">
                <a class="menu_picture_text" href="private.php">PAR MUMS</a>
            <img class="menu_picture" src="image/contacts.jpg" alt="Kontakti"> 
                <a class="menu_picture_text" href="private.php">KONTAKTI</a>
        </div>
<!-- Added social media link -->
        <p class="social">
            <a href="https://www.facebook.com/freshdesign.lv" target="blank" class="fa fa-facebook">
            <a href="https://www.instagram.com/freshdesign.lv/" target="blank" class="fa fa-instagram">
            <a href="https://www.linkedin.com/company/fresh-design-lv/about/" target="blank" class="fa fa-linkedin"></a>
        </p>
        <p class="copyrights"> &#169 2021 - FRESHDESIGN - SIA"FRESH DESIGN". ALL RIGHTS RESERVED.</p>

        <!--<div class="column grid-container">
                <div class="grid-item">
                    <img src="image/private.jpg" alt="Privātais interjers">
                    <div class="grid-text">
                        <p><a href="private.php">PRIVĀTAIS INTERJERS</a></p>
                    </div>
                    <img src="image/public.jpg" alt="Privātais interjers">
                    <div class="grid-text">
                        <p><a href="public.php">SABIEDRISKAIS INTERJERS</a></p>
                    </div>
                </div>
            </div>
    </body>
</html>
