<!-- Recipe submission form Child -->

@extends('navbar.parent')
@section('title', 'Recipe details')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
  <h2 style="color:white;">材料</h2>
  @if (isset($materrials))
  <table class="table">
    @foreach ($materrials as $materrial)
    <tbody>
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
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label"style="color:white;">材料名</label>
      <div class="col-7">
        <input type="text" required="required" name="name" id="inputText" class="form-control" placeholder="材料名">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label"style="color:white;">個数</label>
      <div class="col-7">
        <input type="text" required="required" name="quantity" id="inputText" class="form-control" placeholder="個数">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputText" class="col-sm-2 col-form-label"style="color:white;">度数</label>
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
  <h2 style="color:white;">手順</h2>
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
    <div class="form-group">
      <label for="image" style="color:white;">画像</label>
      <input type="file" required="required" name="image" class="form-control" id="image" placeholder="画像">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" style="color:white;">説明</label>
      <textarea required="required" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">保存</button>
      </div>
    </div>
  </form>
  <hr>
  <h2 style="color:white;">タグ</h2>
  <form method="POST" action="{{ url('/recipe_form/create/posts') }}">
    {{ csrf_field() }}
    <input type="hidden" name="recipe_id" value="{{ $recipe_id }}">
    <div class="container">
      <div class="row">
        <ul class="list-unstyled col-md-3">
          <h4 style="color:white;">カクテルの味</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 1)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="taste_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" style="color:white;" for="taste_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-3">
          <h4 style="color:white;">度数</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 2)
          <li>
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="degree_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" style="color:white;" for="degree_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
        <ul class="list-unstyled col-md-6" style="width: 100%;">
          <h4 style="color:white;">ベース</h4>
          @foreach ($tags as $tag)
          @if ($tag->tag_type === 3)
          <li style="width: 50%;float: left;">
            <div class="custom-control custom-checkbox">
              <input type="radio" class="custom-control-input" id="base_{{ $tag->id }}" name="tag{{ $tag->tag_type }}" value="{{ $tag->id }}">
              <label class="custom-control-label" style="color:white;" for="base_{{ $tag->id }}">{{ $tag->tag_name }}</label>
            </div>
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    <div class="offset-sm-2 col-sm-10">
      <button type="submit" class="btn btn-primary">完了</button>
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
