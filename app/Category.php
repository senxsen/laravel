<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $incrementing = false;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'slug',
    ];
}
