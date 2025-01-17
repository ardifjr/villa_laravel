<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGuestColumnsToTransaksiBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_booking', function (Blueprint $table) {
            $table->integer('jumlah_dewasa');
            $table->integer('jumlah_anak');
            $table->integer('jumlah_balita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_booking', function (Blueprint $table) {
            //
        });
    }
}
