<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;&display=swap" rel="stylesheet">
    <title>Pixel positions</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
                                                                                                        
</head>
<body class="bg-[#060606]  text-white font-[var(--hanken-grotesk)]">
    <div class="px-10  border-b border-white/10" >
        <nav class="flex justify-between items-center py-4">
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div class="space-x-5 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Career</a>
                <a href="/">Salaries</a>
                <a href="/">Company</a>
            </div>
            @auth
                  <div class="flex space-x-6 font-bold">
                <a href="/jobs/create">Post a Job</a>
                
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log Out</button>
                </form>
            </div>
            @endauth
            @guest
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
            @endguest
          
        </nav>        
    </div>

    <main class="mt-10 max-w-[986px] mx-auto">{{$slot}}</main>
</body>
</html>