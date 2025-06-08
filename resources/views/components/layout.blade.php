<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        {{-- @include('partials.nav') --}}
        <x-header />
        <h2>{{$sub_title}}</h2>
    </header>

    <main class="container mx-auto px-4 py-8 border">
        {{-- @yield('content') --}}
        {{$slot}}
    </main>

    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
