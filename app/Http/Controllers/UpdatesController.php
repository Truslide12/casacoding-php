<?php

namespace App\Http\Controllers;

use App\Updates;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = Updates::orderby('id')->paginate(10);
        return view('updates.index', ['updates' => $updates]);
    }
}
