


<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color:	  #00264d;
}
form{
    background-color:#003366;    
    border-color: #e6e600;
    border-style: dotted;
    border-radius: 15px 50px ;
    padding: 10px;
    margin: 10px;
    width: 500px;
}

 
a{
    color: black;
    text-decoration:none;
    font-size:20px;
    padding: 15px 25px;
    display:inline;
    font-weight:bold;
}
a:hover {
  color: #ffffcc;
  background-color: transparent;
  text-decoration: none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  grey;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color:#999966;
}
.active {
  background-color: #4CAF50;
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
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div  class="container">

<div class="form-group">
  <label for="title"  ><b> Report Title :</b></label><br><br>
  <textarea class="col-sm-2 col-form-label text-danger"  id="input" name="title"  cols="50" rows="2" size="50" multiple></textarea><br>
</div>      
<br>

<div class="form-group">
  <label for="details" ><b> Report Details :</b></label><br><br>
  <textarea class="col-sm-2 col-form-label text-danger"  id="input" name="details"  cols="50" rows="10" size="50" multiple></textarea><br>
</div>      
<br>
<div class="form-group">
  <label for="photo"  ><b>Photo :</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="photo"  size="50" multiple><br>
</div>
<br>
<div class="form-group">
  <label for="source" ><b>Source :</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger"   id="input" name="source"  size="50" multiple><br>
</div>
<br>
  <input type="submit" id="submit" value="save" formmethod="POST" formaction="{{url('savepost')}}"><br>



</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



  




