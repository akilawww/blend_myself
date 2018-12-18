<html lang="{{ app()->getLocale() }}">
  <head>
    <title>さけばさだー</title>
  </head>
<body>
<nav class="navbar navbar-default fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php"><img src="{{ asset('image/sakebasada.png') }}"></a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

  </div>
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