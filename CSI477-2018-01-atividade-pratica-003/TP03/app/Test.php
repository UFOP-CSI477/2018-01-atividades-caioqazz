<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $timestamps = false; 
    protected $fillable = [
        'procedure_id','user_id','date'
    ];

    public function procedimento()
    {
        return $this->belongsTo('App\Procedure','procedure_id');
    }
}
