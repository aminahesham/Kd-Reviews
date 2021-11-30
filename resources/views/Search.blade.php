@extends('master')
@section("content")

<style>
body{
  background-color: #e3e0eb;
}
.float-left {
    float: left;
    padding: 20px;
}  
.float-right {
    float: left;
    padding: 20px;
}

label{
  font-size:16px;
  color:black;
}
#header{
  font-size:14px;
  color:#ff6600;
}

</style>
  @foreach($dramas as $drama)
  <div class= "float-left">
      <img class="" style="width:300px;height:400px;" src="{{$drama['photo']}}" >
      </div>


      <div class="float-right">
      <label for="" id="header" > Name :</label>     
      <label for="name">{{$drama['name']}}</label><br><br>
      <label for=""id="header"> Rate :</label>
      <label for="">{{$drama['rate']}}/10</label><br><br>
      <label for=""id="header">Story :</label>
       <p style="width:600px;"> {{$drama['story']}}</p><br>
      <label for=""id="header">Cast :</label> 
      <label for=""> {{$drama['cast']}}</label><br><br>
      <label for=""id="header">Status :</label>
      <label for="">{{$drama['status']}}</label><br><br>
      <label for=""id="header">Country :</label>
      <label for="">{{$drama['country']}}</label><br><br>
      <label for=""id="header">Classification :</label>
      <label for="">{{$drama['classification']}}+</label><br><br>
      <label for=""id="header">Year :</label>
      <label for="">{{$drama['year']}}</label><br><br>


      
    @endforeach

</div>
</div>
@endsection