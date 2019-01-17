@extends('navbar.parent')
@section('title', '')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
    {{--"{{ var_dump($recipe_procedures) }}"--}}
    @if (isset($recipe_procedures))
        @foreach ($recipe_procedures as $recipe_procedure)
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset($recipe_procedure->image) }}" alt="Sample">
                <div class="card-body">
                    <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
                    <p class="card-text">{{ $recipe_procedure->body }}</p>
                </div>
            </div>
        @endforeach
    @endif

    <form method="POST" action="{{ url('/recipe_form/procedure/posts') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
        @if (isset( $recipe_procedures ))
            <input type="hidden" name="process_num" value="{{ count($recipe_procedures) + 1 }}">
        @else
            <input type="hidden" name="process_num" value="1">
        @endif
        
        <div class="form-group">
            <label for="image">画像</label>
            <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">説明</label>
            <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
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

@include('navbar.footer')

<script>
        function add()
        {
            var div_element = document.createElement("div");
            div_element.innerHTML = '<hr>Title: <br><input type="text" name="title" size="50" value="試験文字列"><br>Contents: <br><textarea name="contents" rows="30" cols="100">試験\n試験\n試験</textarea>';
            var parent_object = document.getElementById("piyo");
            parent_object.appendChild(div_element);
        }
        </script>