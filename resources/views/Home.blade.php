<?php
use App\Models\Drama;
use App\Models\Movies;
use Illuminate\Support\Facades\DB;
$trendingDramas = Drama:: where ('trending' , 1)->get();

 $trendingMovies = Movies:: where ('trending' , 1)->get();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kd-Reviews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
body {
  margin: 0;
  padding:0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#e3e0eb;
}

.hero-image {
  background-image: url("https://lh4.googleusercontent.com/TV3RRhX9-2Vw5x6wozZfiymoLi0F8-2Bj3FIHbHN2RtNOhWNToAE8hkeOrX-Z_pv7hFWJGwPA0zZFQVbXJCQPb-m5A_8usuE6Dr7Tm9PB5S3hG7VyCsZZIAXD1bJV_T-qhDLksL-");
  background-color: #cccccc;
  height: 500px;
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
img.slider-img{
    height:600px !important;
    width: 100%;

}
.custom-product{
    height:600px;
}
.slider-text{
    background: #D3D3D3 (20%);
  
}
.trending-img{
    height:200px;
    margin:20px;
    width:250px;
}
.trending-items{
    float:left;
    position: relative;
    width: 20%;
    
}
.trending-wrapper{
    margin:30px;
}


</style>

<body>

<nav class="navbar navbar-inverse" style="background-color:#736699;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#c2c2a3;  text-shadow: 2px 2px 4px #000000;">Kd-Reviews</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Drama <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('fulldrama')}}" style="color:#003366;">Full</a></li>
          <li><a href="{{url('continousdrama')}}" style="color:#003366;">Continous</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Movies<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('horrible')}}" style="color:#003366;">Horrible</a></li>
          <li><a href="{{url('suspense')}}"style="color:#003366;">Suspines </a></li>
          <li><a href="{{url('action')}}" style="color:#003366;">Action </a></li>
          <li><a href="{{url('romantic')}}" style="color:#003366;">Romantic </a></li>
          <li><a href="{{url('comedy')}}" style="color:#003366;">Comedy </a></li>
          <li><a href="{{url('fantasy')}}" style="color:#003366;">Fantasy</a></li>

        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="search">
    @csrf
      <div class="form-group">
        <input type="text" name='query' class="form-control" placeholder="search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('login')}}" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Log In</a></li>
    </ul>
  </div>
</nav>

</head>



<div class="custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
  @foreach($dramas as $item)
    <div class="item {{$item['id']==1?'active':''}}">
    <a href="">
    <img class="slider-img" src="{{$item['photo']}}" >
      <div class="carousel-caption slider-text">
          
      </div>
    </a>
    </div>
   @endforeach
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




 <!-- Trending Dramas -->
<div  style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="container">
<h3 style="color:darkblue;text-align:center;text-shadow: 2px 2px 4px #000000;">Trending Dramas</h3>
<h4 style="text-align:center;">most viewed dramas</h4>
@foreach($trendingDramas as $item)
  <div  class="trending-items">
  <a href="details/{{$item['id']}}">
        <img style="padding-right:40px;" class="trending-img" src="{{$item['photo']}}" >
      <div class="">
      <h4 style='color:black'>{{$item['name']}}</h4>
      </div>
      </a>
    </div>
    @endforeach
</div>



 <!-- Trending Movies -->

<div style="margin:10px; border-color: #996666; border-radius: 15px 50px;" class="container">
<h3 style="color:darkblue;text-align:center;text-shadow: 2px 2px 4px #000000;">Trending Movies</h3>
<h4 style="text-align:center;">most viewed movies</h4>
@foreach($trendingMovies as $item)
  <div class="trending-items">
  <a href="">
      <img style="padding-right:40px;" class="trending-img" src="{{$item['photo']}}" >
      <div style="padding-right:40px;" class="">
      <h4 style='color:black'>{{$item['name']}}</h4>
      </div>
      </a>
    </div>
    @endforeach
</div>








