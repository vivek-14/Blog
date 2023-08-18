@props(['href' => '#'])

<li>
    <a
        href="{{ $href }}"
        {{ $attributes(['class' => 'block border-l-2 border-rose-400 border-opacity-0 px-4 py-2 text-sm text-rose-400 transition-all duration-300 ease-in-out hover:border-opacity-100 hover:text-base']) }}
    > {{ $slot }}</a>
</li>
