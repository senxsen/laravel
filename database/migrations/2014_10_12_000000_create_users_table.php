<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id', 20);           // 主鍵 亂數字串
            $table->string('nickname', 20);      // 帳號名稱
            $table->string('full_name', 50);         // 全名

            $table->string('email')->unique();
            $table->string('mobile')->unique();

            $table->string('password');
            $table->rememberToken();    // 讓使用者紀錄是否勾選記住帳號
            $table->string('second_password');

            $table->integer('set_point');         // 本金
            $table->integer('daily_point');       // 每日0.6%的分紅，只到200%
            $table->integer('game_point');        //
            $table->integer('house_point');       //
            $table->integer('travel_point');      //
            $table->integer('cash');             // 可提領之現金

            $table->string('type', 1);      // 會員類型，A為股東、B為一般
            $table->string('status', 1);    // 會員狀態，Y為激活、N為未激活

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
        Schema::drop('users');
    }
}
