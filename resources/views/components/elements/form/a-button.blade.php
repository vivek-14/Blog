@props(['href' => '#'])

<a
    href="{{ $href }}"
    {{ $attributes(['class' => 'flex w-auto justify-center rounded-md bg-rose-900 px-2 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-rose-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800']) }}
>
    {{ $slot }}
</a>
