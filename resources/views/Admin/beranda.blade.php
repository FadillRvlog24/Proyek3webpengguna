@extends('layouts.admin')
@section('content')
<style>
    #column-example-1 {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    #column-example-1 .column {
        --aspect-ratio: 4 / 3;
    }
     /* Tambahan untuk menghindari off side */
     .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .table th, .table td {
        white-space: nowrap;
    }

    .card {
        overflow-x: auto;
    }

    /* Container tambahan agar padding konsisten */
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
</style>
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="container">
    <div class="row mb-4">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-header mb-2"><i class="bi bi-person-check-fill"></i> Akun Yang Terdaftar</h5>
                    <h3 class="card-text mb-2">{{ $totalUsers }}</h3>
                    <a href="" class="btn btn-primary text-center">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-header mb-2"><i class="bi bi-tools"></i> Layanan yang tersedia</h5>
                    <h3 class="card-text mb-2">{{ $totalLayanan }}</h3>
                    <a href="{{ route('layanan.index') }}" class="btn btn-primary text-center">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-header mb-2"><i class="bi bi-file-check-fill"></i> Total Pesanan</h5>
                    <h3 class="card-text mb-2">{{ $totalPesanan }}</h3>
                    <a href="#pesanan" class="btn btn-primary text-center">Lihat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card row mb-4">
        <h2 class="card-header">Statistik Data</h2>
        <div class="card-body">
            <h5 class="card-title">Data Akun dan Jasa</h5>
            <p class="card-text">Total Akun Pengguna: <strong>{{ $totalUsers }}</strong></p>
            <p class="card-text">Total Jasa: <strong>{{ $totalLayanan }}</strong></p>
            <a href="{{ route('statistik.detail') }}" class="btn btn-primary mt-3">Lihat Statistik Lengkap</a>
        </div>
    </div>

    <div class="card row mb-4">
        <h2 class="card-header" id="akun">Akun Pelanggan</h2>
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <div class="card-body">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Akun Pelanggan</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                <td>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <!-- Sampai ini besok lagi -->
    <div class="card row mb-4">
       <h1>Daftar Layanan</h1>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary">Tambah Layanan</a>
    <a href="{{ route('layanan.index') }}" class="btn btn-primary">Lihat Tabel layanan</a>


    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Durasi</th>
                <th>Harga</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($layanans as $layanan)
            <tr>
                <td>{{ $layanan->id }}</td>
                <td>{{ $layanan->kategori }}</td>
                <td>{{ $layanan->nama }}</td>
                <td>{{ $layanan->durasi }}</td>
                <td>Rp {{ number_format($layanan->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <div class="card row mt-4" id="pesanan">
        <h2 class="card-header">Daftar Pesanan</h2>
        <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Total Pembayaran</th>
                    <th>Metode Pembayaran</th>
                    <th>Layanan dipesan</th>
                    <th>Waktu Pemesanan</th>
                    <th>Status</th>
                    <th>Bukti Transfer</th>
                    <th>Catatan</th>
                    <th></th>
                    <th>Jarak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pesanans as $pesanan)
                <tr>
                    <td>{{ $pesanan->nama }}</td>
                    <td>{{ $pesanan->alamat }}</td>
                    <td>{{ $pesanan->no_telepon }}</td>
                    <td>Rp {{ number_format($pesanan->total_pembayaran, 0, ',', '.') }}</td>
                    <td>{{ $pesanan->metode_pembayaran }}</td>
                    <td>{{ $pesanan->layanan_dipesan }}</td>
                    <td>{{ $pesanan->created_at->format('d-m-Y H:i') }}</td>
                     <!-- Tampilkan status -->
                <td>{{ ucfirst($pesanan->status) }}</td>
                
                <!-- Tampilkan bukti transfer jika ada -->
                <td>
                    @if($pesanan->bukti_transfer)
                        <img src="{{ asset('public/uploads/...' . $pesanan->bukti_transfer) }}" alt="Bukti Transfer" width="100">
                    @else
                        Tidak Ada
                    @endif
                </td>
                
                    <td>{{ $pesanan->catatan }}</td>
                    <td>{{ $pesanan->jenis_pengiriman }}</td>
                    <td>{{ $pesanan->jarak ?? '-' }} km</td>

                    <!-- Form dropdown aksi update status -->
                <td>
                    <form action="{{ route('pesanan.updateStatus', $pesanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select mb-2" onchange="this.form.submit()">
                            <option value="pending" {{ $pesanan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="diproses" {{ $pesanan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                            <option value="Terima orderan" {{ $pesanan->status == 'Terima orderan' ? 'selected' : '' }}>Terima orderan</option>
                            <option value="Proses Menyikat" {{ $pesanan->status == 'Proses Menyikat' ? 'selected' : '' }}>Proses Menyikat</option>
                            <option value="Proses Pengeringan" {{ $pesanan->status == 'Proses Pengeringan' ? 'selected' : '' }}>Proses Pengeringan</option>
                            <option value="Proses Cleaning" {{ $pesanan->status == 'Proses Cleaning' ? 'selected' : '' }}>Proses Cleaning</option>
                            <option value="Proses Mewangikan" {{ $pesanan->status == 'Proses Mewangikan' ? 'selected' : '' }}>Proses Mewangikan</option>
                            <option value="Proses Packing" {{ $pesanan->status == 'Proses Packing' ? 'selected' : '' }}>Proses Packing</option>
                            <option value="dikirim" {{ $pesanan->status == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                            <option value="selesai" {{ $pesanan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </form>
                </td>
                
            </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">Belum ada pesanan masuk</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
