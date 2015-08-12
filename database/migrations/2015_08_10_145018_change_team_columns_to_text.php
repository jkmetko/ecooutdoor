<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTeamColumnsToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ponuka', function(Blueprint $table)
        {
            $table->longText('description')->change();
            $table->longText('text')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ponuka', function(Blueprint $table)
        {
            $table->string('description', 128)->change();
            $table->string('text', 128)->change();
        });
    }
}
