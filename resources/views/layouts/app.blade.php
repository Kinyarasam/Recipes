<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-500 bg-gray-100 font-body">
    
    <div class="grid md:grid-cols-5"><!-- content wrapper -->
        <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div class="flex items-center justify-between">
                    <h1 class="font-bold uppercase border-b border-gray-400 ">
                        <a href="" class="text-6xl text-green-700 sm:text-red-500 lg:text-green-500 hover:text-gray-700">Foodie</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </div>
                </div>
                <ul class="hidden mt-6 text-sm md:block" id="menu">
                    <li class="py-1 font-bold text-grey-700 hover:text-red-500">
                        <a href="#" class="flex justify-end px-4 border-r-8 border-primary">
                            <span>Home</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li> 
                    
                    <li class="py-1">
                        <a href="{{ route('dashboard') }}" class="flex justify-end px-4 border-r-8 border-white">
                            <span>Dashboard</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                        </a>
                    </li>
                    
                    <li class="py-1">
                        <a href="" class="flex justify-end px-4 border-r-8 border-white">
                            <span>About</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </li>
                    
                    <li class="py-1">
                        <a href="" class="flex justify-end px-4 border-r-8 border-white">
                            <span>Contact</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> <!-- end nav -->

        <main class="px-16 py-6 bg-gray-200 md:col-span-4">
            <div class="flex justify-center md:justify-end">
                @auth
                    <a class='transition duration-500 ease-out md:border-2 border-primary btn text-primary hover:bg-primary hover:text-white hover:shadow-2xl'>{{ auth()->user()->username }}</a>
                   
                    <a href="" class='ml-2 transition duration-500 ease-out md:border-2 border-primary btn text-primary hover:bg-primary hover:text-white hover:shadow-2xl'>Logout</a>
                    
                @endauth

                @guest
                    <a href="{{ route('Login') }}" class='transition duration-500 ease-out md:border-2 border-primary btn text-primary hover:bg-primary hover:text-white hover:shadow-2xl'>Log in</a>
                    <a href="{{ route('Sign_Up') }}" class='ml-2 transition duration-500 ease-out md:border-2 border-primary btn text-primary hover:bg-primary hover:text-white hover:shadow-2xl'>Sign up</a>        
                    
                    
                @endguest
                              
            </div>
            <div class="flex items-center justify-center mt-2">
                <div class="w-6 h-4 bg-red-500"></div>
                <div class="w-6 h-8 bg-blue-500"></div>
                <div class="w-6 h-12 bg-green-500"></div>
            </div>

            <header>
                <h2 class="text-6xl font-semibold text-gray-700">Recipes</h2>
                <h3 class="text-2xl font-semibold">For You</h3>
            </header>

            <div>
                <h4 class="pb-2 mt-12 font-bold border-b border-gray-200">Latest recipes</h4>

                <div class="grid gap-10 mt-8 lg:grid-cols-3">
                    <!-- cards go here -->
                        <div class="card hover:shadow-2xl">
                            <img src="{{ asset('images/img-4.jpg') }}"  alt="burger" class="object-cover w-full h-72 sm:h-72">
                            <div class="m-4">
                                <span class="font-bold">Burger</span>
                                <span class="block text-sm text-gray-500">Recipe by Kinyarasam</span>
                            </div>
                            <div class="badge">
                                <svg class="inline-block w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>25 mins</span>
                            </div>
                        </div>
                        
                        <div class="card hover:shadow-2xl">
                            <img src="{{ asset('images/img-2.jpg') }}"  alt="ice cream" class="object-cover w-full h-72 sm:h-72">
                            <div class="m-4">
                                <span class="font-bold">Ice Cream</span>
                                <span class="block text-sm text-gray-500">Recipe by Kinyarasam</span>
                            </div>
                            <div class="badge">
                                <svg class="inline-block w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>10 mins</span>
                            </div>
                        </div>
                       
                        <div class="card hover:shadow-2xl">
                        
                            <img src="{{ asset('images/img-3.jpg') }}"  alt="ice cream" class="object-cover w-full h-72 sm:h-72">
                            <div class="m-4">
                                <span class="font-bold">Ice Cream</span>
                                <span class="block text-sm text-gray-500">Recipe by Kinyarasam</span>
                            </div>
                            <div class="badge">
                                <svg class="inline-block w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>5 mins</span>
                            </div>
                        </div>
                    

                    
                </div>

                <h4 class="pb-2 mt-12 font-bold border-b border-gray-200 ">Most Popular recipes</h4>

                <div class="mt-8">
                    <!-- cards go here
                    <div>
                        <img src=""  alt="">
                        <div>
                            <span>5 Bean Chilli Stew</span>
                            <span>Recipe by Kinyarasam</span>
                        </div>
                    </div> -->
                </div>
                
                <div class="flex justify-center">
                    <div class="text-xs transition duration-500 ease-out transform bg-secondary-100 text-secondary-200 btn hover:shadow-inner hover:scale-125 hover:bg-opacity-50">Load more . . . </div>
                </div>
                </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield( 'footer-script' )
    @yield('content')
</body>
</html>