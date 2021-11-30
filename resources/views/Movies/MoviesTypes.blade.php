@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
.trending-items{
    float:left;
    position: relative;
    text-shadow: 2px 2px 4px #000000;

}
a:hover {
  text-decoration: none;
}

div.gallery {
  margin: 10px;
  border: 2px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 2px solid  #990099;
}

div.gallery img {
  width: 100%;
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:black;
}

</style>
<div  style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="">
@foreach($movies as $item)
<div class="responsive">
  <div class="gallery">
    <a  href="moviedetails/{{$item['id']}}">
      <img src="{{$item['photo']}}" alt="Cinque Terre" width="200" height="300">
    <div class="desc">{{$item['name']}}</div>
    </a>

  </div>
</div>
    @endforeach
</div>
</div>
</div>
@endsection