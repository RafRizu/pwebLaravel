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
        Schema::create('detail__pembelians', function (Blueprint $table) {
            // $table->string('nomor_beli',14);
            // $table->string('kode_brg',14);
            $table->integer('qty_beli');
            // $table->integer('sub_beli');
            $table->foreignId('kode_brg')->references('kd_brg')->on('brgs')->onDelete('cascade');
            $table->foreignId('nomor_beli')->references('nomor_beli')->on('pembelians');
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
        Schema::dropIfExists('detail__pembelians');
    }
};
