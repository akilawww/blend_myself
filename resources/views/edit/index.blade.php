@extends('navbar.parent')
@section('title', '')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
    
    <form method="POST" action="{{ url('/edit/updateRecipe/'.$recipe->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('PUT')
      <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">タイトル</label>
        <div class="col-7">
        <input type="text" required="required" name="title" id="inputText" class="form-control" value="{{ $recipe->title }}">
        </div>
      </div> 
      <div class="form-group">
          <label for="exampleFormControlTextarea1">概要</label>
      <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{ $recipe->body }}</textarea>
      </div>
      <div class="form-group">
          <label for="image">画像</label>
          <img src="{{ asset($recipe->image) }}" alt="Sample" class="center">
          <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
      </div>
      <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-primary">保存</button>
        </div>
      </div>
    </form>

    <h2>材料</h2>
    @if (isset($materrials))
        <table class="table">
            @foreach ($materrials as $materrial)
                <tbody>
                    <tr>
                    <td scope="col">{{ $materrial->name }}</td>
                    <td scope="col">{{ $materrial->quantity }}</td>
                    <td scope="col">{{ $materrial->degree }}</td>
                    <td scope="col">
                        <form action="{{ url('/edit/deleteMaterrial/'.$materrial->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>削除
                            </button>
                        </form>
                    </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    @endif
    
    <form method="POST" action="{{ url('/recipe_form/materrial/posts') }}">
        {{ csrf_field() }}
        <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
        <div class="form-group row">
            <label for="inputText" class="col-sm-2 col-form-label">材料名</label>
            <div class="col-7">
                <input type="text" required="required" name="name" id="inputText" class="form-control" placeholder="材料名">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputText" class="col-sm-2 col-form-label">個数</label>
            <div class="col-7">
                <input type="text" required="required" name="quantity" id="inputText" class="form-control" placeholder="個数">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputText" class="col-sm-2 col-form-label">度数</label>
            <div class="col-7">
                <input type="text" name="degree" id="inputText" class="form-control" placeholder="度数" value="">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </div> 
    </form>

    <hr>

    <h2>手順</h2>
    @if (isset($recipe_procedures))
        <div class="container-fulid row">
            @foreach ($recipe_procedures as $recipe_procedure)
            
                <div class="card proimg" style="width: 12rem;margin: 10px;margin-top: 50px;">
                    <img class="card-img-top center" src="{{ asset($recipe_procedure->image) }}" alt="Sample">
                    <div class="card-body">
                        <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
                        <p class="card-text">{{ $recipe_procedure->body }}</p>
                        <form action="{{ url('/edit/putProcedure') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="button" class="btn btn-primary" value="編集" onClick="kakunin()">
                        </form>
                        <form action="{{ url('/edit/deleteProcedure/'.$recipe_procedure->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>削除
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    
    <form method="POST" action="{{ url('/recipe_form/procedure/posts') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
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

    <hr>
    <a href="{{ url('/recipes', $recipe->id) }}">
        <button class="btn btn-primary">完了</button>
    </a>

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
