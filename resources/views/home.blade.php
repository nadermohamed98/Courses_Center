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
                <div class="w3-content" style="max-width:400px">
                    <div class="mySlides w3-container w3-red">
                      <h1><b>Did You Know?  1</b></h1>
                      
                    </div>
                    <div class="mySlides w3-container w3-red">
                        <h1><b>Did You Know?  2</b></h1>
                        
                      </div>
                    <div class="mySlides w3-container w3-red">
                      <h1><b>Did You Know?  3</b></h1>
                      
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
                    setTimeout(carousel, 2000); 
                  }
                  </script>
                  
        </body>
    </div>
    </html>
    @endsection
    