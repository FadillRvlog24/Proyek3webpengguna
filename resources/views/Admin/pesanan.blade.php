@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ asset('css/admin-pesanan.css') }}">

<div class="container mt-4" id="pesanan-admin">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Daftar Pesanan</h4>
            <br>
            <a href="{{ route('pesanan.cetakPDF') }}" class="btn-cetak-pdf" target="_blank">
        Cetak PDF
    </a>
 


     </div>


        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-nowrap">
                    <thead class="table-light text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Total</th>
                            <th>Metode</th>
                            <th>Layanan</th>
                            <th>Detail pesanan</th>
                            <th>Jenis Kirim</th>
                            <th>Jarak (km)</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Tracking</th>
                            <th>Bukti</th>
                            <th>Catatan</th>
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
                            <td>
                            <a href="{{ route('admin.detail-pesanan', $pesanan->id) }}" class="btn btn-success btn-sm float-end ms-2 btn-riwayat">
                                Lihat Detail
                            </a>

                            </td>
                           
                            <td>{{ $pesanan->jenis_pengiriman ?? '-' }}</td>
                            <td>{{ $pesanan->jarak ?? '-' }}</td>
                            <td>{{ $pesanan->created_at->format('d-m-Y H:i') }}</td>

                            {{-- Status --}}
                            <td class="text-center">
                                @php
                                    $warnaStatus = [
                                        'pending' => 'badge bg-warning text-dark',
                                        'diproses' => 'badge bg-info',
                                        'Terima orderan' => 'badge bg-info',
                                        'Proses Menyikat' => 'badge bg-info',
                                        'Proses Pengeringan' => 'badge bg-info',
                                        'Proses Cleaning' => 'badge bg-info',
                                        'Proses Mewangikan' => 'badge bg-info',
                                        'Proses Packing' => 'badge bg-info',
                                        'dikirim' => 'badge bg-primary',
                                        'selesai' => 'badge bg-success',
                                    ];
                                    $classBadge = $warnaStatus[$pesanan->status] ?? 'badge bg-secondary';
                                @endphp
                                <span class="{{ $classBadge }}">
                                    {{ ucfirst($pesanan->status) }}
                                </span>
                            </td>

                            {{-- Tracking --}}
                            <td>
                            @php
                                $statusList = [
                                    'pending',
                                    'diproses',
                                    'Terima orderan',
                                    'Proses Menyikat',
                                    'Proses Pengeringan',
                                    'Proses Cleaning',
                                    'Proses Mewangikan',
                                    'Proses Packing',
                                    'dikirim',
                                    'selesai'
                                ];

                                $currentIndex = array_search($pesanan->status, $statusList);

                                $progressClass = match($pesanan->status) {
                                    'pending' => 'progress-bar-pending',
                                    'diproses', 'Terima orderan', 'Proses Menyikat', 'Proses Pengeringan', 'Proses Cleaning', 'Proses Mewangikan', 'Proses Packing' => 'progress-bar-proses',
                                    'dikirim' => 'progress-bar-dikirim',
                                    'selesai' => 'progress-bar-selesai',
                                    default => 'bg-secondary',
                                };
                            @endphp

                            <div class="tracking-wrapper p-1 rounded">
                                <div class="progress tracking-bar" style="height: auto;">
                                    <div class="progress-bar progress-bar-striped {{ $progressClass }}" role="progressbar"
                                        style="width: {{ (($currentIndex + 1) / count($statusList)) * 100 }}%;">
                                        {{ ucfirst($pesanan->status) }}
                                    </div>
                                </div>
                            </div>

                            </td>

                            {{-- Bukti --}}
                            <td class="text-center">
                                @if($pesanan->bukti_transfer)
                                    <img src="{{ asset('uploads/' . $pesanan->bukti_transfer) }}" alt="Bukti Transfer" width="80">
                                @else
                                    <small>Tidak Ada</small>
                                @endif
                            </td>

                            {{-- Catatan --}}
                            <td>{{ $pesanan->catatan ?? '-' }}</td>

                            {{-- Aksi --}}
                            <td>
                                <form action="{{ route('pesanan.updateStatus', $pesanan->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        @foreach($statusList as $status)
                                            <option value="{{ $status }}" {{ $pesanan->status == $status ? 'selected' : '' }}>
                                                {{ $status }}
                                            </option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="14" class="text-center">Belum ada pesanan masuk</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
