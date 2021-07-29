<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagadito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <span class="navbar-brand mb-0 h1">Navbar</span>

                  <a class="nav-link active" aria-current="page" href="/">Prueba 1</a>
                  <a class="nav-link active" aria-current="page" href="{{ route('conversion.index') }}">Prueba 2</a>
                </div>
              </nav>
        </header>

        <main class="py-4">
            @include('menus')
            @yield('content')
        </main>
    </div>
</body>
</html>
