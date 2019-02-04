@extends('navbar.parent')

@section('title')
  {{ Auth::user()->name }}さんのマイページ
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark">
  <h1 style="color:white;">{{ Auth::user()->name }}さんのマイページ</h1>
  <div class="container rounded" style="padding: 1rem;">
    <h2 style="color:white;">
      <a href="{{ route('mypage.index') }}">投稿したレシピ</a> ｜
      お気に入りレシピ ｜
      <a href="{{ route('mypage.follow') }}">フォロー</a> ｜
      <a href="{{ route('mypage.follower') }}">フォロワー</a>
    </h2>
    <hr size="4" width="100%" color="white">
    @if (!$favoriteRecipes->isEmpty())
    @foreach ($favoriteRecipes as $favoriteRecipe)
    <div class="container-fluid">
      <a href="{{ route('recipes.show',['id' => $favoriteRecipe]) }}">
        <div class="card-horizon">
          <div class="row card-horizon-con bg-light">
            <div class="col-md-3 col-3 p-0 wh-100 left">
              <img src="{{ asset($favoriteRecipe->image) }}" class="img-thumbnail" alt="Sample" style="object-fit: contain;">
            </div>
            <div class="col-md-8 p-0 wh-100 right bg-light">
              <div class="title_f card-title text-dark">
                {{ $favoriteRecipe->title }}
              </div>
              <p class="card-text card-footer text-dark bg-light">
                {{ $favoriteRecipe->body }}
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <br>
    @endforeach
    @else
    <div style="color:white;">お気に入りされたレシピはありません、ですがあなたが気に入るレシピがきっとあるはず…！</div>
    @endif
  </div>
</div>
@endsection

@include('navbar.footer')
