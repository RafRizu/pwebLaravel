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
        Schema::create('detail_pesans', function (Blueprint $table) {
            $table->string('nomor_pesan',14);
            // $table->string('kode_brg',5);
            $table->integer('qty_pesan');
            $table->integer('subtotal');
            $table->foreignId('kode_brg')->references('kd_brg')->on('brgs');
            $table->foreign('nomor_pesan')->references('nomor_pesan')->on('pemesanans');
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
        Schema::dropIfExists('detail_pesans');
    }
};
