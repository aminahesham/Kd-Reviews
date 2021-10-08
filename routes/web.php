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


//*dramas operations*

Route::get('showdramas' , [DramaController::class,'dramasTable'])->name('showdramas');




//*movies operations*
Route::get('showmovies'  , [MoviesController::class,'moviesTable'])->name('showmovies');





//*users operations*

Route::get('showusers'  , [UsersController::class,'usersTable'])->name('showusers');




});
require __DIR__.'/auth.php';
