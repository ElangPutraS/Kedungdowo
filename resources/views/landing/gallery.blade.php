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
                            <div class="ui grid four column">
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
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
                                    <h4 style="margin: 0px 0px 5px 0px">Sampel</h4>
                                    <p style="font-size: 14px">
                                        <i class="icon calendar alternate outline"></i> 14 Agustus 2019
                                    </p>
                                </div>
                            </div>

                            <div class="ui inverted divider"></div>

                            <div class="ui grid">
                                <div class="four wide column">
                                    <img src="{{ asset('img/kdap.jpg') }}">
                                </div>
                                <div class="twelve wide column">
                                    <h4 style="margin: 0px 0px 5px 0px">Sampel</h4>
                                    <p style="font-size: 14px">
                                        <i class="icon calendar alternate outline"></i> 14 Agustus 2019
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

