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

</style>
<div class="container">
<div class="searched-item">

      <div class= "float-left">
      <img class="" style="width:600px;height:500px;" src="{{$movies['photo']}}" >
      </div>
      <div class="float-right">
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Name :</h3>
      <h4 style='color:black'>{{$movies['name']}}</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Rate :</h3>
      <h4 style='color:black'>{{$movies['rate']}}/10</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Story :</h3>
      <h4 style='color:black'>{{$movies['story']}}</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Cast :</h3>
      <h4 style='color:black'>{{$movies['cast']}}</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Type :</h3>
      <h4 style='color:black'>{{$movies['type']}}</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Country :</h3>
      <h4 style='color:black'>{{$movies['country']}}</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Classification :</h3>
      <h4 style='color:black'>{{$movies['classification']}}+</h4>
      <h3 style="color:black;text-shadow: 2px 2px 4px #000000;">Year :</h3>
      <h4 style='color:black'>{{$movies['year']}}</h4>

</div>
</div>
@endsection