@extends('navbar.parent')

@section('title', 'レシピ投稿')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container recipe_form">
  <form method="POST" action="{{ url('/recipe_form/posts') }}" enctype="multipart/form-data" autocomplete="off">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" >
          <h3><i class="fas fa-cocktail" style="color:orange"></i> タイトル(New)</h3></label>
        <div class="col-md-8">
          <input type="text" required="required" name="title" id="inputText" class="form-control" placeholder="タイトル">
        </div>
    </div>
    <div class="form-group row">
        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label" >
          <h3><i class="far fa-comment" style="color:orange"></i> 概要</h3></label>
        <div class="col-md-8">
          <textarea required="required" name="body" class="form-control recipe_form_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label" >
          <h3 ><i class="far fa-image" style="color:orange"></i> 画像</h3></label>
          <div class="col-md-8">
            <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
          </div>
    </div>
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-8">
        <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-arrow-circle-right"></i> 次へ</button>
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
