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

}
