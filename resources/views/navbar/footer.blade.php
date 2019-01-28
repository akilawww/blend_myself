<!-- footer -->

@section('footer')
<footer class="bg-dark footer text-light">
	<center>
    <ul style="padding-top: 1rem;">
      <span><a href="{{ URL('/guideline') }}" class="text-light">ガイドライン</a>　|　</span>
      <span><a href="{{ URL('/privacypolicy') }}" class="text-light">個人情報の取り扱いについて</a>　|　</span>
      <span><a href="{{ URL('/serviceterms') }}" class="text-light">当サイトご利用の際の規約</a>　|　</span>
      <span><a href="{{ URL('/contact') }}" class="text-light">お問い合わせ</a></span>
    </ul>
    <ul>(c)2019 L group of Kobe College of Computing</ul>
  </center>
</footer>
@endsection
