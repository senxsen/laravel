<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function($table)
        {
            $table->increments('id');
            $table->string('title', 60);
            $table->text('content');
            $table->integer('manager_id');
            $table->integer('category_id');
            $table->string('status', 1);        // A=All M=Only Manager
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
        //
        Schema::drop('messages');
    }
}
