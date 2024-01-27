<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Css/afterLogin.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>QuizTime</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class=" appname" href="#">QuizTime</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ms-auto ">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('logoutt') }}"> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="">

        <main class="">

            @yield('content')
        </main>
      </div>
</body>
</html>
