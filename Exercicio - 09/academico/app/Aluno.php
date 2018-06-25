<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
public $timestamps = false; // bloqueia os pedidos de timestamp
protected $fillable = [
    'nome', 'mail', 'rua','numero','bairro','cidade_id','cep',
]; // permite preenchimentos das variaveis completamente
    
}
