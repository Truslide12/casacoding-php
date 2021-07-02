@extends('layouts.master')

@section('content')
        <!-- Main -->

<div class="container">
    <div class="row" style="align-items:center; margin:20px;">
        <h1 class="col text-center">NodeJS</h1>
    </div>

    @foreach($projects->chunk(2) as $chunk)
    <div class="row" style="align-content:center; margin:20px;">
        @foreach ($chunk as $key => $value)
            <div class="col-sm-12 col-md-6">
                <div class="row align-items-center">
                    <div class="col">
                        <h3>{{$value->projectName}}</h3>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <a href="{{$value->url}}"><img style="width: 100%" src="assets/img/{{$value->img}}"
                        class='img-fluid'>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>{{$value->description}}</p>
                        <p>{{$value->keywords}}</p>
                        <a href="{{$value->github}}"><img style="width:25%" src="../assets/img/githubLogo.gif"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
</div>
@endsection
