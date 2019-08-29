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
                            <i class="icon home"></i> <a href="{{ url('/') }}">Beranda</a> / <a href="{{ url($cat->slug) }}">{{ $cat->title }}</a> / <b>{{ $page->title }}</b>
                        </div>
                    </div>
                    <div class="ui card full-width">
                        <div class="content">
                            <b>
                                <i class="icon user"></i> {{ $page->made_by }} &nbsp;|&nbsp;
                                <i class="icon calendar alternate outline"></i> {{ \Carbon\Carbon::createFromTimeString($page->created_at)->format('d F Y') }}
                            </b>
                        </div>
                        <div class="content">
                            <div class="ui grid four column">
                                @foreach($page->page_files as $p)
                                    <div class="column">
                                        <div  style="background: url('{{ ! empty($p) ? $p : 'img/kdap.jpg' }}');
                                            background-size: cover !important;margin: auto;height: 200px"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four wide column">
                    <div class="ui card full-width">
                        <div class="content"><b><i class="icon pencil alternate"></i> Post Lainnya</b></div>
                        <div class="content">
                            @foreach($pages as $p)
                                <div class="ui grid">
                                    <div class="four wide column">
                                        <div  style="background: url('{{ ! empty($p->page_files) ? $p->page_files[0] : url('img/kdap.jpg') }}');
                                            background-size: cover !important;margin: auto;height: 40px"></div>
                                    </div>
                                    <div class="twelve wide column">
                                        <a href="{{ url($cat->slug . '/' . $p->slug) }}"><h4 style="margin: 0px 0px 5px 0px">{{ $p->title }}</h4></a>
                                        <p style="font-size: 14px">
                                            <i class="icon calendar alternate outline"></i> {{ \Carbon\Carbon::createFromTimeString($p->created_at)->format('d F Y') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="ui inverted divider"></div>
                            @endforeach
                            <div class="ui center aligned full-width">
                                <a href="{{ url($cat->slug) }}" class="ui center aligned full-width">
                                    <b>LIHAT LAINNYA</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

