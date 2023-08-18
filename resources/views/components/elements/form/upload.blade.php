@props(['id', 'label' => '', 'name', 'value' => ''])

<x-elements.form.wrapper>
    <x-elements.form.label id="{{ $id }}" label="{{ $label }}" />
    <input id="{{ $id }}" name="{{ $name }}" type="file" value="{{ $value }}" {{ $attributes([ 'class'=>
    'focus:border-primary
    focus:shadow-te-cyan
    relative
    m-0
    mt-2
    block w-full
    min-w-0
    flex-auto
    border-l-2
    border-cyan-400
    hover:border-l-4
    bg-clip-padding
    px-3
    py-[0.32rem]
    text-base
    font-normal
    text-cyan-400
    transition-all
    duration-200
    ease-in-out
    file:-mx-3
    file:-my-[0.32rem]
    file:overflow-hidden
    file:rounded-none
    file:border-solid
    file:border-cyan-400
    file:border-inherit
    file:bg-transparent
    file:px-3
    file:py-[0.32rem]
    file:text-neutral-700
    file:transition
    file:duration-150
    file:ease-in-out
    file:[border-inline-end-width:1px]
    file:[margin-inline-end:0.75rem]
    focus:text-neutral-700
    focus:outline-none',
    ]) }}
    />

    @error($name)
    <x-elements.form.error-message message="{{ $message }}" />
    @enderror
</x-elements.form.wrapper>