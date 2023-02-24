<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getMovies()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
