<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('nationality');
            $table->string('address');
            $table->string('personal');
            $table->string('skill');
            $table->string('technical');
            $table->string('wyear');
            $table->string('detail');
            $table->string('eyear1');
            $table->string('edetail1');
            $table->string('eyear2');
            $table->string('edetail2');
            $table->string('interest');
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
        Schema::dropIfExists('fives');
    }
}
