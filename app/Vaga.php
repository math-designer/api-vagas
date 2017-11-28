<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas_disponiveis';
    protected $fillable = [
        'cnpj',
        'desc_vaga',
        'numero_vagas'
    ];
    public $timestamps = false;
}
