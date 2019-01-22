<!-- head -->

@section('head')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - さけばさだー</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet"  href="{{ asset('/css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navstyle.css') }}">
 	<link rel="shortcut icon" href="{{ asset('/image/icon.ico') }}" type="image/vnd.microsoft.icon">
  <script src="{{ asset('/js/app.js') }}" defer></script>
@endsection


