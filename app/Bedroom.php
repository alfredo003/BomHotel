<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Bedroom extends Model
{
    protected $table = 'bedrooms';

    protected $fillable = [
        'codigo',
        'andar',
        'capacidade',
        'tipo',
        'descricao',
        'observacao',
        'photo',
        'status'

    ];

    


}
