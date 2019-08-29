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
                            <i class="icon home"></i> <a href="{{ url('/') }}">Beranda</a> / <b>{{ $list->title }}</b>
                        </div>
                    </div>
                    <div class="ui card full-width">
                        <div class="content">
                            @foreach($pages as $page)

                                <div class="ui grid">
                                    <div class="four wide column">
                                        <div class="image">
                                            <div  style="background: url('{{ ! empty($page->page_files) ? $page->page_files[0] : url('img/kdap.jpg') }}');
                                                background-size: cover !important;margin: auto;height: 125px"></div>
                                        </div>
                                    </div>
                                    <div class="twelve wide column">
                                        <a href="{{ url($list->slug . '/' . $page->slug) }}">
                                            <h4 style="margin: 0px 0px 10px 0px">{{ $page->title }}</h4>
                                        </a>
                                        <p style="font-size: 14px">
                                            <b>
                                                <i class="icon user"></i> {{ $page->made_by }} &nbsp;|&nbsp;
                                                <i class="icon calendar alternate outline"></i> {{ \Carbon\Carbon::createFromTimeString($page->created_at)->format('d F Y') }}
                                            </b>
                                        </p>
                                        <p style="font-size: 14px;word-break: break-all">
                                            {{ $page->short_desc }}
                                        </p>
                                    </div>
                                </div>

                                <div class="ui inverted divider"></div>
                            @endforeach
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

