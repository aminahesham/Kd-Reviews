


<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color:	  #00264d;
}

#submit{
    width: 65px;
    height: 40px;
    margin-top: 10px;
    border-radius: 15px;
    color: black;
    font-weight:bold;
    background-color: royalblue;
    font-size: 14px;
    border: none;
}
#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}
#input{
    margin: 5px;
    padding: 5px;
    background-color:#f0f5f5;
    border-radius: 25px;
}

</style> 

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Drama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div  class="container">
<form id="form" method="POST" action="{{URL('/adddrama')}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="title"  ><b> Drama Name :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="name"  size="50" multiple><br>
</div>      
<br>

<div class="form-group">
  <label for="details" ><b> Rate :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="rate"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="photo"  ><b>Photo :</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="photo"  size="50" multiple><br>
</div>
<br>
<div class="form-group">
  <label for="source" ><b>Story :</b></label><br>
  <textarea class="col-sm-2 col-form-label text-danger"  id="input" name="story"  cols="50" rows="2" size="50" multiple></textarea><br>
</div>
<br>
<div class="form-group">
  <label for="details" ><b> Country :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="country"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="details" ><b> Year :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="year"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="details" ><b> Status :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="status"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="details" ><b> Cast :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="cast"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="details" ><b> Classification :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="classification"  size="50" multiple><br>
</div>      
<br>
<div class="form-group">
  <label for="details" ><b> Trending :</b></label><br><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="trending"  size="50" multiple><br>
</div>      
<br>
  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('savedrama')}}"><br>



</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



  




