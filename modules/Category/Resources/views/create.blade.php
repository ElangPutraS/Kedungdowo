@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Add Category</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('category.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->post(route('category.store'))->multipart() !!}
	{!! form()->text('title')->label('Title') !!}
	{!! form()->text('slug')->label('Slug') !!}
	{!! form()->text('parent_id')->label('Parent') !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('category.index'))
    ]) !!}
    {!! form()->close() !!}

@stop
