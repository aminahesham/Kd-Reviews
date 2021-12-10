<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;



class PostsController extends Controller
{
// display add post form in dashboard
    public static function addPost(){
        return view('Posts/AddPost');
    }

// save added post in database    
    public function savePost(Request $requ){
      
        Post::create([
       'title'     => $requ -> title,
       'details'   => $requ -> details,
       'photo'     => $requ -> photo,
       'source'    => $requ -> source,
        ]);
        return redirect()->back();
    }

// display posts in home    
    public function showPosts(){
        $posts = Post ::all() ;
        return view('MainHome' , ['posts' => $posts]);
    }

// show posts table in database   
    public function postsTable(){
        $posts = Post :: all();
        return view('Posts/showpoststable' , ['posts' => $posts]);
    }

// admin delete post from database     
    public function deletePost($id){

        Post::destroy($id);
        return redirect()->back();
    }

//get post to update 
    public function getPost($id){

        $posts= Post::find($id);
        if(!$posts)
        return redirect()->back();
        $posts=Post::select('title' ,'details',  'photo', 'source' )->find($id);
        return view('Posts/UpdatePost',compact('posts'));
       }

//save updated Post
    public function updatePost(Request $request,$id){

        $posts =Post::find($id);
        if (!$posts)
        return redirect()->back();
        $posts->update($request->all());
        return redirect('Posts/showpoststable'); 
      }

}
