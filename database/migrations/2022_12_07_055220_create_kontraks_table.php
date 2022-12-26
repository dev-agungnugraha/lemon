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
        Schema::create('kontraks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_id');
            $table->string('nokontrak');
            $table->string('namarekanan');
            $table->string('alamatrekanan');
            $table->string('nilaikontrak');
            $table->string('tglkontrak');
            $table->string('tglspmk');
            $table->string('masapelaksanaan');
            $table->string('masapemeliharaan');
            $table->string('alasanaddendum');
            $table->timestamps();

            $table->foreign('paket_id')->references('id')->on('pakets')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontraks');
    }
};
