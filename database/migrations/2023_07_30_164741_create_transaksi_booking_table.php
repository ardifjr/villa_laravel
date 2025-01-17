<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_villa');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->text('alamat');
            $table->string('notelp');
            $table->date('check_in');
            $table->date('check_out');
            $table->decimal('total_bayar', 10, 2);
            $table->string('metode_pembayaran');
            $table->timestamps();
            
            $table->foreign('id_villa')->references('id')->on('vilas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_booking');
    }
}
