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
        DB:: unprepared('
CREATE TRIGGER clear_tem_pesan AFTER INSERT ON detail_pesans
FOR EACH ROW
BEGIN
DELETE FROM t__pemesanans;
END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB:: unprepared('DROP TRIGGER clear_tem_pesan' );

    }
};
