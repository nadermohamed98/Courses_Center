<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/welcome">CORSATAK</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                @if (Route::has('login'))
                
                    @if (Auth::check())
            
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="/web">Web</a></li>
                        <li><a href="/programming">Programming</a></li>
                        <li><a href="/languages">Languages</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="{{ url('/profile page') }}">profile page</a></li>
                        
                        
                            
                        
                            
            
                    
            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @else

                    @endif
                @endif   
            </ul>

            <ul class="nav navbar-nav navbar-right">    
                @if (Route::has('login'))
                
                    @if (Auth::check())
                  
                        <li><a href="{{ url('/logout') }}">logout</a></li>
                    @else

                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                    </ul>
                @endif
               
        </div>
    </div>
  </nav>