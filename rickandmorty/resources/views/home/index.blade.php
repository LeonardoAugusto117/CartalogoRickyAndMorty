<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <nav  style="background-color: #38589D;">
        <div class="navbar navbar-expand-lg ">
            <!-- Logo -->
            <a class="navbar-brand" href='/'>
                <img src="{{ asset('img/rick.jpg') }}" alt="Logo" class="rounded-circle img-logo">
            </a>
            <!-- Menu responsivo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto menu-links">
                    <a class="navbar-brand menu-item" href="/">Home</a>
                    <a class="navbar-brand menu-item" href="/persona">Personagens</a>
                    <a class="navbar-brand menu-item" href="/information">Sobre</a>
                    <a class="navbar-brand menu-item" href="/acess.login">Login / Cadastro</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container my-5">
        <div class="row justify-content-center">
            @foreach ($characters as $character)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4"> 
                    <div class="card h-100">
                        <img src="{{ $character['image'] }}" class="card-img-top" alt="{{ $character['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $character['name'] }}</h5>
                            <a href="{{ url('/chars/' . $character['id']) }} "class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    </script>
</body>

</html>
