<html>
  <head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <style>
      .main-container {
        padding: 100px 0;
      }
      .main-navbar {
        box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
        flex-direction: row;
      }
      .thumbnail-area {
        min-width: 300px;
        height: 250px;
        background-size: cover;
        background-position: center;
      }
      .description-area {
        max-height: 6rem;
        line-height: 1.5rem;
        overflow: hidden;
      }
      .card-footer {
        text-align: center;
      }
      .card-footer small {
        text-transform: uppercase;
      }
    </style>

    <nav class="navbar fixed-top navbar-light bg-faded main-navbar">
      <span class="navbar-brand">Hello WebPick</span>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
    </nav>

    <div class="main-container container">
      @yield('content')
    </div>

    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>