<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 m-20">
    <div class="flex justify-center">
        <div class="w-4/12 bg-yellow-100 p-6 rounded-lg">
            <form action="{{ route('Sign_Up') }}" method="post" >
                @csrf
                <div class=mb-4>
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" placeholder="Enter Your name" id="name" name="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class=mb-4>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" placeholder="Username" id="username" name="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                </div>
                @error('username')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror


                <div class=mb-4>
                    <label for="email" class="sr-only">email</label>
                    <input type="email" placeholder="Your email" id="email" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror


                <div class=mb-4>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" placeholder="Choose a password" id="password" name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                </div>
                @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class=mb-4>
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" placeholder="Repeat your password" id="password_confirmation" name="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="Submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Sign Up</button>
                </div>
                               
            </form>
        </div>
    </div>
</body>
</html>