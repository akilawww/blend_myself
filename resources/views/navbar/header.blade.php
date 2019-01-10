<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') - さけばさだー</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <style>
        .m-70{
            margin-top: 70px;
        }
    </style>
  </head>

  <body style="margin-right: 0px;">

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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item">
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    </li>
        @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    @endguest
    </ul>

</nav>


<!-- sidebar -->
<div class="row text-light">
<nav class="navbar-dark bg-dark navbar-inverse navbar-fixed-left col-md-2">
  <div class="sidebar-sticky" style="margin-left: 10px;">
      <ul class="nav flex-column">
        <li class="nav-item">
            <br><br><br><br>
        </li>
        <li class="navbar-nav">
            カクテルの味で探す!
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">甘い系</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">辛い系</label>
    </div><div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">苦い系</label>
    </div>
        </li>
      </ul>
  </div>

  <div class="sidebar-sticky" style="margin-left: 10px;">
      <ul class="nav flex-column">
        <li class="nav-item">
            <br><br><br>
        </li>
        <li class="navbar-nav">
            アルコール度数で探す!
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">0%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">1%～15%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">16%～24%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">25%以上</label>
    </div>
        </li>
      </ul>
  </div>

  <div class="sidebar-sticky" style="margin-left: 10px;">
      <ul class="nav flex-column">
        <li class="nav-item">
            <br><br><br>
        </li>
        <li class="navbar-nav">
            ベースのお酒で探す！
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ジン</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">テキーラ</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ウォッカ</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ラム</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">リキュール</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ワイン</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ウィスキー</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ブランデー</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">ビール</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">焼酎</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheckBox1">
        <label class="custom-control-label" for="customCheckBox1">日本酒</label>
    </div>

        </li>
      </ul>
  </div>  
</nav>

<div class="container text-dark" style="margin-top: 100px;">
@yield('content')
</div>
</div>
<hr>
<ul class="list-group">
    <li><a href="">ガイドライン</a></li>
    <li><a href="">個人情報の取り扱いについて</a></li>
    <li><a href="">当サイトご利用の際の規約</a></li>
    <li><a href="">ヘルプ</a></li>
    <li><a href="">お問い合わせ</a></li>
</ul>
</body>