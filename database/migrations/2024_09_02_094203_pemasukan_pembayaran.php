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
         Schema::create('pemasukan_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no');
            $table->string('uraian');
            $table->string('kode_akun');
            $table->string('nama_akun');
            $table->decimal('penerimaan', 10, 2);
            $table->decimal('pengeluaran', 10, 2);
            $table->decimal('saldo', 10, 2);
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
        Schema::dropIfExists('pemasukan_pembayaran');
    }
};
