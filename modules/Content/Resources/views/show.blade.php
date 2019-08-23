@extends('ui::layouts.app')

@section('content')
  <div class="ui secondary menu">
    <div class="item">
      <h2>Content Detail</h2>
    </div>
    <div class="right menu">
      <div class="item">
        <a href="{{ route('content.index') }}" class="ui button basic small"><i class="icon angle left"></i>
          Back to index
        </a>
      </div>
    </div>
  </div>

  <table class="ui table definition">
        <tr><td>Id</td><td>{{ $content->id }}</td></tr>
        <tr><td>Template</td><td>{{ $content->template }}</td></tr>
        <tr><td>Published</td><td>{{ $content->published }}</td></tr>
        <tr><td>Category</td><td>{{ $content->category_id }}</td></tr>
        <tr><td>Created at</td><td>{{ $content->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $content->updated_at }}</td></tr>
  </table>
@stop
