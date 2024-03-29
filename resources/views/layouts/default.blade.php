<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
  <header>
    {{-- Navbar uguale per tutte le pagine --}}
    @include("partials.navbar")
  </header>
  @include("partials.jumbotron")
  <main class="bg-dark">
  @yield('main')
  </main>

  {{-- Footer uguale per tutte le pagine --}}
  @include("partials.footer")
</body>

</html>