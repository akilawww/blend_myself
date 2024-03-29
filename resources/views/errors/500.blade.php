@extends('navbar.parent')

@php
    $title = __('Internal Server Error');
@endphp

@section('title', 'error:500')

@include('navbar.head')
@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<center>
<div class="rounded error-code">
  <img src="{{ asset('/image/gummy.png') }}">
  <h1>{{ $title }}</h1>
  <p><strong>{{ __('Error') }}: <span class="error-code">500</span></strong></p>
  <a href="{{ route('top')}}" class="text-center">{{ __('Topへ戻る') }}</a>
</div>
</center>
@endsection

@include('navbar.footer')
