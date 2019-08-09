<option value="{{ $row->id }}">{{ $row->title }}</option>
@if (count($row->children_recursive) > 0)
  @foreach($row->children_recursive as $row)
    @include('partials.option', ['row' => $row])
  @endforeach
@endif
