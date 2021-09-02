<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function Home(){
        return view('home');
    }

    public static function AddPost(){
        return view('AddPost');
    }
}
