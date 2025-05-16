@extends('layouts.admin')

@section('content')
  <h1>Edit Pengguna</h1>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('users.update', $user->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password (Opsional)</label>
    <input type="password" id="password" name="password" class="form-control">
    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
  </div>

  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
