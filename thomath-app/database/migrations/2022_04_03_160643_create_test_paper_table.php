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
        Schema::create('test_paper', function (Blueprint $table) {
            $table->id('id_test_paper');
            $table->string('name');
            $table->dateTime('due_date');
            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id_course')->on('course');
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
        Schema::dropIfExists('test_paper');
    }
};
