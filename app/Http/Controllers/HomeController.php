<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;
use App\Models\RoleUser; 
use App\Models\Role;



class HomeController extends Controller
{
    //
    public static function Home(){
        return view('home');
    }

    public function Search(Request $req){
        $data = Drama :: where('name' , 'like' , '%' . $req -> input('query').'%') -> get();
        return view('search' , ['dramas' => $data]);

    }

    
}
