<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/inicio.css') }}">
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
                <img src="../public/Imagenes/Logo2Project2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
        </a>
        <a class="navbar-brand">Navbar</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>
