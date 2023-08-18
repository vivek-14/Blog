@props(['id', 'name', 'placeholder' => '', 'value', 'cols' => 1, 'rows' => 1, 'label'])
<x-elements.form.wrapper>
    <x-elements.form.label
        id="{{ $id }}"
        label="{{ $label }}"
    />
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        title="{{ $placeholder }}"
        {{ $attributes(['class' => 'w-full bg-transparent mt-2']) }}
        placeholder="{{ $placeholder }}"
        cols="{{ $cols }}"
        rows="{{ $rows }}"
    >{{ $value }}</textarea>

    @error($name)
        <x-elements.form.error-message message="{{ $message }}" />
    @enderror
</x-elements.form.wrapper>
