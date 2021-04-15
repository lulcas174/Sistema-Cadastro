<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroEmpresa extends Model
{
    protected $fillable = [
        'nomeEmpresa','cnpj','telefone','nomeResponsavel','email'
    ];
}
