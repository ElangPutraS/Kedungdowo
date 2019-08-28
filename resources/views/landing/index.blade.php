@extends('ui::layouts.landing')

@push('style')
<link href="{{ asset('css/public.css') }}" rel="stylesheet" type="text/css">
@endpush


@section('content')
    <div class="bg">
        <!------ Include the above in your HEAD tag ---------->

        <div class="ui segment borleft-teaser">
            <h2><i class="icon video"></i> Tentang Kedungdowo</h2>
        </div>
        <div class="ui segment">
            <div class="ui stackable two column very relaxed grid">
                <div class="column center aligned">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/Dh6wEm5pygA' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                <div class="column">
                    <p class="desc">Berdasarkan video yang berada di Classroom, information extraction dapat memudahkan mahasiswa dalam
                        membuat pengingat/alarm ataupun memasukkan to-do list masing-masing terkait deadline tugas ataupun
                        task lainnya yang berkaitan dengan kegiatan di kampus. Dan juga dapat membantu ketika sedang melakukan
                        penelitian untuk mendapatkan beberapa artikel ilmiah yang sesuai dengan topik atau judul yang diambil
                        oleh mahasiswa.</p>
                </div>
                <div class="ui hidden divider"></div>
            </div>
        </div>

        @forelse($content as $section)
            @if ($section->template == 'Berita')
                {{-- Berita --}}
                <div class="ui segment borleft-news">
                    <h2><i class="icon newspaper"></i> {{ $section->title }}</h2>
                </div>
                <div class="ui center aligned">
                    <div class="ui grid three column stackable">
                        @foreach($section->pages as $page)
                            <div class="column">
                                <div class="ui card full-width">
                                    <div class="image">
                                        <div  style="background: url('{{ ! empty($page->page_files) ? $page->page_files[0] : 'img/kdap.jpg' }}');
                                            background-size: cover !important;margin: auto;height: 233px"></div>
                                    </div>
                                    <div class="content gradient-background">
                                        <h4 class="card_title">{{ $page->title }}</h4>
                                        <p class="card_text" style="height: 60px;word-break: break-all">
                                            {{ substr($page->short_desc, 0, 99) . (strlen($page->short_desc) > 99 ? '...' : '') }}
                                        </p>
                                        <button class="btn card_btn">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

                <div class="ui hidden divider"></div>
            @elseif ($section->template == 'Galeri')
                {{-- Galeri --}}
                <div class="ui segment borleft-gallery">
                    <h2><i class="icon image"></i> {{ $section->title }}</h2>
                </div>
                <div class="ui center aligned">
                    <div class="ui stackable three column grid">
                        @foreach($section->pages as $page)
                        <div class="column">
                            <a href="https://kedungdowopark.wordpress.com">
                                <div class="ui fluid card">
                                    <div class="card image">
                                        <div  style="background: url('{{ $page->page_files[0] }}');
                                            background-size: cover !important;margin: auto;height: 233px"></div>
                                    </div>
                                    <div class="content gradient-background ui center aligned">
                                        <h4> {{ $page->title }} </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

                <div class="ui hidden divider"></div>
            @elseif ($section->template == 'Produk')
                {{-- Produk --}}
                <div class="ui segment borleft-product">
                    <h2><i class="icon food"></i> {{ $section->title }}</h2>
                </div>
                <div class="ui center aligned">
                    <div class="ui grid three column stackable">
                        @foreach($section->pages as $page)
                        <div class="column ui center aligned">
                            <div>
                                <div style="background: url('{{ ! empty($page->page_files) ? $page->page_files[0] : 'img/kdap.jpg' }}');"
                                     onclick="window.location('http://trovacamporall.com')" class="img-circle"></div>
                            </div>
                            <div class="ui card full-width">
                                <div style="margin-bottom: 0" class="content gradient-background">
                                    <h4 class="card_title">{{ $page->title }}</h4>
                                    <p class="card_text" style="height: 60px;word-break: break-all">
                                        {{ substr($page->short_desc, 0, 99) . (strlen($page->short_desc) > 99 ? '...' : '') }}
                                    </p>
                                    <button class="btn card_btn">Lihat</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

                <div class="ui hidden divider"></div>
            @endif
        @empty
        @endforelse

        <h2 style="align-items: center ">Feedback</h2>

        <div class="ui two column doubling stackable grid">
            <div class="column">

                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Elliot Fu</div>
                <div class="meta" style="font-style: oblique">Pengunjung</div>
                <div class="description">
                    "Elliot Fu is a film-maker from New York. Kayanya sih seperti itu ya"
                </div>
            </div>
            <div class="column">
                <img class="ui tiny floated left image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Veronika Ossi</div>
                <div class="meta" style="font-style: oblique">Pengunjung</div>
                <div class="description">
                    "Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying."
                </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Jenny Hess</div>
                <div class="meta" style="font-style: oblique">Perangkat Desa</div>
                <div class="description">
                    "Jenny is a student studying Media Management at the New School"
                </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Anton Semedi</div>
                <div class="meta" style="font-style: oblique">Pengunjung</div>
                <div class="description">
                    "Jenny is a student studying Media Management at the New School"
                </div>
            </div>
        </div>
    </div>

@endsection



