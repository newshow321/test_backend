<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_wilayah', function (Blueprint $table) {
            $table->id('id_wilayah');
            $table->string('nama_wilayah');
            $table->string('kecamatan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('tb_restoran', function (Blueprint $table) {
            $table->id('id_restoran');
            $table->unsignedBigInteger('id_wilayah');
            $table->string('nama_restoran');
            $table->string('nomor_restoran');
            $table->text('alamat');
            $table->string('rate_restoran');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('id_wilayah')->references('id_wilayah')->on('tb_wilayah');
        });

        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->unsignedBigInteger('id_restoran');
            $table->string('nama_produk');
            $table->string('harga_produk');
            $table->string('jenis_produk');
            $table->string('rate_produk');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('id_restoran')->references('id_restoran')->on('tb_restoran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_wilayah');
        Schema::dropIfExists('tb_restoran');
        Schema::dropIfExists('tb_produk');
    }
}
