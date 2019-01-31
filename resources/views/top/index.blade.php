@extends('navbar.parent')
@section('title','トップページ')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container showmain top-color">
	<br>
	<h4 class="text-center">-カクテル好きの輪を広げる　カクテルレシピ共有サイト-</h4>
<center><h4><b>さけばさだーでできること</b></h4></center>
	<div class="row">
		<div class="border rounded top-card bg-light">
			<b >カクテルを探す</b><br>
			　<u>〇好きなワードでレシピを検索<br></u>
				<div class="top-font">　　検索バーから好きな単語でレシピを検索<br>　　できます</div>
			　<u>〇タグで検索<br></u>
			<div class="top-font">　　レシピに登録されたカクテルの味、<br>　　度数、ベースでレシピを検索できます</div>
			<div class="text-right top-font">
				<a href="{{ url('/') }}"><u><b>レシピを検索する！→</b></u></a>
				</div>
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
			<div class="text-right top-font">
				@guest
					<a href="{{ route('login') }}">
				@else
					<a href="{{ url('/recipe_form') }}">
				@endguest
					<u><b>レシピを投稿する！→</b></u></a>
				</div>
			　<u>〇SNS連携でレシピをシェアする<br></u>
			<div class="top-font">　　TwitterやSNSへレシピをシェアして<br>　　レシピをより多くの人へ共有できます</div>
		</div>
		<div class="border rounded top-card bg-light">
			<b>カクテル好きとつながる</b><br>
			　<u>〇他のユーザーをフォローする<br></u>
			<div class="top-font">　　好きなレシピの投稿者をフォローする<br>　　ことができます</div>
			　<u>〇気に入ったレシピを保存する<br></u>
			<div class="top-font">　　レシピをお気に入りすることで、<br>　　マイページからいつでもレシピを<br>　　確認することができます</div>
			<div class="text-right top-font">
					<a href="{{ url('/mypage') }}"><u><b>ログインはこちら！→</b></u></a>
				</div>
		</div>
	</div>
	</div>
@endsection

@include('navbar.footer')
