<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
// display users table in dashboard
    public function usersTable(){
        $users=User::all();
        return view('Users/ShowUsers',compact('users'));

    }

// delete user from database    
    public function deleteUser($id){

        User::destroy($id);
         return redirect()->back();
    }

//get user to update it     
    public function getUser($id){

        $users=User::select('id','name','email')->find($id);
        return view('Users/UpdateUser',compact('users'));
       }

//save updated user in database
     public function updateUser(Request $request,User $user,$id){
         
        $user = User::find($id);
        $requestData = $request->except('email' , 'name');
        $user->update($requestData);
        $user->syncRoles($request->roles);

        return redirect('showusers');
          }

/* redirect user to home page and redirect admin to dashboard */
    public function redirect(){

        $role = Auth :: user();

        if($role->hasRole('normal_user')){

            return view('MainHome');
        }
        else{
            return view('Dashboard/dashboard');
        }}
}
