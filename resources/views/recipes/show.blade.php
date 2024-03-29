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

<div class="container showmain border rounded" style="padding: 2rem;">
  <div class="row">
    <div class="recipetitle text-left" style="border-bottom: solid 2px orange;"><h1 style="color: #622d18;">{{ $recipe->title }}</h1></div>
    @if ($recipe->user_id === Auth::id())
    <a href="{{ route('edit.index',['id' => $recipe]) }}"><button class="btn btn-success float-right shadow-sm"><i class="fas fa-pen-alt"></i> レシピを編集</button></a>
    @else
    <!-- フォロー表示 -->
    <a href="{{ route('userpage.index',['id' => $recipeUser] ) }}" class="text-dark">{{ $recipeUser->name }}</a>　
    @if ($follow->isEmpty())
    <form method="POST" action="{{ route('follow.add') }}">
      {{ csrf_field() }}
      <input type="hidden" name="follower_id" value="{{ Auth::id() }}">
      <input type="hidden" name="follow_id" value="{{ $recipeUser->id }}">
      <button type="submit" class="btn btn-outline-primary hoge shadow-sm text-primary " style="background-color:white">
        フォローする</button>
    </form>
    @else
    <form method="POST" action="{{ route('follow.remove') }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input type="hidden" name="follower_id" value="{{ Auth::id() }}">
      <input type="hidden" name="follow_id" value="{{ $recipeUser->id }}">
      <button type="submit" class="btn btn-primary hoge shadow-sm rounded-pill">フォロー中</button>
    </form>
    @endif
    @endif
  </div>
  <br>
  <div class="text-left" style="font-size: 12px ; font-family: Courier">
    <i class="far fa-clock"></i>公開日:{{ $recipe->created_at->format('Y年m月d日 H時m分') }}　
    @if($recipe->created_at < $recipe->updated_at)
     <br>
     <i class="fas fa-clock"></i>更新日:{{ $recipe->updated_at->format('Y年m月d日 H時m分') }}
    @endif
  </div>
  <div class="row">
    <div class="card left shadow-sm" style="width: 280px;">
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
          <tr><td colspan="2"></td></tr>
        </table>
        <!-- お気に入り -->
        @if ($recipe->user_id === Auth::id())
        @else
        <div>
          @if ($favorite->isEmpty())
          <form method="POST" action="{{ route('favorite.add') }}">
            {{ csrf_field() }}
            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <button type="submit" class="btn btn-light hoge shadow-sm"><i class="far fa-bookmark"></i> お気に入りに追加</button>
          </form>
          @else
          <form method="POST" action="{{ route('favorite.remove') }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <button type="submit" class="btn btn-light hoge shadow-sm"><i class="fas fa-star" style="color:darkorange"></i> お気に入りのレシピ</button>
          </form>
          @endif
        </div>
        @endif
        <!-- いいね -->
        <div style="display:inline-flex">
        @if ($recipe->user_id === Auth::id())
          <i class="far fa-thumbs-up"></i> いいね
        @else
          @if ($nice->isEmpty())
          <form method="POST" action="{{ route('nice.add') }}" >
            {{ csrf_field() }}
            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <button type="submit" class="btn btn-light hoge shadow-sm"　style="background:white ; color:red ; border-color: red">
                <i class="far fa-thumbs-up"></i> いいね</button>
          </form>
          @else
          <form method="POST" action="{{ route('nice.remove') }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <button type="submit" class="btn btn-danger hoge shadow-sm">
              <i class="fas fa-thumbs-up"></i> いいね</button>
          </form>
          @endif
        @endif
        <div style="padding-left:50px ; padding-top:5">
            <u>{{ count($niceCount) }}件</u></div>
        </div>
        <div class="card-footer bg-white">
        <table width="220">
          <tr>
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
        <br>
      </div>
    </div>
    <div class="showbody">
      <table class="table bg-light rounded shadow-sm" style="width: 520px">
        <tr><th colspan="4">概要</th></tr>
        <tr><td colspan="4">{!! nl2br(e($recipe->body)) !!}<br><br></td></tr>
        <tr><th scope="col">材料名</th><th scope="col">度数(%)</th><th scope="col">分量</th><th scope="col">購入</th></tr>
        @foreach ($materrials as $materrial)
        <tr><td>{{ $materrial->name }}</td><td>{{ empty($materrial->degree) ? '' : $materrial->degree }}</td><td>{{ $materrial->quantity }}
          <td><a href="https://www.amazon.co.jp/s/ref=nb_sb_noss_1?__mk_ja_JP=カタカナ&url=search-alias%3Daps&field-keywords={{ $materrial->name }}" target="_blank"><button class="btn btn-primary"><i class="fas fa-shopping-cart"></i> 購入</button></a></td></td></tr>
        @endforeach
      </table>
    </div>
  </div>
  <br>
      <h4><i class="fas fa-angle-double-right" style="color:orange"></i> <b>作り方</b></h4>
    <hr>
  <div class="container-fulid row">
    @foreach ($recipe_procedures as $recipe_procedure)
    <div class="card proimg shadow-sm" style="width: 12rem;margin: 10px;margin-top: 50px;">
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
