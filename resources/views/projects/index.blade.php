@extends('layouts.home')
@section('content')

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
</div>
@endsection
