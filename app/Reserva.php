<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    
    protected $fillable = [
    'hospede',
    'quat_hospede',
    'Entrada',
    'saida',
    'classificacao',
    'composicao',
    'bedroom',
    'user',
    ];

 public function hospede()
 {
  
    return $this->belongsTo(Hospede::class,'hospede','id');
 }
   
    

}
