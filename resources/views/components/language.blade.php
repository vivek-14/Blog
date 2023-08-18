@foreach(Config::get('app.locales') as $locals)
    <a href="{{ route('change.language', ['locale' => $locals ]) }}"
       class="{{ session('locale') === $locals ? 'text-blue-500' : 'text-white' }} ml-2 text-xs font-semibold  uppercase">{{ $locals  }}</a>
@endforeach



{{--<a href="{{ route('change.language', ['locale' => 'fr']) }}"--}}
{{--   class="{{ session('locale') === 'fr' ? 'text-blue-500' : 'text-white' }} ML-3 text-xs font-semibold uppercase">FR</a>--}}
{{--        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">--}}
{{--            Subscribe for Updates--}}
{{--        </a>--}}
