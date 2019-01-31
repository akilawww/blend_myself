@extends('navbar.parent')

@section('title', '用語集')

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container-fluid" style="background: beige; margin-bottom:2rem;">
 	<center><a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a></center>
</div>
@endsection

@include('navbar.footer')
