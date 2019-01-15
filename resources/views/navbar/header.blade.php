@section('header')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ action('RecipesController@index') }}"><img src="{{ asset('/image/sakebasada.png') }}"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="Navber">
        <ul class="navbar-nav form-row">
        <form class="form-inline my-2 my-lg-0">
        <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
        <button type="submit" class="btn btn-outline-light my-2 my-sm-0">検索</button>
        </form>
        </ul>
    </div><!-- /.navbar-collapse -->

    <!-- ログイン・未ログイン状態で表示を変える必要あり -->
    <!-- Authentication Links -->
    @guest
    <ul>
    <li class="nav-item" style="display: inline-block;">
        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item" style="display: inline-block;">
        @if (Route::has('register'))
            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    </li>
        @else
    <li class="nav-item dropdown" style="display: inline-block;">
        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <a class="dropdown-item" href="{{ url('/recipe_form') }}">レシピ作成</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>
    @endguest
</nav>

@endsection