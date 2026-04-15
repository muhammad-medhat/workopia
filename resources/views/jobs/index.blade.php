<x-layout>

    <h1> {{$h1}} </h1>
    <ul>
        @forelse ($jobs as $job)
            @if ($loop->even)
                <li><strong>{{$loop->index}}:
                {{-- use the url helper --}}
                    <a href={{ route("jobs.show", $job->id) }}>
                        {{$job->title}}</a></strong> </li>
            @else
                <li>{{$loop->index}}:
                    <a href={{ route("jobs.show", $job->id) }}>
                        {{$job->title}}</a></li>
            @endif
            @empty
                <li>No jobs found.</li>
        @endforelse
    </ul>
</x-layout>
