<!DOCTYPE html>
<html lang="en">
    <head>

      @include('scripts.meta')
      @include('scripts.scripts')

      @yield('extra-scripts')

    </head>
    <body{{ (Request::is('/') ? ' class="no-padding"' : '') }}>

      @include('layouts.navbar')

      @yield('intro-image')

      <div id="all"> 

          @yield('content')

          @include('layouts.footer')

          @include('layouts.copyright')
      
      </div>

      @include('scripts.jsfiles')

    </body>
</html>