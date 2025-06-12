@props(['active' => false,'mobile'=>false, 'url' => '/', 'icon'=>''])

@if ($mobile)
    <a href="{{ $url }}"
       class="block px-4 py-2 text-white hover:bg-blue-700 {{ $active ? 'bg-blue-600' : '' }}
       {{ $icon ? 'flex items-center' : '' }}">
       @if ($icon)
       <i class="fa fa-{{ $icon }} mr-1"></i>
      @endif
       {{ $slot }}
    </a>
@else
       <a href="{{ $url }}"
       class="text-white hover:underline py-2 {{ $active ? 'text-yellow-500 hover:text-yellow-600 border-b-2 border-yellow-500' : '' }} {{ $icon ? 'flex items-center' : '' }}">
       @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
       @endif
       {{ $slot }}

    </a>

    @endif
