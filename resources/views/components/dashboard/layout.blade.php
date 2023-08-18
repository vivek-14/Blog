@props(['title' => 'XYZ'])

<x-layout>
    <div class="flex justify-between py-2 sm:border-b-2">
        <h1 class="border-teal-500 py-2 text-center text-2xl uppercase md:text-left">
            {{ $title }} </h1>

        <a
            class="items-center rounded-xl bg-teal-400 px-4 py-3 text-center text-slate-800"
            href="{{ route('posts.create') }}"
        >Create New</a>
    </div>
    <div class="grid rounded-xl bg-slate-800 p-2 sm:grid-cols-1 md:grid-cols-8 md:gap-2">
        <x-dashboard.sidebar />
        {{ $slot }}
    </div>
</x-layout>
