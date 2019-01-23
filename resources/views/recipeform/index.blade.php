<!-- Recipe submission form parent -->

@extends('navbar.parent')
@section('title', 'Recipe summary')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
  <form method="POST" action="{{ url('/recipe_form/posts') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">タイトル</label>
      <div class="col-7">
        <input type="text" required="required" name="title" id="inputText" class="form-control" placeholder="タイトル">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">概要</label>
      <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="image">画像</label>
      <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
    </div>
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">次へ</button>
      </div>
    </div>
  </form>
              <!-- エラーメッセージ -->
@if(count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
</div>
@endsection

@include('navbar.footer')
