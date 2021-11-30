@extends('master')
@section("content")

<?php
 use App\Models\Post;
$posts= Post :: all();
?>
<style>
body {
  margin: 0;
  padding:0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#e3e0eb;
}

.hero-image {
  background-image: url("https://i1.wp.com/c-drama.net/wp-content/uploads/2021/09/%D9%85%D8%B3%D9%84%D8%B3%D9%84-%D8%AF%D8%A7%D9%84%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%85%D9%8A%D8%B1-%D8%A7%D9%84%D9%85%D8%BA%D8%B1%D9%88%D8%B1-..jpg?fit=1200%2C675&ssl=1");
  background-color: #cccccc;
  height: 600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}

.hero-text {
  text-align: center;
  color: white;
  text-shadow: 2px 2px 4px #000000;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
img{
  border: 2px solid #990099;
  border-radius: 15px 50px;

}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  background-color :#336699;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: orange;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>

<div class="hero-image" style="border-style: hidden;">
  <div class="hero-text">
    <h3 style="">Welcome To Kd-Reviews!</h3>
  </div>
</div>
<br>

<h2 style="color:black;text-align: center;text-shadow: 2px 2px 4px #000000;">New Posts !</h2>


<div class="container" style="margin:10px; border-color: #996666; border-radius: 15px 50px;">

<div id='#showposts'>
<br><br>
@foreach($posts as $post)
<h3 style="color:black;text-shadow: 2px 2px 4px #000000;">{{$post['title']}}</h3>
<img src="{{$post['photo']}}" alt="" id="img" style="width:300px;height:300px;">
<br><br>
<p  style="color:black;font-size:18px;border-bottom-style: solid;border-bottom-width: medium;">
{{$post['details']}}
</p>

@endforeach
</div>



</div>
  


@endsection 


