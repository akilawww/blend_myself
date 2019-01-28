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

<div class="container showmain border rounded" style="padding: 2rem;">
  <div class="row">
    <div class="recipetitle text-left" style="border-bottom: solid 2px orange"><h1>{{ $recipe->title }}<h1></div>
    @if ($recipe->user_id === Auth::id())
      <a href="{{ url('/edit', $recipe->id) }}"><button class="btn float-right"><i class="fas fa-pen-alt"></i> レシピを編集</button></a>
    @else
      @if ($favorite->isEmpty())
        <form method="POST" action="{{ url('/favorite/add') }}">
          {{ csrf_field() }}
          <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          <button type="submit" class="btn btn-default hoge" style="background:white ; color:royalblue ; border-color: royalblue">
            <i class="far fa-bookmark"></i> お気に入りに追加</button>
        </form>
      @else
        <form method="POST" action="{{ url('/favorite/remove') }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          <button type="submit" class="btn btn-primary hoge">
              <i class="fas fa-bookmark"></i> お気に入りから外す</button>
        </form>
      @endif
    @endif
  </div>
      
  <br>
  <div class="row text-muted" style="font-size: 15px ; font-family: Courier">
    <i class="fas fa-history"></i>投稿日：{{ $recipe->created_at->format('Y年m月d日 H時m分') }}　
    @if($recipe->created_at < $recipe->updated_at)
      更新日：{{ $recipe->updated_at->format('Y年m月d日 H時m分') }}
    @endif
  </div>
  <div class="row">
    <div class="card left" style="width: 18rem;">
      <img src="{{ asset($recipe->image) }}" alt="Sample" class="center" style="object-fit: contain;">
      <div class="card-body">
        <table class="table">
          @if (!$tags->isEmpty())
            @foreach ($tags as $tag)
              @switch($tag->tag_type)
                  @case(1)
                    <tr><th scope="col">味</th><td>{{ $tag->tag_name }}</td></tr>
                    @break
                  @case(2)
                    <tr><th scope="col">度数</th><td>{{ $tag->tag_name }}</td></tr>
                    @break
                  @case(3)
                    <tr><th scope="col">ベースのお酒</th><td>{{ $tag->tag_name }}</td></tr>
                    @break
                  @default
              @endswitch
            @endforeach
          @endif
        </table>

        <table width="220">
          <tr align="center">
            <th>
               <a href="javascript:window.open('http://twitter.com/share?text='+encodeURIComponent(document.title)+'&url='+encodeURIComponent(location.href),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');"><i class="fab fa-twitter fa-2x"></i></a>
             </th>
             <th >
                <a href="javascript:window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');"><i class="fab fa-facebook fa-2x" style="color: #3B5998"></i></a>
             </th>
             <th >
                <a href="javascript:window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');"><i class="fab fa-google-plus fa-2x" style="color: #CC3300"></i></a>
             </th>
              <th>
                <a href="javascript:window.open('https://line.me/R/msg/share?url='+encodeURIComponent(location.href),'sharewindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');"><i class="fab fa-line fa-2x" style="color: #00AA00"></i></a>
             </th>
          </tr>
        </table>

      </div>
    </div>
    <div class="showbody">
      <div style="padding-left: 10px"><b>概要</b></div>
      <table class="table">
        <tr><td>{!! nl2br(e($recipe->body)) !!}<br><br></td></tr>
      
        <tr><th scope="col">材料名</th><th scope="col">度数(%)</th><th scope="col">分量</th><th scope="col">購入</th></tr>
        
        @foreach ($materrials as $materrial)
        <tr><td>{{ $materrial->name }}</td><td>{{ empty($materrial->degree) ? '' : $materrial->degree }}</td><td>{{ $materrial->quantity }}
          <td><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> 購入</button></td></td></tr>
        @endforeach
      </table>
    </div>
  </div>
  <br>
<div style="display:inline-flex">
  @if ($recipe->user_id === Auth::id())
    <i class="far fa-thumbs-up"></i> いいね
  @else
    @if ($nice->isEmpty())
      <form method="POST" action="{{ url('/nice/add') }}" >
        {{ csrf_field() }}
        <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <button type="submit" class="btn btn-defalt hoge"　style="background:white ; color:red ; border-color: red">
          <i class="far fa-thumbs-up"></i> いいね</button>
      </form>
    @else
      <form method="POST" action="{{ url('/nice/remove') }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <button type="submit" class="btn btn-danger hoge"　>
          <i class="fas fa-thumbs-up"></i> いいね</button>
      </form>
    @endif
  @endif
    <div style="padding-left:50px ; padding-top:5">
      <u>{{ count($niceCount) }}件</u></div>
  </div>
  <div style="padding-top:200-x"><h3><b>手順</b></h3></div>
  <div class="container-fulid row"
    @foreach ($recipe_procedures as $recipe_procedure)
    <div class="card proimg" style="width: 12rem;margin: 10px;margin-top: 50px;">
      <img class="card-img-top center" src="{{ asset($recipe_procedure->image) }}" alt="Sample" style="object-fit: contain;">
      <div class="card-body">
        <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
        <hr>
        <p class="card-text">{{ $recipe_procedure->body }}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection

@include('navbar.footer')
<script>
    $(document).ready(function(){
        $(".hoge").click(function(){
             
          if($(this).hasClass("disabled")){
            void(0);
          }else{
            $("[data-toggle='popover']").popover('show');
            setTimeout(function(){
                 $("[data-toggle='popover']").popover('destroy');
            },3000);
            $(this).addClass("disabled");
            $(this).text("お気に入りに追加済み");
          }
             
        });
    });
    </script>