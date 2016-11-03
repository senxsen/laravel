<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_permission extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'role_id',
        'permission_id',
    ];
}
