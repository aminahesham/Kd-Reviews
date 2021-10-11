

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
            {{ __('Movies List :') }}
        </h2>
        <button onclick="window.location.href='addpost'" style="color:orange;font-size:25px;">Add Post</button>

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
  <th scope="col">Details</th>
  <th scope="col">Photo</th>
  <th scope="col">Source</th>
  <th scope="col">Created at</th>
  <th scope="col">Updated at</th>
  
  <th scope="col">Edit</th>
</tr>

  @foreach($posts as $post)
  <tr>
  <th scope="row">{{$post->id}}</th>
    <td>{{$post -> title}}</td>
    <td>{{$post -> details}}</td>
    <td><img class="slider-img" src="{{$post['photo']}}"style="width:500px;height:200px;" ></td>
    <td>{{$post -> source}}</td>
    <td>{{$post -> created_at}}</td>
    <td>{{$post -> updated_at}}</td>

    


    <td>
<button onclick="window.location.href='{{url('admin/getuser/'.$post->id)}}'" style="color:blue;">Update</button>

<br><br>
<button onclick="window.location.href='{{url('admin/deleteuser/'.$post->id)}}'" style="color:#ff4000;">Delete</button>


    </td>
  @endforeach
  </tr>
 
</table>



    </div>
</x-app-layout>
