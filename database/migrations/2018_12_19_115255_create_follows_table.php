<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('follower_id');
            $table->unsignedInteger('follow_id');
            $table->foreign('follower_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('follow_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->unique(['follower_id', 'follow_id']);

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
        Schema::dropIfExists('follows');
    }
}
