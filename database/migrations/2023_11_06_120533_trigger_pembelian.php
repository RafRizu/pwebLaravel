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
CREATE TRIGGER update_detail after INSERT ON pembelians
FOR EACH ROW BEGIN
INSERT INTO detail__pembelians(qty_beli, kode_brg, nomor_beli)
Values(new.total_beli,new.kode_brg, new.nomor_beli);
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
                DB::unprepared('DROP TRIGGER update_detail');
    }
};
