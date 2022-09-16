<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // user
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nik')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('no_telpon')->unique()->nullable();
            $table->string('password');
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kel_des')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_kab')->nullable();
            $table->string('provinsi')->nullable();
            // user jabatan
            $table->string('jabatan')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('alamat_perusahaan')->nullable();
            $table->string('kel_des_perusahaan')->nullable();
            $table->string('kecamatan_perusahaan')->nullable();
            $table->string('kot_kab_perusahaan')->nullable();
            $table->string('provinsi_perusahaan')->nullable();
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
        Schema::dropIfExists('users');
    }
}
