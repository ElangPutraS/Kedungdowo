@extends('ui::layouts.base')

@section('body')
<div class="layout--app">

    @include('landing.topbar')

    <div class="content">
        <div class="content__inner">
            <div class="ui container-fluid content__body p-1" style="margin: 0">
                @yield('content')
            </div>

        </div>
    </div>
</div>
@endsection
