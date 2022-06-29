<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watched_time extends Model
{
    protected $fillable = [
        'name', 'date', 'minute',
    ];
}
