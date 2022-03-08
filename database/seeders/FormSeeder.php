<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //tabel wilayah
        DB::table('tb_wilayah')->insert([
            'nama_wilayah' => 'Bandung',
            'kecamatan' => 'Parongpong',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_wilayah')->insert([
            'nama_wilayah' => 'Bekasi Selatan',
            'kecamatan' => 'Kayuringin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_wilayah')->insert([
            'nama_wilayah' => 'Bekasi Timur',
            'kecamatan' => 'Bantar Gebang',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_wilayah')->insert([
            'nama_wilayah' => 'Bekasi Barat',
            'kecamatan' => 'Kranji',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //tabel restoran
        DB::table('tb_restoran')->insert([
            'id_wilayah' => '1',
            'nama_restoran' => 'Restoran 1',
            'nomor_restoran' => '081234567891',
            'alamat' => 'Jl. Bandung',
            'rate_restoran' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_restoran')->insert([
            'id_wilayah' => '2',
            'nama_restoran' => 'Restoran 2',
            'nomor_restoran' => '081234567891',
            'alamat' => 'Jl. Bekasi 1',
            'rate_restoran' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_restoran')->insert([
            'id_wilayah' => '3',
            'nama_restoran' => 'Restoran 3',
            'nomor_restoran' => '081234567891',
            'alamat' => 'Jl. Bekasi 2',
            'rate_restoran' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_restoran')->insert([
            'id_wilayah' => '4',
            'nama_restoran' => 'Restoran 4',
            'nomor_restoran' => '081234567891',
            'alamat' => 'Jl. Bekasi 3',
            'rate_restoran' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //tabel kategori
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Makanan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Minuman',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Snack',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Fashion',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //tabel produk
        DB::table('tb_produk')->insert([
            'id_restoran' => '1',
            'id_kategori' => '1',
            'nama_produk' => 'Makanan 1',
            'harga_produk' => '15000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '1',
            'id_kategori' => '2',
            'nama_produk' => 'Minuman 1',
            'harga_produk' => '10000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '2',
            'id_kategori' => '1',
            'nama_produk' => 'Makanan 2',
            'harga_produk' => '15000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '2',
            'id_kategori' => '2',
            'nama_produk' => 'Minuman 2',
            'harga_produk' => '10000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '3',
            'id_kategori' => '1',
            'nama_produk' => 'Makanan 3',
            'harga_produk' => '15000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '3',
            'id_kategori' => '2',
            'nama_produk' => 'Minuman 3',
            'harga_produk' => '10000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '4',
            'id_kategori' => '1',
            'nama_produk' => 'Makanan 4',
            'harga_produk' => '15000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_produk')->insert([
            'id_restoran' => '4',
            'id_kategori' => '2',
            'nama_produk' => 'Minuman 4',
            'harga_produk' => '10000',
            'rate_produk' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
