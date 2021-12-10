

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
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn:hover, #btn:active {
  background-color: #0099e6;
  color: white;
}
#btn-red:link, #btn-red:visited {
  background-color: #ff4d4d;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width:100px;
}

#btn-red:hover, #btn-red:active {
  background-color: red;
  color: white;
}
</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movies List :') }}
        </h2>
        <a href="{{url('addmovie')}}" class="btn btn-info" role="button">Add New Movie</a>

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
  <th scope="col">Name</th>
  <th scope="col">Photo</th>
  <th scope="col">Rate</th>
  <th scope="col">Story</th>
  <th scope="col">Cast</th>
  <th scope="col">Country</th>
  <th scope="col">Year</th>
  <th scope="col">Type</th>
  <th scope="col">Sorting</th>

  <th scope="col">Edit</th>
</tr>

  @foreach($movies as $movie)
  <tr>
  <th scope="row">{{$movie->id}}</th>
    <td>{{$movie -> name}}</td>
    <td><img class="slider-img" src="{{$movie['photo']}}"style="width:300px;height:150px;" ></td>
    <td>{{$movie -> rate}}</td>
    <td>{{$movie -> story}}</td>
    <td>{{$movie -> cast}}</td>
    <td>{{$movie -> country}}</td>
    <td>{{$movie -> year}}</td>
    <td>{{$movie -> type}}</td>
    <td>{{$movie -> classification}}</td>


    <td>
    <a href="{{url('getmovie/'.$movie->id)}}" target="" id="btn">Update</a><br><br>
    <a href="{{url('admin/deletemovie/'.$movie->id)}}" target="" id="btn-red">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>



    </div>
</x-app-layout>
