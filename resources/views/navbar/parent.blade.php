<html lang="{{ app()->getLocale() }}">
  <head>
    @yield('head')
  </head>

  <body>
    @yield('header')

    <div class="container-fulid">
      @yield('sidebar')
       <div class="m-100 container">
        @yield('content')
      </div>
    </div>

     @yield('footer')
 
  </body>