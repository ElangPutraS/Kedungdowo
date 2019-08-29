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
                            <div class="ui center aligned">
                                <div class="ui stackable three column grid">
                                    @foreach($pages as $page)
                                        <div class="column">
                                            <a href="{{ url($list->slug . '/' . $page->slug) }}">
                                                <div class="ui fluid card">
                                                    <div class="card image">
                                                        <div  style="background: url('{{ $page->page_files[0] }}');
                                                            background-size: cover !important;margin: auto;height: 200px"></div>
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

