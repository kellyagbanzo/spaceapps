<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appareil extends Model
{
    protected $fillable = [
        'description', 'puissance', 'user_id'
    ];
    public $timestamps = true;
}
