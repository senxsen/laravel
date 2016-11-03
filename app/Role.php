<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'type',
        'created_at',
        'updated_at',
    ];
}
