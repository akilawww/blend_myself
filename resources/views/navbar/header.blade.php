<html lang="{{ app()->getLocale() }}">
  <head>
    <title>アプリ名 - @yield('title')</title>
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- data-target="#togglebar"で、ハンバーガーメニューを選択するとメニューリンクを表示する-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#togglebar">
                    <!--以下からハンバーガーメニューのhtml要素 画面が縮小されると表示-->
                    <span class="sr-only">Toggle navigation</span>
                    <!--icon-barはBootstrapのcss -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">さけばさだー</a>
            </div>
            <!--メニューの要素-->
            <div class="collapse navbar-collapse" id="togglebar">
                <ul class="nav navbar-nav">
                    <!--以下でページ内リンクを設定している-->
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>

                </ul>
            </div>
        </div>
    </nav>
    @section('head')
      test
    @show
  </body>
</html>