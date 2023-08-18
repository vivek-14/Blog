@props(['post'])
<x-layout>
    <article class="mx-auto max-w-full gap-x-10 lg:grid lg:grid-cols-12">
        <div class="col-span-4 mb-10 lg:pt-14 lg:text-center">
            <img
                class="rounded-xl"
                src="{{ asset('images/illustration-1.png') }}"
                alt=""
            >

            <p class="mt-4 block text-xs text-gray-400">
                Published
                <time>{{ $post->created_at->diffForHumans() }}</time>
            </p>

            <div class="mt-4 flex items-center text-sm lg:justify-center">
                <img
                    src="{{ asset('images/lary-avatar.svg') }}"
                    alt="Lary avatar"
                >
                <div class="ml-3 text-left">
                    <h5 class="font-bold">{{ $post->user->name }}</h5>
                </div>
            </div>
        </div>

        <div class="col-span-8">
            <div class="mb-6 hidden justify-between lg:flex">
                <a
                    class="relative inline-flex items-center text-lg transition-colors duration-300 hover:text-blue-500"
                    href="/"
                >
                    <svg
                        class="mr-2"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                    >
                        <g
                            fill="none"
                            fill-rule="evenodd"
                        >
                            <path
                                stroke="#000"
                                stroke-opacity=".012"
                                stroke-width=".5"
                                d="M21 1v20.16H.84V1z"
                            >
                            </path>
                            <path
                                class="fill-current"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"
                            >
                            </path>
                        </g>
                    </svg>
                    Back to Posts
                </a>

                <div class="space-x-2">
                    <x-category-label :category="$post->category" />
                </div>
            </div>

            <h1 class="mb-10 text-3xl font-bold lg:text-4xl">
                {{ $post->title }}
            </h1>

            <div class="space-y-4 leading-loose lg:text-lg">
                {!! $post->body !!}
            </div>
        </div>

        <section class="col-span-8 col-start-5 mt-10 space-y-6">
            <x-panel>
                <form
                    class="w-full"
                    action="{{ route('comment.store', ['post' => $post->slug]) }}"
                    method="post"
                >
                    @csrf
                    @if (auth()->check())
                        <header class="flex items-center space-x-4">
                            <div class="flex-shrink-0 items-center">
                                <img
                                    class="rounded-full"
                                    src="https://i.pravatar.cc/40?u={{ auth()->user()->id }}"
                                    alt=""
                                >
                            </div>
                            <h2>Want to participate?</h2>
                        </header>
                        <label>
                            <textarea
                                class="mt-2 w-full rounded-xl border border-cyan-400 bg-transparent p-4 focus:border-cyan-500 focus:outline-none"
                                name="comment"
                                placeholder="Write your thoughts!"
                            ></textarea>
                        </label>
                        @error('comment')
                            <p class="mt-2 text-xs text-rose-500">{{ $message }}</p>
                        @enderror
                        <div class="mt-2 flex justify-end">
                            <button
                                class="rounded-3xl bg-rose-500 px-10 py-2 font-semibold text-white hover:bg-rose-600"
                                type="submit"
                            >POST</button>
                        </div>
                    @else
                        <header class="flex items-center justify-center space-x-4">
                            <h1 class="text-2xl">
                                <a
                                    class="bolder underline"
                                    href="{{ route('login') }}"
                                >Login</a> to comment!
                            </h1>
                        </header>
                    @endif
                </form>
            </x-panel>

            @foreach ($post->comments->sortByDesc('created_at') as $comment)
                <x-post-comment :comment="$comment" />
            @endforeach
        </section>
    </article>

</x-layout>
