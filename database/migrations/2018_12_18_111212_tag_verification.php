<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagVerification extends Migration
{
    /**
     * Run the migrations.
     *
     * タグ照合テーブル
     * @return void
     */
    public function up()
    {
        Schema::create('tag_verification', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('tag_id')
                ->references('id')->on('tag')
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
        Schema::dropIfExists('tag_verification');
    }
}
