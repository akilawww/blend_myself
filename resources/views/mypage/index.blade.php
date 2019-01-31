<!-- Mypage details -->

@extends('navbar.parent')
@section('title')
  {{ Auth::user()->name }}
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark">
  <h1 style="color:white;">{{ Auth::user()->name }}さんのマイページ</h1>
  <hr>
  @if (!$recipes->isEmpty())
    <div class="container navbar-dark rounded" style="padding:1rem 1.1rem;">
    <h2 style="color:white;">投稿したレシピ</h2><hr size="4" width="100%" color="white" >
  @foreach ($recipes as $recipe)
    <div class="container-fluid">
    <a href="{{ url('/recipes', $recipe->id) }}">
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
  </div>
@else
 <div style="color:white;">投稿されたレシピはありません</div>
@endif
<hr>
  @if (!$favoriteRecipes->isEmpty())
  <div class="container rounded navbar-dark" style="padding: 1rem;">
  <h2 style="color:white;">お気に入りレシピ</h2>
  <hr size="4" width="100%" color="white" >
    @foreach ($favoriteRecipes as $favoriteRecipe)
      <div class="container-fluid">
        <a href="{{ url('/recipes', $favoriteRecipe->id) }}">
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
    </div>
  @else
  <div class="container rounded navbar-dark" style="padding: 1rem;">
    <h2 style="color:white;">お気に入りレシピ</h2>
    <hr size="4" width="100%" color="white" >
    <div style="color:white;">お気に入りされたレシピはありません、ですがあなたが気に入るレシピがきっとあるはず…！</div>
  </div>

  @endif

  @if (!$followUsers->isEmpty())
  <div class="container navbar-dark rounded" style="padding: 1rem;">
  <h2 style="color:white;">フォローユーザー</h2><hr size="4" width="100%" color="white" >
    @foreach ($followUsers as $followUser)
      <div class="container-fluid">
        <a href="{{ url('/userpage', $followUser->id) }}">
          {{ $followUser->name }}
        </a>
      </div>
      <br>
    @endforeach
  </div>

  @else
  <div class="container navbar-dark rounded" style="padding: 1rem;">
  <h2 style="color:white;">フォローユーザー</h2><hr size="4" width="100%" color="white" >
  <div style="color:white;">フォローしたユーザーはいません、素敵なカクテルを作っている人を探しに行きましょう！</div>
  </div>

  @endif
  <div class="container navbar-dark rounded" style="padding: 1rem;">
  <h2 style="color:white;">フォロワーユーザー</h2><hr size="4" width="100%" color="white" >
  @if (!$followerUsers->isEmpty())
    @foreach ($followerUsers as $followerUser)
      <div class="container-fluid">
        <a href="{{ url('/userpage', $followerUser->id) }}">
          {{ $followerUser->name }}
        </a>
      </div>
      <br>
    @endforeach
    </div>
    @else
    <div style="color:white;">フォロワーはいません、でも大丈夫。私たちがいます！(運営)</div>
  </div>
  @endif
@endsection

@include('navbar.footer')
