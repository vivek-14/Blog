@props(['id', 'name', 'label' => null, 'type' => 'text', 'autocomplete' => 'off', 'required' => false, 'value' => null])
<x-elements.form.wrapper>
    @if ($label != null)
        <x-elements.form.label
            id="{{ $id }}"
            label="{{ $label }}"
        />
    @endif
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ $value }}"
        autocomplete="{{ $autocomplete }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes(['class' => 'mt-2 block bg-transparent w-full py-1.5 px-2 shadow-sm placeholder:text-gray-400 sm:text-sm sm:leading-6']) }}
    >

    @error($name)
        <x-elements.form.error-message message="{{ $message }}" />
    @enderror
</x-elements.form.wrapper>
