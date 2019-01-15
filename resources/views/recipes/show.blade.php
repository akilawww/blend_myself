@extends('navbar.parent')
@section('title'){{ $recipe->title }}@endsection

@include('navbar.head')

@include('navbar.header')

@include('navbar.sidebar')

@section('content')
    {{ $recipe->title }}
    <br>
    <img src="{{ $recipe->image }}" alt="Sample">
    <br>
    {!! nl2br(e($recipe->body)) !!}
    <br>
    {{ $recipe->update_at }}
    <br>
    <ul class="list-group" style="max-width: 400px;">
        @foreach ($materrials as $materrial)
            <li class="list-group-item">{{ $materrial->name }}： {{ $materrial->quantity }} 
                {{ empty($materrial->degree) ? '' : $materrial->degree.'％' }}</li>
        @endforeach
    </ul>
    <div class="row">
    @foreach ($recipe_procedures as $recipe_procedure)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{ $recipe_procedure->image }}" alt="Sample">
            <div class="card-body">
                <h4 class="card-title">{{ $recipe_procedure->process_num }}</h4>
                <p class="card-text">{{ $recipe_procedure->body }}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection

@include('navbar.footer')