@props(['id', 'name', 'label' => null, 'options' => [], 'value' => null])
<x-elements.form.wrapper>
    <x-elements.form.label
        id="{{ $id }}"
        label="{{ $label }}"
    />
    <select
        name="{{ $name }}"
        title="{{ $name }}"
        {{ $attributes(['class' => 'mt-2 block bg-transparent w-full py-2 px-2 shadow-sm sm:text-sm']) }}
    >
        <option
            class="m-5 bg-slate-700 px-2"
            value=""
        >Select ...</option>
        @foreach ($options as $option)
            <option
                class="bg-slate-700 px-2 py-10 hover:bg-slate-900"
                value="{{ $option->id }}"
                {{ $option->id == $value ? 'selected' : '' }}
            >{{ $option->name }}</option>
        @endforeach
    </select>
    @error($name)
        <x-elements.form.error-message message="{{ $message }}" />
    @enderror
</x-elements.form.wrapper>
