<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCockreposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cockrepos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('body');

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('recipe_id');
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');

            $table->unique(['user_id', 'recipe_id']);
            
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
        Schema::dropIfExists('cockrepos');
    }
}
