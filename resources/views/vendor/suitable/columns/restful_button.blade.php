@if($actions->isNotEmpty())

@if($actions->has('view'))
<a class="ui icon mini basic" href="{{ $actions->get('view') }}"><i class="eye icon"></i></a>
@endif

@if($actions->has('edit'))
<a class="ui icon mini basic padded p-20" href="{{ $actions->get('edit') }}">
    <img src="{{ asset('img/icons/icon_edit.svg') }}" class="middle-align">
</a>
@endif

@if($actions->count() > 1)
<div class="ui icon buttons no-border p-20">
    @endif
    @if($actions->has('delete'))
    <form role="form" action="{{ $actions->get('delete') }}" method="POST" onsubmit="return confirm('{{ $deleteConfirmation }}')">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        <button type="submit" class="ui button icon no-border">
            <img src="{{ asset('img/icons/icon_close.svg') }}" class="middle-align">
        </button>
    </form>
    @endif
    @if($actions->count() > 1)
</div>
@endif
@endif
