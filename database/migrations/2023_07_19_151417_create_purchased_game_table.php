<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_game', function (Blueprint $table) {
            $table->integer('pg_id');
            $table->integer('purchase_id');
            $table->integer('game_id');

            // Add foreign key constraints
            $table->foreign('purchase_id')->references('purchase_id')->on('purchases');
            $table->foreign('game_id')->references('game_id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchased_game');
    }
}
