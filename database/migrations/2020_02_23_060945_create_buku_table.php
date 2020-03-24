<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_buku');
            $table->string('edisi')->nullable();
            $table->string('penulis', 100)->nullable();
            $table->string('kota_terbit', 100)->nullable();
            $table->string('volume', 100)->nullable();
            $table->string('deskripsi', 255)->nullable();
            $table->string('penerbit', 100)->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('ISBN', 100)->nullable();
            $table->string('jumlah', 100);
            $table->string('stok', 100)->nullable();
            $table->string('cover', 255)->nullable();
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
        Schema::dropIfExists('buku');
    }
}
