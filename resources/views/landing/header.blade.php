<div class="back-ground">
    <div class="ui stackable menu" style="position: absolute; left: 2%; right: 2%; top: 15px">
        <div class="item">
            <img src="{{ asset('img/kdap.jpg') }}">
        </div>
        @if(! empty(json_decode(setting()->get('Home Portal'))))
            @foreach(json_decode(setting()->get('Home Portal')) as $row)
                @php $i = 0; @endphp
                @include('partials.menu', ['row', $row])
            @endforeach
        @endif
    </div>

    <header>
        <h1 class="ml10">
            <span class="text-wrapper">
                <span class="letters">Selamat Datang di Desa Kedungdowo</span>
            </span>
        </h1>
    </header>
</div>
