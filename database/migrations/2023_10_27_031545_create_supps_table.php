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
        Schema::create('supps', function (Blueprint $table) {
            $table->string('kode_supp',5)->autoIncrement()->primary();
            $table->string('nama_supp',25);
            $table->string('alamat',50);
            $table->string('telp',13);
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
        Schema::dropIfExists('supps');
    }
};
