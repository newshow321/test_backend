<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	public $table = "tb_Produk";
    use HasFactory;

    protected $fillable = ['id_restorank', 'id_kategori', 'nama_produk', 'harga_produk', 'rate_produk'];
}
