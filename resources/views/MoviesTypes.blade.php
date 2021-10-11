@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
.trending-items{
    float:left;
    position: relative;
    
}


</style>
<div  style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="container">
@foreach($movies as $item)
  <div  class="trending-items">
  <a href="moviedetails/{{$item['id']}}">
        <img style="padding-right:40px;width:200;height:300px;" class="trending-img" src="{{$item['photo']}}" >
      <div class="">
      <h4 style='color:black'>{{$item['name']}}</h4>
      </div>
      </a>
    </div>
    @endforeach
</div>

</div>
</div>
@endsection