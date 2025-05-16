@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Edit Layanan</h2>
    
    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="edit-layanan-form-group">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" class="form-control" value="{{ old('id', $layanan->id) }}" readonly>
    </div>

    <div class="edit-layanan-form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $layanan->kategori) }}" required>
    </div>

    <div class="edit-layanan-form-group">
        <label for="nama">Nama Layanan</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $layanan->nama) }}" required>
    </div>

    <div class="edit-layanan-form-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', $layanan->harga) }}" required>
    </div>

    <div class="edit-layanan-form-group">
        <label for="durasi">Durasi</label>
        <input type="text" name="durasi" id="durasi" class="form-control" value="{{ old('durasi', $layanan->durasi) }}" required>
    </div>

    <div class="edit-layanan-button-group">
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.beranda') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>

@endsection
