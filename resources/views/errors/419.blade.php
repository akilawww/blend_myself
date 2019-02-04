@extends('navbar.parent')

@php
    $title = __('予期せぬエラー');
@endphp

@section('title', 'Unexpected error')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<center>
<div class="rounded error-codes">
  <img src="{{ asset('/image/gummy.png') }}">
  <h1>{{ $title }}</h1>
  <a href="{{ route('top')}}" class="text-center">{{ __('Topへ戻る') }}</a>
</div>
</center>
@endsection

@include('navbar.footer')
