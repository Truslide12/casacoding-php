@extends('layouts.master')

@section('content')
		<!-- Main -->
		<div class="main">
            <div class="container-fluid mx-auto">
                    <div class="row text-center">
                            <div class="col">
                                <h1 class="text-center">Updates</h1>  
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <table class="table-lg table-fluid table-striped border">
                                <thead class="table-dark">
                                    <th>Project Name</th>
                                    <th>Current Status</th>
                                    <th>Upcoming Updates</th>
                                    <th>Last Update Date</th>
                                    <th>Expected Update Completion</th>
                                </thead>
                            <tbody class="border">
                                    <tr class="row" style="align-content:center; margin:20px;">
                                            @foreach ($updates as $key => $value)
                                                <div class="col-sm-12 col-md-6">
                                                    <p class="col">{{$value->projectName}}</p>
                                                </div>
                                                    <div class="col">
                                                    <p>{{$value->currentStatus}}></p>
                                                </div>
                                                <div class="col">
                                                    <p>{{$value->upcomingUpdates}}></p>
                                                </div>
                                                <div class="col">
                                                    <p>{{$value->lastUpdate}}></p>
                                                </div>
                                                    <p>{{$value->expUpdate}}"></p>
                                                </div>
                                            @endforeach
                                        </div>
            </div>

                <div class="container">
                    <!-- Contact Info -->
                    <p class="row"></p>
                    <address>
                        <span class="aboutH">GitHub:</span><br>
                        <a class="aboutC" href="https://github.com/Truslide12">Truslide12</a><br><br>
                        <span class="aboutH">LinkedIn:</span><br>
                        <a class="aboutC"
                            href="https://www.linkedin.com/in/carlos-aragon-a2839512/">https://www.linkedin.com/in/carlos-aragon-a2839512</a><br><br>
                        <span class="aboutH">Email:</span><br>
                        <a class="aboutC" href="mailto:carlos.s.aragon12@gmail.com">carlos.s.aragon12@gmail.com</a><br><br>
                        <span class="aboutH">Phone:</span><br>
                        909-648-5778<br><br>
                    </address>
                </div>
            </div>
@endsection