@extends('layout')
@section('title', 'Jobs List')
@section('sub_title', 'Available Jobs')
@section('content')
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
@endsection
