<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To-Do - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="antialiased">

        <div class="">
            <div class="px-8 py-3 text-center md:flex justify-between items-center bg-gray-700  text-gray-300">
                <h1 class="md:mb-0 font-bold uppercase text-xl">To-Do</h1>
                <ul class="sm:mb-4 md:mb-0 md:flex gap-4">
                    <li class="cursor-pointer hover:underline">+91 9735143918</li>
                    <li class="md:border-2 border-red-500">  </li>
                    <li class="cursor-pointer hover:underline">paljayanta18@gmail.com</li>
                </ul>
                @if (Route::has('login'))
                    <ul class="md:flex gap-4">
                        @auth
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ url('/dashboard') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Dashboard</a></li>
                        @else
                            <li class="mt-4 mb-4 md:mt-0 md:mb-0"><a href="{{ route('login') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="text-gray-900 bg-gray-200 py-1 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-500 cursor-pointer focus:outline-none">Register</a></li>
                            @endif
                        @endauth
                    </ul>
                @endif
            </div>
            
            <div class="grid lg:grid lg:grid-cols-3">
                <div class="lg:col-span-1 bg-red-200">
                    <img class="object-cover lg:h-full lg:w-full opacity-80" src="img/to-do.jpg" alt="">
                </div>
                <div class="lg:col-span-2 overflow-hidden bg-gray-200 ">
                    <div class="bg-gray-200 transform -skew-y-6">
                        <div class="transform skew-y-6 text-center py-16 ">
                            <h1 class="text-xl mt-20">Welcome to <span class="text-gray-700 text-xl font-bold uppercase">To-Do List Application</span></h1>
                        </div>
                    </div>
                    
                </div>
            </div>
            <x-footer/>
        </div>
    </body>
</html>

