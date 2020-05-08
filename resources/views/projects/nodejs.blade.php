@extends('layouts.master')

@section('content')
        <!-- Main -->

<div class="container">
    <div class="row" style="align-items-center; margin:20px;">
        <h1 class="col text-center">NodeJS</h1>
    </div>

    @foreach($projects->chunk(2) as $chunk)
        <div class="row" style="align-content:center">
            @foreach ($chunk as $key => $value)
                <div class="col-sm-12 col-md-6">
                    <div class="row" style="align-items-center; margin:20px;">
                        <h3 class="col">{{$value->projectName}}</h3>
                    </div>
                    <div class="row" style="align-items-center">
                        <div class="col"><a href="{{$value->url}}"><img src="assets/img/{{$value->img}}"
                                                                        style="width: 200%"></div>
                    </div>
                    <div class="row">
                        <p class="col">{{$value->description}}</p>
                        <p class="col">{{$value->keywords}}</p>
                        <a href="{{$value->github}}"><img src="{{asset('/assets/img/githublogo.gif')}}"
                                                            style="width: 50%"></a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection