<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nome', 'e_mail','telefone','estado','cidade','data_de_nascimento'];

}
