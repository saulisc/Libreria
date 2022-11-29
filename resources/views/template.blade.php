<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diario Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- añadimos el sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <!--Barra navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Diario Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request() ->routeIs('casa')?'text-primary fw-bold':''}}" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <!--el link de esa ruta se pone en ese formato debido a que le asignamos un nombre en la ruta-->
                        <!-- changes for practica 10 -->
                        <a class="nav-link {{ request() ->routeIs('recuerdo.create')?'text-primary fw-bold text-decoration-underline':''}}" href="{{route('recuerdo.create')}}">Registro recuerdos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request() ->routeIs('recuerdo.index')?'text-danger fw-bold':''}}" href="{{route('recuerdo.index')}}">Consulta recuerdos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Contenido de la pagina -->
    @yield('contenido')

    <!--Pie de pagina -->
    <div class="alert alert-warning mt-5" role="alert">
        Kevin Saul Campa Bonilla 2022 Copyright
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>