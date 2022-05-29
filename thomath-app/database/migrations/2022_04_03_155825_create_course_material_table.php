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
        Schema::create('course_material', function (Blueprint $table) {
            $table->id('id_course_material');
            // $table->unsignedBigInteger('id_course');
            $table->text('slide')->nullable();
            $table->text('video')->nullable();
            $table->text('kuis')->nullable();
            $table->text('tugas')->nullable();
            $table->text('referensi')->nullable();
            // $table->foreign('id_course')->references('id_course')->on('course')->onDelete('cascade');
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
        Schema::dropIfExists('course_material');
    }
};
