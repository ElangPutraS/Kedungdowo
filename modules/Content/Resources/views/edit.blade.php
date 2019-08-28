@extends('ui::layouts.app')

@push('style')
<style>
    .gradient-background {
        color: white !important;
        background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%) !important;
    }

    .img-circle {
        border-radius: 50%;
        height: 230px;
        width: 230px;
    }

    .btn {
        color: #ffffff;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .card_title {
        color: #ffffff;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin: 0px !important;
    }

    .card_text {
        color: #ffffff;
        font-size: 1.2rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }
</style>
@endpush

@section('content')
  <div class="ui secondary menu">
    <div class="menu full-width">
      <div class="item float-left" style="padding-left: 0px;">
        <h1 style="font-weight: normal">Edit Content</h1>
      </div>
    </div>
  </div>

  <div class="ui card full-width">
    <div class="content">
      {!! form()->bind($content)->put(route('content.update', $content->getKey()))->multipart() !!}
        {!! form()->text('title', old('title', $content->title))->placeholder('Judul')->label('Judul')->required() !!}
        <div class="field required">
            <label>Kategori</label>
            <div class="ui dropdown search selection">
                <select name="category_id" id="category_id" required="required" class="noselection">
                    <option value="">-- Pilih Kategori --</option>
                    @if(! empty(json_decode(setting()->get('List Category'))))
                        @each('partials.option', json_decode(setting()->get('List Category')), 'row', '')
                    @endif
                </select><i class="dropdown icon"></i><input class="search" autocomplete="off" tabindex="0">
                <div class="default text">-- Pilih Kategori --</div>
                <div class="menu" tabindex="-1" style="max-height: 100px !important;">
                    @if(! empty(json_decode(setting()->get('List Category'))))
                        @foreach(json_decode(setting()->get('List Category')) as $row)
                            @php $i = 0; @endphp
                            @include('partials.select', ['row' => $row, 'update' => null])
                        @endforeach
                    @endif
                </div>
            </div>
        </div>


        {!! form()->select('template', [
                            '' => '-- Pilih Template --',
                            'Berita' => 'Berita',
                            'Galeri' => 'Galeri',
                            'Produk' => 'Produk'
        ], old('template', $content->template))->label('Template')->required() !!}
        <div class="ui segment center aligned" id="berita_example" {{ old('template', $content->template) == 'Berita' ? '' : 'hidden' }}>
            <h2>Contoh Judul</h2>
            <div class="ui grid three column stackable">
                <div class="column">
                    <div class="ui card full-width">
                        <div class="image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui card full-width">
                        <div class="image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="ui card full-width">
                        <div class="image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui segment center aligned" id="galeri_example"  {{ old('template', $content->template) == 'Galeri' ? '' : 'hidden' }}>
            <h2>Daya Tarik Utama Kami</h2>
            <div class="ui stackable three column grid">
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap1.jpg')}}">
                            </div>
                            <div class="content gradient-background">
                                <h4> Kedungdowo Adventure Park </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap1.jpg')}}">
                            </div>
                            <div class="content gradient-background">
                                <h4> Kedungdowo Adventure Park </h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap1.jpg')}}">
                            </div>
                            <div class="content gradient-background">
                                <h4> Kedungdowo Adventure Park </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="ui segment center aligned" id="produk_example"  {{ old('template', $content->template) == 'Produk' ? '' : 'hidden' }}>
            <h2>Contoh Judul</h2>
            <br>
            <div class="ui grid three column stackable">
                <div class="column">
                    <div>
                        <img src="{{ asset('img/kdap1.jpg') }}" onclick="window.location('http://trovacamporall.com')"
                             class="img-circle">
                    </div>
                    <div class="ui card full-width">
                        <div style="margin-bottom: 0" class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="{{ asset('img/kdap1.jpg') }}" onclick="window.location('http://trovacamporall.com')"
                             class="img-circle">
                    </div>
                    <div class="ui card full-width">
                        <div style="margin-bottom: 0" class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <img src="{{ asset('img/kdap1.jpg') }}" onclick="window.location('http://trovacamporall.com')"
                             class="img-circle">
                    </div>
                    <div class="ui card full-width">
                        <div style="margin-bottom: 0" class="content gradient-background">
                            <h4 class="card_title">Contoh Konten</h4>
                            <p class="card_text">Desa Kedungdowo merupakan desa wisata yang penuh dengan kenangan.</p>
                            <button class="btn card_btn">Lihat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="check-publish">
            {!! form()->checkbox('published')->label('Terbitkan') !!}
            <span><small><i>Centang checkbox untuk menerbitkan konten</i></small></span>
        </div>
        <br>

      <div class="float-right">
        {!! form()->action([
          form()->link('Batal', route('content.index'))->addClass('ui red button'),
          form()->submit('Simpan')->addClass('ui blue button')
        ]) !!}
      </div>

      {!! form()->close() !!}
    </div>
  </div>
@stop

@push('script')
<script>
    $(document).ready(function () {
        $('select[name="template"]').change(function () {
            var value = $(this).val();
            $('#berita_example').hide();
            $('#galeri_example').hide();
            $('#produk_example').hide();
            if (value === 'Galeri') {
                $('#galeri_example').show();
            } else if (value === 'Berita') {
                $('#berita_example').show();
            } else if (value === 'Produk') {
                $('#produk_example').show();
            }
        });

        $('#category_id').dropdown('set selected', {{ old('category_id', $content->category_id) }});
    });
</script>
@endpush
