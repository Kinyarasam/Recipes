
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet"  href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 m-20">
    <div class="flex justify-center">
        <div class="w-4/12 bg-primary p-6 rounded-lg">
            <form action="{{ route('Login') }}" method="post" >
                
                <div class=mb-4>
                    <label for="email" class="sr-only">email</label>
                    <input type="email" placeholder="Your email" id="email" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div class=mb-4>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" name="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="Submit" class="bg-gray-900 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
                               
            </form>
        </div>
    </div>
</body>
</html>
    
</body>
</html>