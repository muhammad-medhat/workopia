<x-layout>
    <x-slot name="title">Jobs</x-slot>
    <x-slot name="sub_title">Job Listings</x-slot>
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
</x-layout>
