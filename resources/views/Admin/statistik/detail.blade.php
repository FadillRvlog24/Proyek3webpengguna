@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('css/statistik.css') }}">
<div class="container statistik-container">
    <div class="card statistik-card">
        <div class="statistik-header">
            Statistik Data
        </div>
        <div class="statistik-body">
            <h4 class="card-title">Data Akun dan Jasa</h4>
            <p class="card-text">Total Akun Pengguna: <strong>{{ $totalUsers }}</strong></p>
            <p class="card-text">Total Jasa: <strong>{{ $totalLayanan }}</strong></p>
            <p class="card-text">Total Pesanan: <strong>{{ $totalPesanan }}</strong></p>



            {{-- Chart Section --}}
            <div class="my-4">
                <canvas id="statistikChart" width="400" height="200"></canvas>
            </div>


            <hr>

            <h4 class="mt-4">Pengguna Terbaru</h4>
            <ul class="list-group">
                @foreach ($penggunaTerbaru as $user)
                    <li class="list-group-item">
                        {{ $user->name }} - {{ $user->email }} ({{ $user->created_at->format('d M Y') }})
                    </li>
                @endforeach
            </ul>

            <a href="{{ route('admin.beranda') }}" class="btn btn-secondary btn-kembali-dashboard">Kembali ke Dashboard</a>
            </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('statistikChart').getContext('2d');
    const statistikChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pengguna', 'Layanan', 'Pesanan'],
            datasets: [{
                label: 'Jumlah Data',
                data: [{{ $totalUsers }}, {{ $totalLayanan }}, {{ $totalPesanan }}],
                backgroundColor: ['#0d6efd', '#198754', '#ffc107'],
                borderColor: ['#0a58ca', '#146c43', '#e0a800'],
                borderWidth: 1,
                borderRadius: 8
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
@endsection
