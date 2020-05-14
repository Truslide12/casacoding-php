@extends('layouts.master')

@section('content')

{{-- Main --}}
<div class="containter">
        <div class="row" style="margin:20px;">
            <div class="col text-center">
                <h1 class="col text-center">Web Development</h1>
            </div>
        </div>
        @foreach($projects->chunk(2) as $chunk)
            <div class="row" style="align-content:center; margin:20px;">
                @foreach ($chunk as $key => $value)
                    <div class="col-sm-12 col-md-6">
                        <div class="row" style="align-items-center">
                            <h3 class="col">{{$value->projectName}}</h3>
                        </div>
                        <div class="row" style="align-items-center">
                            <div class="col"><a href="{{$value->url}}"><img src="assets/img/{{$value->img}}"
                                class='img-fluid'></div>
                        </div>
                        <div class="row">
                            <p class="col">{{$value->description}}</p>
                            <p class="col">{{$value->keywords}}</p>
                            <a href="{{$value->github}}"><img src="../assets/img/githublogo.gif"
                                                              style="width: 15%"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    {{-- {{ $projects->links() }} --}}
</div>
@endsection