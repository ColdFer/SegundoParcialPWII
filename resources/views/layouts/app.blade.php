<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title')
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/servicios">
            Taller Automotriz
        </a>

        @auth
        <div class="d-flex align-items-center text-white">

            <span class="me-3">
                {{ Auth::user()->name }}
            </span>

            <form method="POST" action="/logout">
                @csrf

                <button class="btn btn-danger btn-sm">
                    Cerrar sesión
                </button>

            </form>

        </div>
        @endauth

    </div>
</nav>


<div class="container mt-4">

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    @yield('content')

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>