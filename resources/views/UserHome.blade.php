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
  background-color:#ccccb3;
}

.hero-image {
  background-image: url("https://bluezznation.com/wp-content/uploads/2021/06/IMG_20210611_135336_920-aaa15a2e.jpg");
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

</style>

<div class="hero-image" style="border-style: hidden;">
  <div class="hero-text">
    <h1 style="font-size:50px">Welcome To Kd-Reviews!</h1>
  </div>
</div>
<br>

<h2 style="color:darkblue;text-align: center;text-shadow: 2px 2px 4px #000000;">New Posts !</h2>

<div class="container" style="margin:10px; border-color: #996666; border-radius: 15px 50px;">

<div id='#showposts'>
<br><br>
@foreach($posts as $post)
<h3 style="color:darkblue;text-shadow: 2px 2px 4px #000000;">{{$post['title']}}</h3>
<img src="{{$post['photo']}}" alt="" id="img" style="width:300px;height:300px;">
<br><br>
<p  style="color:black;font-size:18px;border-bottom-style: solid;border-bottom-width: medium;">
{{$post['details']}}
</p>

@endforeach
</div>

</div>
  


@endsection 


