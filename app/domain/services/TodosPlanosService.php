<?php

namespace App\Domain\Services;

use App\Planos;

class TodosPlanosService{

    public function TodosPlanos(){
      $plano = Planos::get()->toJson(JSON_PRETTY_PRINT);
      return $plano;
    }
}