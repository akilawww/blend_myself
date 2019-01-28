@extends('navbar.parent')

@php
    $title = __('Forbidden');
@endphp

@section('title', 'error:403')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<center>
<div class="rouded error-codes">
  <img src="{{ asset('/image/gummy.png') }}">
  <h1>{{ $title }}</h1>
  <p><strong>{{ __('Error') }}: <span class="error-code">403</span></strong></p>
  <a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a>
</div>
</center>
@endsection

@include('navbar.footer')
