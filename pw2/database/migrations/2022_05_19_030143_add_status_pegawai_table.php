<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("pegawai", function (Blueprint $table) {
            $table->char("status", 1)->nullable()->after("jenis_kelamin");   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("pegawai", function (Blueprint $table) {
            $table->dropColumn("status");
        });
    }
}
