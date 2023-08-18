@props(['id', 'label'])

<label
    for="{{ $id }}"
    {{ $attributes(['class' => 'block text-sm font-medium leading-6']) }}
>
    {{ $label }}
</label>
