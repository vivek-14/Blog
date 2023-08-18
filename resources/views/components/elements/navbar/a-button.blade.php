@props(['href' => '#', 'uri'])

@php
$class = 'd block border-b-2 border-rose-400 px-4 py-2 text-sm text-rose-400 transition-all duration-200 ease-in-out
hover:border-opacity-100';
Route::currentRouteName() == $uri ? ($class .= ' border-opacity-100') : ($class .= ' border-opacity-0');

@endphp

<a href="{{ $href }}" {{ $attributes(['class'=> $class]) }}
    >
    {{ $slot }}
</a>