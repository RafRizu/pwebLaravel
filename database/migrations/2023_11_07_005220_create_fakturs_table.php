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
        Schema::create('fakturs', function (Blueprint $table) {
            // $table->id();
            $table->id('no_faktur');
            // $table->foreignId('kode_brg')->references('kd_brg')->on('brgs')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('tanggal_faktur');
            // $table->decimal('jumlah_faktur', 10, 2);
            $table->integer('total');
            // $table->integer('bayar');
            // $table->integer('kembalian');
            $table->enum('keterangan', ['Lunas', 'Belum Lunas'])->default('Lunas');;
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
        Schema::dropIfExists('fakturs');
    }
};
