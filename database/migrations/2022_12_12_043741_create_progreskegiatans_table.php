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
        Schema::create('progreskegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_id');
            $table->string('keuangan1')->nullable()->default(null);
            $table->string('keuangan2')->nullable()->default(null);
            $table->string('keuangan3')->nullable()->default(null);
            $table->string('keuangan4')->nullable()->default(null);
            $table->string('keuangan5')->nullable()->default(null);
            $table->string('keuangan6')->nullable()->default(null);
            $table->string('keuangan7')->nullable()->default(null);
            $table->string('keuangan8')->nullable()->default(null);
            $table->string('keuangan9')->nullable()->default(null);
            $table->string('keuangan10')->nullable()->default(null);
            $table->string('keuangan11')->nullable()->default(null);
            $table->string('keuangan12')->nullable()->default(null);
            $table->string('fisik1')->nullable()->default(null);
            $table->string('fisik2')->nullable()->default(null);
            $table->string('fisik3')->nullable()->default(null);
            $table->string('fisik4')->nullable()->default(null);
            $table->string('fisik5')->nullable()->default(null);
            $table->string('fisik6')->nullable()->default(null);
            $table->string('fisik7')->nullable()->default(null);
            $table->string('fisik8')->nullable()->default(null);
            $table->string('fisik9')->nullable()->default(null);
            $table->string('fisik10')->nullable()->default(null);
            $table->string('fisik11')->nullable()->default(null);
            $table->string('fisik12')->nullable()->default(null);
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
        Schema::dropIfExists('progreskegiatans');
    }
};
