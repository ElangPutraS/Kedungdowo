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
                    <p class="desc">Berdasarkan video yang berada di Classroom, information extraction dapat memudahkan mahasiswa dalam </p>
                    <p class="desc">membuat pengingat/alarm ataupun memasukkan to-do list masing-masing terkait deadline tugas ataupun </p>
                    <p class="desc">task lainnya yang berkaitan dengan kegiatan di kampus. Dan juga dapat membantu ketika sedang melakukan </p>
                    <p class="desc">penelitian untuk mendapatkan beberapa artikel ilmiah yang sesuai dengan topik atau judul yang diambil </p>
                    <p class="desc">oleh mahasiswa.</p>
                </div>
                <div class="ui hidden divider"></div>
            </div>
        </div>

        <div class="ui segment borleft-gallery">
            <h2><i class="icon image"></i> Contoh Judul</h2>
        </div>
        <div class="ui center aligned">
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

        <div class="ui hidden divider"></div>

        <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

        <div class="ui hidden divider"></div>


        <div class="ui segment borleft-news">
            <h2><i class="icon newspaper"></i> Contoh Judul</h2>
        </div>
        <div class="ui center aligned">
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

        <div class="ui hidden divider"></div>

        <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

        <div class="ui hidden divider"></div>


        <div class="ui segment borleft-product">
            <h2><i class="icon food"></i> Contoh Judul</h2>
        </div>
        <div class="ui center aligned">
            <div class="ui grid three column stackable">
                <div class="column ui center aligned">
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
                <div class="column ui center aligned">
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
                <div class="column ui center aligned">
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

        <div class="ui hidden divider"></div>

        <button class="ui primary basic button oke">View More <i class="angle right icon"></i></button>

        <div class="ui hidden divider"></div>

        <h2 style="align-items: center ">Feedback</h2>

        <div class="ui two column doubling stackable grid">
            <div class="column">

                    <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                    <div class="header">Elliot Fu</div>
                    <div class="meta">Pengunjung</div>
                    <div class="description">
                        Elliot Fu is a film-maker from New York. Kayanya sih seperti itu ya
                    </div>
            </div>
            <div class="column">
                    <img class="ui tiny floated left image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                    <div class="header">Veronika Ossi</div>
                    <div class="meta">Pengunjung</div>
                    <div class="description">
                        Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
                    </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Jenny Hess</div>
                <div class="meta">Perangkat Desa</div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School
                </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Anton Semedi</div>
                <div class="meta">Pengunjung</div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School
                </div>
            </div>
        </div>
    </div>

@endsection

