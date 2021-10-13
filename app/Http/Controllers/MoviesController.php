<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;


class MoviesController extends Controller
{
    //

    public function moviesTable (){
        $movies = Movies::all();
        return view ('showmovies' , compact('movies'));
    }

    public function allMovies (){
        $movies = Movies::all();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function horrible (){
        $movies = Movies:: where ('type' , 'horrible')->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function suspense (){
        $movies = Movies:: where ('type' , 'suspense')->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function action (){
        $movies = Movies:: where ('type' , 'action' )->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function comedy (){
        $movies = Movies:: where ('type' , 'comedy' )->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function romantic (){
        $movies = Movies:: where ('type' , 'romantic' )->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function fantasy (){
        $movies = Movies:: where ('type' , 'fantasy')->get();
        return view ('MoviesTypes' , compact('movies'));
    }

    public function MovieDetails($id){
        $movies =Movies :: find($id);
        return view('MovieDetails' , ['movies' => $movies]);
    }



}
