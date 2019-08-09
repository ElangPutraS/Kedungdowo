@extends('ui::layouts.app')

@section('content')
  <div class="ui secondary menu">
    <div class="item">
      <h2>Category Detail</h2>
    </div>
    <div class="right menu">
      <div class="item">
        <a href="{{ route('category.index') }}" class="ui button basic small"><i class="icon angle left"></i>
          Back to index
        </a>
      </div>
    </div>
  </div>

  <table class="ui table definition">
        <tr><td>Id</td><td>{{ $category->id }}</td></tr>
        <tr><td>Title</td><td>{{ $category->title }}</td></tr>
        <tr><td>Slug</td><td>{{ $category->slug }}</td></tr>
        <tr><td>Parent</td><td>{{ $category->parent_id }}</td></tr>
        <tr><td>Created at</td><td>{{ $category->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $category->updated_at }}</td></tr>
  </table>
@stop
