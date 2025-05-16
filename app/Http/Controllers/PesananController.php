<?php

namespace App\Http\Controllers;

use App\Models\PesananDB3;
use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    // Tampilkan daftar pesanan
    public function index()
    {
        $pesanans = PesananDB3::orderBy('created_at', 'desc')->get();
        return view('admin.pesanan', compact('pesanans'));
    }

    // Update status pesanan
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|max:255'
        ]);

        $pesanan = PesananDB3::findOrFail($id);
        $pesanan->status = $request->status;
        $pesanan->save();

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui.'); //pesanan controller update status
        
    }


    public function cetakPDF()
    {
        require_once(app_path('Libraries/fpdf/fpdf.php'));

 $pesanans = PesananDB3::all();

    $pdf = new \FPDF('L', 'mm', array(330, 210));
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Daftar Pesanan', 0, 1, 'C');
    $pdf->Ln(5);

    // Header
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetFillColor(230, 230, 230);

    $header = [
        ['label' => 'Nama', 'width' => 30],
        ['label' => 'No Telepon', 'width' => 25],
        ['label' => 'Alamat', 'width' => 50],
        ['label' => 'Total', 'width' => 30],
        ['label' => 'Metode Bayar', 'width' => 30],
        ['label' => 'Layanan', 'width' => 40],
        ['label' => 'Waktu', 'width' => 35],
        ['label' => 'Status', 'width' => 25],
        ['label' => 'Bukti', 'width' => 20],
        ['label' => 'Catatan', 'width' => 30],
    ];

    foreach ($header as $col) {
        $pdf->Cell($col['width'], 10, $col['label'], 1, 0, 'C', true);
    }
    $pdf->Ln();

    // Konten
    $pdf->SetFont('Arial', '', 9);

    foreach ($pesanans as $pesanan) {
        $cellData = [
            $pesanan->nama,
            $pesanan->no_telepon,
            $pesanan->alamat,
            'Rp ' . number_format($pesanan->total_pembayaran, 0, ',', '.'),
            $pesanan->metode_pembayaran,
            $pesanan->layanan_dipesan,
            $pesanan->waktu_pemesanan,
            $pesanan->status,
            $pesanan->bukti_transfer ? 'Ada' : '-',
            $pesanan->catatan,
        ];

        // Hitung tinggi maksimum tiap baris (untuk wrap teks panjang)
        $lineHeights = [];
        for ($i = 0; $i < count($header); $i++) {
            $lines = $pdf->GetStringWidth($cellData[$i]) > ($header[$i]['width'] - 2) ?
                ceil($pdf->GetStringWidth($cellData[$i]) / ($header[$i]['width'] - 2)) : 1;
            $lineHeights[] = $lines;
        }
        $maxLines = max($lineHeights);
        $rowHeight = $maxLines * 5;

        $x = $pdf->GetX();
        $y = $pdf->GetY();

        // Cetak cell per kolom
        for ($i = 0; $i < count($header); $i++) {
            $pdf->SetXY($x, $y);
            $pdf->MultiCell($header[$i]['width'], 5, $cellData[$i], 1);
            $x += $header[$i]['width'];
        }

        $pdf->Ln($rowHeight - 5); // Geser ke baris baru
    }

    $pdf->Output('I', 'daftar_pesanan.pdf');
        exit;
    }

    // Lanjut ini
    public function show($id)
    {
        $pesanan = PesananDB3::find($id);
    
        if (!$pesanan) {
            return redirect()->route('admin.pesanan')->with('error', 'Pesanan tidak ditemukan.');
        }
    
        return view('admin.detail-pesanan', compact('pesanan'));
    }

    public function detail($id)
{
    $pesanan = PesananDB3::findOrFail($id); // Ganti Transaksi sesuai model yang kamu gunakan
    return view('admin.detail-pesanan', compact('pesanan'));
}

    


}
