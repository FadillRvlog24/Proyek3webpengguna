<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticatable
{


    protected $fillable = [
        'name', 'email', 'phone_number','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email' => 'string',
        'phone_number' => 'string',
    ];

    protected $dates = ['created_at', 'updated_at']; // Jika Anda menggunakan kolom tanggal

}
