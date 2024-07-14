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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id'); // Only one auto-increment column
            $table->string('no_karyawan')->unique(); // Removed auto_increment
            $table->string('nama_karyawan', 40);
            $table->string('kode_karyawan')->unique(); // Removed auto_increment
            $table->string('jenis_kelamin', 10);
            $table->string('jabatan', 20);
            $table->string('alamat', 40);
            $table->string('telepon', 13);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->string('email', 40)->unique();
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
        Schema::dropIfExists('karyawans');
    }
};


