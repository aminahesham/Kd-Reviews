<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kd-Reviews</title>
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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">دراما <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" style="color:#003366;">مكتمله</a></li>
          <li><a href="#" style="color:#003366;">تبث حاليا</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">افلام <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" style="color:#003366;">رعب</a></li>
          <li><a href="#" style="color:#003366;">غموض</a></li>
          <li><a href="#" style="color:#003366;">كوميدي / رومانسي</a></li>
          <li><a href="#" style="color:#003366;">فانتازيا</a></li>

        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="search">
    @csrf
      <div class="form-group">
        <input type="text" name='query' class="form-control" placeholder="بحث" name="search">
      </div>
      <button type="submit" class="btn btn-default">بحث</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">{{Auth :: user()->name}} <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="{{route ('logout')}}" style="color:#003366;">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  


</body>
</html>
