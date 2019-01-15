<html lang="{{ app()->getLocale() }}">
  <head>
    @yield('head')
  </head>

  <body style="margin-right: 0px;font-size: 17px;">
    @yield('header')

    <div class="container-fulid text-dark">
      @yield('sidebar')
       <div class="m-100">
        @yield('content')
      </div>
    </div>

     @yield('footer')
 
  </body>