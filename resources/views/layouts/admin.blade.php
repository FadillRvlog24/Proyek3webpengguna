<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layanan-edit.css') }}">
</head>
<body>
    <header>
        <h1>Mbahsuh admin</h1>
 
</form>

<nav class="admin-nav">
        <ul>
            <li><a href="{{ route('admin.beranda') }}">Dashboard</a></li>
            <li><a href="{{ route('pesanan.index') }}">Pesanan</a></li>
            <li><a href="{{ route('admin.pengguna') }}">Pengguna</a></li>
            <li><a href="{{ route('statistik.detail') }}">Statistik penjualan</a></li>
            <li><a href="{{ route('layanan.index') }}">Layanan</a></li>

            <a href="#" onclick="confirmLogout(event)">Logout</a>

            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
        </ul>

       
        </nav>
    </header>

    <main>
        @yield('content')
        @yield('scripts')
        <nav>
       
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} </p>
    </footer>

    <script>
  function confirmLogout(event) {
    event.preventDefault();
    
    if (confirm('Apakah Anda yakin ingin logout?')) {
      alert('Anda berhasil logout. Mengarahkan ke halaman login admin...');
      document.getElementById('logout-form').submit();
    }
  }
</script>

</body>
</html>
