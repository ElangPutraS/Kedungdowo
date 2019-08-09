@extends('ui::layouts.app')
@push('style')
<!-- INNO DROPZONE -->
<link href="{{ asset('vendor/fileuploader-2.0/dist/font/font-fileuploader.css') }}" media="all" rel="stylesheet">
<link href="{{ asset('vendor/fileuploader-2.0/dist/jquery.fileuploader.min.css') }}" media="all" rel="stylesheet">
<link href="{{ asset('vendor/fileuploader-2.0/dist/jquery.fileuploader-theme-thumbnails.css') }}" media="all" rel="stylesheet">
<link href="{{ asset('vendor/redactor/redactor.css') }}" rel="stylesheet">
<style>
    .check-publish > .field {
        margin-bottom: 0px !important;
    }
    .fileuploader.fileuploader-theme-thumbnails {
        background: white !important;
    }
    .text-red {
        color: red;
    }
</style>
@endpush

@section('content')

<div class="ui secondary menu">
    <div class="menu full-width">
        <div class="item float-left" style="padding-left: 0px;">
            <h1 style="font-weight: normal">Tambah Halaman</h1>
        </div>
    </div>
</div>

<div class="ui card full-width">
    <div id="loader-page"></div>
    <div class="content">
        {!! form()->post(route('page.store'))->multipart() !!}
        <div class="field required">
            <label>Kategori</label>
            <div class="ui dropdown search selection">
                <select name="category_id" id="category_id" required="required" class="noselection">
                    <option value="">-- Pilih Kategori --</option>
                    @each('partials.option', json_decode(setting()->get('List Category')), 'row', '')
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

        <div class="field required field-title">
            <label class="label-title">Judul</label>
            <input type="text" id="input_title" name="title" value="{{ old('title') }}" required="required" maxlength="191">
        </div>

        <div class="field field-icon upload-field" hidden>
            <label>Gambar</label>
            <div class="fileuploader">
                <input type="file" name="uploads" id="icon_image">
            </div>
            <span><small><i>Ukuran maksimal file : 2 MB. Format File : jpeg/jpg, png</i></small></span>
        </div>

        <div class="field field-url" hidden>
            <label>URL</label>
            <input type="text" pattern="^(http:\/\/|https:\/\/).[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$"
                   title="https://test.com" name="description" value="{{ old('description') }}" maxlength="191"
                   placeholder="Contoh : https://lkpp.go.id atau http://lkpp.go.id">
        </div>

        <div class="field required field-description">
            <label class="label-description">Deskripsi</label>
            <textarea name="description" id="description">
          {!! old('description') !!}
        </textarea>
            <span><small><i>Maksimal 7000 karakter</i></small></span>
        </div>
        <span class="text-red error-description" hidden><small><strong>Field Deskripsi wajib diisi</strong></small></span>

        <div class="field field-short" hidden>
            <label class="label-short">Deskripsi Singkat</label>
            <textarea name="short_desc" id="short_desc">
          {!! old('short_desc') !!}
        </textarea>
            <span><small><i>Maksimal 400 karakter</i></small></span>
        </div>

        <div class="field field-cover upload-field" hidden>
            <label class="label-cover">Gambar Sampul</label>
            <div class="fileuploader">
                <input type="file" name="uploads" id="cover_image">
            </div>
            <span><small><i>Ukuran maksimal file : 2 MB. Format File : jpeg/jpg, png</i></small></span>
        </div>

        <div class="field required field-thumbnail upload-field" hidden>
            <label>Foto</label>
            <div class="fileuploader">
                <input type="file" name="uploads" id="gallery_dropzone">
            </div>
            <span><small><i>Ukuran maksimal per file : 2 MB. Format File : jpeg/jpg, png</i></small></span>
        </div>

        <div class="check-publish">
            {!! form()->checkbox('published')->label('Terbitkan') !!}
            <span><small><i>Centang checkbox untuk menerbitkan konten</i></small></span>
        </div>
        <br>

        <div class="float-right">
            {!! form()->action([
            form()->link('Batal', route('page.index'))->addClass('ui red button'),
            form()->submit('Simpan')->addClass('ui blue button')
            ]) !!}
        </div>


        {!! form()->close() !!}
    </div>
</div>
@stop

@push('script')
<script src="{{ asset('vendor/fileuploader-2.0/dist/jquery.fileuploader.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/redactor/redactor.min.js') }}"></script>
<script src="{{ asset('vendor/redactor/_plugins/limiter/limiter.min.js') }}"></script>
<script src="{{ asset('vendor/redactor/_plugins/counter/counter.min.js') }}"></script>
<script src="{{ asset('vendor/redactor/_plugins/table/table.min.js') }}"></script>
<script src="{{ asset('vendor/redactor/_plugins/alignment/alignment.min.js') }}"></script>
<script src="{{ asset('vendor/redactor/_plugins/fontcolor/fontcolor.min.js') }}"></script>
<script src="{{ asset('js/page/script.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#category_id').dropdown('set selected', {{ old('category_id') }});
    });
</script>
@endpush
