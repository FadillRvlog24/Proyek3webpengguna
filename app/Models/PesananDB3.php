<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDB3 extends Model
{
    use HasFactory;

    protected $connection = 'mysql_db3'; // Koneksi ke database db3
    protected $table = 'pesanan'; // Nama tabel di database

    protected $primaryKey = 'id'; // Primary Key
    public $incrementing = true; // Auto Increment
    protected $keyType = 'int'; // Jenis data primary key
    public $timestamps = true; // Menggunakan created_at dan updated_at

    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon',
        'total_pembayaran',
        'metode_pembayaran',
        'layanan_dipesan',
        'waktu_pemesanan',
        'status',
        'bukti_transfer',
        'catatan'
    ];
}
