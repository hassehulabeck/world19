<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('gruppering');
            $table->bigInteger('team_id')->unsigned()->nullable();
            $table->string('club')->nullable();
            $table->string('image')->nullable();
            $table->integer('points')->default(0);
            $table->timestamps();
        });

        Schema::table('players', function($table) {
            $table->foreign('team_id')->references('id')
                  ->on('teams')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
