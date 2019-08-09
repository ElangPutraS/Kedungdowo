<div id="{{ $id }}" data-role="suitable">
    @if(\Illuminate\Support\Facades\Route::has(str_replace('/', '::', request()->path()).'.create'))
    <div class="ui stackable menu borderless top attached" style="border-bottom-width: 0px;box-shadow: none !important;">
        <div class="item" style="padding: 20px 0px 18px 20px">
            <a href="{{ route(str_replace('/', '::', request()->path()).'.create') }}" class="ui blue button" id="add">Tambah</a>
        </div>
    </div>
    @else
    <div class="ui stackable menu borderless top attached" style="border-bottom-width: 0px;box-shadow: none !important;">
        <div class="item" style="padding-top: 10px;">
        </div>
    </div>
    @endif

    @include('suitable::table')

    <div class="ui bottom attached menu">
        @if($showPagination && !$collection->isEmpty())
        <div class="item borderless">
            <small>{{ $builder->summary() }}</small>
        </div>
        {!! $collection->appends(request()->input())->links($paginationView) !!}
        @endif
    </div>
</div>
