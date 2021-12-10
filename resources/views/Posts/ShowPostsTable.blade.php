

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
  color: blue;
  background-color: transparent;
  text-decoration: none;
}


a.button{
   cursor:pointer; 
   margin:10px;
   padding:10px;
}
#fr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin:4px;
  padding:8px;
}
#btn:link, #btn:visited {
  background-color:  #66d9ff;
  color: black;
  padding: 10px ;
  margin:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn:hover, #btn:active {
  background-color: #0099e6;
  color: white;
}


</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Table :') }}
        </h2>
        <a href="{{url('addpost')}}" class="btn btn-info" role="button">Add New Post</a>


    </x-slot>

    <div class="py-12">

@if(Session::has('productdeleted'))
            <div align="center" class="alert alert-success" role="alert" style="color:white; font-size:30px">
                {{ Session::get('productdeleted') }}
            </div>
@endif


@if(Session::has('notfound'))
            <div align="center" class="alert alert-success" role="alert" style="color:yellow; font-size:30px" >
                {{ Session::get('notfound') }}
            </div>
@endif


<table style="width:100%;margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Title</th>
  <th scope="col">Photo</th>
  <th scope="col">Source</th>
  <th scope="col">Created at</th>
  <th scope="col">Updated at</th>
  
  <th scope="col">Edit</th>
</tr>

  @foreach($posts as $post)
  <tr>
  <th scope="row">{{$post->id}}</th>
    <td style="width:300px;">{{$post -> title}}</td>
    <td><img class="slider-img" src="{{$post['photo']}}"style="width:200px;height:300px;" ></td>
    <td>{{$post -> source}}</td>
    <td>{{$post -> created_at}}</td>
    <td>{{$post -> updated_at}}</td>

    


    <td>
    <a href="{{url('getpost/'.$post->id)}}" class="btn btn-warning" id="btn" style="background-color: #79d2a6">Update</a><br>
    <a href="{{url('admin/deletepost/'.$post->id)}}" class="btn btn-warning" id="btn" style="background-color:orange">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>



    </div>
</x-app-layout>
