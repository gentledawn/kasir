<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasir_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->date('tgl_transaksi')->nullable();
            $table->integer('diskon')->nullable();
            $table->bigInteger('uang_pembeli')->nullable();
            $table->integer('kembalian')->nullable();
            $table->bigInteger('total_bayar')->nullable();
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
        Schema::dropIfExists('kasir_transaksi');
    }
}
