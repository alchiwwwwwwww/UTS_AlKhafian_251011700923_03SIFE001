<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'brand',
        'model',
        'rent_price',
        'image',
        'description',
        'type',
    ];
}

