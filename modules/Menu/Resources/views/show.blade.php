@extends('ui::layouts.app')

@section('content')
  <div class="ui secondary menu">
    <div class="item">
      <h2>Menu Detail</h2>
    </div>
    <div class="right menu">
      <div class="item">
        <a href="{{ route('menu.index') }}" class="ui button basic small"><i class="icon angle left"></i>
          Back to index
        </a>
      </div>
    </div>
  </div>

  <table class="ui table definition">
        <tr><td>Id</td><td>{{ $menu->id }}</td></tr>
        <tr><td>Title</td><td>{{ $menu->title }}</td></tr>
        <tr><td>Url</td><td>{{ $menu->url }}</td></tr>
        <tr><td>Parent</td><td>{{ $menu->parent_id }}</td></tr>
        <tr><td>Location</td><td>{{ $menu->location }}</td></tr>
        <tr><td>Created at</td><td>{{ $menu->created_at }}</td></tr>
        <tr><td>Updated at</td><td>{{ $menu->updated_at }}</td></tr>
  </table>
@stop
