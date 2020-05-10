
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
                <img src="assets/img/CarlosAragonFormal.jpg" class="img-thumbnail" style="width:15%">
                <div class="navbar-brand">CasaCoding</div>
            </div>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('projects.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.webdev')}}">Websites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.php')}}">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.react')}}">React</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.nodejs')}}">NodeJS</a>
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

    {{-- Main --}}
    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="footer">
            <div class="row">
                <div class="col text-center">
                    <h5>Carlos Aragon Coding Design</h5>
                    <p>Redlands, Ca</p>
                    <p>(909)648-5778</p>
                    <a href="mailto:carlos.s.aragon12@gmail.com">e-mail</a>
                    <p></p>
                    <a href="https://github.com/Truslide12" style="width: 15%" ><img class="img-fluid" style="width: 50px;" src="{{asset('/assets/img/githublogo.gif')}}"></a>
                    <p></p>
                    <a href="https://www.linkedin.com/in/carlos-aragon-a2839512" style="width: 15%">
                    <img  class="img-fluid" style="width: 50px;" src="{{ asset('/assets/img/linkedin.png') }}"></a>
                </div>
            </div>
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

