<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;


class MoviesController extends Controller
{
    
// show movies table in dashboard
    public function moviesTable (){
        $movies = Movies::all();
        return view ('Movies/showmovies' , compact('movies'));
    }

// user display all movies    
    public function allMovies (){
        $movies = Movies::all();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

// user display horrible movies    
    public function horrible (){
        $movies = Movies:: where ('type' , 'horrible')->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

// user display suspense movies    
    public function suspense (){
        $movies = Movies:: where ('type' , 'suspense')->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

// user display action movies    
    public function action (){
        $movies = Movies:: where ('type' , 'action' )->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

    public function comedy (){
        $movies = Movies:: where ('type' , 'comedy' )->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

    public function romantic (){
        $movies = Movies:: where ('type' , 'romantic' )->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

    public function fantasy (){
        $movies = Movies:: where ('type' , 'fantasy')->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }

    public function drama (){
        $movies = Movies:: where ('type' , 'drama')->get();
        return view ('Movies/MoviesTypes' , compact('movies'));
    }
    public function MovieDetails($id){
        $movies =Movies :: find($id);
        return view('Movies/MovieDetails' , ['movies' => $movies] );
    }

// user display trending movies    
    public function trendingMovie(){
        $movies=Movies:: where ('trending' , 1)->get();
        return view('Movies/TrendingMovies' , compact('movies'));
    }


    /* admin save new movie in database */

    public function saveMovie(Request $requ){
      
        Movies::create([
       'name'           => $requ -> name,
       'story'          => $requ -> story,
       'photo'          => $requ -> photo,
       'rate'           => $requ -> rate,
       'cast'           => $requ -> cast,
       'type'           => $requ -> type,
       'country'        => $requ -> country,
       'classification' => $requ -> classification,
       'year'           => $requ -> year,
       'trending'       => $requ -> trending,


        ]);
        return redirect()->back();
    }
// admin delete movie from database
    public function deleteMovie($id){

        Movies::destroy($id);
         return redirect()->back();
    }
    
//get Movie to update 
public function getMovie($id){

    $movies= Movies::find($id);
    if(!$movies)
    return redirect()->back();

    $movies=Movies::select('id','name','photo', 'rate','story' , 'cast' , 'type' , 'country' , 'classification' , 'year' , 'trending' , 'classification')->find($id);
    return view('Movies/UpdateMovie',compact('movies'));
   }

//save updated Movie
public function updateMovie(Request $request,$id){

    $movies =Movies::find($id);
     if (!$movies)
    return redirect()->back();
    $movies->update($request->all());
    return redirect('showmovies'); 
      }

}
