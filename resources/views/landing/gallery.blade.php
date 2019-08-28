            <div class="row">
@extends('ui::layouts.landing')

@push('style')
    <link href="{{ asset('css/public.css') }}" rel="stylesheet" type="text/css">
@endpush


@section('content')
    <div class="bg">
        <div class="ui grid" style="margin-top: -220px; margin-left: 5%;margin-right: 5%">
            <div class="row">
                <div class="twelve wide column">
                    <div class="ui card full-width">
                        <div class="content">
                            <i class="icon home"></i> Beranda / Kategori / <b>Contoh Judul</b>
                        </div>
                    </div>
                    <div class="ui card full-width">
                        <div class="content">
                            <b>
                                <i class="icon user"></i> Elang &nbsp;|&nbsp;
                                <i class="icon calendar alternate outline"></i> 14 Agustus 2019
                            </b>
                        </div>
                        <div class="content">
                            <div class="ui center aligned">
                                <div class="wrap">
                                    <!-- Define all of the tiles: -->
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="{{asset('img/d.jpg')}}"/>
                                            <div class="titleBox">
                                                Butterfly
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="{{asset('img/a.jpg')}}"/>
                                            <div class="titleBox">
                                                An old greenhouse
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="{{asset('img/b.jpg')}}"/>
                                            <div class="titleBox">
                                                Purple wildflowers
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="{{asset('img/c.jpg')}}"/>
                                            <div class="titleBox">
                                                A birdfeeder
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="{{asset('img/e.jpg')}}"/>
                                            <div class="titleBox">
                                                Crocus close-up
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/4.jpg"/>
                                            <div class="titleBox">
                                                The garden shop
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/5.jpg"/>
                                            <div class="titleBox">
                                                Spring daffodils
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/6.jpg"/>
                                            <div class="titleBox">
                                                Iris along the path
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/8.jpg"/>
                                            <div class="titleBox">
                                                The garden blueprint
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/9.jpg"/>
                                            <div class="titleBox">
                                                The patio
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/11.jpg"/>
                                            <div class="titleBox">
                                                Bumble bee collecting nectar
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="boxInner">
                                            <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/12.jpg"/>
                                            <div class="titleBox">
                                                Winding garden path
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui card full-width">
                        <div class="content"><b><i class="icon pencil alternate"></i> Post Lainnya</b></div>
                        <div class="content">
                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="twelve wide column">
                                    <h4 style="margin: 0px">Sampel</h4>
                                    <p style="font-size: 12px">
                                        Lorem ipsum dolor sit amit.
                                    </p>
                                </div>
                            </div>

                            <div class="ui inverted divider"></div>

                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="twelve wide column">
                                    <h4 style="margin: 0px">Sampel</h4>
                                    <p style="font-size: 12px">
                                        Lorem ipsum dolor sit amit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

