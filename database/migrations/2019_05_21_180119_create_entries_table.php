<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('team_id')->unsigned()->nullable();
            $table->bigInteger('player_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('entries', function($table) {
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');
            $table->foreign('team_id')->references('id')
                  ->on('teams')->onDelete('cascade');
            $table->foreign('player_id')->references('id')
                    ->on('players')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
