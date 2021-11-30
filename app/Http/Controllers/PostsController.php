<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;



class PostsController extends Controller
{
    //
    public static function addPost(){
        return view('Posts/AddPost');
    }

    public function showPosts(){
        $posts = Post ::all() ;
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

    public function postsTable(){
        $posts = Post :: all();
        return view('Posts/showpoststable' , ['posts' => $posts]);
    }

    public function deletePost($id){

        Post::destroy($id);
         return redirect()->back();
    }

}
