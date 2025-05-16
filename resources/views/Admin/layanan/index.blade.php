@extends('layouts.admin')
@section('content')
<div class="card row mb-4">
       <h1>Daftar Layanan</h1>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary">Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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
    <br>
    <a href="{{ route('admin.beranda') }}" class="btn btn-primary">Kembali</a>

    </div>
@endsection
