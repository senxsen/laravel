<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    //use Notifiable;
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'registered_at',
        'login_ip',
        'login_time',
        'last_login_ip',
        'last_login_time',
        'created_at',
        'updated_at',
    ];
}
