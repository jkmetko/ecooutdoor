<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePonukaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponuka', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('title', 128);
            $table->string('sub_title', 128);
            $table->string('icon', 128);
            $table->string('description');
            $table->string('text');

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
        Schema::drop('ponuka');
    }
}
