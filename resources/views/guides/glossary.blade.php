@extends('navbar.parent')

@section('title', '用語集')

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container large">
	<div class="row">
	 <div class="col-md-2 glossary-sidebar"style="background:red; height:100%;">SideBar</div>
	 <div class="col-md-10">
			<div class ="glossary-cards rounded border" style ="font:30rem;"> <center>Glossarys</center> </div>
		 <div class="container-fluid glossary-main rounded">
			<div class="container-fluid" style="background: beige; margin:2rem 0rem;">
		 	<center><a href="{{ url('/')}}" class="text-center">{{ __('Topへ戻る') }}</a></center>
			</div>
		 </div>
	</div>
	</div>
</div>
@endsection

@include('navbar.footer')
