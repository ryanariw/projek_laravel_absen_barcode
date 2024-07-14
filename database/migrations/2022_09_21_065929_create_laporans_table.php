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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id');
            $table->date('tanggal');
            $table->string('hari' ,10);
            $table->time('waktu_masuk');
            $table->time('waktu_pulang');
            $table->string('keterangan' ,10);
            $table->timestamps();
        });
        // php artisan migrate --path=/database/migrations/2024_09_21_065929_create_karyawans_table.php


    }
   



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
