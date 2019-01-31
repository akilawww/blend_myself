@extends('navbar.parent')

@section('title')
  {{ Auth::user()->name }}さんのマイページ
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark">
  <h1 style="color:white;">{{ Auth::user()->name }}さんのフォロワー</h1>
  <hr>
  <div class="container navbar-dark rounded" style="padding:1rem 1.1rem;">
    <h2 style="color:white;">
      <a href="{{ url('/mypage') }}">投稿したレシピ</a> ｜
      <a href="{{ url('/mypage/favorite') }}">お気に入りレシピ</a> ｜
      <a href="{{ url('/mypage/follow') }}">フォロー</a> ｜
      フォロワー
    </h2>
    <hr size="4" width="100%" color="white">
    @if (!$followerUsers->isEmpty())
    @foreach ($followerUsers as $followerUser)
    <div class="container-fluid">
      <a href="{{ url('/userpage', $followerUser->id) }}">
        {{ $followerUser->name }}
      </a>
    </div>
    <br>
    @endforeach
    @else
    <div style="color:white;">フォロワーはいません、でも大丈夫。私たちがいます！(運営)</div>
    @endif
  </div>
</div>
@endsection

@include('navbar.footer')
