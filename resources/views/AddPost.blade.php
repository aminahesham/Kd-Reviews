



<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color:	  #00264d;
}
form{
    background-color:#003366;    
    border: 3px solid ;
    border-color: #e6e600;
    border-style:dotted;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    width: 500px;
    height:500px;
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
    background-color: #e6e600;
    font-size: 14px;
    border: none;
}
#submit:hover{ 
    font-size: 15px;
    border-radius: 15px;
    cursor: pointer;  
}
input[type="text"]{
    margin: 5px;
    padding: 5px;
}

</style> 

<body>
    


<div align="center" class="container">

<form id="form" method="POST" action="" enctype="multipart/form-data">
@csrf

<h1 style="color:white; text-align: center;">Add Post</h1>


<div class="form-group">
  <label for="name_ar" style="color:#ffffcc" ><b>Report Details</b></label><br><br>
  <textarea class="col-sm-2 col-form-label text-danger" id="photo" name="photo"  cols="50" rows="10" size="50" multiple></textarea><br>
</div>      
<br><br>
<div class="form-group">
  <label for="photo" style="color:#ffffcc" ><b>Photo</b></label><br>
  <input type="text" class="col-sm-2 col-form-label text-danger" id="photo" name="photo"  size="50" multiple><br>
</div>
<br><br>
  <input type="submit" id="submit" value="save" formmethod="POST" formaction=""><br>



</form>
</div>


