@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}


</style>
  @foreach($dramas as $item)
<div class="container">
<div class="searched-item">

      <img class="" style="width:600px;height:400px;" src="{{$item['photo']}}" >
      <div class="">
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Name :</h3>
      <h4 style='color:black'>{{$item['name']}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Rate :</h3>
      <h4 style='color:black'>{{$item['rate']}}/10</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Story :</h3>
      <h4 style='color:black'>{{$item['story']}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Cast :</h3>
      <h4 style='color:black'>{{$item['cast']}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Status :</h3>
      <h4 style='color:black'>{{$item['status']}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Country :</h3>
      <h4 style='color:black'>{{$item['country']}}</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Classification :</h3>
      <h4 style='color:black'>{{$item['classification']}}+</h4>
      <h3 style="color:blue;text-shadow: 2px 2px 4px #000000;">Year :</h3>
      <h4 style='color:black'>{{$item['year']}}</h4>


      
    @endforeach

</div>
</div>
@endsection