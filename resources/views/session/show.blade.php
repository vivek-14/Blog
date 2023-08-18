<x-layout>
    <div class="flex min-h-full flex-col justify-center rounded-3xl bg-slate-800 px-6 py-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight">
                SignIn to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                class="space-y-8"
                action="{{ route('login.auth') }}"
                method="POST"
            >
                @csrf

                <div>

                    <x-elements.form.input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        autocomplete="Email Address"
                        label="Email"
                    />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            class="block text-sm font-medium leading-6"
                            for="password"
                        >Password</label>
                        <div class="text-sm">
                            <a
                                class="font-semibold text-rose-600 hover:underline"
                                href="#"
                            >Forgot password?</a>
                        </div>
                    </div>
                    <x-elements.form.input
                        id="password"
                        name="password"
                        type="password"
                        value="{{ old('password') }}"
                        autocomplete="current-password"
                    />
                </div>

                <div class="flex items-center justify-between">
                    <a
                        class="flex w-auto justify-center rounded-md bg-slate-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-800"
                        href="/"
                    >
                        <x-icons
                            class="pointer-events-none absolute"
                            name="leftArrow"
                            style="right: 12px; color: #a0aec0;"
                        />&nbsp;&nbsp;Go Back
                    </a>
                    <button
                        class="flex w-auto justify-center rounded-md bg-green-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800"
                        type="submit"
                    >
                        Login&nbsp;&nbsp;
                        <x-icons
                            class="pointer-events-none absolute"
                            name="rightArrow"
                            style="right: 12px; color: #a0aec0;"
                        />
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?
                <a
                    class="font-semibold leading-6 text-rose-500 hover:underline"
                    href="{{ route('register.create') }}"
                >Register
                    Here</a>
            </p>
        </div>
    </div>
</x-layout>
