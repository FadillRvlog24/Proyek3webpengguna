<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Penjualan - Ratna Cake</title>
    <link rel="stylesheet" href="{{ asset('css/adminrekappenjualan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-beranda.css') }}"> <!-- Tambahkan file CSS Anda -->

</head>

<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Page</h2>
            <ul>
                <li><a href="{{ url('/admin/beranda') }}">Dashboard <img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="#">Monitoring <img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="{{ route('admin.pesanan') }}">Pesanan <img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="{{ url('produk') }}">Update Stok & Harga <img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="{{ route('admin.rekap_penjualan') }}">Rekap Penjualan <img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="{{route('admin.pengguna')}}">Data Pengguna<img src="{{ asset('images/icons8forward26white.png') }}" width="15"></a></li>
                <li><a href="{{route('admin.weather', ['kode_wilayah' => '12345']) }}">Informasi cuaca<img src="{{ asset('images/icons8forward26white.png') }}"width="15"></a></li>
        </div>

        <!-- Main Content -->
        <div class="main-content">
           
    <div class="">
    <a href="{{ url('/admin/beranda') }}" class="back-btn">
            <img src="{{ asset('images/icons8back26.png') }}" alt="Back" class="back-icon">
        </a>
    <h1>Rekap Penjualan UMKM Ratna Cake</h1>

    <h3>Total Penjualan per Produk</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Total Penjualan (Rp)</th>
                <th>Jumlah Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salesPerProduct as $sale)
                <tr>
                    <td>{{ $sale->nama }}</td>
                    <td>{{ number_format($sale->total_penjualan, 0, ',', '.') }}</td>
                    <td>{{ $sale->jumlah_transaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="info-box">
    <h2>Total Keseluruhan Penjualan</h2>
    <p>Rp {{ number_format($totalKeseluruhan, 0, ',', '.') }}</p> 
    </div>

<div class="rata-rata-box">
    <h2>Rata-rata Penjualan per Transaksi</h2>
    <p>Rp {{ number_format($rataRataPerTransaksi, 0, ',', '.') }}</p>
    </div>

    <div class="produk-box">
    <h2>Penjualan Langganan</h2>
    @if($produkPalingLaris)
        <p>{{ $produkPalingLaris->nama }} dengan total penjualan Rp {{ number_format($produkPalingLaris->total_penjualan, 0, ',', '.') }}</p>
    @else
        <p>Data penjualan langganan tidak tersedia.</p>
    @endif
</div>

    <h3>Jumlah Transaksi Berdasarkan Metode Pembayaran</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Metode Pembayaran</th>
                <th>Jumlah Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaranPerMetode as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->metode_pembayaran }}</td>
                    <td>{{ $pembayaran->jumlah_transaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
