
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
    <link href="{{ sass('/app.css') }}" rel="stylesheet">
    
  </head>

  <body>

    {{-- NavBar --}}
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="navbar-brand">CasaCoding</div>
            {{-- <a class="navbar-brand" href="#">Address Book</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('projects.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.webdev')}}">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.projectmanagement')}}">Project Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.embedded')}}">Embedded</a>
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

    {{-- SideBar --}}
    <div class="sidebar" > {{-- data-image="../assets/img/sidebar-1.jpg" - this goes inside of the > --}}
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
          <a href="http://www.casacoding.com" class="simple-text logo-normal">
            Casa Coding
          </a>
        </div>
        <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="d8631889-919e-0705-2d4b-159fdbdfe8cd">
          <ul class="nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="{{ route('users.index')}}">
                <i class="material-icons">Projects</i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('users.create', 'php')}}">
                <i class="material-icons">Add Project</i>
                <p>Add Project</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('users.search', 'nodejs')}}">
                <i class="material-icons">Search</i>
                <p>Search</p>
              </a>
            </li>
          </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
          <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
          <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
      </div>
      <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div>
    </div>

    {{-- Main --}}
    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="footer">
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

