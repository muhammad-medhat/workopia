@props(['active' => false, 'url' => '/', 'icon'=>''])

<a href="{{ $url }}"
   class="text-white hover:underline py-2 {{ $active ? 'text-yellow-500 hover:text-yellow-600 border-b-2 border-yellow-500' : '' }} {{ $icon ? 'flex items-center' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}

</a>
