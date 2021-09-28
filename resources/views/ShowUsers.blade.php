<?php
use App\Http\Controllers\UserController;
use App\Models\Role; 

$roles=Role::all();

?>

<style>

body {
background-color:white;
}
form{
    background-color:white;
    border: 3px solid white;
    border-radius: 10px;
    padding: 8px;
    margin: 8px;
    width: 300px;
}
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

a{
    color: black;
    text-decoration:none;
    font-size:15px;
    padding: 15px 25px;
    display:inline;
}
a:hover {
  color: #ffffcc;
  background-color: transparent;
  text-decoration: none;
}

.active {
  background-color: #4CAF50;
}
a.button{
   cursor:pointer; 
   margin:10px;
   padding:10px;
}
#fr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 99%;
  margin:4px;
  padding:8px;
}

</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List :') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

@if(Session::has('userdeleted'))
            <div align="center" class="alert alert-success" role="alert" style="color:white; font-size:30px">
                {{ Session::get('userdeleted') }}
            </div>
@endif


@if(Session::has('notfound'))
            <div align="center" class="alert alert-success" role="alert" style="color:yellow; font-size:30px" >
                {{ Session::get('notfound') }}
            </div>
@endif


<table style="width:99%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">E-mail</th>
  <th scope="col">Roles</th>
  <th scope="col">Edit</th>
</tr>

  @foreach($users as $index=>$user)
  <tr>
  <th scope="row">{{$user->id}}</th>
    <td>{{$user -> name}}</td>
    <td>{{$user -> email}}</td>
    <td>
      @foreach($user->roles as $role)
      {{ $role ->display_name }}
     @endforeach
    </td>

    <td>

    <a href="{{url('admin/getuser/'.$user->id)}}" class="btn btn-warning" style="background-color: #3399ff">Update</a>


    <a href="{{url('admin/deleteuser/'.$user->id)}}" class="btn btn-warning" style="background-color:#ff4000">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>



        </div>
    </div>
</x-app-layout>
