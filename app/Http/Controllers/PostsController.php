<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    //
    public static function AddPost(){
        return view('AddPost');
    }

    public function showPosts(){
        $posts = Post :: all();
        return view('MainHome' , ['posts' => $posts]);
    }

    public function savePost(Request $requ){
      
        Post::create([
       'title'     => $requ -> title,
       'details'   => $requ -> details,
       'photo'     => $requ -> photo,
       'source'    => $requ -> source,
        ]);
        return redirect()->back();
    }

}
