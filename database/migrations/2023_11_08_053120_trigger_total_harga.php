<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            DB::unprepared('
                CREATE TRIGGER update_total_harga after INSERT ON pembelians
                FOR EACH ROW BEGIN
                DECLARE harga INT;
                SELECT harga INTO harga
                FROM brgs
                WHERE kd_brg = NEW.kode_brg;
                Update faktur set total_harga = harga * pembelians.NEW.stok WHERE no_faktur = new.no_faktur;
                END
                ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared('DROP TRIGGER update_total_harga');
    }
};
