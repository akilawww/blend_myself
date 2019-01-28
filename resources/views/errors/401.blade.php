@extends('navbar.parent')

@php
    $title = __('Unauthorized');
@endphp

@section('title', 'error:401')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<center>
<div class="rounded error-codes">
  <img src="{{ asset('/image/gummy.png') }}">
  <h1>{{ $title }}</h1>
  <p><strong>{{ __('Error') }}: <span>401</span></strong></p>
  <a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a>
</div>
</center>
@endsection

@include('navbar.footer')
