@extends('layouts.app')
@section('content')
<h1 style="font-family:arial;">The leading global marketplace for learning and instruction</h1>
<h3> connecting students all over the world to the best instructors, CORSATAK is helping individuals reach their goals and pursue their dreams. </h3>

<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/slide.css">
  </head>
  <body>


  <div class="slideshow-container">

  <div class="mySlides fade">
    <img src="matrial/maxresdefault.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="matrial/Infographic-online-course-MOOC-1024x637.png" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="matrial/Untitled-3.jpg" style="width:100%">
  </div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>

  </body>
</html> 


@endsection

