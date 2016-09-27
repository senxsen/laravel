<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->string('user_id', 20);

            $table->timestamp('registered_at');

            $table->ipAddress('login_ip');
            $table->timestamp('login_time')->nullable();
            $table->ipAddress('last_login_ip');
            $table->timestamp('last_login_time')->nullable();

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
        Schema::drop('user_infos');
    }
}
