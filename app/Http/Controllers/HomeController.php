<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;
use App\Models\User;
use App\Models\RoleUser; 
use App\Models\Role;

use Illuminate\Support\Facades\Auth;


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


    
/* redirect user to home page and redirect admin to dashboard */
   
    public function redirect(){

        $role = Auth :: user();

        if($role->hasRole('normal_user')){

            return view('MainHome');
        }
        else{
            return view('dashboard');
        }
    }
    
}
