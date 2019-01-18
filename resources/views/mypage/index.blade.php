@extends('navbar.parent')
@section('title'){{ Auth::user()->name }}@endsection

@include('navbar.head')

@include('navbar.header')

@section('content')
<div class="container">
    <h1>{{ Auth::user()->name }}のマイページ</h1>
    <hr>
    <h2>投稿レシピ</h2>
    @if (isset($recipes))
        @foreach ($recipes as $recipe)
            <div class="container-fluid">
                <a href="{{ url('/recipes', $recipe->id) }}">
                    <div class="card-horizon">
                        <div class="row card-horizon-con">
                            <div class="col-md-4 col-4 p-0 wh-100 left bg-secondary">
                                <img src="{{ asset($recipe->image) }}" alt="Sample">
                            </div>
                            <div class="col-md-8 p-0 wh-100 right bg-secondary">
                                <h5 class="card-title text-white">
                                    {{ $recipe->title }}
                                </h5>
                                <p class="card-text text-white">
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
@endsection

@include('navbar.footer')