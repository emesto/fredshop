<!DOCTYPE html>
<html lang="en">
    <head>

      @yield('meta')

      @yield('scripts')

    </head>
    <body class="no-padding">

      @yield('navbar')

      @yield('intro-image')

      <div id="all"> 

          @yield('advantages')

          @yield('content')

          @yield('footer')

          @yield('copyright')
      
      </div>

      @yield('javascript-files')

    </body>
</html>