

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
  color: blue;
  background-color: transparent;
  text-decoration: none;
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
            {{ __('Dramas List :') }}
        </h2>
        <a href="{{url('adddrama')}}" class="btn btn-info" role="button">Add New Drama</a>

    </x-slot>

    <div class="py-12">




<table style="margin:5px;">


<tr id="fr">
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Photo</th>
  <th scope="col">Rate</th>
  <th scope="col">Story</th>
  <th scope="col">Cast</th>
  <th scope="col">Status</th>
  <th scope="col">Country</th>
  <th scope="col">sorting</th>
  <th scope="col">Created at</th>
  <th scope="col">Updated at</th>
  <th scope="col">Year</th>
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
    <td>{{$drama -> status}}</td>
    <td>{{$drama -> country}}</td>
    <td>{{$drama -> classification}}</td>
    <td>{{$drama -> created_at}}</td>
    <td>{{$drama -> updated_at}}</td>
    <td>{{$drama -> year}}</td>




    <td>

    <a href="{{url('admin/getdrama/'.$drama->id)}}" target="_blank" id="btn">Update</a><br><br>
    <a href="{{url('admin/deletedrama/'.$drama->id)}}" target="_blank" id="btn-red">Delete</a>


    <br><br>



    </td>
  @endforeach
  </tr>
 
</table>

    </div>
</x-app-layout>
