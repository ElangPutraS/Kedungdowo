@extends('ui::layouts.app')

@section('content')
<div class="ui secondary menu">
    <div class="menu full-width">
        <div class="item float-left" style="padding-left: 0px;">
            <h3>Tambah Kategori</h1>
        </div>
    </div>
</div>

<div class="ui card full-width">
    <div class="content">
        {!! form()->post(route('category.store'))->multipart() !!}
        {!! form()->text('title')->label('Judul')->required()->placeholder('Judul Kategori')->attribute('maxlength', 191) !!}
        <div class="required field">
            <label>Parent</label>
            <div class="ui fluid search selection dropdown">
                <input type="hidden" name="parent_id">
                <i class="dropdown icon"></i>
                <div class="default text">-- Tidak Ada --</div>
                <div class="menu">
                    <div class="item" data-value="0">-- Tidak Ada --</div>
                    @if(! empty(json_decode(setting()->get('List Category'))))
                    @foreach(json_decode(setting()->get('List Category')) as $row)
                    @php $i = 0; @endphp
                    @include('partials.select', ['row' => $row, 'update' => null])
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="float-right">
            {!! form()->action([
            form()->link('Batal', route('category.index'))->addClass('ui red button'),
            form()->submit('Simpan')->addClass('ui blue button')
            ]) !!}
        </div>

        {!! form()->close() !!}
    </div>
</div>
@stop
