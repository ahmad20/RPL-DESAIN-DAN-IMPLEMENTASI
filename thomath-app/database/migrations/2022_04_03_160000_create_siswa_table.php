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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('name');
            $table->string('address');
            $table->string('password');
            $table->unsignedBigInteger('course');
            $table->unsignedBigInteger('wali_murid');
            $table->foreign('course')->references('id_course')->on('course');  
            $table->foreign('wali_murid')->references('id_wali_murid')->on('wali_murid');  
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
        Schema::dropIfExists('siswa');
    }
};
