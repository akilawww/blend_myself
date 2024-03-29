@extends('navbar.parent')

@section('title', 'レシピ投稿')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container recipe_form">
  <h2><i class="fas fa-cocktail" style="color:orange"></i> レシピの材料</h2>
  @if (isset($materrials))
  <table class="table">
    <tbody>
        <tr>
          <th scope="col">#材料名</th>
          <th scope="col">#分量</th>
          <th scope="col">#アルコール度数</th>
          <th scope="col"></th>
        </tr>
    @foreach ($materrials as $materrial)
      <tr>
        <td scope="col">{{ $materrial->name }}</td>
        <td scope="col">{{ $materrial->quantity }}</td>
        <td scope="col">{{ $materrial->degree }}</td>
        <td scope="col">
          <form action="{{ route('edit.deleteMaterrial',['id' => $materrial]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> 削除</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @endif
  <form method="POST" action="{{ route('recipe_form.materrialStore') }}">
    {{ csrf_field() }}
    <h3 style=""><i class="fas fa-plus-circle" style="color:orange"></i> 材料の追加</h3>
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">材料名</label>
      <div class="col-md-8">
        <input type="text" required="required" name="name" id="inputText" class="form-control" autocomplete="off" placeholder="材料名">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">個数</label>
      <div class="col-md-8" >
        <input type="text" required="required" name="quantity" id="inputText" class="form-control" autocomplete="off" placeholder="個数">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">度数</label>
      <div class="col-md-8">
        <input type="text" name="degree" id="inputText" class="form-control" autocomplete="off" placeholder="度数" value="0%" autofocus>

      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> 追加</button>
      </div>
    </div>
  </form>
  <hr>
  <h2 ><i class="far fa-hand-point-right" style="color:orange"></i> 手順</h2>
  @if (isset($recipe_procedures))
    <div class="container-fulid row">
      @foreach ($recipe_procedures as $recipe_procedure)
      <div class="card proimg" style="width: 12rem;margin: 10px;">
        <img class="card-img-top center" src="{{ asset($recipe_procedure->image) }}" alt="Sample" style="object-fit: contain;">
        <div class="card-body">
          <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
          <p class="card-text">{{ $recipe_procedure->body }}</p>
        </div>
        <div class="card-footer text-center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-pen"></i> 編集</button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <form action="{{ route('edit.updateProcedure',['id' => $recipe_procedure]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-content">
                  <div class="modal-header">
                    <label for="image">画像</label>
                    <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像" >
                  </div>
                  <div class="modal-body">
                    <label for="exampleFormControlTextarea1">説明</label>
                    <textarea required="required" name="body" class="form-control recipe_form_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-file-medical"></i> 保存</button>
                  </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
              </form>
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
          <form style="display: inline;" action="{{ route('edit.deleteProcedure',['id' => $recipe_procedure]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> 削除</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  @endif
  <form method="POST" action="{{ route('recipe_form.procedureStore') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    @if (isset( $recipe_procedures ))
    <input type="hidden" name="process_num" value="{{ count($recipe_procedures) + 1 }}">
    @else
    <input type="hidden" name="process_num" value="1">
    @endif
    <br>
    <h3 ><i class="fas fa-plus-circle" style="color:orange"></i> 手順の追加</h3>

    <div class="form-group row" >
      <label for="image" class="col-sm-2 col-form-label">画像</label>
      <div class="col-md-8">
        <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像"  style="height:42px">
      </div>
    </div>

    <div class="form-group row">
      <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">説明</label>
      <div class="col-md-8">
        <textarea required="required" name="body" class="form-control recipe_form_textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> 追加</button>
      </div>
    </div>

  </form>
  <hr>
  <h2><i class="fas fa-tags" style="color:orange"></i> タグ</h2>
  <form method="POST" action="{{ route('recipe_form.create') }}">
    {{ csrf_field() }}
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="container">
      <div class="row">
        <ul class="list-unstyled col-md-4">
          <h4 >カクテルの味</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 1)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="taste_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label"  for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-4">
          <h4 >度数</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 2)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="degree_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label"  for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-4">
          <h4 >ベース</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 3)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="base_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" for="base_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    <br><br>
    <div class="offset-sm-2 col-sm-8">
      <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-check-circle"></i> 完了</button>
    </div>
    <br>
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
