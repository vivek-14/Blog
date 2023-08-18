<x-layout>
    {{-- Content --}}
    @if ($posts->count())
        <x-post-grid :posts="$posts"/>
    
        {{ $posts->onEachSide(0)->links()  }}
    @else
        <p class="text-center">No posts yet. Please check back later.</p>
    @endif

</x-layout>
