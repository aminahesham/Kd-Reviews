<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UsersController extends Controller
{
    //

    public function usersTable(){
        $users=User::all();
        return view('Users/ShowUsers',compact('users'));

    }

    

    
    
}
