<x-elements.form.dropdown>
    <x-slot name="trigger">
        <button
            class="flex w-full justify-between rounded-xl py-2 pl-3 pr-5 text-left text-sm font-semibold lg:inline-flex lg:w-32"
        >
            {{ isset($currentCategory) ? $currentCategory->name : 'All' }}

            <x-icons
                class="pointer-events-none absolute"
                name="downArrow"
                style="right: 12px; color: #a0aec0;"
            />
        </button>
    </x-slot>

    <x-elements.form.dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request('category') === null"
    >
        All
    </x-elements.form.dropdown-item>

    @foreach ($categories as $category)
        <x-elements.form.dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request('category') === $category->slug"
        >
            {{ ucwords($category->name) }}
        </x-elements.form.dropdown-item>
    @endforeach
</x-elements.form.dropdown>
