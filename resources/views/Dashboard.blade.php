

<style>

.icons-left{
    float:left;
}
.icons-right{
    float:right;

}
img{
        width:250px;
        height:300px;
        display: inline-block;
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
               <div class='icons-left'>
                    <br>
                    <h3 style="font-size:20px;">Add New Post :</h3><br>
                    <a href="{{url('addpost')}}"> 
                        <img src="https://cdn-icons.flaticon.com/png/512/3131/premium/3131611.png?token=exp=1634231874~hmac=d532ecaf2a847345ab6e80957f1d5187"  alt="Add Post">
                    </a>
            
                    <br>
                    <h3 style="font-size:20px;">Add New Drama :</h3><br>
                    <a href="{{url('adddrama')}}">
                        <img src="https://cdn-icons-png.flaticon.com/512/2991/2991494.png"  alt="Add Drama">
                    </a>
                    <br>
                    </div>
                    <div class='icons-right'>
                    <br>
                    <h3 style="font-size:20px;">Add New Movie :</h3>
                    <a href="{{url('addmovie')}}">
                        <img src="https://cdn-icons.flaticon.com/png/512/2249/premium/2249104.png?token=exp=1634235048~hmac=1a9bcca387fcc3e17ca5843366511053"  alt="Add Movie">
                    </a>
                    <br>

                    <h3 style="font-size:20px;">Manage Users :</h3><br>

                    <a href="{{url('showusers')}}">
                        <img src="https://cdn-icons-png.flaticon.com/512/2534/2534183.png"  alt="Manage Users">
                    </a>
                    <br>
                    </div>
                    </div>
                    </div>

                    
               
    </div>
</x-app-layout>
