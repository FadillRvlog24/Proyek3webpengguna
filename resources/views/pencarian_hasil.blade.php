<!DOCTYPE html>
<html>
<head><title>Hasil Pencarian</title></head>
<body>
    <h2>Hasil Pencarian untuk: "{{ $query }}"</h2>

    @if($jenis)
        <p><strong>Jenis Sepatu:</strong> {{ ucfirst($jenis) }}</p>
    @endif

    @if($kotoran)
        <p><strong>Tingkat Kotoran:</strong> {{ ucfirst($kotoran) }}</p>
    @endif

    @if(count($rekomendasi) > 0)
        <p><strong>Layanan Rekomendasi:</strong></p>
        <ul>
            @foreach($rekomendasi as $layanan)
                <li>{{ $layanan }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ditemukan rekomendasi layanan berdasarkan input Anda.</p>
    @endif
</body>
</html>
