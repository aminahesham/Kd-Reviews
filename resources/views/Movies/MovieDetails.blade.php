@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
.float-left {
    float: left;
    padding: 20px;
}  
.float-right {
    float: left;
    padding: 20px;
}
h3{
  color:black;
  text-shadow: 2px 2px 4px #000000;
}
h4{
  color:black;
}
img{
  border-radius: 15px 50px ;
  }

</style>
<div class="container">
<div class="searched-item">

      <div class= "float-left">
      <img class="" style="width:600px;height:500px;" src="{{$movies['photo']}}" >
      </div>
      <div class="float-right">
      <h3>Name :</h3>
      <h4 >{{$movies['name']}}</h4>
      <h3 >Rate :</h3>
      <h4 >{{$movies['rate']}}/10</h4>
      <h3 >Story :</h3>
      <h4 >{{$movies['story']}}</h4>
      <h3 >Cast :</h3>
      <h4 >{{$movies['cast']}}</h4>
      <h3 >Type :</h3>
      <h4 >{{$movies['type']}}</h4>
      <h3 >Country :</h3>
      <h4 >{{$movies['country']}}</h4>
      <h3 >Classification :</h3>
      <h4 >{{$movies['classification']}}+</h4>
      <h3 >Year :</h3>
      <h4 >{{$movies['year']}}</h4>

</div>
</div>
@endsection