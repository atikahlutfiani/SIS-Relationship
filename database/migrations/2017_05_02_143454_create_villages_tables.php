<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillagesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function(Blueprint $table){
            $table->id('No');
            $table->foreign('user_id')->references('id')->on('perdagangan1s')->onUpdate('cascade')->onDelete('restrict');
            $table->char('id', 10)->index();
            $table->char('district_id', 7);
            $table->string('name', 50);
            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('villages');
    }
}
