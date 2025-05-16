<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDB3 extends Model
{
    use HasFactory;

    protected $connection = 'db3'; // Gunakan koneksi ke database db3
    protected $table = 'customers'; // Nama tabel di database db3
    protected $fillable = ['nama', 'email', 'telepon', 'created_at'];
}
