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
        Schema::create('pengajar', function (Blueprint $table) {
            $table->id('id_pengajar');
            $table->string('nip');
            $table->string('email');
            $table->string('name');
            $table->string('address');
            $table->string('password');
            $table->unsignedBigInteger('id_konsultasi');
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
        Schema::dropIfExists('pengajar');
    }
};
