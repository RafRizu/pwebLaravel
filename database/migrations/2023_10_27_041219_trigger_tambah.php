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
DB::unprepared('
CREATE TRIGGER update_stok after INSERT ON detail__pembelians
FOR EACH ROW BEGIN
UPDATE brgs
SET stok = stok + detail__pembelians.new.qty_beli
WHERE
kd_brg = detail__pembelians.new.kd_brg;
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
        DB::unprepared('DROP TRIGGER update_stok');

    }
};
