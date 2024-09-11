<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $title = "Film Disponibili";
        $movies = Movie::all();

        return view('home', compact('movies', 'title'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function bestMovies()
    {
        $movies = Movie::where('vote', '>=', 9)->get();
        return view('bestMovies', compact('movies'));
    }

    public function oldMovies()
    {
        $movies = Movie::whereYear('date', '<=', 1960)->get();
        return view('oldMovies', compact('movies'));
    }

    public function movieDetail($id)
    {
        $movie = Movie::find($id);
        return view('movieDetail', compact('movie'));
    }
}
