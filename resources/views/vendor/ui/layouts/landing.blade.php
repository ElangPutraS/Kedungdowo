@extends('ui::layouts.base-landing')

@section('body')
<div class="layout--app">

    @include('landing.topbar')

    <div class="content">
        <div class="content__inner">
            <div style="margin-top: 0" class="ui container-fluid content__body p-1">
                @yield('content')
            </div>

        </div>


    </div>
</div>
@endsection
