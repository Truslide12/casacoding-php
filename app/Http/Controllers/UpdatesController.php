<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Updates extends Controller
{
    public function index()
    {
    $updates = Updates::orderby('id')->get;
    return view('updates', ['updates' => $updates]);
    }
}
