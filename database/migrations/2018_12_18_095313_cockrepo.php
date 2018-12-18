<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kakurepo extends Migration
{
    /**
     * Run the migrations.
     * 
     * カクれぽ
     * @return void
     */
    public function up()
    {
        Schema::create('cockrepo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('body');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kakurepo');
    }
}
