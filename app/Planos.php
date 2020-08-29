<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    protected $table = 'planos';

    protected $fillable = ['plano', 'mensalidade', 'id_cliente'];

}
