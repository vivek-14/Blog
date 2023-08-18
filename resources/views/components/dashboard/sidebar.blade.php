<div class="h-auto border-b border-teal-400 p-2 md:border-b-0">
    <div class="flex flex-row md:flex-col sm:space-x-5 md:space-x-0 md:space-y-2 justify-center">
        <div
            class="py-2 border-rose-300 hover:border-r-4 transition-all duration-200 {{ Route::currentRouteName() == 'user.posts.show' ? ' md:border-r-4' : ' md:border-r-2' }}">
            <a href="{{ route('user.posts.show', ['user' => auth()->user()->id]) }}" class="py-2 text-center">
                <h3 class="text-xl">Posts</h3>
            </a>
        </div>
        <div class="py-2 border-rose-300 hover:border-r-4 transition-all duration-200">
            <a href="#" class="py-2 text-center">
                <h3 class="text-xl">Profile</h3>
            </a>
        </div>

    </div>
</div>