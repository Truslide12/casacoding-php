@extends('layouts.master')

@section('content')

{{-- Main --}}
<div class="containter">
        <div class="row">
                <h1 class="col text-center">React Websites</h1>
        </div>
        @foreach($projects->chunk(2) as $chunk)
            <div class="row" style="align-content:center">
                @foreach ($chunk as $key => $value)
                    <div class="col-sm-12 col-md-6">
                        <div class="row" style="align-items-center; margin:20px;">
                            <h3 class="col">{{$value->projectName}}</h3>
                        </div>
                        <div class="row" style="align-items-center">
                            <div class="col"><a href="{{$value->url}}"><img style="width:100%" src="assets/img/{{$value->img}}"
                                class='img-fluid'></div>
                        </div>
                        <div class="row">
                            <p class="col">{{$value->description}}</p>
                            <p class="col">{{$value->keywords}}</p>
                            <a href="{{$value->github}}"><img src="../assets/img/githubLogo.gif"
                                                              style="width: 25%"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    {{-- {{ $projects->links() }} --}}
</div>
@endsection
