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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->string('nomor_beli',14)->autoIncrement()->primary();
            $table->date('tgl_beli');
            $table->string('no_faktur',14);
            $table->integer('total_beli');
            $table->string('nomor_pesan',14);
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
        Schema::dropIfExists('pembelians');
    }
};
