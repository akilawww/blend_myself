<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nice extends Migration
{
    /**
     * Run the migrations.
     * 
     * いいねテーブル
     * @return void
     */
    public function up()
    {
        Schema::create('nice', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user_id')
                ->references('id')->on('users');
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
        Schema::dropIfExists('nice');
    }
}
