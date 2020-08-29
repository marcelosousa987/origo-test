<?php

namespace App\Domain\Services;

use App\Clientes;

class PegarClienteService{

    public function PegarCliente($id){
        if (Clientes::where('id', $id)->exists()) {
            $cliente = Clientes::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return $cliente;
          } else {
            return false;
          }
    }
}