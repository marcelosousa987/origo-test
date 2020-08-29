<?php

namespace App\Domain\Services;

use Illuminate\Http\Request;
use App\Clientes;

class TodosClientesService{
    public function TodosClientes(){
        $client = Clientes::get()->toJson(JSON_PRETTY_PRINT);
        return $client;
    }
}