<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    <header>
        {{-- @include('partials.nav') --}}
        <x-header />
        <h2>{{$sub_title}}</h2>
        @vite('resources/css/app.css')
    </header>

    <main class=" bg-grey mx-auto px-4 py-8 border">
        {{-- @yield('content') --}}
        {{$slot}}
    </main>

    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
