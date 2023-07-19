<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->integer('game_id')->autoIncrement();
            $table->string('game_name', 100);
            $table->float('price');
            $table->string('description', 1000);
            $table->string('Developer', 100);
            $table->date('date_released');
            $table->string('category', 100);
            $table->string('image_1', 50);
            $table->string('image_2', 50);
            $table->string('image_3', 50);
            $table->string('image_4', 50);
            $table->string('image_5', 50);
            $table->string('free', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
