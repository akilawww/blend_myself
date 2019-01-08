<html lang="{{ app()->getLocale() }}">
  <head>
    <title>@yield('title') - さけばさだー</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <style>
        .m-100{
            margin-top: 100px;
        }
    </style>
  </head>

  <body style="margin-right: 0px;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php"><img src="{{ asset('/image/sakebasada.png') }}"></a>
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
  <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
          <a class="navbar-brand" href="">sign up</a>
          <a class="navbar-brand" href="">sign in</a>
      </ul>
  </div>
</nav>


<!-- sidebar -->
<!--
<nav class="navbar-dark bg-dark navbar-inverse navbar-fixed-left col-md-2">
  <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
            <br>
        </li>
        <li class="navbar-nav">
            <div class="navbar-brand">カクテルの味で探す!</div>
        </li>
      </ul>
  </div>  
</nav>
-->

<div class="m-100">
@yield('content')
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