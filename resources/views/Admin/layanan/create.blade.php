@extends('layouts.admin')

@section('content')
<!-- Tambahkan CSS -->
<link rel="stylesheet" href="{{ asset('css/tambah-layanan.css') }}">

<div class="tambah-layanan-container">
    <h2 class="tambah-layanan-title">Tambah Layanan</h2>

<form action="{{ route('layanan.store') }}" method="POST">
    @csrf
    <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" id="kategori" required>

        <label for="nama">Nama Layanan:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="durasi">Durasi:</label>
        <input type="text" name="durasi" id="durasi" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>

        <button type="submit" class="btn-simpan">Simpan</button>
    </form>
</div>
@endsection
