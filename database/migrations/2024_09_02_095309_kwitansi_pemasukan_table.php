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
        Schema::create('kwitansi_pemasukan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('diterima_dari');
            $table->string('angkatan_semester');
            $table->string('jurusan');
            $table->decimal('jumlah_uang', 15, 2);
            $table->string('untuk_pembayaran');
            $table->text('perincian');
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
        Schema::dropIfExists('kwitansi_pemasukan');
    }
};