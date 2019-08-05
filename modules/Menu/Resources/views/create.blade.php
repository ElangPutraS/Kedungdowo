@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Add Menu</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('menu.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->post(route('menu.store'))->multipart() !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->text('url')->label('Url') !!}
	{!! form()->text('parent_id')->label('Parent') !!}
	{!! form()->text('location')->label('Location') !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('menu.index'))
    ]) !!}
    {!! form()->close() !!}

@stop
