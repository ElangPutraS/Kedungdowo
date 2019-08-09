@extends('ui::layouts.app')

@section('content')
  <div class="ui secondary menu">
    <div class="menu full-width">
      <div class="item float-left" style="padding-left: 0px;">
        <h1 style="font-weight: normal">Menu</h1>
      </div>
      <div class="item float-right" style="padding-right: 0px;margin-left: auto">
        <form method="GET" action="{{ request()->url() }}">
          <div class="ui search">
            <div class="ui icon input">
              <input class="prompt" type="text" name="search" value="{{ request()->query('search') ?? '' }}"
                     placeholder="Cari..." style="border-radius: 5px">
              <i class="search icon"></i>
            </div>
            <div class="results"></div>
          </div>
        </form>
      </div>
    </div>
  </div>

  {!! $table !!}
@stop
