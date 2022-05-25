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
            $table->string('nip')->nullable();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('phone_number');
            $table->string('password');
            $table->foreignId('id_konsultasi')->nullable();
            // $table->unsignedBigInteger('id_konsultasi')->unique()->nullable();
            // $table->foreign('id_konsultasi')->references('id_konsultasi')->on('konsultasi');
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
