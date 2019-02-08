@extends('navbar.parent')

@section('title')
  {{ Auth::user()->name }}さんのマイページ
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark">
  <h1 style="color:white;">{{ Auth::user()->name }}さんのマイページ</h1>
  <div class="container rounded" style="padding:1rem 1.1rem;">
    <h2 style="color:white;">
      投稿したレシピ ｜
      <a href="{{ route('mypage.favorite') }}">お気に入りレシピ</a> ｜
      <a href="{{ route('mypage.follow') }}">フォロー</a> ｜
      <a href="{{ route('mypage.follower') }}">フォロワー</a>
    </h2>
    <hr size="4" width="100%" color="white">
    @if (!$recipes->isEmpty())
    @foreach ($recipes as $recipe)
    <div class="container-fluid">
      <a href="{{ route('recipes.show',['id' => $recipe]) }}">
        <div class="card-horizon">
          <div class="row card-horizon-con bg-light">
            <div class="col-md-3 col-md-3 p-0 wh-100 left">
              <img src="{{ asset($recipe->image) }}" class="img-thumbnail" alt="Sample" style="object-fit: contain;">
            </div>
            <div class="col-md-9 col p-0 wh-100 right bg-light">
              <div class="title_f card-title text-dark">
                {{ $recipe->title }}
              </div>
              <p class="card-text card-footer text-dark bg-light">
                {{ $recipe->body }}
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <br>
    @endforeach
    @else
    <div style="color:white;">投稿されたレシピはありません</div>
    @endif
  </div>
</div>
@endsection

@include('navbar.footer')
