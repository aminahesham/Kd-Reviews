

<style>


img{
        width:200px;
        height:200px;

}
#icon:link, #icon:visited {
  background-color: white;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  float:left;
  margin-right:50px;

}

#icon:hover, #icon:active {
  background-color: #f0f5f5;
  color: black;
  border: 1px solid #000099;
}

    
</style>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="{{url('addpost')}}" id="icon"> 
                    <h3 style="font-size:20px;">Add New Post :</h3><br>
                        <img src="https://cdn-icons.flaticon.com/png/512/3131/premium/3131611.png?token=exp=1634844680~hmac=0f29bf6296405d4a952e94a7a951aec5"  alt="Add Post">
                    </a>
            
                    <a href="{{url('adddrama')}}"id="icon">
                    <h3 style="font-size:20px;">Add New Drama :</h3><br>
                        <img src="https://cdn-icons-png.flaticon.com/512/2991/2991494.png"  alt="Add Drama">
                    </a>

                    <a href="{{url('addmovie')}}"id="icon">
                    <h3 style="font-size:20px;">Add New Movie :</h3><br>
                        <img src="https://cdn-icons-png.flaticon.com/512/1101/1101762.png"  alt="Add Movie">
                    </a>


                    <a href="{{url('showusers')}}"id="icon">
                    <h3 style="font-size:20px;">Manage Users :</h3><br>
                        <img src="https://cdn-icons-png.flaticon.com/512/2534/2534183.png"  alt="Manage Users">
                    </a>
                    </div>
                    </div>
                    </div>
                    </div>
</x-app-layout>
