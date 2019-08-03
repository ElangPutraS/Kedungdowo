@extends('ui::layouts.app')

@section('content')

    <div class="ui secondary menu">
        <div class="item">
            <h2>Page Detail</h2>
        </div>
        <div class="right menu">
            <div class="item">
                <a href="{{ route('page.index') }}" class="ui button basic small"><i class="icon angle left"></i>
                    Back to index
                </a>
            </div>
        </div>
    </div>

    <table class="ui table definition">
        <tr><td>Id</td><td>{{ $page->id }}</td></tr>
        <tr><td>Name</td><td>{{ $page->name }}</td></tr>
        <tr><td>Short</td><td>{{ $page->short }}</td></tr>
        <tr><td>Desc</td><td>{{ $page->desc }}</td></tr>
        <tr><td>Created by</td><td>{{ $page->created_by }}</td></tr>
        <tr><td>Updated by</td><td>{{ $page->updated_by }}</td></tr>
        <tr><td>Deleted at</td><td>{{ $page->deleted_at }}</td></tr>
        <tr><td>Created at</td><td>{{ $page->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $page->updated_at }}</td></tr>
    </table>

@stop
