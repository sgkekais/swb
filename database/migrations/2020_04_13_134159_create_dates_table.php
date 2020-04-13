<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->integer('date_type_id')->unsigned();
            $table->dateTime('date_time')->nullable();
            $table->dateTime('poll_open_until')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('match_id')->unsigned()->nullable();
            $table->integer('tournament_id')->unsigned()->nullable();
            $table->boolean('cancelled')->default(0);
            $table->boolean('published')->default(0);
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
        Schema::dropIfExists('dates');
    }
}
