<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function($table)
        {
            $table->increments('id');
            $table->string('give_user_id', 20);     // 轉出帳號
            $table->string('take_user_id', 20);     // 轉入帳號
            $table->integer('amount');              // 金額
            $table->string('bonuses_type', 1);     //
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
        Schema::drop('transfers');
    }
}
