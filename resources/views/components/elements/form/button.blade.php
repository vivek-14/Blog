@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes(['class' => 'flex w-auto justify-center rounded-md px-2 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800']) }}
>
    {{ $slot }}
</button>
