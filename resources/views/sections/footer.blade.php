<footer id='footer' class="bg-slate-800 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
    <img src="{{ asset('images/illustration-4.png') }}" alt="" class="mx-auto mb-6 rounded-xl" style="width: 145px;">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-slate-700 rounded-full">
            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="lg:flex text-sm">
                @csrf
                <div class="lg:py-3 lg:px-5 lg:w-72 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <img src="{{ asset('images/mailbox-icon.svg') }}" alt="mailbox letter">
                    </label>

                    <input id="email" name="email" type="text" placeholder="Your email address"
                           class="lg:bg-transparent lg:w-full py-2 lg:py-0 pl-4 focus-within:outline-none">
                </div>


                <button type="submit"
                        class="transition-colors duration-300 bg-rose-500 hover:bg-rose-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                >
                    Subscribe
                </button>
            </form>
        </div>
        <div>
            @error('email')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>
</footer>
