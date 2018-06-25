<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
public $timestamps = false; // bloqueia os pedidos de timestamp
protected $fillable = [
    'nome', 'estado_id'
]; // permite preenchimentos das var
}
