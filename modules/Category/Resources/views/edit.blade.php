@extends('ui::layouts.app')

@section('content')
<div class="ui secondary menu">
    <div class="menu full-width">
        <div class="item float-left" style="padding-left: 0px;">
            <h1 style="font-weight: normal">Edit Kategori</h1>
        </div>
    </div>
</div>

<div class="ui card full-width">
    <div class="content">
        {!! form()->bind($category)->put(route('category.update', $category->getKey()))->multipart() !!}
        {!! form()->text('title')->label('Judul')->required()->attribute('maxlength', 191) !!}
        <div class="required field">
            <label>Parent</label>
            <div class="ui fluid search selection dropdown">
                <input type="hidden" name="parent_id" value="{{ old('parent_id', $category->parent_id ?? 0) }}">
                <i class="dropdown icon"></i>
                <div class="default text">-- Tidak Ada --</div>
                <div class="menu">
                    <div class="item" data-value="0">-- Tidak Ada --</div>
                    @if(! empty(json_decode(setting()->get('List Category'))))
                    @foreach(json_decode(setting()->get('List Category')) as $row)
                    @php $i = 0; @endphp
                    @include('partials.select', ['row' => $row, 'update' => $category->id])
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
