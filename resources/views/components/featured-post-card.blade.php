@props(['post'])

<article
    class="rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-slate-800"
>
    <div class="px-5 py-6 lg:flex">
        <div class="flex items-center justify-center lg:mr-6">
            <img
                class="h-auto max-w-full rounded-xl"
                src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('storage/thumbnails/default.png') }}"
                alt="Blog Post illustration"
            >
        </div>

        <div class="flex w-full flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <a
                        class="rounded-full border border-rose-500 px-3 py-1 text-xs font-semibold uppercase text-rose-500"
                        href="categories/{{ $post->category->slug }}"
                        style="font-size: 10px"
                    >{{ $post->category->name }}</a>
                </div>

                <div class="mt-4">
                    <a
                        class="hover:underline"
                        href="{{ route('posts.show', ['post' => $post->slug]) }}"
                    >
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="mt-2 block text-xs text-rose-500">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-2 text-sm">
                <p>
                    {!! $post->excerpt !!}
                </p>
            </div>

            <footer class="mt-8 flex items-center justify-between">
                <div class="flex items-center text-sm">
                    <img
                        src="https://i.pravatar.cc/55"
                        alt="avatar"
                    >
                    <div class="ml-3">
                        <a href="/?user={{ $post->user->id }}&{{ request()->getQueryString() }}">
                            <h5 class="font-bold">{{ $post->user->name }}</h5>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a
                        class="rounded-full bg-slate-700 px-8 py-2 text-xs font-semibold transition-colors duration-300 hover:bg-slate-600"
                        href="{{ route('posts.show', ['post' => $post->slug]) }}"
                    >Read More...</a>
                </div>
            </footer>
        </div>
    </div>
</article>
