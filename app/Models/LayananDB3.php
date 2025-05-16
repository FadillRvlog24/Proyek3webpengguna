<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananDB3 extends Model
{
    use HasFactory;

    protected $connection = 'mysql_db3'; // Koneksi database db3
    protected $table = 'layanan'; // Nama tabel

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama',
        'kategori',
        'durasi',
        'harga'
    ];

    public $timestamps = false; // Set ke false jika tidak ada created_at & updated_at
}
