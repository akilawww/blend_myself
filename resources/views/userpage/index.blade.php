@extends('navbar.parent')

@section('title')
  {{ $user->name }}
@endsection

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container rounded navbar-dark" style="padding: 1rem;">
  <h1 style="color:white;">{{ $user->name }}のページ</h1>
  <hr>
  <div class="container rounded navbar-dark" style="padding: 1rem;">
  <h2 style="color:white;">投稿レシピ</h2>
   @if (!$recipes->isEmpty())

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
@else
  投稿されたレシピはありません
@endif
@endsection

@include('navbar.footer')
