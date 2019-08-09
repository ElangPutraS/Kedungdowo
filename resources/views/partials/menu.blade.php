<li {{ count($row->children_recursive) > 0 && $i == 0 ? 'class=dropdown prog-lay' : '' }}
  {{ count($row->children_recursive) > 0 && $i > 0 ? 'class=dropdown-submenu' : '' }}>
  <a @if (count($row->children_recursive) > 0 && $i == 0)
     class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;"
     @else
     href="{{ url($row->url) }}"
    @endif
  >
    {{ $row->title }} @if (count($row->children_recursive) > 0 && $i > 0) <i class="fa fa-angle-right"></i>@endif
  </a>
  @if (count($row->children_recursive) > 0)
    @php
      $i+=1;
      usort($row->children_recursive, function ($a, $b) {
         return $a->order < $b->order ? -1 : 1;
      });
    @endphp
    <ul {{ count($row->children_recursive) > 0 ? 'class=dropdown-menu' : '' }} {{ $i >=0 ? 'role=menu' : '' }}>
      @foreach($row->children_recursive as $row)
        @include('partials.menu', ['row' => $row])
      @endforeach
    </ul>
  @endif
</li>
