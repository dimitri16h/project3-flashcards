<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('description')->nullable();
            $table->unique(['user_id', 'name']);
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
        Schema::dropIfExists('decks');
    }
}
