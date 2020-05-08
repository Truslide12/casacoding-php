<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carlos Severiano Aragon Portfolio</title>
    
    <!-- Bootstrap core CSS -->
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>
    
  </head>

  <body>

    {{-- NavBar --}}
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div>
                <img src="assets/img/Carlos_Aragon.jpg" style="width:15%">
            </div>
            <div class="navbar-brand">CasaCoding</div>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('projects.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.webdev')}}">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.php')}}">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.react')}}">React</a>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.nodejs')}}">NodeJS</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Main -->
    <div class="main">
        <div class="container-fluid mx-auto" id="mission">
            <h1 class="text-center">Integrity, Innovation, Adaptability</h1>
            <h3 class="text-center">Over 20 years of engineering and programming experience</h3>
            <h3 class="text-center">Specializing in PHP/Laravel/MySQL Backend Developmemnt</h3>
        </div>
        
        <div class="jumbotron border boarder-primary">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src='/assets/img/MyRolodex.png' alt="MyRolodex">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>MyRolodex</h5>
                            <p>PHP laravel addressbook using MySQL</p>
                            <a href="https://github.com/Truslide12/myrolodex" class="showcase-title">MyRolodex</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src='/assets/img/rumrunnerfrontpage.png' alt="RumRunner">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>RumRunner</h5>
                            <p>Phase3 game using React and MySQL</p>
                            <a href="https://github.com/Truslide12/myrolodex" class="showcase-title">RumRunner</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src='/assets/img/Screen Shot 2019-08-23 at 10.43.12 AM.png' alt="Bamazon">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Bamazon</h5>
                            <p>NodeJS project using MySQL</p>
                            <a href="https://github.com/Truslide12/myrolodex" class="showcase-title">Bamazon</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

   <!-- Footer -->
   <div class="footer navbar-dark bg-dark text-center text-light">
        <h5>Carlos Aragon Coding Desing</h5>
        <p>1943 Country Club Dr.</p>
        <p>Redlands, Ca</p>
        <p>(909)648-5778</p>
        <a href="mailto:carlos.s.aragon12@gmail.com">e-mail</a>
        <p></p>
        <a href="https://github.com/Truslide12"><img class="footer-img" src="{{ asset('img/githubLogo.gif') }}"></a>
        <p></p>
        <a href="https://www.linkedin.com/in/carlos-aragon-a2839512">
          <img class="footer-img" src="{{ asset('img/linkedIn.png') }}"></a>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    @yield('script')

  </body>

</html>

