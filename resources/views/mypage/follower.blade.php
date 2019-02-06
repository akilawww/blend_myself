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
      <a href="{{ route('mypage.index') }}">投稿したレシピ</a> ｜
      <a href="{{ route('mypage.favorite') }}">お気に入りレシピ</a> ｜
      <a href="{{ route('mypage.follow') }}">フォロー</a> ｜
      フォロワー
    </h2>
    <hr size="4" width="100%" color="white">
    @if (!$followerUsers->isEmpty())
    @foreach ($followerUsers as $followerUser)
    <div class="container-fluid">
      <a href="{{ route('userpage.index',['id' => $followerUser]) }}">
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
