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
            $table->text('question');
            $table->dateTime('due_date');
            $table->foreignId('id_course');
            // $table->unsignedBigInteger('id_course')->unique();
            // $table->foreign('id_course')->references('id_course')->on('course');
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
