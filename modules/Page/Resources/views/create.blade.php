@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Add Page</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('page.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    {!! form()->post(route('page.store'))->multipart() !!}
	{!! form()->text('name')->label('Name') !!}
	{!! form()->textarea('short')->label('Short') !!}
	{!! form()->textarea('desc')->label('Desc') !!}
	{!! form()->text('created_by')->label('Created by') !!}
	{!! form()->text('updated_by')->label('Updated by') !!}
    {!! form()->action([
        form()->submit('Save'),
        form()->link('Cancel', route('page.index'))
    ]) !!}
    {!! form()->close() !!}

@stop
