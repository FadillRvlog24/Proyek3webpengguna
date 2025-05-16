@extends('layouts.admin')

@section('content')
@php
    $statusBadge = [
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

    $allSteps = [
        'pending',
        'diproses',
        'Terima orderan',
        'Proses Menyikat',
        'Proses Pengeringan',
        'Proses Cleaning',
        'Proses Mewangikan',
        'Proses Packing',
        'dikirim',
        'selesai',
    ];

    $currentStepIndex = array_search($pesanan->status, $allSteps);
    $progress = round((($currentStepIndex + 1) / count($allSteps)) * 100);
@endphp

<link rel="stylesheet" href="{{ asset('css/detail-pesanan.css') }}">

<div class="container mt-5">
    <h3><strong>Detail Pesanan</strong></h3>
    <p><strong>Order #{{ $pesanan->id }}</strong></p>

 {{-- Dropdown Update Status --}}
    <div class="mb-3">
        <form action="{{ route('pesanan.updateStatus', $pesanan->id) }}" method="POST" class="d-flex align-items-center gap-2">
            @csrf
            @method('PUT')
            <label for="status" class="form-label me-2">Update Status:</label>
            <select name="status" id="status" class="form-select w-auto">
                @foreach ($allSteps as $step)
                    <option value="{{ $step }}" {{ $pesanan->status === $step ? 'selected' : '' }}>
                        {{ $step }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn-simpan">Update</button>
        </form>
    </div>

        {{-- Progress Bar --}}

    <div class="progress-title mb-2">{{ $progress }}% Progress</div>
    <div class="progress mb-4" style="height: 20px;">
        <div class="progress-bar bg-success" style="width: {{ $progress }}%;">{{ $progress }}%</div>
    </div>

    <div class="progress-section">

        {{-- Kolom Kiri --}}
        <div class="col-md-5">
            <div class="timeline">
                @php $stepsKiri = array_slice($allSteps, 0, 5); @endphp
                @foreach ($stepsKiri as $index => $step)
                    <div class="timeline-step {{ $index <= $currentStepIndex ? 'completed' : '' }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>{{ $step }}</strong>
                            <span class="{{ $statusBadge[$step] ?? 'badge bg-secondary' }}">
                                {{ $index <= $currentStepIndex ? 'Selesai' : 'Menunggu' }}
                            </span>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

        {{-- Kolom Kanan --}}
        <div class="col-md-5">
            <div class="timeline">
                @php $stepsKanan = array_slice($allSteps, 5); @endphp
                @foreach ($stepsKanan as $index => $step)
                    @php $globalIndex = $index + 3; @endphp
                    <div class="timeline-step {{ $globalIndex <= $currentStepIndex ? 'completed' : '' }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>{{ $step }}</strong>
                            <span class="{{ $statusBadge[$step] ?? 'badge bg-secondary' }}">
                                {{ $globalIndex <= $currentStepIndex ? 'Selesai' : 'Menunggu' }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-4">Kembali</a>
</div>
@endsection
