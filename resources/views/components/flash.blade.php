@if(session()->has('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bottom-1.5 right-3 rounded-xl py-2 px-4 bg-green-700 text-sm"
    >
        <p class="text-slate-200">{{ session('success') }}</p>
    </div>
@endif
