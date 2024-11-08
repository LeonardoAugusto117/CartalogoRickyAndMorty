<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
</head>
<body>

    <section>
        <form action="">
            <h1>Login</h1>
            <div class="inputbox">
                <ion-con name="mail-outline"></ion-con>
                <imnput type="email"></imnput>
                <label for="">Email</label>
            </div>
            <div class="inputbox">
                <ion-con name="mail-outline"></ion-con>
                <imnput type="email"></imnput>
                <label for="">Password</label>
            </div>
            <div class="forget">
                <label for="" ><input type="checkbox"> Remember Me</label>
                <a hred="#">Forget Password</a>
            </div>
            <button>Log in</button>
            <div class="register">
                <p>Don't have a account <a href="#">Register</a></p>
            </div>
        </form>
    </section>
    
</body>
</html>