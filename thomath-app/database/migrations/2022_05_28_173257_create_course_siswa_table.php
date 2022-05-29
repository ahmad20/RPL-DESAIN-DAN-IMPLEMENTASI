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
        Schema::create('course_siswa', function (Blueprint $table) {
            //$table->increments('id');
            $table->unsignedBigInteger('course_id_course');
            $table->unsignedBigInteger('siswa_id_siswa');
            $table->foreign('course_id_course')->references('id_course')->on('course')->onDelete('cascade');
            $table->foreign('siswa_id_siswa')->references('id_siswa')->on('siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_siswa');
    }
};
