<!-- footer -->

@section('footer')
<footer class="navbar navbar-dark footer text-light justify-content-center">
	<center>
    <ul style="padding-top: 1rem;">
      <span><a href="{{ route('guideline') }}" class="text-light">ガイドライン</a>　|　</span>
      <span><a href="{{ route('privacypolicy') }}" class="text-light">個人情報の取り扱いについて</a>　|　</span>
      <span><a href="{{ route('serviceterms') }}" class="text-light">当サイトご利用の際の規約</a>　|　</span>
      <span><a href="{{ route('glossary') }}" class="text-light">用語集</a>　|　</span>
			<span><a href="{{ route('contact') }}" class="text-light">お問い合わせ</a></span>
    </ul>
    <ul>(c)2019 L group of Kobe College of Computing</ul>
  </center>
</footer>
@endsection
