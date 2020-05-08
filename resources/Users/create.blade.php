@extends('layouts.master')
@section('content')

  <div class="container">
    <div class="col-sm-12 col-md-8">
      {{ Form::open(['route'=>'projects.store', 'method'=>'POST']) }}
        @include('projects.form_master')
      {{ form::close() }}
    </div>
  </div>
  
@endsection