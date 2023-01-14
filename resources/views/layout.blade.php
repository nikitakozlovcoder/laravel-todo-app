<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoApp</title>
    @vite(['resources/css/app.css'])
</head>
<header>
    @if (!Route::is('login')) 
        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth      
    @endif     
</header>
<body>
    @yield('content')
</body>
</html>