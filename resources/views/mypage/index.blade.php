<!-- Mypage details -->

@extends('navbar.parent')
@section('title')
  {{ Auth::user()->name }}
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container">
  <h1>{{ Auth::user()->name }}のマイページ</h1>
  <hr>
  <h2>投稿レシピ</h2>
  <div class="container bg-dark" style="padding: 1rem;margin: 1rem;">
  @if (isset($recipes))
  @foreach ($recipes as $recipe)
  <div class="container-fluid">
    <a href="{{ url('/recipes', $recipe->id) }}">
      <div class="card-horizon">
        <div class="row card-horizon-con">
          <div class="col-md-4 col-4 p-0 wh-100 left bg-light">
            <img src="{{ asset($recipe->image) }}" alt="Sample" class="img-thumbnail" style="object-fit: contain;">
          </div>
          <div class="col-md-8 p-0 wh-100 right bg-light">
            <h5 class="card-title text-dark">
              {{ $recipe->title }}
            </h5>
            <p class="card-text text-dark">
              {{ $recipe->body }}
            </p>
          </div>
        </div>
      </div>
    </a>
  </div>
  <br>
  @endforeach
    {{ $recipes->links() }}
  @else
    投稿されたレシピはありません
  @endif
</div>
</div>
@endsection

@include('navbar.footer')
