@extends('navbar.parent')

@section('title', '用語集')

@include('navbar.head')
@include('navbar.header')

@section('content')
<div class="container">
	<div class="row">
	   <div class="col-md-2 glossary-sidebar"style="background:red; height:100%;">
		<div class="glossary_genre container-fluid rounded border" style="font-size:1.8rem;"><center>ジャンル</center></div>
		<div class="glossary_genre container-fluid rounded border">Hi02</div>
		<div class="glossary_genre container-fluid rounded border">Hi03</div>
	   </div>
	 <div class="col-md-10">
			<div class ="glossary-cards rounded border" style ="font:30rem; max-height:10rem;"> <center> 用語集 </center> </div>
		 <div class="container-fluid glossary-main rounded">
　　　　　
		 <!--ここからグロッサリコンテンツ-->
		 <div class ="glossary-cards container-fluid rounded border" style ="font:30rem;"><div class="col-md-5">Testtest</div></div>
		 <div class ="glossary-cards container-fluid rounded border" style ="font:30rem;"><div class="col-md-5">Testtest</div></div>
		 <div class ="glossary-cards container-fluid rounded border" style ="font:30rem;"><div class="col-md-5">Testtest</div></div>
		 <!--グロッサリコンテンツはここまで-->
		 
		 <div class="container-fluid" style="background: beige; margin:2rem 0rem;">
		  	<center><a href="{{ route('top')}}" class="text-center">{{ __('Topへ戻る') }}</a></center>
			</div>
		 </div>
	</div>
	</div>
</div>
@endsection

@include('navbar.footer')
