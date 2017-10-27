<html>
  <head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <style>
      .main-container {
        padding: 5% 0;
        height: 100vh;
      }
    </style>
    
    <div class="main-container container">
      @yield('content')
    </div>

    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>