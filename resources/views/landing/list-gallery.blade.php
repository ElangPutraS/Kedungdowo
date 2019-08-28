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
                            <i class="icon home"></i> Beranda / <b>Contoh Kategori</b>
                        </div>
                    </div>
                    <div class="ui card full-width">
                        <div class="content">
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
                        </div>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui card full-width">
                        <div class="content"><b><i class="icon list th"></i> Kategori</b></div>
                        <div class="content">
                            <i class="icon chevron right"></i> Semua

                            <div class="ui inverted divider"></div>

                            <i class="icon chevron right"></i> Kategori Lain
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

