<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    //
    use Notifiable;
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'login_ip',
        'login_time',
        'created_at',
    ];
}
