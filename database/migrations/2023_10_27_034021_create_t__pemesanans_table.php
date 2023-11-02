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
        Schema::create('t__pemesanans', function (Blueprint $table) {
            // $table->string('kode_brg',5);
            $table->string('qty_pesan');
            $table->foreignId('kode_brg')->references('kd_brg')->on('brgs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t__pemesanans');
    }
};
