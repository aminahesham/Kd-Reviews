@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}


</style>



<div class="container">
<div class="row">
    <div class="col-sm-6">
      <img class="" style="width:600px;height:400px;" src="{{$dramas->photo}}" >
      <div class="">
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Name :</h3>
      <h4 style='color:black'>{{$dramas->name}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Rate :</h3>
      <h4 style='color:black'>{{$dramas->rate}}/10</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Story :</h3>
      <h4 style='color:black'>{{$dramas->story}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Cast :</h3>
      <h4 style='color:black'>{{$dramas->cast}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Status :</h3>
      <h4 style='color:black'>{{$dramas->status}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Country :</h3>
      <h4 style='color:black'>{{$dramas->country}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Classification :</h3>
      <h4 style='color:black'>{{$dramas->classification}}+</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Year :</h3>
      <h4 style='color:black'>{{$dramas->year}}</h4>
</div>
</div>
</div>


@endsection