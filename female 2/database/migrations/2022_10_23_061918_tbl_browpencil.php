<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBrowpencil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_browpencil', function (Blueprint $table) {
            $table->bigIncrements('no_produk');
            $table->string('id_produk');
            $table->string('brand');
            $table->string('nama_produk');
            $table->string('image');
            $table->string('keterangan');
            $table->string('logo');
            $table->int('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
