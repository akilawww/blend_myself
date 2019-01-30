<!-- header -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

@section('header')
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/image/sakebasada.png') }}"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="Navber">
    <ul class="navbar-nav form-row">
      <form class="form-inline my-2 my-lg-0" action="{{ url('/result') }}">
        <input type="search" name="search" autocomplete="off" results="" class="form-control mr-sm-2"  placeholder="検索..." aria-label="検索...">
        <button type="submit" class="btn btn-outline-light my-2 my-sm-0 btn-lg"><i class="fas fa-search"></i></button>
      </form>
    </ul>
  </div><!-- /.navbar-collapse -->
  <!-- ログイン・未ログイン状態で表示を変える必要あり -->
  <!-- Authentication Links -->
  @guest
  <ul>
    <li class="nav-item" style="display: inline-block;">
      <a class="nav-link text-light" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __(' ログイン') }}</a>
    </li>
    <li class="nav-item" style="display: inline-block;">
    @if (Route::has('register'))
      <a class="nav-link text-light" href="{{ route('register') }}"><i class="fas fa-user-edit"></i>{{ __(' 新規登録') }}</a>
    @endif
    </li>
  @else
    @if ( is_null(Auth::user()->email_verified_at) )
    <ul>
      <li class="nav-item" style="display: inline-block;">
        <a class="nav-link text-light" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __(' ログイン') }}</a>
      </li>
      <li class="nav-item" style="display: inline-block;">
      @if (Route::has('register'))
        <a class="nav-link text-light" href="{{ route('register') }}"><i class="fas fa-user-edit"></i>{{ __(' 新規登録') }}</a>
      @endif
      </li> 
    @else
      <li class="nav-item dropdown" style="display: inline-block;">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/mypage') }}"><i class="fas fa-user"></i> マイページ</a>
          <a class="dropdown-item" href="{{ url('/recipe_form') }}"><i class="fas fa-file-signature"></i> レシピ作成</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> ログアウト
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
    @endif
  </ul>
  @endguest
</nav>
@endsection
