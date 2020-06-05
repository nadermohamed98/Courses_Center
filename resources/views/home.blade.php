<div style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('matrial/31799.jpg');background-size:cover;">
    @extends('layouts.app')
    
    @section('content')
    <html>
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Home</title>
            <link href="css/welcom.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <div class="full-height" style="color:white; font-family:Arial" >
                <div class="w3-content" style="max-width:100%; padding-top:100px;">
                    <div class="mySlides w3-container w3-red">
                      <h1><b>Welcom to CORSATAK  </b></h1>
                      <img src="/matrial/Untitled-1.jpg" style="hight:40%; width:90%;">
                      
                      
                    </div>
                    <div class="mySlides w3-container w3-red">
                        <h1><b>Here we connect students with teachers </b></h1>
                        <img src="/matrial/Untitled-2.jpg" style="hight:40%; width:90%;">
                        
                      </div>
                    <div class="mySlides w3-container w3-red">
                      <h1><b>We offer many courses in some fields you might be interest at!</b></h1>
                      
                      <img src="/matrial/1.png" style="hight:30%; width:23%;">
                      <img src="/matrial/2.png" style="hight:30%; width:23%;">
                      <img src="/matrial/3.png" style="hight:30%; width:23%;">
                      <img src="/matrial/4.png" style="hight:30%; width:23%;">
                      <hr>
                      <img src="/matrial/5.png" style="hight:20%; width:23%;">
                      <img src="/matrial/6.png" style="hight:20%; width:23%;">
                      <img src="/matrial/7.png" style="hight:20%; width:23%;">
                      <img src="/matrial/8.jpg" style="hight:20%; width:23%;">
                      
                      
                      
                    </div>
                    
                  <script>
                  var slideIndex = 0;
                  carousel();
                  
                  function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none"; 
                    }
                    slideIndex++;
                    if (slideIndex > x.length) {slideIndex = 1} 
                    x[slideIndex-1].style.display = "block"; 
                    setTimeout(carousel, 4000); 
                  }
                  </script>
                  
        </body>
    </div>
    </html>
    @endsection
    