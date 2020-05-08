@extends('layouts.master')
@section('content')

{{-- Search --}}
{{-- <div class="container">
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
</div> --}}

{{-- All Projects --}}

<div class="containter">
        @foreach($projects->chunk(2) as $chunk)
        <div class="row" style="align-content:center">
            @foreach ($chunk as $key => $value)
                <div class="col-sm-12 col-md-6">
                    <div class="row" style="align-items-center">
                        <h3 class="col">{{$value->projectName}}</h3>
                    </div>
                    <div class="row" style="align-items-center">
                        <div class="col"><a href="{{$value->url}}"><img src="assets/img/{{$value->img}}" class='img-responsive'></div>
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
    {{-- {{ $projects->links() }} --}}
</div>

@endsection
