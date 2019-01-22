<!-- Recipe details -->
@extends('navbar.parent')

@section('title')
  {{ $recipe->title }}
@endsection

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<div class="container showmain border rounded" style="padding: 1rem;">
  <div class="row">
    <div class="recipetitle">{{ $recipe->title }}</div>
    <a href="{{ url('/edit', $recipe->id) }}"><button class="btn float-right">レシピを編集</button></a>
  </div>
  <br>
  <div class="row">
    投稿日：{{ $recipe->created_at->format('Y年m月d日　H時m分') }}　
    @if($recipe::select('created_at') == $recipe::select('updated_at'))
      更新日：{{ $recipe->updated_at->format('Y年m月d日　H時m分') }}
    @endif
  </div>
  <div class="row">
    <div class="card left" style="width: 18rem;">
      <img src="{{ asset($recipe->image) }}" alt="Sample" class="center" style="object-fit: contain;">
      <div class="card-body">
        <table class="table">
          <tr><th scope="col">味</th><td>a</td></tr>
          <tr><th scope="col">度数</th><td>b</td></tr>
          <tr><th scope="col">ベースのお酒</th>c<td>c</td></tr>
          
          <tr><th scope="col">
              
              <a href="http://twitter.com/intent/tweet?hashtags=さけばさだー&u&text=test&ULR=">
                <i class="fab fa-twitter fa-2x"></i></a>

           </th><td></td></tr>

        </table>
      </div>
    </div>
    <div class="showbody">
      {!! nl2br(e($recipe->body)) !!}<br><br>
      <table class="table">
        <tr><th scope="col">材料名</th><th scope="col">度数(%)</th><th scope="col">分量</th><th scope="col">購入</th></tr>
        @foreach ($materrials as $materrial)
        <tr><td>{{ $materrial->name }}</td><td>{{ empty($materrial->degree) ? '' : $materrial->degree }}</td><td>{{ $materrial->quantity }}</td></tr>
        @endforeach
      </table>
    </div>
  </div>
  <div class="container-fulid row">
    @foreach ($recipe_procedures as $recipe_procedure)
    <div class="card proimg" style="width: 12rem;margin: 10px;margin-top: 50px;">
      <img class="card-img-top center" src="{{ asset($recipe_procedure->image) }}" alt="Sample" style="object-fit: contain;">
      <div class="card-body">
        <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
        <p class="card-text">{{ $recipe_procedure->body }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

@include('navbar.footer')
