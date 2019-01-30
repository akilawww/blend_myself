@extends('navbar.parent')
@section('title','トップページ')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
<nav calss="navbar">
  <div class="text-light container-fulid  navbar-dark">
  	<center><h5><b>―カクテル好きの輪を広げる　カクテルレシピ共有サイト―</b></h5></center><br>
    <form action="{{ url('/result/tag') }}">
      {{ csrf_field() }}
      <!-- cocktail category -->
      <div class="container">
      	<div class="row">
        <ul class="list-unstyled col">
            カクテルの味で探す!
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 1)
                <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="taste_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
                </li>
              @endif
            @endforeach 
        </ul>
      <!-- frequency category -->
        <ul class="list-unstyled col">
            アルコール度数で探す!
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 2)
          			<li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="degree_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
                </li>
              @endif
            @endforeach 
        </ul>
      <!-- base category -->
        <ul class="list-unstyled col">
          ベースのお酒で探す！
            @foreach ($tags as $tag)
              @if ($tag->tag_type === 3)
              <li>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="base_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                  <label class="custom-control-label" for="base_{{ $tag->id }}">{{ $tag->tag_name }}</label>
                </div>
							</li>
              @endif
            @endforeach 
        </ul>
        <br>
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-outline-light">検索</button>
      </div>
    </div>
  </div>
    </form>
  </div>
</nav>
@endsection

@section('content')
@endsection

@include('navbar.footer')