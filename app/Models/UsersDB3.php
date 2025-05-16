<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UsersDB3 extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $connection = 'mysql_db3'; // Gunakan koneksi database db3
    protected $table = 'users'; // Nama tabel di database db3
    protected $primaryKey = 'id'; // Primary key
    public $incrementing = true;
    protected $keyType = 'int'; // <- ✅ ubah dari 'bigint' ke 'int'
    
    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true; // Gunakan timestamps

    // Relasi ke PesananDB3
    public function pesanan()
    {
        return $this->hasMany(PesananDB3::class, 'id');
    }
}