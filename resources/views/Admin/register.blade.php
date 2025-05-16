<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin-register.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="register-body">
    <div class="register-container">
        <div class="register-logo">
            <img alt="Logo" 
                 src="{{ asset('img/logo.png') }}" 
                 width="150" height="150"/>
        </div>
        <div class="register-form">
            <h1>Register</h1>
            <p>Buat akun admin baru</p>
            <form action="{{ route('admin.register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon</label>
                    <input type="text" id="phone_number" name="phone_number" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="register-button">Register</button>
            </form>
            <p class="login-link">
                <a href="{{ route('admin.login') }}">Sudah punya akun? Login sekarang!</a>
            </p>
        </div>
    </div>
</body>
</html>
