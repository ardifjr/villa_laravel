<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananVilasTable extends Migration
{
    public function up()
    {
        Schema::create('pemesanan_vilas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->integer('jumlah_hari');
            $table->unsignedBigInteger('vila_id');
            $table->decimal('jumlah_bayar', 10, 2);
            $table->string('metode_pembayaran');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('vila_id')->references('id')->on('vilas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanan_vilas');
    }
}
