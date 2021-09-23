<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/userhome', function () {
    return view('UserHome');
})->middleware(['auth']);

Route::get('/dashboard',function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/addpost',function () {
    return view('addpost');
})->middleware(['auth'])->name('addpost');

Route::get('/dramaview',function () {
    return view('addpost');
})->middleware(['auth'])->name('dramaview');

Route::get('/moviesview',function () {
    return view('addpost');
})->middleware(['auth'])->name('moviesview');

Route::get('/adminslist',function () {
    return view('addpost');
})->middleware(['auth'])->name('adminslist');

Route::get('/userslist',function () {
    return view('addpost');
})->middleware(['auth'])->name('userslist');


require __DIR__.'/auth.php';
