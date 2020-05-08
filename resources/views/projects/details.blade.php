@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-lg-9 margin-tb">
                <h2>Contact Info</h2>
        </div>

        <div class="col-lg-3">
                <a class="btn btn-sm btn-success" href="{{ route('contacts.createAddress', ['contact_id' => $contact->id])}}">Add Address</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>First Name : </strong>
                {{ $contact->firstName}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name : </strong>
                {{ $contact->lastName}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email : </strong>
                {{ $contact->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone : </strong>
                {{ $contact->phone}}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Birthday : </strong>
                {{ $contact->birthday}}
            </div>
        </div>
    </div>
        <table class="table-hover w-auto table" style="border-collapse: separate;">
            <thead class="thead-dark">
                <tr class="row" style="text-align:center">
                    <th class="col-sm-1">Type</th>
                    <th class="col-sm-1">Number</th>
                    <th class="col-sm-3">Street</th>
                    <th class="col-sm-2">City</th>
                    <th class="col-sm-1">State</th>
                    <th class="col-sm-1">Zip</th>
                    <th class="col-sm-3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contact->addresses as $row)
                <tr class="row" style="text-align:center">
                    <td class="col-sm-1">{{ $row->type}}</td>
                    <td class="col-sm-1">{{ $row->number}}</td>
                    <td class="col-sm-3">{{ $row->street}}</td>
                    <td class="col-sm-2">{{ $row->city}}</td>
                    <td class="col-sm-1">{{ $row->state}}</td>
                    <td class="col-sm-1">{{ $row->zip}}</td>
                    <td class="col-sm-3">
                        <form action="{{ route('addresses.destroy', $row->id) }}" method="post">
                        <a class="btn btn-sm btn-warning" href="{{ route('addresses.edit', $row->id)}}">Edit</a>
                    {{-- <td><a class="btn btn-sm btn-warning" href="{{ route('contacts.map', $row->id)}}">Edit</a></td> --}}
                            @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
    @endsection