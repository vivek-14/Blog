<div class="hidden w-full items-center justify-between md:order-1 md:mr-8 md:flex md:w-auto" id="navbar-user">
    <ul
        class="mt-4 flex flex-col rounded-lg border border-rose-400 bg-transparent p-4 font-medium md:mt-0 md:flex-row md:space-x-4 md:border-0 md:p-0">
        <li>
            <x-elements.navbar.a-button href="{{ route('home') }}" uri='home'> {{ Str::upper('home') }}
            </x-elements.navbar.a-button>
        </li>
        @auth
        <li>
            <x-elements.navbar.a-button href="{{ route('user.posts.show', ['user' => auth()->user()->id]) }}"
                uri='user.posts.show'>{{ Str::upper('Dashboard') }}</x-elements.navbar.a-button>
        </li>
        @endauth
        <li>
            <x-elements.navbar.a-button href="#" uri='news'>{{ Str::upper('News') }}</x-elements.navbar.a-button>
        </li>
    </ul>
</div>