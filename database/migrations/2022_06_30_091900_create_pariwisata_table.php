<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePariwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pariwisata', function (Blueprint $table) {
            $table->integer('id')->increment();
            $table->string('nama_pengunjung');
            $table->string('kota_tujuan');
            $table->string('perusahaan_transportasi');
            $table->string('harga_tiket_transportasi');
            $table->integer('pengunjung_id');
            $table->integer('tujuan_id');
            $table->integer('transportasi_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pariwisata');
    }
}
