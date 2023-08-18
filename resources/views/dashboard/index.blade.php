<x-dashboard.layout title='My Articles'>
    <div class="relative col-span-7 overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-teal-400 dark:text-gray-400">
                <tr>
                    <th
                        class="px-6 py-3 text-lg"
                        scope="col"
                        colspan="2"
                    >
                        Title
                    </th>
                    <th
                        class="px-6 py-3 text-center text-lg"
                        scope="col"
                    >
                        Last_Updated
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user->posts as $post)
                    <tr class="bg-transparent">
                        <th
                            class="max-w-xs overflow-hidden whitespace-normal px-6 py-4 font-medium text-teal-400"
                            scope="row"
                            colspan="2"
                        >
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ $post->updated_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4">
                            <a
                                href=" {{ route('posts.edit', ['post' => $post->slug]) }} "
                                alt='Edit'
                            >
                                <x-icons
                                    class="pointer-events-none absolute"
                                    name="edit-solid"
                                    fill='#0284c7'
                                    currentColour=""
                                />
                            </a>

                        </td>
                        <td>
                            <form
                                action="{{ route('user.post.destroy', ['post' => $post->id]) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    <x-icons
                                        class="pointer-events-none absolute"
                                        name="delete-solid"
                                        fill='#7f1d1d'
                                    />
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-dashboard.layout>
