<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelur2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelur2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained('perdagangan2s' ,'id');
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
        Schema::dropIfExists('kelur2s');
    }
}
