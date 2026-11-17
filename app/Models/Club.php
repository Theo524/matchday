<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    // Fields that can be stored in the clubs table.
    protected $fillable = [
        'name',
        'stadium',
        'city',
        'latitude',
        'longitude',
        'description',
    ];
}