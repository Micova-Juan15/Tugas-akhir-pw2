<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->string('id_barang',8)->primary();
            $table->string('nama_barang', 50);
            $table->string('foto_barang')->nullable();
            $table->integer('harga');
            $table->timestamps();
        });
        DB::update("ALTER TABLE barang AUTO_INCREMENT = 5;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
