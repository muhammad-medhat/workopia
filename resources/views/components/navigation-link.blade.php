@props(['url'=>'/', 'active'=>false])
@php
    $active_class='text-yellow-500 hover:text-yellow-600 border-b-2 border-yellow-500'
@endphp
<a href={{ $url }} class={{ $active?$active_class:'' }} >
    {{$slot}}
</a>
