<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlendMyself extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_procedure', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('process_num');
            $table->string('body');
            $table->string('image');
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
        Schema::dropIfExists('recipe_procedure');
    }
}
