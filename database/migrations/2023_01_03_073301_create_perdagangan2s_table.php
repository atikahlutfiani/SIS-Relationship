<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerdagangan2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdagangan2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->contrained('users' ,'id');
            $table->integer('jam');
            $table->string('ket');
            $table->integer('jml_Rp');
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
        Schema::dropIfExists('perdagangan2s');
    }
}
