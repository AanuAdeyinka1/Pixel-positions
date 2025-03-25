<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel positions</title>
    @vite(['resources/js/app.js'])
                                                                                                        
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>
            <div>
                <a href="/">Jobs</a>
                <a href="/">Career</a>
                <a href="/">Salaries</a>
                <a href="/">Company</a>
            </div>
            <div>
                <a href="/">Post a Job</a>
            </div>
        </nav>

        <main>{{$slot}}</main>
    </div>
</body>
</html>