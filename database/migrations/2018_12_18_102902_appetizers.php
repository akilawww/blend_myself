<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Appetizers extends Migration
{
    /**
     * Run the migrations.
     *
     * おつまみテーブル
     * @return void
     */
    public function up()
    {
        Schema::create('appetizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->string('url');
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
        Schema::dropIfExists('appetizers');
    }
}
