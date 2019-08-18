@if(strlen(config('laravolt.ui.brand_image')) > 0)
    <img src="{{ asset('img/kdap.jpg') }}" alt="" class="ui image {{ $class ?? 'tiny' }}">
@endif
