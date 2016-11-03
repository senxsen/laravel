<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager_role extends Model
{
    //use Notifiable;
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'role_id',
        'manager_id',
        'created_at',
        'updated_at',
    ];
}
