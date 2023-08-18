<header class="max-w-xl mx-auto mt-20 text-center">

    <h1 class="text-3xl text-rose-500">
        {{ __('message.header.welcome') }}
    </h1>

    <p class="text-sm mt-4">
        {{ __('message.header.description') }}
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">

        <!--  Category -->
        <div class="relative lg:inline-flex items-center lg:items-left bg-slate-700 rounded-xl">
            <x-category-dropdown/>
        </div>

        <!-- Other Filters -->
        {{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}
        {{--            <label>--}}
        {{--                <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">--}}
        {{--                    <option value="category" disabled selected>Other Filters--}}
        {{--                    </option>--}}
        {{--                    <option value="foo">Foo--}}
        {{--                    </option>--}}
        {{--                    <option value="bar">Bar--}}
        {{--                    </option>--}}
        {{--                </select>--}}
        {{--            </label>--}}

        {{--            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"--}}
        {{--                 height="22" viewBox="0 0 22 22">--}}
        {{--                <g fill="none" fill-rule="evenodd">--}}
        {{--                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">--}}
        {{--                    </path>--}}
        {{--                    <path fill="#222"--}}
        {{--                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>--}}
        {{--                </g>--}}
        {{--            </svg>--}}
        {{--        </div>--}}

        <!-- Search -->

        <div class="relative flex lg:inline-flex items-center bg-slate-700 rounded-xl  w-full lg:w-56 ">
            <form method="GET" action="/" class="w-full bg-slate-700 rounded-xl">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something..."
                       value="{{ request('search') }}"
                       class="bg-slate-700 font-semibold rounded-xl text-sm w-full placeholder-cyan-500 px-2 py-2">

            </form>
        </div>
    </div>
</header>
