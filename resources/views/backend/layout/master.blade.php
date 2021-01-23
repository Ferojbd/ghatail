<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The newspaper</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    {{-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created--> --}}
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <link rel="stylesheet" href="{{asset('css/richtext.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/picker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    {{-- @livewireStyles --}}
</head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#">
                    <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    {{-- <input type="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal"> --}}
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        {{-- <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg> --}}
                    </div>
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        {{-- <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a> --}}
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        {{-- <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a> --}}
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{Auth::user()->name}} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <div>
                                     <a class="p-2" href="{{ route('profile.show') }}"><i class="fas fa-user ml-1"></i>
                                        {{ __('Profile') }}
                                     </a>
                                </div>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block "><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800">
                                    
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <i class="fas fa-sign-out-alt p-2"></i>
                                            <a class="text-white" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                {{ __('Logout') }}
                                        </a>
                                        </form>
                
                         </div>
                
                    </li>
                </ul>
                
            </div>
        </div>

    </nav>
<div>
    
</div>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="{{route('dashboard')}}" class="{{ Route::is('dashboard') ? 'active' : '' }} block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('post')}}" class="{{ Route::is('post') ? 'active' : '' }} block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">News</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('category')}}" class="{{ Route::is('category') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Category</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('user')}}" class="{{ Route::is('user') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Users</span>
                        </a>
                    </li>
                    {{-- <li class="mr-3 flex-1">
                        <a href="{{route('role')}}" class="{{ Route::is('role') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-user-tag pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Role</span>
                        </a>
                    </li> --}}
                    {{-- <li class="mr-3 flex-1">
                        <a href="{{route('slider')}}" class="{{ Route::is('slider') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-sliders-h pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Slider</span>
                        </a>
                    </li> --}}
                    <li class="mr-3 flex-1">
                        <a href="{{route('poll')}}" class="{{ Route::is('poll') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-poll pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Poll</span>
                        </a>
                    </li>
                 
                    {{-- <li class="mr-3 flex-1">
                        <a href="{{route('appearence')}}" class="{{ Route::is('appearence') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-eye pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Appearence</span>
                        </a>
                    </li> --}}
                    <li class="mr-3 flex-1">
                        <a href="{{route('trush')}}" class="{{ Route::is('trush') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-trash pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Trash</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('setting')}}" class="{{ Route::is('setting') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-cog pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Setting</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{route('menu')}}" class="{{ Route::is('menu') ? 'active' : '' }} block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-600">
                            <i class="fas fa-cog pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Menu</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
       
           

             @yield('content')
        </div>
    </div>

     {{-- @livewireScripts --}}
 <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
              crossorigin="anonymous">
    </script>
     <script src="{{asset('js/jquery.richtext.js')}}"></script>
     <script src="{{asset('js/jquery.richtext.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/picker.min.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>
    <script>
        
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    
    </script>
     @stack('scripts')
     @yield('script') 
     <style>
         .active{
            color: blue;
         }
     </style>
</body>

</html>
