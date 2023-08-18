<!doctype html>

<title>vivek.dev</title>
@vite('resources/css/app.css')
@vite('resources/js/app.js')
<link
    href="https://fonts.gstatic.com"
    rel="preconnect"
>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
    rel="stylesheet"
>
<script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer
></script>
<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body
    class="bg-slate-900 text-teal-500"
    style="font-family: Open Sans, sans-serif;"
>
    {{-- Navbar --}}
    @include('sections.navbar')
    <section class="px-6 py-8">
        {{-- Header --}}
        @if (Route::is('home'))
            @include('sections.header')
        @endif

        <main class="mx-auto mt-6 max-w-7xl space-y-6 lg:mt-20">
            {{ $slot }}
        </main>

        {{--  Footer  --}}
        @include('sections.footer')
    </section>
    <x-flash />
</body>
