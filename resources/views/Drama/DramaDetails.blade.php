@extends('master')
@section("content")
<?php
use App\Models\Comment;
$comments = Comment:: get();
    
?>
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
<div class="">
<div class="searched-item">

      <div class= "float-left">
      <img class="" style="width:300px;height:400px;" src="{{$dramas['photo']}}" >
      <br><br><br>
<form method="post" action="{{url('savecomment') }}">
@csrf

        <label for="comment" style="color:black">Add Comment :</label><br>
      <textarea class="col-sm-2 col-form-label text-danger"  id="" name="comment" style="width:300px;height:40px;border-radius:15px;border-color:#990099;"  cols="50" rows="2" size="50" multiple></textarea><br><br><br>
      <input type="hidden" name="drama_id" value="{{ $dramas->id }}" />
      <input type="submit" class="btn btn-warning" value="Send" style="background-color:#990099"formaction="{{url('savecomment')}}"/><br>
</form>
      </div>


      <div class="float-right">
      <label for="" id="header" > Name :</label>     
      <label for="name">{{$dramas['name']}}</label><br><br>
      <label for=""id="header"> Rate :</label>
      <label for="">{{$dramas['rate']}}/10</label><br><br>
      <label for=""id="header">Story :</label>
       <p style="width:600px;"> {{$dramas['story']}}</p><br>
      <label for=""id="header">Cast :</label> 
      <label for=""> {{$dramas['cast']}}</label><br><br>
      <label for=""id="header">Status :</label>
      <label for="">{{$dramas['status']}}</label><br><br>
      <label for=""id="header">Country :</label>
      <label for="">{{$dramas['country']}}</label><br><br>
      <label for=""id="header">Classification :</label>
      <label for="">{{$dramas['classification']}}+</label><br><br>
      <label for=""id="header">Year :</label>
      <label for="">{{$dramas['year']}}</label><br><br>

</div>
</div>
<div>
  <h4 style="color:#ff6600">Comments :</h4>
@foreach($comments->where('drama_id',  $dramas->id) as $comment)
                        <div class="display-comment">
                        <h5 style="color:darkblue">{{ $comment-> user_name }}</h5>
                        <strong>- {{ $comment-> comment }}</strong>
                        </div>

@endforeach

</div>


@endsection