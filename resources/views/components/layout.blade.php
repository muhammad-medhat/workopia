@props([ 'title' => 'Workopia',
'description' => 'Find Your Dream Job', 'sub_title' => 'Welcome to Workopia',
'keywords' => 'jobs, work, career'])

{{-- Layout component for the application --}}
{{-- This component includes the header, footer, and main content area --}}
{{-- It uses Blade components for the header and hero section --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        {{-- @include('partials.nav') --}}
        <x-header />
        <h2>{{$sub_title}}</h2>
    </header>

    <main class=" bg-grey mx-auto px-4 py-8 border">
        {{-- display hero on home page --}}
        @if (request()->is('/'))
            <x-hero />
            <x-top-banner />
        @endif
        {{$slot}}
    </main>

    <footer>
        <x-bottom-banner />
        <div class="container mx-auto text-center py-4">
            <p class="text-gray-600">© 2025 Workopia. All rights reserved.</p>
        </div>
    </footer>
    <script src={{asset('js/script.js')}}></script>
</body>
</html>
