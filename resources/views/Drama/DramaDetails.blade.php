@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
h3{
  color:black;
  text-shadow: 2px 2px 4px #000000;
}
h4{
  color:black;

}
img{
  border-radius: 15px 50px 30px;
  }
</style>



<div class="container">
<div class="row">
    <div class="col-sm-6">
      <img class="" style="width:600px;height:400px;" src="{{$dramas->photo}}" >
      <div class="">
      <h3 >Name :</h3>
      <h4 >{{$dramas->name}}</h4>
      <h3 >Rate :</h3>
      <h4 >{{$dramas->rate}}/10</h4>
      <h3 >Story :</h3>
      <h4 >{{$dramas->story}}</h4>
      <h3 >Cast :</h3>
      <h4 >{{$dramas->cast}}</h4>
      <h3 >Status :</h3>
      <h4 >{{$dramas->status}}</h4>
      <h3 >Country :</h3>
      <h4 >{{$dramas->country}}</h4>
      <h3 >Classification :</h3>
      <h4 >{{$dramas->classification}}+</h4>
      <h3 >Year :</h3>
      <h4 >{{$dramas->year}}</h4>
</div>
</div>
</div>


@endsection