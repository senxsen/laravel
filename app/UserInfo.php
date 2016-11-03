<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //use Notifiable;
    public $incrementing = false;
//    protected $table = 'user_infos';
    protected $primaryKey = 'user_id';

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
