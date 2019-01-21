<!-- sidebar -->

@section('sidebar')
<div class="row">
  <nav class="text-light bg-secondary navbar-inverse col-md-2">
    <!-- cocktail category -->
    <div class="sidebar-sticky sidebar">
      <ul class="nav flex-column">
        <li class="navbar-nav">
          カクテルの味で探す!
          @foreach ($tags as $tag)
            @if ($tag->tag_type === 1)
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="taste_{{ $tag->id }}">
                <label class="custom-control-label" for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
              </div>
            @endif
          @endforeach 
        </li>
      </ul>
    </div>
    <!-- frequency category -->
    <div class="sidebar-sticky smargin">
      <ul class="nav flex-column">
        <li class="navbar-nav">
          アルコール度数で探す!
          @foreach ($tags as $tag)
            @if ($tag->tag_type === 2)
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="degree_{{ $tag->id }}">
                <label class="custom-control-label" for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
              </div>
            @endif
          @endforeach 
        </li>
      </ul>
    </div>
    <!-- base category -->
    <div class="sidebar-sticky smargin">
      <ul class="nav flex-column">
        <li class="navbar-nav">
          ベースのお酒で探す！
          @foreach ($tags as $tag)
            @if ($tag->tag_type === 3)
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="base_{{ $tag->id }}">
                <label class="custom-control-label" for="base_{{ $tag->id }}">{{ $tag->tag_name }}</label>
              </div>
            @endif
          @endforeach 
        </li>
      </ul>
    </div>
  </nav>
@endsection
