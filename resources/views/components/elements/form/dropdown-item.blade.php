@props(['active' => false])

@php
    $classes = "block text-left px-3 text-sm leading-8 hover:bg-slate-600 focus:bg-slate-600";

    if ($active) $classes .= ' bg-slate-600';
@endphp

<a
    {{ $attributes(['class' => $classes]) }}
>
    {{ $slot }}
</a>
