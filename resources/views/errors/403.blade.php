@extends('navbar.parent')
@php
    $title = __('Forbidden');
@endphp

@section('title', 'error:403')

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container">
  <span class="Target">
    <img src="{{ asset('/image/gummy.png') }}">
    <h1>{{ $title }}</h1>
    <p><strong>{{ __('Error') }}: <span class="error-code">403</span></strong></p>
    <a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a>
  </span>
</div>
@endsection

@include('navbar.footer')
