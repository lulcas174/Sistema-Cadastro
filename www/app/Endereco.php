<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    protected $fillable = [
    'id_empresa','cep','rua','bairro','cidade','estado','principal'
    ];
}
