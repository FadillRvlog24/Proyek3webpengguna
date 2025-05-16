<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDB3 extends Model
{
    protected $connection = 'mysql_db3'; // Pakai koneksi db3
    protected $table = 'users'; // Tabel dalam db3
}
