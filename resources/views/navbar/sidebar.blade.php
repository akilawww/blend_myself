<!-- sidebar -->

@section('sidebar')
<div class="row">
<nav class="text-light bg-dark navbar-inverse col-md-2">
  <div class="sidebar-sticky sidebar">
      <ul class="nav flex-column">
        <li class="navbar-nav">
            カクテルの味で探す!
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="taste_1">
        <label class="custom-control-label" for="taste_1">甘い系</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="taste_2">
        <label class="custom-control-label" for="taste_2">辛い系</label>
</div>
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="taste_3">
    <label class="custom-control-label" for="taste_3">サッパリ系</label>
</div>
        </li>
      </ul>
  </div>

  <div class="sidebar-sticky smargin">
      <ul class="nav flex-column">
        <li class="navbar-nav">
            アルコール度数で探す!
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="arc_1">
        <label class="custom-control-label" for="arc_1">0%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="arc_2">
        <label class="custom-control-label" for="arc_2">1%～15%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="arc_3">
        <label class="custom-control-label" for="arc_3">16%～24%</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="arc_4">
        <label class="custom-control-label" for="arc_4">25%以上</label>
    </div>
        </li>
      </ul>
  </div>

  <div class="sidebar-sticky smargin">
      <ul class="nav flex-column">
        <li class="navbar-nav">
            ベースのお酒で探す！
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_1">
        <label class="custom-control-label" for="base_1">ジン</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_2">
        <label class="custom-control-label" for="base_2">テキーラ</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_3">
        <label class="custom-control-label" for="base_3">ウォッカ</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_4">
        <label class="custom-control-label" for="base_4">ラム</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_5">
        <label class="custom-control-label" for="base_5">リキュール</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_6">
        <label class="custom-control-label" for="base_6">ワイン</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_7">
        <label class="custom-control-label" for="base_7">ウィスキー</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_8">
        <label class="custom-control-label" for="base_8">ブランデー</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_9">
        <label class="custom-control-label" for="base_9">ビール</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_10">
        <label class="custom-control-label" for="base_10">焼酎</label>
    </div>
<div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="base_11">
        <label class="custom-control-label" for="base_11">日本酒</label>
    </div>

        </li>
      </ul>
  </div>
</nav>
@endsection