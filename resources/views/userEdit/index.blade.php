<!-- Recipe details -->
@extends('navbar.parent')

@section('title')
  {{ $user->name }}
@endsection

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<div class="container showmain border rounded" style="padding: 2rem;">
  <div class="row">
    <div class="recipetitle text-left" style="border-bottom: solid 2px orange;">
        <h1 style="color: #622d18;">{{ $user->name }}</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nameModal"><i class="fas fa-pen"></i> 編集</button>
        <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModalLabel">
            <div class="modal-dialog" role="document">
                <form action="{{ route('userEdit.name_update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-content">
                    <div class="modal-body">
                        <label for="name">ユーザーネーム</label>
                        <input type="text" required="required" name="name" class="form-control" id="name" placeholder="山田 太郎">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-file-medical"></i> 保存</button>
                    </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

  </div>
  <br>
  <div class="row text-muted" style="font-size: 15px ; font-family: Courier;">
        投稿日：{{ $user->created_at->format('Y年m月d日　H時m分') }}　
    @if($user->created_at < $user->updated_at)
        <br>
        更新日：{{ $user->updated_at->format('Y年m月d日　H時m分') }}
    @endif
  </div>
  <div class="row">
    <div class="card left shadow-sm" style="width: 280px;">
      <img src="{{ asset($user->icon) }}" alt="Sample" class="center" style="object-fit: contain;">
      <div class="card-body">


        <div class="card-footer bg-white">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iconModal"><i class="fas fa-pen"></i> 編集</button>
            <div class="modal fade" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="iconModalLabel">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('userEdit.icon_update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <label for="icon">画像</label>
                            <input type="file" required="required" name="icon" class="form-control" id="icon" placeholder="画像">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-file-medical"></i> 保存</button>
                        </div><!-- /.modal-footer -->
                    </div><!-- /.modal-content -->
                    </form>
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <form style="display: inline;" action="{{ route('userEdit.icon_delete') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> 削除</button>
            </form>
        </div>
        <br>
      </div>
    </div>
    <div class="showbody">
      <table class="table bg-light rounded shadow-sm">
        <tr>
            <th colspan="4">コメント</th>
            <th colspan="4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#commentModal"><i class="fas fa-pen"></i> 編集</button>
                <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('userEdit.comment_update') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="modal-content">
                            <div class="modal-body">
                                <label for="comment">コメント</label>
                                <textarea required="required" name="comment" class="form-control" id="comment" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-file-medical"></i> 保存</button>
                            </div><!-- /.modal-footer -->
                        </div><!-- /.modal-content -->
                        </form>
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </th>
        </tr>
        <tr><td colspan="4">{!! nl2br(e($user->comment)) !!}<br><br></td></tr>
      </table>
    </div>
  </div>
    <!--
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">メールアドレス</div>
            <div class="card-body">
                <div class="form-group row">
                   {{ $user->email }}
                </div>
            </div>
        </div>
    </div>
    -->
</div>
@endsection

@include('navbar.footer')
