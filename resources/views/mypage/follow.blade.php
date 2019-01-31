@extends('navbar.parent')

@section('title')
  {{ Auth::user()->name }}さんのマイページ
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark">
  <h1 style="color:white;">{{ Auth::user()->name }}さんのフォロー</h1>
  <hr>
  <div class="container navbar-dark rounded" style="padding: 1rem;">
    <h2 style="color:white;">
      <a href="{{ url('/mypage') }}">投稿したレシピ</a> ｜
      <a href="{{ url('/mypage/favorite') }}">お気に入りレシピ</a> ｜
      フォロー ｜
      <a href="{{ url('/mypage/follower') }}">フォロワー</a>
    </h2>
    <hr size="4" width="100%" color="white">
    @if (!$followUsers->isEmpty())
    @foreach ($followUsers as $followUser)
    <div class="container-fluid">
      <a href="{{ url('/userpage', $followUser->id) }}">
        {{ $followUser->name }}
      </a>
    </div>
    <br>
    @endforeach
    @else
    <div style="color:white;">フォローしたユーザーはいません、素敵なカクテルを作っている人を探しに行きましょう！</div>
    @endif
  </div>
</div>
@endsection

@include('navbar.footer')
