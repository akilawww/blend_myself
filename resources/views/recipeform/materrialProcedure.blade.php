@extends('navbar.header')
@section('title', '')
@section('content')
<div class="container">
        <form method="POST" action="{{ url('/recipe_form/procedure/posts') }}">
          {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1">説明</label>
                        <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">保存</button>
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

<script>
        function add()
        {
            var div_element = document.createElement("div");
            div_element.innerHTML = '<hr>Title: <br><input type="text" name="title" size="50" value="試験文字列"><br>Contents: <br><textarea name="contents" rows="30" cols="100">試験\n試験\n試験</textarea>';
            var parent_object = document.getElementById("piyo");
            parent_object.appendChild(div_element);
        }
        </script>