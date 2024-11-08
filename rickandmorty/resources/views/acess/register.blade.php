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
    <section>
        <form action="">
            <h1>Register</h1>
            <div class="inputbox">
               <P>Informe seu email: <ion-icon name="mail-outline"></ion-icon> </P>
                <input type="email" id="email" required>
                <label for="email"></label>
            </div>
            <div class="inputbox">
                <p>Informe sua senha: <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="password" required>
                <label for="password"></label>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit">Log in</button>
            <div class="register">
                <p>Don't have an account? <a href="/register"><a href="#">Register</a></a></p>
            </div>
        </form>
    </section>
</body>
</html>