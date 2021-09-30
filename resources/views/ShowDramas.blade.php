

<style>

body {
background-color:white;
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
  width: 100%;
  margin:4px;
  padding:8px;
}

</style> 
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dramas List :') }}
        </h2>
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


<table style="margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Photo</th>
  <th scope="col">Rate</th>
  <th scope="col">Story</th>
  <th scope="col">Cast</th>
  <th scope="col">Edit</th>
</tr>

  @foreach($dramas as $drama)
  <tr>
  <th scope="row">{{$drama->id}}</th>
    <td>{{$drama -> name}}</td>
    <td><img class="slider-img" src="{{$drama['photo']}}"style="width:300px;height:150px;" ></td>
    <td>{{$drama -> rate}}</td>
    <td>{{$drama -> story}}</td>
    <td>{{$drama -> cast}}</td>

    <td>

    <a href="{{url('admin/getuser/'.$drama->id)}}"  style="background-color:#3399ff">Update</a>
    <br><br><br>
    <a href="{{url('admin/deleteuser/'.$drama->id)}}"  style="background-color:#ff4000">Delete</a>


    </td>
  @endforeach
  </tr>
 
</table>

    </div>
</x-app-layout>
