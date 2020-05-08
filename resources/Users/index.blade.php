@extends('layouts.master')
@section('content')

{{-- Search --}}
<div class="container">
        <div class="col-md-6 text-right">
                <form action=" {{ route('projects.postSearch') }} " method="get" class="form-inline">
                        <div class="input-group">
                        <input type="search" class="form-control" name="search" placeholder="search contacts">
                        </div>
                        <div class="input-group-prepend" style="margin-top:20px;">
                                <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                </form>
        </div>
</div>

{{-- All Projects --}}

<div class="containter">
    <div class="row">
        @foreach ($projects as $key => $value)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="row align-items-center">
                    <h3 class="col">{{$value->name}}</h3>
                </div>
                <div class="row align-items-center">
                    <div class="col"><a href="{{$value->url}}"><img src="assets/img/{{$value->img}}"></div>
                </div>
                <div class="row align-items-center">
                        <p class="col">{{$value->description}}</p>
                        <p class="col">{{$value->keywords}}</p>
                        <a href="{{$value->github}}"><img src="{{assets('img/githublogo.gif')}}">
                </div>
            </div>
    </div>
</div>

@endsection
