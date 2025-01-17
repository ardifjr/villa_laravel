<?php
// database/migrations/create_vilas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVilasTable extends Migration
{
    public function up()
    {
        Schema::create('vilas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vila');
            $table->string('alamat_lengkap');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->string('jumlah_kasur');
            $table->string('kapasitas');
            $table->text('fasilitas');
            $table->decimal('harga', 10, 2); // Kolom harga berupa decimal dengan 2 angka di belakang koma
            $table->json('foto')->nullable(); // Kolom foto berupa json untuk menyimpan daftar nama file foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vilas');
    }
}
