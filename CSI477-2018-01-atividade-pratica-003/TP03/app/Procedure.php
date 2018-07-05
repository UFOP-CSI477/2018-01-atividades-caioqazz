<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public $timestamps = false; 
    protected $fillable = [
        'name', 'price','id_user',
    ];
}
