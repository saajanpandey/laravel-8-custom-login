<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stack('style')

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link "href="{{route('welcome')}}">Home</a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}">Register</a>
              </li>
              @else
              <li class="nav-item ">
                  <a class="nav-link" href="{{ route('logout') }}">
                      {{ __('Logout') }}
                  </a>
              </li>
              @endguest

            </ul>
            <ul class="navbar-nav ml-auto">


        </div>
      </nav>
      <div class="container">
          @yield('content')
      </div>

        <div class="footer">
            <p>Footer</p>
      </div>
</body>
</html>
