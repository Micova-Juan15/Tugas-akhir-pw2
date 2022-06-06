<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi',20);
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->string('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->date('tgl_transaksi'); //$table->timestamp('time')->useCurrent = true;
            $table->integer('qty_brg');
            $table->integer('total');
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
        Schema::dropIfExists('detail_transaksi');
    }
}
