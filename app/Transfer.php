<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'give_user_id',
        'take_user_id',
        'amount',
        'bonuses_type',
        'created_at',
    ];
}
