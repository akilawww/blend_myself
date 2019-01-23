<!-- Recipe overview -->
@extends('navbar.parent')

@section('title', 'Recipe list')

@include('navbar.head')
@include('navbar.header')

@include('navbar.sidebar')

@section('content')
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
  {{ $recipes->links() }}
</div>
</div>
@endsection

@include('navbar.footer')
