@extends('navbar.parent')

@section('title', 'お問い合わせ')

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container-fluid" style="background: beige; margin-bottom:2rem;">
 	<center><a href="{{ route('top')}}" class="text-center">{{ __('Topへ戻る') }}</a></center>
</div>
@endsection

@include('navbar.footer')
