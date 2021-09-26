<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Drama;


class AdminController extends Controller
{
    //

    public function savePost(Request $requ){
      
            Post::create([
           'title'     => $requ -> title,
           'details'   => $requ -> details,
           'photo'     => $requ -> photo,
           'source'    => $requ -> source,
            ]);
            return redirect()->back();
        }

    public function showUsers(){
        $users=User::all();
        return view('ShowUsers',compact('users'));

    }

    public function showDramas(){
        $dramas=Drama::all();
        return view('ShowDramas',compact('dramas'));

    }
    
}
