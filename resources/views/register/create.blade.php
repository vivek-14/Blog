<x-layout>
    <div class="flex min-h-full flex-col justify-center rounded-3xl bg-slate-800 px-6 py-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight">
                Sign Up to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                class="space-y-8"
                action="/register"
                method="POST"
            >
                @csrf

                <x-elements.form.input
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    label="Name"
                />

                <x-elements.form.input
                    id="username"
                    name="username"
                    type="text"
                    value="{{ old('username') }}"
                    label="Username"
                    autocomplete="username"
                />

                <x-elements.form.input
                    id="email"
                    name="email"
                    type="email"
                    value="{{ old('email') }}"
                    label="Email Address"
                    autocomplete="email"
                />

                <x-elements.form.input
                    id="password"
                    name="password"
                    type="password"
                    value="{{ old('password') }}"
                    label="Password"
                    autocomplete="password"
                />

                <div class="!important mt-10 flex items-center justify-between">
                    <x-elements.form.a-button href="/">
                        Go Back
                    </x-elements.form.a-button>

                    <x-elements.form.button
                        class="bg-rose-500 text-center hover:bg-rose-600"
                        type="submit"
                    >
                        Register &nbsp;
                        <x-icons
                            class="pointer-events-none absolute"
                            name="rightArrow"
                            style="right: 12px; color: #a0aec0;"
                        />
                    </x-elements.form.button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?
                <a
                    class="font-semibold leading-6 text-rose-500 hover:underline"
                    href="{{ route('login') }}"
                >Log In
                    Here</a>
            </p>
        </div>
    </div>
</x-layout>
