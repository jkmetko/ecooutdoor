<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('img');
            $table->string('name', 128);
            $table->string('position', 64);
            $table->string('description', 128);
            $table->string('email');
            $table->string('FB');
            $table->string('Twitter');
            $table->string('GooglePlus');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team');
    }
}
