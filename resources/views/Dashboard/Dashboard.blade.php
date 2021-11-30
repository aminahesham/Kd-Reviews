

<style>



div.polaroid {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  float:left;
  padding:10px;
  margin:20px;

}

div.container {
  padding: 10px;
}
    
</style>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <a href="{{url('addpost')}}" id="icon"> 
                        <div class="polaroid">
                      <img src="https://cdn-icons-png.flaticon.com/512/1999/1999310.png"  alt="Add Post" >
                      <div class="container">
                      <p>Add New Post :</p>
                      </div>
                      </div>
                   </a>
            
                    <a href="{{url('adddrama')}}"id="icon">
                       <div class="polaroid">
                       <img src="https://cdn-icons-png.flaticon.com/512/2991/2991494.png"  alt="Add Drama" >

                      <div class="container">
                      <p>Add New Drama :</p>
                      </div>
                      </div>
                   </a>

                    <a href="{{url('addmovie')}}"id="icon">
                       <div class="polaroid">
                      <img src="https://cdn-icons-png.flaticon.com/512/1101/1101762.png" alt="Add Movie" >
                      <div class="container">
                      <p>Add New Movie :</p>
                      </div>
                      </div>
                   </a>

                   @if(Auth::User()->hasRole('super_admin'))
                    <a href="{{url('showusers')}}"id="icon">
                       <div class="polaroid">
                      <img src="https://apkmodfree.com/wp-content/uploads/2021/05/1294803_featured.png" alt="manage users" >
                      <div class="container">
                      <p>Manage Users :</p>
                      </div>
                      </div>
                   </a>
                    @endif
                    
                    
            </div>
        </div>
    </div>
</x-app-layout>
