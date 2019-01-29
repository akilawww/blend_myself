<!-- Recipe submission form Child -->

@extends('navbar.parent')
@section('title', 'Recipe details')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
  <h2><i class="fas fa-cocktail" style="color:orange"></i> レシピの材料</h2>
  @if (isset($materrials))
  <table class="table">
     <thead>
        <tr>
          <th scope="col">材料名</th>
          <th scope="col">分量</th>
          <th scope="col">アルコール度数</th>
        </tr>
     </thead>
    <tbody>
    @foreach ($materrials as $materrial)
      <tr>
        <td scope="col">{{ $materrial->name }}</td>
        <td scope="col">{{ $materrial->quantity }}</td>
        <td scope="col">{{ $materrial->degree }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @endif
  <form method="POST" action="{{ url('/recipe_form/materrial/posts') }}">
    {{ csrf_field() }}
    <h3><i class="fas fa-plus-circle" style="color:orange"></i> 材料の追加</h3>
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">材料名</label>
      <div class="col-7">
        <input type="text" required="required" name="name" id="inputText" class="form-control" placeholder="材料名">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">個数</label>
      <div class="col-7">
        <input type="radio" value=1 name="unit" checked="checked">ml
        <input type="radio" value=2 name="unit">欠片
        <input type="radio" value=3 name="unit">自由記入（なし)
        <input type="text" required="required" name="quantity" id="inputText" class="form-control" placeholder="個数">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label">度数</label>
      <div class="col-7">
        <input type="text" name="degree" id="inputText" class="form-control" placeholder="度数" value="%" autofocus style="text-align:right">

      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> 追加</button>
      </div>
    </div>
  </form>
  <hr>
  <h2><i class="far fa-hand-point-right" style="color:orange"></i> 手順</h2>
  @if (isset($recipe_procedures))
  <div class="container row">
    @foreach ($recipe_procedures as $recipe_procedure)
    <div class="card proimg" style="width: 12rem;margin: 10px;">
      <img class="card-img-top center" src="{{ asset($recipe_procedure->image) }}" alt="Sample" style="object-fit: contain;">
      <div class="card-body">
        <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
        <p class="card-text">{{ $recipe_procedure->body }}</p>
      </div>
    </div>
    @endforeach
  </div>
  @endif
  <form method="POST" action="{{ url('/recipe_form/procedure/posts') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    @if (isset( $recipe_procedures ))
    <input type="hidden" name="process_num" value="{{ count($recipe_procedures) + 1 }}">
    @else
    <input type="hidden" name="process_num" value="1">
    @endif
    <br>
    <h3><i class="fas fa-plus-circle" style="color:orange"></i> 手順の追加</h3>


    <div class="form-group row" >
      <label for="image" class="col-sm-2 col-form-label">画像</label>
      <div class="col-7">
        <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像"  style="height:42px">
      </div>
    </div>


    <div class="form-group row">
      <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">説明</label>
      <div class="col-7">
        <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:620px"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> 追加</button>
      </div>
    </div>
  </form>
  <hr>
  <h2>タグ</h2>
  <form method="POST" action="{{ url('/recipe_form/create/posts') }}">
    {{ csrf_field() }}
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="container">
      <div class="row">
        <ul class="list-unstyled col-md-3">
          <h4>カクテルの味</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 1)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="taste_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-3">
          <h4>度数</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 2)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="degree_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-6" style="width: 100%;">
          <h4>ベース</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 3)
          <li style="width: 50%;float: left;">
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
    <br>
    <div class="offset-sm-2 col-sm-7">
      <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-check-circle"></i> 完了</button>
    </div>
    <br><br>
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
