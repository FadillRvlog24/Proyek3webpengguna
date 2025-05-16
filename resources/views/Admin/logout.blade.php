<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Berhasil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container text-center">
        <h2>Anda telah logout</h2>
        <p>Silakan <a href="{{ url('/admin/login') }}">login kembali</a> jika ingin mengakses admin panel.</p>
    </div>
</body>
</html>
