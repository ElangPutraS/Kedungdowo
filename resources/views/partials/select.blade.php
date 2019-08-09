@if ($update != $row->id)
  <div class="item" data-value="{{ $row->id }}" style="padding-left: {{ $i * 20 + 14 }}px !important;">
    {{ $i > 0 ? '- ' : '' }}{{ ! empty($row->title) ? $row->title : $row->code }}
  </div>
  @if (count($row->children_recursive) > 0)
    @php $i+=1; @endphp
    @foreach($row->children_recursive as $row)
      @include('partials.select', ['row' => $row, 'update' => $update])
    @endforeach
  @endif
@endif
