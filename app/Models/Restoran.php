<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
	public $table = "tb_Restoran";
    use HasFactory;

    protected $fillable = ['id_wilayah', 'nama_Restoran', 'nomor_restoran', 'alamat', 'rate_restoran'];
}
