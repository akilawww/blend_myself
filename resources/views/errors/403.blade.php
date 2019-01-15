@extends('navbar.header')
@php
    $title = __('Forbidden');
@endphp

@section('title', 'error:403')

@include('navbar.head')

@include('navbar.header')

@section('sidebar')
@endsection

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p><strong>{{ __('Error') }}: <span class="error-code">403</span></strong></p>
    <p>{{ __('You do not have permission to access this page.') }}</p>
</div>
@endsection

@include('navbar.footer')