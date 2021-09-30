<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;
use App\Models\User;
use App\Models\RoleUser; 
use App\Models\Role;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public static function Home(){
        return view('home');
    }

    public static function AddPost(){
        return view('AddPost');
    }

    public function showPosts(){
        $posts = Post :: all();
        return view('UserHome' , ['posts' => $posts]);
    }

    public function showDramas(){
        $dramas = Drama :: all();
        return view('Home' ,['dramas' => $dramas]);
    }

    

    
////******************************************** REDIRECT USER AND ADMIN *************************************************************************////
   
    public function redirect(){

        $role = Auth :: user();

        if($role->hasRole('normal_user')){

            return view('userhome');
        }
        else{
            return view('dashboard');
        }
    }
    
}
