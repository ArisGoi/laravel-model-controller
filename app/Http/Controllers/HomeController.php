<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class homeController extends Controller
{
    public function index() {
        $data = Movie::all();
        return view('home', compact('data'));
    }
}
