<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0; background-color: gainsboro}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  from {opacity: .4} 
  to {opacity: 1}
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
    height: 300px;
  width: 50%;
}
    .button {
  background-color: green;
  border:none;
  color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.6;
    transition: 0.3s;
         }
     .button{
            border-radius: 10px;
            cursor:pointer;
            transition: 0.3s;
        }
    .button:hover{opacity: 1}
    
    h4{
        margin-bottom: 4px;
        color: cadetblue;
    }
    h1{
        margin-top: 0px;
        text-align: center;
        font-family:cursive;
        color: crimson;
       
    }
    
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    <div>
   

    <h4>Restuarant Purpose :</h4>
<a href="rest_registration.php"><input type="button" class="button" value="Register"></a>
<a href="rest_login.php"><input type="button" class="button" value="Login"></a>
        <h1>FLAME ON</h1>
    </div>
    
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/1.jpg" style="width:50%" class="center" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="images/2.jpg" style="width:50%" class="center">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="images/3.png" style="width:50%" class="center">
  <div class="text"></div>
</div>
</div>
<br>    
<div style="text-align:center;">
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
</div>
<div style="text-align:center">
    <h2>Order from your favourite and top restaurants</h2>
    Do you have an account? <a href="login.php">Login</a><br>
    <a href="registration.php"><input type="button" class="button" value="Register"></a>
</div>
    
<br>

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
  setTimeout(showSlides, 5000); // Change image every 10 seconds
}
        </script>

</body>
</html> 
