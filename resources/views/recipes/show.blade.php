@extends('navbar.header')
@section('title'){{ $recipe->title }}@endsection
@section('content')
    {{ $recipe->title }}
    <br>
    <img src="{{ $recipe->image }}" alt="Sample">
    <br>
    {!! nl2br(e($recipe->body)) !!}
    <br>
    {{ $recipe->update_at }}
    <br>
@endsection