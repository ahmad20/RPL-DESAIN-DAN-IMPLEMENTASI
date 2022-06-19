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
        Schema::create('siswa_test_paper', function (Blueprint $table) {
            $table->unsignedBigInteger('test_paper_id_testpaper');
            $table->unsignedBigInteger('siswa_id_siswa');
            $table->text('answer')->nullable();
            $table->integer('score')->default(0);
            $table->foreign('test_paper_id_testpaper')->references('id_testpaper')->on('testpaper')->onDelete('cascade');
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
        Schema::dropIfExists('testpaper_siswa');
    }
};
