<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupaten2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten2s', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('perdagangan2s')->onUpdate('cascade')->onDelete('restrict');
            $table->integer('kode');
            $table->string('nama');
            $table->string('ibukota');
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
        Schema::dropIfExists('kabupaten2s');
    }
}
