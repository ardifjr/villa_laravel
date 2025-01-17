<?php

// file: database/migrations/2023_07_24_123456_add_jumlah_kamar_mandi_to_vilas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJumlahKamarMandiToVilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vilas', function (Blueprint $table) {
            $table->integer('jumlah_kamar_mandi')->default(0); // Tambahkan nilai default, misalnya 0
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
            $table->dropColumn('jumlah_kamar_mandi'); // Jika perlu, definisikan reverting atau rollback dari perubahan ini
        });
    }
}
