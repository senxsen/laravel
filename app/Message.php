<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'titel',
        'content',
        'manager_id',
        'category_id',
        'status',
        'created_at',
        'updated_at',
    ];
}
