<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
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
    }
}
