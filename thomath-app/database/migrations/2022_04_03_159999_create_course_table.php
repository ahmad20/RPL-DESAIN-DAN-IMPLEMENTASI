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
        Schema::create('course', function (Blueprint $table) {
            $table->id('id_course');
            $table->string('name');
            $table->unsignedBigInteger('material');
            $table->unsignedBigInteger('created_by');
            $table->foreign('material')->references('id_course_material')->on('course_material');
            $table->foreign('created_by')->references('id_pengajar')->on('pengajar');
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
        Schema::dropIfExists('course');
    }
};