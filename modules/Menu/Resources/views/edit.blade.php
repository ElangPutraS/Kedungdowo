@extends('ui::layouts.app')

@section('content')
<div class="ui secondary menu">
    <div class="menu full-width">
        <div class="item float-left" style="padding-left: 0px;">
            <h1 style="font-weight: normal">Edit Menu</h1>
        </div>
    </div>
</div>

<div class="ui card full-width">
    <div class="content">
        {!! form()->bind($menu)->put(route('menu.update', $menu->getKey()))->multipart() !!}
        {!! form()->text('title')->label('Judul')->attribute('maxlength', 191)->required() !!}
        {!! form()->text('url')->label('URL')->attribute('maxlength', 255)->required() !!}
        <div class="field">
            <label>Parent</label>
            <div class="ui fluid search selection dropdown" id="parent_id">
                <input type="hidden" name="parent_id">
                <i class="dropdown icon"></i>
                <div class="default text">--Pilih Parent Kategori--</div>
                <div class="menu">
                    <div class="item" data-value="0">-- Tidak Ada --</div>
                    @if(! empty(json_decode(setting()->get('Home Portal'))))
                    @foreach(json_decode(setting()->get('Home Portal')) as $row)
                    @php $i = 0; @endphp
                    @include('partials.select', ['row' => $row, 'update' => $menu->id])
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        {!! form()->select('location', [1 => 'Home Portal'])
        ->placeholder('-- Pilih Lokasi --')
        ->label('Lokasi')
        ->required() !!}
        <div class="float-right">
            {!! form()->action([
            form()->link('Batal', route('menu.index'))->addClass('ui red button'),
            form()->submit('Simpan')->addClass('ui blue button')
            ]) !!}
        </div>

        {!! form()->close() !!}
    </div>
</div>
@stop

@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#parent_id').dropdown('set selected', {{ old('parent_id', 0) }});
    });
</script>
@endpush
