@props(['posts'])
<x-featured-post-card :post="$posts[0]" />
<div class="lg:grid lg:grid-cols-6">
    @foreach ($posts->skip(1) as $post)
        <x-post-card
            class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            :post="$post"
        />
    @endforeach
</div>
