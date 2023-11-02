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
        Schema::create('jurnals', function (Blueprint $table) {
            $table->string('no_jurnal',14);
            $table->text('keterangan');
            $table->date('tgl_jurnal');
            $table->string('nomor_akun',5);
            $table->integer('debet');
            $table->integer('kredit');
            $table->foreign('nomor_akun')->references('nomor_akun')->on('akuns');
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
        Schema::dropIfExists('jurnals');
    }
};
