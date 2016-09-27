<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function($table)
        {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('password');
            $table->rememberToken();    // 讓使用者紀錄是否勾選記住帳號
            $table->timestamp('login_at');
            $table->ipAddress('login_ip');
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
        Schema::drop('managers');
    }
}
