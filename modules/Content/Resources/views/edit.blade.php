@extends('ui::layouts.app')

@section('content')
  <div class="ui secondary menu">
    <div class="menu full-width">
      <div class="item float-left" style="padding-left: 0px;">
        <h1 style="font-weight: normal">Edit Content</h1>
      </div>
    </div>
  </div>

  <div class="ui card full-width">
    <div class="content">
      {!! form()->bind($content)->put(route('content.update', $content->getKey()))->multipart() !!}
        <div class="field required">
            <label>Kategori</label>
            <div class="ui dropdown search selection">
                <select name="category_id" id="category_id" required="required" class="noselection">
                    <option value="">-- Pilih Kategori --</option>
                    @if(! empty(json_decode(setting()->get('List Category'))))
                    @each('partials.option', json_decode(setting()->get('List Category')), 'row', '')
                    @endif
                </select><i class="dropdown icon"></i><input class="search" autocomplete="off" tabindex="0">
                <div class="default text">-- Pilih Kategori --</div>
                <div class="menu" tabindex="-1" style="max-height: 100px !important;">
                    @if(! empty(json_decode(setting()->get('List Category'))))
                    @foreach(json_decode(setting()->get('List Category')) as $row)
                    @php $i = 0; @endphp
                    @include('partials.select', ['row' => $row, 'update' => null])
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        {!! form()->text('template')->label('Template') !!}

        <div class="check-publish">
            {!! form()->checkbox('published')->label('Terbitkan') !!}
            <span><small><i>Centang checkbox untuk menerbitkan konten</i></small></span>
        </div>
        <br>

      <div class="float-right">
        {!! form()->action([
          form()->link('Batal', route('content.index'))->addClass('ui red button'),
          form()->submit('Simpan')->addClass('ui blue button')
        ]) !!}
      </div>

      {!! form()->close() !!}
    </div>
  </div>
@stop
