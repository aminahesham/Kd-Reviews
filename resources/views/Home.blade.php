<?php
use App\Models\Drama;
use App\Models\Movies;
use Illuminate\Support\Facades\DB;
$trendingDramas = Drama:: where ('trending' , 1)->paginate(5);

$trendingMovies = Movies:: where ('trending' , 1)->paginate(5);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kd-Reviews</title>
  <link rel="shortcut icon" type="image/x-icon" href="https://www.apklat.com/wp-content/uploads/2019/01/Korean-Drama-English-Subtitle-Download-Latest-Version-APK.png" />

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
.trending-wrapper{
    margin:30px;
}
a:hover{
  text-decoration: none;
 
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 200px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.pagination {
  display: inline-block;
  text-align: center;

}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}
.pagination a:hover:not(.active) {background-color:#e6ccff;}

</style>

<body>

<nav class="navbar navbar-inverse" style="background-color:#736699;">
  <div class="container-fluid">
    <div class="navbar-header">
    <a href="{{url('/')}}" class="navbar-brand" style="color:#c2c2a3;  text-shadow: 2px 2px 4px #000000;">Kd-Reviews</a>
    </div>
    <ul class="nav navbar-nav">

    <li class=""><a class="" data-toggle="" href="{{url('userhome')}}" style="color:white;">Home <span class=""></span></a>
      </li>

      <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"  style="color:white;">Drama <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{url('alldramas')}}" style="color:#003366;">All</a></li>
        <li><a href="{{url('trendingdrama')}}" style="color:#003366;">Trending</a></li>
        <li><a href="{{url('fulldrama')}}" style="color:#003366;">Full</a></li>
          <li><a href="{{url('continousdrama')}}" style="color:#003366;">Continous</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Movies <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{url('allmovies')}}" style="color:#003366;">All</a></li>
        <li><a href="{{url('trendingmovie')}}" style="color:#003366;">Trending</a></li>
          <li><a href="{{url('horrible')}}" style="color:#003366;">Horrible</a></li>
          <li><a href="{{url('suspense')}}"style="color:#003366;">Suspense </a></li>
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
 <div style="margin:10px;" class="container">
<h3 style="color:darkblue;text-align:center;text-shadow: 2px 2px 4px #000000;">*Trending Dramas*</h3>
@foreach($trendingDramas as $item)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="dramadetails/{{$item['id']}}">
      <img src="{{$item['photo']}}" alt="Cinque Terre" width="200" height="300">
    </a>
    <div class="desc">{{$item['name']}}</div>
  </div>
</div>
    @endforeach
<div class="pagination">
  <a href="{{url('/trendingdrama')}}">❯❯</a>
  <a href="{{url('/trendingdrama')}}"> Next</a>
</div>
</div>



 <!-- Trending Movies -->

<div style="margin:10px; " class="container">
<h3 style="color:darkblue;text-align:center;text-shadow: 2px 2px 4px #000000;">*Trending Movies*</h3>
@foreach($trendingMovies as $item)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="moviedetails/{{$item['id']}}">
      <img src="{{$item['photo']}}" alt="Cinque Terre" width="200" height="300">
    </a>
    <div class="desc">{{$item['name']}}</div>
  </div>
</div>
    @endforeach
    <div class="pagination">
  <a href="{{url('/trendingmovie')}}">❯❯</a>
  <a href="{{url('/trendingmovie')}}"> Next</a>
</div>
</div>









