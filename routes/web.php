<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DramaController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UsersController;



//*main home with slider show without login */
Route::get('/', [DramaController::class , 'showDramas']);


//*redirect user and admins by roles*

Route::get('/redirect', [HomeController::class , 'redirect']);




Route::group(['middleware' => 'auth'], function () {


Route::get('/search'      , [HomeController::class,'Search']);

Route::get('details/{id}' , [DramaController::class,'dramaDetails'])->name('drama.details');


//*display home page and show posts

Route::get('/userhome'  , [PostsController::class , 'showPosts']);

/************************************************ dashboard operations *******************************************************/

Route::get('/dashboard',function () {
    return view('dashboard');
})->name('dashboard');


//*add new posts and save them in database *

Route::get('/addpost',function () {
    return view('addpost');
})->name('addpost');


Route::post('/savepost' , [PostsController::class , 'savePost'])->name('savepost');


Route::get('poststable' , [PostsController::class,'postsTable'])->name('poststable');



//*dramas operations*

Route::get('showdramas' , [DramaController::class,'dramasTable'])->name('showdramas');

Route::get('alldramas'      , [DramaController::class,'allDramas'])->name('alldramas');

Route::get('fulldrama'      , [DramaController::class,'full'])->name('fulldrama');
Route::get('continousdrama' , [DramaController::class,'continous'])->name('continousdrama');


Route::get('dramadetails/{id}'   , [DramaController::class,'dramaDetails']);



//*movies operations*

//*admin show movies table*
Route::get('showmovies'  , [MoviesController::class,'moviesTable'])->name('showmovies');

Route::get('allmovies'  , [MoviesController::class,'allMovies']);

Route::get('horrible'  , [MoviesController::class,'horrible']);
Route::get('suspense'  , [MoviesController::class,'suspense']);
Route::get('action'    , [MoviesController::class,'action']);
Route::get('comedy'    , [MoviesController::class,'comedy']);
Route::get('romantic'  , [MoviesController::class,'romantic']);
Route::get('comedy'    , [MoviesController::class,'comedy']);
Route::get('fantasy'         , [MoviesController::class,'fantasy']);

Route::get('moviedetails/{id}'   , [MoviesController::class,'MovieDetails']);



//*users operations*

Route::get('showusers'  , [UsersController::class,'usersTable'])->name('showusers');




});
require __DIR__.'/auth.php';
