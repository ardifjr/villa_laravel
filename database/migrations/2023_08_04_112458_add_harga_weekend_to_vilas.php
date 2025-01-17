<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHargaWeekendToVilas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('vilas', function (Blueprint $table) {
        $table->decimal('harga_weekend', 10, 2)->after('harga')->nullable();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vilas', function (Blueprint $table) {
            //
        });
    }
}
