<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
	public $table = "tb_Wilayah";
    use HasFactory;

    protected $fillable = ['nama_wilayah', 'kecamatan'];
}
