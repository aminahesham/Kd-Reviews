<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/redirect', [HomeController::class , 'redirect']);

Route::group(['middleware' => 'auth'], function () {

Route::get('/userhome', function () {
    return view('UserHome');
});

Route::get('/dashboard',function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/addpost',function () {
    return view('addpost');
})->name('addpost');

Route::get('/dramaview',function () {
    return view('addpost');
})->name('dramaview');

Route::get('/moviesview',function () {
    return view('addpost');
})->name('moviesview');

Route::get('/adminslist',function () {
    return view('addpost');
})->name('adminslist');

Route::get('/userslist',function () {
    return view('addpost');
})->name('userslist');

Route::post('/savepost' , [AdminController::class , 'savePost'])->name('savepost');

Route::get('showdramas' , [AdminController::class,'showDramas'])->name('showdramas');

Route::get('showusers'  , [AdminController::class,'showUsers'])->name('showusers');
});
require __DIR__.'/auth.php';
