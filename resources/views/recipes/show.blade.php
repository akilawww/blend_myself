@extends('navbar.parent')
@section('title'){{ $recipe->title }}@endsection

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
    <div class="container showmain">
        <div class="row">
            <div class="recipetitle">{{ $recipe->title }}</div>
            <button class="btn float-right">レシピを保存</button>
        </div>
    <br>
    <div class="row">
        投稿日：{{ $recipe->created_at->format('Y年m月d日　H時m分') }}　
        @if($recipe::select('created_at') == $recipe::select('updated_at'))
            更新日：{{ $recipe->updated_at->format('Y年m月d日　H時m分') }}
        @endif
    </div>
    <div class="card-horizon">
        <div class="row card-horizon-con">
            <div class="left">
                <img src="{{ asset($recipe->image) }}" alt="Sample">
            </div>
            <div class="">
                {!! nl2br(e($recipe->body)) !!}
            </div>
        </div>
        </div>
            <ul class="list-group" style="max-width: 400px;">
                @foreach ($materrials as $materrial)
                <li class="list-group-item">{{ $materrial->name }}： {{ $materrial->quantity }} 
                    {{ empty($materrial->degree) ? '' : $materrial->degree }}</li>
                @endforeach
            </ul>
    @foreach ($recipe_procedures as $recipe_procedure)
        <div class="card left" style="width: 20rem;">
            <img class="card-img-top" src="{{ asset($recipe_procedure->image) }}" alt="Sample">
            <div class="card-body">
                <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
                <p class="card-text">{{ $recipe_procedure->body }}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection

@include('navbar.footer')