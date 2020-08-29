<?php

namespace App\Domain\Services;

use App\Planos;

class PegarPlanoClienteService{

    public function PegarPlanoCliente($id){
        if (Planos::where('id_cliente', $id)->exists()) {
            $planos = Planos::where('id_cliente', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return $planos;
          } else {
            return false;
          }
    }
}