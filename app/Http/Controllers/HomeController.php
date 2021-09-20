<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;

class HomeController extends Controller
{
    //
    public static function Home(){
        return view('home');
    }

    public static function AddPost(){
        return view('AddPost');
    }

    public function showDramas(){
        $dramas = Drama :: all();
        return view('Home' ,['dramas' => $dramas]);
    }
    
}
