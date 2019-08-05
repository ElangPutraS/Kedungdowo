@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Category</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('category.create') }}" class="ui button primary"><i class="icon plus"></i> Add</a>
            </div>
        </div>
    </div>

    {!! $table !!}
@stop
