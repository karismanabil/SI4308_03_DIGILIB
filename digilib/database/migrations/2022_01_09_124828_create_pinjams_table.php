<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id');
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('nama');
            // $table->string('email')->unique();
            $table->string('nik');
            $table->string('no_hp');
            $table->string('gambar');
            $table->string('status');
            $table->integer('harga');
            $table->integer('denda');
            $table->timestamp('tanggal_pinjam');
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
        Schema::dropIfExists('pinjams');
    }
}
