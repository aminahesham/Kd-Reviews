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
                    You're logged in as admin!
                    <br>
                    <button onclick="window.location.href='addpost'" style="color:orange;font-size:25px;">Add Post</button>
                    <br>
                    <button onclick="window.location.href='addpost'" style="color:blue;font-size:25px;">Add Drama</button>
                    <br>
                    <button onclick="window.location.href='addpost'" style="color:#33cc33;font-size:25px;">Add Movies</button>
                    <br>
                    <button onclick="window.location.href='addpost'" style="color:#cc0099;font-size:25px;">Add user</button>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
