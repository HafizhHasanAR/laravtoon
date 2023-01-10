<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Inertia\Inertia;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index() {
        $featuredMovies = Movie::where('is_featured', true)->get();
        $movies = Movie::all();
    
        //Check data di database movie
        // return [
        //     'featuredMovies' => $featuredMovies,
        //     'movies' => $movies,
        // ];
            
        return inertia('User/Dashboard/Index', [
            'featuredMovies' => $featuredMovies,
            'movies' => $movies,
        ]);
       
    }
}
