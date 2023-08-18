<x-layout>
    <div class="mb-5 text-center">
        <h1 class="text-3xl">{{ __('message.post.update-title') }}</h1>
    </div>
    <div class="mb-32 flex min-h-full flex-col justify-center rounded-3xl bg-slate-800 px-6 py-10 lg:px-8">
        <form
            action="{{ route('user.post.update', ['post' => $data['post']->slug]) }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')
            <div class="sm:items-center">
                <div class="grid grid-cols-1 gap-2 space-x-2 p-2 sm:mx-auto sm:w-full md:grid-cols-8">
                    <div class="md:col-span-5">
                        <x-elements.form.input
                            class="rounded-xl border-2 border-cyan-400 text-left ring-0 transition-all duration-100 hover:border-4 focus:border-4 focus:border-cyan-400 focus:ring-0"
                            id="title"
                            name="title"
                            type="text"
                            value="{{ old('title') ?? $data['post']->title }}"
                            label="Title"
                            autocomplete="title"
                        />

                        <x-elements.form.input
                            class="rounded-xl border-2 border-cyan-400 text-left ring-0 transition-all duration-100 hover:border-4 focus:border-4 focus:border-cyan-400 focus:ring-0"
                            id="excerpt"
                            name="excerpt"
                            type="text"
                            value="{{ old('excerpt') ?? $data['post']->excerpt }}"
                            label="Excerpt"
                            autocomplete="excerpt"
                        />

                        <x-elements.form.select
                            class="rounded-xl border-2 border-cyan-400 text-left ring-0 transition-all duration-100 hover:border-4 focus:border-4 focus:border-cyan-400 focus:ring-0"
                            id="category"
                            name="category_id"
                            value="{{ old('category_id') ?? $data['post']->category_id }}"
                            :options="$data['category']"
                            label="Category"
                        />
                    </div>

                    <div
                        class="mt-5 flex flex-row items-center justify-center space-x-5 md:col-span-3 md:mt-0 md:flex-col">
                        <div>
                            @if ($data['post']->thumbnail)
                                <img
                                    class="w-44"
                                    src="{{ asset('storage/' . $data['post']->thumbnail) }}"
                                    alt="Thumbnail"
                                >
                            @else
                                <p class="h-44 w-44 text-center text-xs text-slate-800">
                                    No image Found
                                </p>
                            @endif
                        </div>

                        <x-elements.form.input
                            class="rounded-xl border-2 border-cyan-400 text-left ring-0 transition-all duration-100 file:h-auto hover:border-4 focus:border-4 focus:border-cyan-400 focus:ring-0"
                            id="thumbnail"
                            name="thumbnail"
                            type="file"
                            value="{{ old('thumbnail') ?? $data['post']->thumbnail }}"
                            x-on:change="handleFileChange($event)"
                        />
                    </div>
                </div>
            </div>
            <div class="p-2 sm:mx-auto sm:w-full">
                <x-elements.form.textarea
                    class="rounded-xl border-2 border-cyan-400 text-left ring-0 transition-all duration-100 hover:border-4 focus:border-4 focus:border-cyan-400 focus:ring-0"
                    id="body"
                    name="body"
                    value="{{ old('body') ?? $data['post']->body }}"
                    label="Description"
                    placeholder="Write something new..."
                    rows=7
                />
                <x-elements.form.button
                    class="hover:ring-22 hover:text- mt-8 w-full text-cyan-400 ring-2 ring-cyan-500 hover:bg-cyan-400 hover:text-slate-800"
                    type="submit"
                >UPDATE</x-elements.form.button>
            </div>
        </form>
    </div>
</x-layout>
