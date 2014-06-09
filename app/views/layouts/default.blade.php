<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="utf-8" >
  <meta name="robots" content="all,follow" >
  <meta name="googlebot" content="index,follow,snippet,archive" >
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Minimal |e-commerce template</title>

  <meta name="keywords" content="" >

  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Merriweather:400,400italic' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  {{ HTML::style('css/font-awesome.css') }}
  {{ HTML::style('css/font-awesome.css') }}
  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/style.pink.css', array('id' => 'minimal-stylesheet')) }}
  {{ HTML::style('css/owl.carousel.css') }}
  {{ HTML::style('css/owl.theme.css') }}

  {{ HTML::script('js/respond.min.js') }}

  <link rel="shortcut icon" href="favicon.png" >

    </head>
    <body class="no-padding">

  @yield('navbar')

  @yield('intro-image')

  <div id="all"> 

      @yield('advantages')

      @yield('content')

      @yield('footer')

      @yield('copyright')
  
  </div> <!-- /#all -->


  <!-- #### JAVASCRIPT FILES ### -->

  {{ HTML::script('js/respond.min.js') }}
  {{ HTML::script('js/jquery-1.11.0.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }} 
  {{ HTML::script('/js/jquery.cookie.js') }}  
  {{ HTML::script('js/front.js') }} 

    </body>
</html>