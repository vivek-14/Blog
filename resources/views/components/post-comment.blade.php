@props(['comment'])

<comment class="flex bg-slate-800 p-6 rounded-xl space-x-6">
    <div class="flex-shrink-0 items-center">
        <img src="https://i.pravatar.cc/80?u={{ $comment->id }}" alt="" class="rounded-full">
    </div>
    <div>
        <header class="justify-between items-center">
            <h3 class="font-bold">
                {{ $comment->user->username }}
            </h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <div class="justify w-full mt-2">
            {{ $comment->comment }}
        </div>
    </div>
</comment>
