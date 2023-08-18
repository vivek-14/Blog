<div class="flex items-center md:order-2">
    <button
        class="mr-3 flex items-center bg-gray-800 text-sm focus:ring-1 focus:ring-rose-400 md:rounded-full"
        id="user-menu-button"
        data-dropdown-toggle="user-dropdown"
        data-dropdown-placement="bottom"
        type="button"
        aria-expanded="false"
    >
        <img
            class="h-8 w-8 rounded-full"
            src="{{ asset('images/lary-avatar.svg') }}"
            alt="user photo"
        >
    </button>
    <!-- Dropdown menu -->
    <div
        class="z-50 my-4 hidden list-none divide-y divide-rose-400 rounded-lg text-base shadow"
        id="user-dropdown"
    >
        @auth
            <div class="px-4 py-3">
                <span class="block text-sm text-rose-500">{{ Str::upper(auth()->user()->name) }}</span>
                <span class="block truncate text-sm text-cyan-400">{{ Str::lower(auth()->user()->username) }}</span>
            </div>
        @endauth

        <ul
            class="py-2"
            aria-labelledby="user-menu-button"
        >
            @auth
                <li>
                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                    >
                        @csrf
                        <button
                            class="block border-l-2 border-rose-400 border-opacity-0 px-4 py-2 text-sm text-rose-400 transition-all duration-300 ease-in-out hover:border-opacity-100 hover:text-base"
                            type="submit"
                        >Logout</button>
                    </form>
                </li>
            @else
                <x-elements.navbar.list-item href="{{ route('login') }}">Sign In</x-elements.navbar.list-item>
                <x-elements.navbar.list-item href="{{ route('register.create') }}">Register</x-elements.navbar.list-item>

            @endauth
        </ul>
    </div>
    <button
        class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-rose-400 hover:bg-slate-500 focus:outline-none focus:ring-2 focus:ring-rose-400 md:hidden"
        data-collapse-toggle="navbar-user"
        type="button"
        aria-controls="navbar-user"
        aria-expanded="false"
    >
        <svg
            class="h-5 w-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
        >
            <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
            />
        </svg>
    </button>
</div>
