<html lang="{{ app()->getLocale() }}">
  <head>
    <title>さけばさだー</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>
  </head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="{{ asset('/image/sakebasada.png') }}"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>

@yield('content')

<hr>
<ul class="list-group">
    <li><a href="">ガイドライン</a></li>
    <li><a href="">個人情報の取り扱いについて</a></li>
    <li><a href="">当サイトご利用の際の規約</a></li>
    <li><a href="">ヘルプ</a></li>
    <li><a href="">お問い合わせ</a></li>
</ul>