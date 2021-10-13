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
</head>


<body>

<nav class="navbar navbar-inverse" style="background-color:#736699;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:#c2c2a3;  text-shadow: 2px 2px 4px #000000;">Kd-Reviews</a>
    </div>
    <ul class="nav navbar-nav">

    <li class=""><a class="" data-toggle="" href="{{url('userhome')}}" style="color:white;">Home <span class=""></span></a>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Drama <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{url('alldramas')}}" style="color:#003366;">All</a></li>
        <li><a href="{{url('fulldrama')}}" style="color:#003366;">Full</a></li>
          <li><a href="{{url('continousdrama')}}" style="color:#003366;">Continous</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">Movies <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{url('allmovies')}}" style="color:#003366;">All</a></li>
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
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">{{Auth :: user()-> name}} <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{route ('logout')}}" style="color:#003366;">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  


</body>
</html>
