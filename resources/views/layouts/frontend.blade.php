<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>LuxSpace</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="{{ url('/frontend/images/content/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

  <!--  <link rel="stylesheet" href="{{ url('/frontend/css/main.css') }}" /> -->
    <link rel="icon" href="{{ url('/frontend/images/content/favicon.png')}}" />

    <meta name="theme-color" content="#000" />
    <link rel="icon" href="{{ url('/frontend/favicon.ico') }}">
     <link href="{{ url('/frontend/css/app.minify.css')}}" rel="stylesheet">
</head>
    <body>
        @include('components.frontend.navbar');
        @yield('content');
        @include('components.frontend.footer');

        
      
    </body>

</html>
    
