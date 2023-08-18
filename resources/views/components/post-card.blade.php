@props(['post'])
<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-slate-800 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}
>
    <div class="px-4 py-3">
        <div class="flex h-96 justify-center">
            <img
                class="w-auto rounded-xl"
                src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('storage/thumbnails/default.png') }}"
                alt="Blog Post illustration"
            >
        </div>

        <div class="mt-8 flex h-96 flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a
                        class="rounded-full border border-rose-500 px-3 py-1 text-xs font-semibold uppercase text-rose-500"
                        href="category/{{ $post->category->slug }}"
                        style="font-size: 10px"
                    >{{ $post->category->name }}</a>
                </div>

                <div class="mt-4">
                    <a
                        class="hover:underline"
                        href="{{ route('posts.show', ['post' => $post->slug]) }}"
                    >
                        <h1 class="text-2xl">
                            {{ $post->title }}
                        </h1>
                    </a>
                    <span class="mt-2 block text-xs text-rose-500">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-4 text-sm">
                <p>
                    {!! $post->excerpt !!}
                </p>
            </div>

            <footer class="mt-8 flex items-center justify-between">
                <div class="flex items-center text-sm">
                    <img
                        src="https://i.pravatar.cc/55?u={{ $post->id }}"
                        alt="Lary avatar"
                    >
                    <div class="ml-3">
                        <a
                            class="hover:underline"
                            href="/?user={{ $post->user->id }}&{{ request()->getQueryString() }}"
                        >
                            <p class="text-xs font-bold">{{ $post->user->name }}</p>
                        </a>
                    </div>
                </div>

                <div>
                    <a
                        class="rounded-full bg-slate-700 px-8 py-2 text-xs font-semibold transition-colors duration-300 hover:bg-slate-600"
                        href="{{ route('posts.show', ['post' => $post->slug]) }}"
                    >
                        Read More...
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
