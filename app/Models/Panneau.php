<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panneau extends Model
{
    protected $fillable = [
        'marque', 'type_id', 'user_id'
    ];
    public $timestamps = true;
}
