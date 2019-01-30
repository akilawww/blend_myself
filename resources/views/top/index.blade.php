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
<div class="container navbar-dark text-light">
	<br>
<center><h4><b>さけばさだーでできること</b></h4></center>
	<div class="row offset-1">
		<div class="border rounded col-md-5">
			<b>カクテルを探す</b><br>
			　<u>〇好きなワードでレシピを検索<br></u>
				<div class="top-font">　　検索バーから好きな単語でレシピを検索できます</div>
			　<u>〇タグで検索<br></u>
			<div class="top-font">　　レシピに登録されたカクテルの味、度数、ベースごと<br>　　にレシピを検索できます</div>
			　<u>〇投稿者の他のレシピを見る<br></u>
			<div class="top-font">　　レシピの投稿者名をクリックすると、過去に投稿した<br>　　レシピを見ることができます</div>
		</div>
		<div class="offset-1"></div>
		<div class="border rounded col-md-5">
			<b>カクテルを作る</b><br>
			　〇レシピを見て作る<br>
			<div class="top-font">　　気になるレシピを見てカクテルを自作できます</div>
			　〇レシピにアレンジを加えて作る<br>
			<div class="top-font">　　お酒の分量を変えたり、既存のレシピにアレンジを<br>　　くわえて自分好みのカクテルを作る事ができます</div>
		</div>
	</div>
	<br>
		<div class="row offset-1">
		<div class="border rounded col-md-5">
			<b>カクテルを共有する</b><br>
			　〇オリジナルのレシピを投稿する<br>
			<div class="top-font">　　自分の考えたオリジナルカクテルのレシピを投稿し<br>　　他のユーザーへ共有することができます</div>
			　〇SNS連携でレシピをシェアする<br>
			<div class="top-font">　　TwitterやSNSへレシピをシェアしてお気に入りの<br>　　レシピをユーザー以外の人にも共有できます</div>
		</div>
		<div class="offset-1"></div>
		<div class="border rounded col-md-5">
			<b>カクテル好きとつながる</b><br>
			　〇レシピを投稿した人をフォローする<br>
			　〇お気に入り機能で好きなレシピを保存する<br>
		</div>
	</div>
	</div>
@endsection

@include('navbar.footer')