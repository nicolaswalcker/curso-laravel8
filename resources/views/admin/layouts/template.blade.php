<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <!-- Import styles -->
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <!-- Import fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="{{route('posts.index')}}">Bloggo</a>
    <div class="login-buttons">
      <a href="#">Login</a>
      <a href="#">Logout</a>
    </div>
  </header>
  <main>
    @yield('content')
  </main>
</body>
</html>