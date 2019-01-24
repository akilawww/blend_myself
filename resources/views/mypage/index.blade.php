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
  @if (!$recipes->isEmpty())
    <div class="container bg-dark rounded" style="padding: 1rem;margin: 1rem;">
  @foreach ($recipes as $recipe)
    <div class="container-fluid">
    <a href="{{ url('/recipes', $recipe->id) }}">
      <div class="card-horizon">
        <div class="row card-horizon-con bg-light">
          <div class="col-md-3 col-3 p-0 wh-100 left">
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
{{ $recipes->links() }}
  @else
    投稿されたレシピはありません
  @endif
</div>
</div>
@endsection

@include('navbar.footer')
