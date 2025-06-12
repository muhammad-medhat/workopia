@props([
    'block'=>false,
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-500',
    'textClass' => 'text-black',
    'url' => '/',
    'icon'=>''])

<a href="{{ $url }}" class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }}
            px-4 py-2 rounded hover:shadow-md transition duration-300 flex items-center
            {{ $block ? 'w-full' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
