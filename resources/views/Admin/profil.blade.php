<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <link rel="stylesheet" href="profileadmin.css"> <!-- Ganti dengan path ke CSS Anda -->
</head>
<body>
    <h1>Profil Admin</h1>
    
    <div class="profile-info">
        <p><strong>Nama:</strong> {{ $admins->name }}</p> <!-- Menampilkan nama admin -->
        <p><strong>Email:</strong> {{ $admins->email }}</p> <!-- Menampilkan email admin -->
        <p><strong>Nomor Telepon:</strong> {{ $admins->phone }}</p> <!-- Menampilkan nomor telepon admin -->
    </div>

    <a href="{{ route('admin.beranda') }}">Kembali ke Beranda</a>
    <form action="{{ route('admin.logout') }}" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
