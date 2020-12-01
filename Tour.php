<!DOCTYPE html>
<html lan="en">
<?php include'includes/head.php';?>
<body>
  <?php include'includes/navbar.php';?>

  <style>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}



    /* Slideshow container */
    .slideshow-container {
      max-width: 100%px;
      max-height: 10%px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: #070404;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

     /*middle Title*/
    .middle {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  background-color: #f2f2f2;
  opacity: 0.8;
}

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity:4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 100px) {
      .text {font-size: 11px}
    }
  </style>
<body>

  <div class="slideshow-container">

    

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="img/slides/slides4/21.jpg" style="width:100%">
      
      <!-- <div class="text">Caption Text</div>-->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="img/slides/slides4/23.jpg" style="width:100%">
      
      <!-- <div class="text">Caption Two</div>-->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="img/slides/slides4/27.jpg" style="width:100%">
      
      <!--<div class="text">Caption Three</div>-->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="img/slides/slides4/23.jpg" style="width:100%">
      
      <!-- <div class="text">Caption Three</div>-->
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="img/slides/slides4/21.jpg" style="width:100%">

      

      <!-- <div class="text">Caption Three</div>-->
    </div>
    <div class="middle">
    <h1>COMING SOON</h1>
    <b><p style="color:#070404;">We are launching medical tourism on international and domestic level as soon . Stay tuned for new medical plans and best treatment anywhere.</p></b>
  
    </div>

  <br>

  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 

  </div>

  <br>


  
</div>


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
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>


</body>

</html> 
