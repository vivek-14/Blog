<div x-data='{ show: false }' @click.away="show = false">

    {{-- Trigger --}}
    <div @click='show = ! show'>
        {{ $trigger  }}
    </div>

    {{-- Dropdown --}}
    <div x-show="show" class="absolute bg-slate-700 w-full mt-2 rounded-xl z-50" style="display: none">
        {{ $slot }}
    </div>

</div>
