<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <nav  style="background-color: #38589D;">
        <div class="navbar navbar-expand-lg">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
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
                    <a class="navbar-brand menu-item" href="/acess">Login / Cadastro</a>
                </div>
            </div>
        </div>
    </nav>
    
    <section>
        <form action="">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" id="email" required>
                <label for="email"></label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="password" required>
                <label for="password"></label>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit">Log in</button>
            <div class="register">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </section>
</body>
</html>
