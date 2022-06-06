<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->string('id_pegawai', 12)->primary();
            $table->string('nama_pegawai', 255);
            $table->string('email', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telp', 32);
            //Pelengkap data
            //$table->integer('umur')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->char('jenis_kelamin',1)->nullable();
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
        Schema::dropIfExists('pegawai');
    }
}
