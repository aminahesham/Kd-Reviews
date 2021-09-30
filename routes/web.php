<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
Route::get('/', function () {
    return view('home');
});
*/


Route::get('/',[HomeController::class , 'showDramas']);


//*redirect user and admins by roles*

Route::get('/redirect',[HomeController::class , 'redirect']);

Route::group(['middleware' => 'auth'], function () {


/********************************************dashboard operations*******************************************************/

Route::get('/dashboard',function () {
    return view('dashboard');
})->name('dashboard');


//*add new posts and save them in database *

Route::get('/addpost',function () {
    return view('addpost');
})->name('addpost');


Route::post('/savepost' , [AdminController::class , 'savePost'])->name('savepost');

//*display home page and show posts

Route::get('/userhome'  ,[HomeController::class , 'showPosts']);


//*dramas operations*

Route::get('showdramas' , [AdminController::class,'showDramas'])->name('showdramas');




//*movies operations*
Route::get('showmovies'  , [AdminController::class,'showMovies'])->name('showmovies');





//*users operations*

Route::get('showusers'  , [AdminController::class,'showUsers'])->name('showusers');




});
require __DIR__.'/auth.php';
