<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Easycation | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="logo_size.jpg">
    
  </head>
  <body style="background-color: rgb(199, 238, 255)">
    @include('partials.navbar')

    <div class="container-fluid mt-4">
      @yield('pariwisata')
    </div>

      <div class="container-fluid mt-4">
        @yield('penginapan')
      </div>

      <div class="container-fluid mt-4">
        @yield('nearest')
      </div>
  
  </body>
</html>