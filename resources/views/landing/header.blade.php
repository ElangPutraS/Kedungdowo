<div class="back-ground">
    <div class="tablet or lower hidden">
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
    </div>

    <header style="color: white">
        <img src="http://localhost:8000/img/kdap.jpg" style="
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
        ">
        <h1>
            DESA KEDUNGDOWO
        </h1>
        <h3>KECAMATAN PONCOWARNO KABUPATEN KEBUMEN</h3>

    </header>
</div>
