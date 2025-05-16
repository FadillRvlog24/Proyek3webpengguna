<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

</head>
<body class="login-body">
    <div class="login-container">
        <div class="login-logo">
            <img alt="" 
                 src="{{ asset('img/logo.png') }}" 
                 width="200" height="200"/>
        </div>
        <div class="login-form">
            <h1>Login</h1>
            <p>Masuk ke akun Anda</p>
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <p class="register-link">
                <a href="{{ route('admin.register') }}">Belum punya akun?, Registrasi sekarang!</a>
            </p>
        </div>
    </div>
</body>
</html>
