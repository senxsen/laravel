<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonuses', function($table)
        {
            $table->increments('id');
            $table->string('user_id', 20);
            $table->string('type', 1);
            $table->integer('add');
            $table->integer('reduce');
            $table->integer('balance');
            $table->timestamp('created_at');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bonuses');
    }
}
