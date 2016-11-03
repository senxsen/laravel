<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password_reset extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];
}
