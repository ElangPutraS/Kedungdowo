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
                                        <a href="{{ url($section->slug . '/' . $page->slug) }}"><button class="btn card_btn">Lihat</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

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
                            <a href="{{ url($section->slug . '/' . $page->slug) }}">
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
                                <div style="background: url('{{ ! empty($page->page_files) ? $page->page_files[0] : 'img/kdap.jpg' }}');" class="img-circle"></div>
                            </div>
                            <div class="ui card full-width">
                                <div style="margin-bottom: 0" class="content gradient-background">
                                    <h4 class="card_title">{{ $page->title }}</h4>
                                    <p class="card_text" style="height: 60px;word-break: break-all">
                                        {{ substr($page->short_desc, 0, 99) . (strlen($page->short_desc) > 99 ? '...' : '') }}
                                    </p>
                                    <a href="{{ url($section->slug . '/' . $page->slug) }}"><button class="btn card_btn">Lihat</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="ui hidden divider"></div>
            @endif
            <a href="{{ url($section->slug) }}" class="ui primary basic button oke">View More <i class="angle right icon"></i></a>

            <div class="ui hidden divider"></div>
        @empty
        @endforelse

        <h2 style="align-items: center ">Feedback</h2>

        <div class="slideshow-container">

            <div class="mySlides">
                <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                <p class="author">- John Keats</p>
                <div class="meta" style="font-style: oblique; font-weight: bold">Pengunjung</div>
            </div>

            <div class="mySlides">
                <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                <p class="author">- Ernest Hemingway</p>
                <div class="meta" style="font-style: oblique; font-weight: bold">Pengunjung</div>
            </div>

            <div class="mySlides">
                <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                <p class="author">- Thomas A. Edison</p>
                <div class="meta" style="font-style: oblique; font-weight: bold">Pengunjung</div>
            </div>

            <div class="mySlides">
                <q>Elliot Fu is a film-maker from New York. Kayanya sih seperti itu ya.</q>
                <p class="author">- Elliot Fu</p>
                <div class="meta" style="font-style: oblique; font-weight: bold">Pengunjung</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

@endsection

@push('script')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
@endpush



