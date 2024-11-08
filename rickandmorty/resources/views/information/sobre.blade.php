<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mim</title>
    <link rel="stylesheet" href="{{ asset('css/style_about.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
    <nav style="background-color: #38589D;">
        <div class="navbar navbar-expand-lg">
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
                    <a class="navbar-brand menu-item" href="/acess">Login / Cadastro</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="content">
        <section class="about-me">
            <h1>Sobre Mim</h1>
            <p>Sou um desenvolvedor apaixonado por tecnologia e inovação. Tenho experiência em desenvolvimento web, especialmente com Laravel e outras tecnologias modernas.</p>
        </section>

        <section class="resume">
            <h2>Resumo do Currículo</h2>
            <ul>
                <li><strong>Experiência:</strong> X anos em desenvolvimento web.</li>
                <li><strong>Habilidades:</strong> Laravel, PHP, JavaScript, HTML, CSS, e mais.</li>
                <li><strong>Educação:</strong> Formação em [sua área de estudo].</li>
            </ul>
        </section>

        <section class="projects">
            <h2>Meus Projetos no GitHub</h2>
            <ul>
                <li><a href="https://github.com/seuusuario/projeto1" target="_blank">Projeto 1</a> - Descrição breve do projeto.</li>
                <li><a href="https://github.com/seuusuario/projeto2" target="_blank">Projeto 2</a> - Descrição breve do projeto.</li>
                <li><a href="https://github.com/seuusuario/projeto3" target="_blank">Projeto 3</a> - Descrição breve do projeto.</li>
            </ul>
        </section>
    </main>
</body>
</html>
