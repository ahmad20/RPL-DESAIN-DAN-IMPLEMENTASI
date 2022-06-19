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
        Schema::create('wali_murid', function (Blueprint $table) {
            $table->id('id_wali_murid');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number');
            $table->foreignId('id_siswa')->nullable();  
            $table->unsignedBigInteger('id_konsultasi')->unique()->nullable();
            $table->foreign('id_konsultasi')->references('id_konsultasi')->on('konsultasi');
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
        Schema::dropIfExists('wali_murid');
    }
};
