<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('matchweek')->nullable()->unsigned();
            $table->string('matchweek_text')->nullable();
            $table->integer('team_id_home')->nullable()->unsigned();
            $table->integer('team_id_away')->nullable()->unsigned();
            $table->smallInteger('goals_home')->nullable()->unsigned();
            $table->smallInteger('goals_home_halftime')->nullable()->unsigned();
            $table->smallInteger('goals_home_11m')->nullable()->unsigned();
            $table->smallInteger('goals_home_rated')->nullable()->unsigned();
            $table->smallInteger('goals_away')->nullable()->unsigned();
            $table->smallInteger('goals_away_halftime')->nullable()->unsigned();
            $table->smallInteger('goals_away_11m')->nullable()->unsigned();
            $table->smallInteger('goals_away_rated')->nullable()->unsigned();
            $table->text('match_details')->nullable();
            $table->integer('rescheduled_to_fixture_id')->nullable()->unsigned();
            $table->integer('rescheduled_by_team')->nullable()->unsigned();
            $table->string('reschedule_reason')->nullable();
            $table->boolean('published')->default(0);
            $table->boolean('cancelled')->default(0);
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
        Schema::dropIfExists('matches');
    }
}
