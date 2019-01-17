@extends('navbar.parent')
@section('title', '')

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
              
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">ラジオボタン</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          オプション1
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          オプション2
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                        <label class="form-check-label" for="gridRadios3">
                          オプション3（無効）
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-2">チェックボックス</div>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                         ココをチェック
                      </label>
                    </div>
                  </div>
                </div>
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