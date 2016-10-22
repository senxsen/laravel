<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // php artisan make:model User
    use Notifiable;

    //protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nickname',
        'full_name',
        'email',
        'mobile',
        'password',
        'second_password',
        'set_point',
        'daily_point',
        'game_point',
        'house_point',
        'travel_point',
        'cash',
        'type',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getLevelAttribute()
    {
        $level = null;
        switch($this->set_point)
        {
            case 1000:
                $level = '福龍';
                break;
            case 3000:
                $level = '翔龍';
                break;
            case 5000:
                $level = '銀龍';
                break;
            case 10000:
                $level = '金龍';
                break;
        }
        return $level;
    }
}
