
<div {{ count($row->children_recursive) > 0 ? '' : 'onclick=window.location=\'' . $row->url . '\'' }}
    class="{{ count($row->children_recursive) > 0 && $i == 0 ? 'ui pointing dropdown item' : 'item' }}">
    @if(count($row->children_recursive) > 0 && $i > 0)
    <i class="dropdown icon" style="margin-left: 10px"></i>
    @endif
    <span class="text">{{ $row->title }}</span>
    @if(count($row->children_recursive) > 0 && $i == 0)
    <i class="dropdown icon" style="margin-left: 10px"></i>
    @endif

    @if (count($row->children_recursive) > 0)
        @php
        $i+=1;
        @endphp
        <div class="menu">
        @foreach($row->children_recursive as $row)
            @include('partials.menu', ['row', $row])
        @endforeach
        </div>
    @endif
</div>
