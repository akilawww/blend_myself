<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_verifications', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('recipe_id');
            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('cascade');
            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');

            $table->unique(['tag_id', 'recipe_id']);

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
        Schema::dropIfExists('tag_verifications');
    }
}
