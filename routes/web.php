<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DramaController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentsController;




//*main home with slider show without login */
Route::get('/'            , [DramaController::class , 'showDramas'])->name('/');


//*redirect users and admins by roles*

Route::get('/redirect'    , [HomeController::class , 'redirect'])->name('redirect');



Route::group(['middleware' => 'auth'], function () {

Route::post('/savecomment'       , [CommentsController::class,'saveComment'])->name('savecomment');

Route::get('/deletecomment/{id}' , [CommentsController::class,'deleteComment'])->name('deletecomment');


Route::get('/search'       , [HomeController::class,'Search'])->name('search');




//*display home page and show posts

Route::get('/userhome'    , [PostsController::class , 'showPosts'])->name('userhome');




////******************************************************************************************************************************************////

//*dramas operations*

Route::get('alldramas'              , [DramaController::class,'allDramas'])->name('alldramas');
Route::get('fulldrama'              , [DramaController::class,'full'])->name('fulldrama');
Route::get('continousdrama'         , [DramaController::class,'continous'])->name('continousdrama');
Route::get('dramadetails/{id}'      , [DramaController::class,'dramaDetails'])->name('dramadetails');
Route::get('/trendingdrama'         , [DramaController::class , 'trendingDrama'])->name('trendingdrama');



//*movies operations*

Route::get('allmovies'              , [MoviesController::class,'allMovies'])->name('allmovies');
Route::get('horrible'               , [MoviesController::class,'horrible'])->name('horrible');
Route::get('suspense'               , [MoviesController::class,'suspense'])->name('suspense');
Route::get('action'                 , [MoviesController::class,'action'])->name('action');
Route::get('comedy'                 , [MoviesController::class,'comedy'])->name('comedy');
Route::get('romantic'               , [MoviesController::class,'romantic'])->name('romantic');
Route::get('fantasy'                , [MoviesController::class,'fantasy'])->name('fantasy');
Route::get('drama'                  , [MoviesController::class,'drama'])->name('drama');
Route::get('moviedetails/{id}'      , [MoviesController::class,'MovieDetails'])->name('moviedetails');
Route::get('/trendingmovie'         , [MoviesController::class,'trendingMovie'])->name('trendingmovie');

/************************************************ dashboard operations *******************************************************/

Route::group(['middleware' => 'role:admin|super_admin'], function () {


    Route::get('/dashboard',function () {
        return view('Dashboard/Dashboard');
    })->name('dashboard');
    
    Route::get('/addpost'              , [PostsController::class , 'addPost'])->name('addpost');
    Route::post('/savepost'            , [PostsController::class , 'savePost'])->name('savepost');
    Route::get('poststable'            , [PostsController::class,'postsTable'])->name('poststable');
    Route::get('admin/deletepost/{id}' , [PostsController::class,'deletePost'])->name('deletepost');
    Route::get('showdramas'            , [DramaController::class,'dramasTable'])->name('showdramas');
    Route::post('/savedrama'           , [DramaController::class , 'saveDrama'])->name('savedrama');
    Route::get('admin/deletedrama/{id}', [DramaController::class,'deleteDrama'])->name('deletedrama');
    Route::get('admin/getdrama/{id}'   , [DramaController::class,'getDrama'])->name('admingetdrama');
    Route::post('updatedrama/{id}'     , [DramaController::class,'updateDrama'])->name('adminupdatedrama');
    Route::get('/adddrama',function () {
        return view('Drama/AddDrama');
    });
    Route::get('showmovies'            , [MoviesController::class,'moviesTable'])->name('showmovies');
    Route::post('/savemovie'           , [MoviesController::class , 'saveMovie'])->name('savemovie');
    Route::get('admin/deletemovie/{id}', [MoviesController::class ,'deleteMovie'])->name('deletemovie');
    Route::get('/addmovie',function () {
        return view('Movies/addmovie');
    });
    //*users operations*
    
    Route::get('showusers'       , [UsersController::class,'usersTable'])->name('showusers');
    
    Route::get('deleteuser/{id}' , [UsersController::class ,'deleteUser'])->name('deleteuser');

    Route::get ('getuser/{id}'   , [UsersController::class,'getUser'])->name('getuser');

    Route::post('updateuser/{id}', [UsersController::class,'updateUser'])->name('updateuser');



    
    });



});
require __DIR__.'/auth.php';
