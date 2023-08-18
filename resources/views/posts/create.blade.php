<x-layout>
    <div class="mb-5 text-center">
        <h1 class="text-3xl">{{ __('message.post.create-title') }}</h1>
    </div>
    <div class="mb-32 flex min-h-full flex-col justify-center rounded-3xl bg-slate-800 px-6 py-10 lg:px-8">
        <form
            action="{{ route('posts.store') }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf
            <div class="grid gap-4 space-x-2 sm:grid-cols-1 sm:items-center lg:grid-cols-3">
                <div class="p-2 sm:mx-auto sm:w-full">
                    <x-elements.form.input
                        class="border-b-2 border-cyan-400 text-left ring-0 focus:border-0"
                        id="title"
                        name="title"
                        type="text"
                        value="{{ old('title') }}"
                        label="Title"
                        autocomplete="title"
                    />

                    <x-elements.form.input
                        class="border-b-2 border-cyan-400 text-left ring-0 focus:border-0"
                        id="excerpt"
                        name="excerpt"
                        type="text"
                        value="{{ old('excerpt') }}"
                        label="Excerpt"
                        autocomplete="excerpt"
                    />

                    <x-elements.form.select
                        class="rounded-md text-left focus:border-none focus:ring-2 focus:ring-rose-400"
                        id="category"
                        name="category_id"
                        value="{{ old('category_id') }}"
                        :options="$data['category']"
                        label="Category"
                    />

                    <x-elements.form.upload
                        id="thumbnail"
                        name="thumbnail"
                        label="Thumbnail"
                    />
                </div>
                <div class="p-2 sm:mx-auto sm:w-full lg:col-span-2">
                    <x-elements.form.textarea
                        class="mt-2 rounded-xl px-2 py-3 text-left ring-2 ring-cyan-400 focus:ring-2 focus:ring-rose-400"
                        id="body"
                        name="body"
                        value="{{ old('body') }}"
                        label="Description"
                        placeholder="Write something new..."
                        rows=7
                    />
                    <x-elements.form.button
                        class="hover:ring-22 hover:text- mt-8 w-full text-cyan-400 ring-2 ring-cyan-500 hover:bg-cyan-400 hover:text-slate-800"
                        type="submit"
                    >PUBLISH</x-elements.form.button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
