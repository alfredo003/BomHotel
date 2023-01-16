<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    protected $fillable = [
        'name',
       'email',
        'numIdt',
        'tipoIdt',
        'Pais',
        'nascionalidade',
        'morada',
        'nif',
        'tipoHospede',
        'dataNasc',
        'user'
 
    ];

 public function Reserva()
 {
     return $this->hasMany(Reserva::class,'hospede','id');
 }
}
