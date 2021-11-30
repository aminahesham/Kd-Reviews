<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;
use App\Models\Movie;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    //

    public function saveComment(Request $request ){
        $user    = Auth :: user();

        Comment::create([
            'comment'   => $request -> comment,
            'user_id'   => $user    -> id,
            'drama_id'  => $request -> drama_id,
            'movie_id'  => $request -> movie_id,
            'user_name' => $user    -> name,
             ]);

        return redirect()->back();

    }

    public function deleteComment($id){
        Comment::destroy($id);
        return redirect()->back();

    }

}
