<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> {{$h1}} </h1>
    <ul>
        @forelse ($jobs as $job)
            @if ($loop->even)
                <li><strong>{{$job}}</strong> </li>
            @else
                <li>{{$loop->index}}: {{$job}}</li>
            @endif
            @empty
                <li>No jobs found.</li>
        @endforelse
    </ul>
</body>

</html>
