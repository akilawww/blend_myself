@extends('navbar.parent')
@section('title','トップページ')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
<nav calss="navbar">
  <div class="text-light container-fulid  navbar-dark">
  	<center><h5><b>―カクテル好きの輪を広げる　カクテルレシピ共有サイト―</b></h5></center><br>
    <form action="{{ url('/result/tag') }}">
      {{ csrf_field() }}
      <!-- cocktail category -->
      <div class="container">
      	<div class="row border rounded">
        <ul class="list-unstyled col">
            カクテルの味で探す!
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 1)
                <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="taste_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
                </li>
              @endif
            @endforeach 
        </ul>
      <!-- frequency category -->
        <ul class="list-unstyled col">
            アルコール度数で探す!
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 2)
          			<li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="degree_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
                </li>
              @endif
            @endforeach 
        </ul>
      <!-- base category -->
        <ul class="list-unstyled col">
          ベースのお酒で探す！
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 3)
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="base_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="base_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
							</li>
              @endif
            @endforeach 
        </ul>
        <br>
      <div class="offset-sm-5 col-sm-7" style="margin-bottom: 10px;">
        <button type="submit" class="btn btn-outline-light">タグで検索</button>
      </div>
    </div>
  </div>
    </form>
    <br>
  </div>
</nav>
@endsection

@section('content')
<div class="container showmain top-color">
	<br>
<center><h4><b>さけばさだーでできること</b></h4></center>
	<div class="row">
		<div class="border rounded top-card bg-light">
			<b >カクテルを探す</b><br>
			　<u>〇好きなワードでレシピを検索<br></u>
				<div class="top-font">　　検索バーから好きな単語でレシピを検索<br>　　できます</div>
			　<u>〇タグで検索<br></u>
			<div class="top-font">　　レシピに登録されたカクテルの味、<br>　　度数、ベースでレシピを検索できます</div>
			　<u>〇投稿者の他のレシピを見る<br></u>
			<div class="top-font">　　レシピの投稿者名をクリックすると、<br>　　過去のレシピを見ることができます</div>
		</div>
		<div class="border rounded top-card bg-light">
			<b>カクテルを作る</b><br>
			　<u>〇レシピを見て作る<br></u>
			<div class="top-font">　　気になるレシピを見てカクテルを<br>　　自作できます</div>
			　<u>〇レシピにアレンジを加えて作る<br></u>
			<div class="top-font">　　既存のレシピをアレンジして自分好みの<br>　　カクテルを作る事ができます</div>
		</div>
	</div>
		<div class="row">
		<div class="border rounded top-card bg-light">
			<b>カクテルを共有する</b><br>
			　<u>〇オリジナルのレシピを投稿する<br></u>
			<div class="top-font">　　オリジナルカクテルのレシピを投稿し、<br>　　他のユーザーへ共有することができます</div>
			　<u>〇SNS連携でレシピをシェアする<br></u>
			<div class="top-font">　　TwitterやSNSへレシピをシェアして<br>　　レシピをより多くの人へ共有できます</div>
		</div>
		<div class="border rounded top-card bg-light">
			<b>カクテル好きとつながる</b><br>
			　<u>〇他のユーザーをフォローする<br></u>
			<div class="top-font">　　好きなレシピの投稿者をフォローする<br>　　ことができます</div>
			　<u>〇気に入ったレシピを保存する<br></u>
			<div class="top-font">　　レシピをお気に入りすることで、<br>　　マイページからいつでもレシピを<br>　　確認することができます</div>
		</div>
	</div>
	</div>
@endsection

@include('navbar.footer')
