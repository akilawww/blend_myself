<!-- parent -->

<html lang="{{ app()->getLocale() }}">
  <head>
    @yield('head')
  </head>
  <body>
    <div class="wrapper">
      @yield('header')
      <div class="container-fulid">
        @yield('sidebar')
        <div class=" container m-20">
          @yield('content')
        </div>
      </div>
      <div class="push"></div>
    </div>
    @yield('footer') 
  </body>
