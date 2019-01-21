@extends('navbar.parent')

@php
    $title = __('Not Found');
@endphp

@section('title', 'error:404')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<center>
  <img src="{{ asset('/image/gummy.png') }}">
  <h1>{{ $title }}</h1>
  <p><strong>{{ __('Error') }}: <span class="error-code">404</span></strong></p>
  <a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a>
</center>
@endsection

@include('navbar.footer')
