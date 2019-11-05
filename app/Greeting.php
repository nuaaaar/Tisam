<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
     /**
     * The attributes that are guarded from mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];
}
