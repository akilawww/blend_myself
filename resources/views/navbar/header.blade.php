<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - さけばさだー</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>


  </head>

  <body style="margin-right: 0px;font-size: 17px;">

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
            <a class="dropdown-item" href="/recipe_form">レシピ作成</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>
    @endguest

</nav>



<div class="container text-dark" style="margin-top: 100px;">
@yield('content')
</div>


<div class="bg-dark">
<ul class="list-group">
    <span><a href="" class="text-light">ガイドライン</a></span>
    <span><a href="" class="text-light">個人情報の取り扱いについて</a></span>
    <span><a href="" class="text-light">当サイトご利用の際の規約</a></span>
    <span><a href="" class="text-light">ヘルプ</a></span>
    <span><a href="" class="text-light">お問い合わせ</a></span>
</ul>
</div>
</body>