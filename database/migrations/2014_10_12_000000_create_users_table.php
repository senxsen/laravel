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
            $table->string('second_password')->nullable();

            $table->integer('set_point')->default(0);         // 本金
            $table->integer('daily_point')->default(0);       // 每日0.6%的分紅，只到200%
            $table->integer('game_point')->default(0);        //
            $table->integer('house_point')->default(0);       //
            $table->integer('travel_point')->default(0);      //
            $table->integer('cash')->default(0);             // 可提領之現金

            $table->string('type', 1)->default("B");      // 會員類型，A為股東、B為一般
            $table->string('status', 1)->default("Y");    // 會員狀態，Y為激活、N為未激活

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
