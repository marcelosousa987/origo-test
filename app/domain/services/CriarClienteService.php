<?php

namespace App\Domain\Services;

use Illuminate\Http\Request;
use App\Clientes;
use App\Planos;
use App\Domain\Enums\Valores;

class CriarClienteService{
    public function CriarCliente($request){
        $cliente = new Clientes;
        $cliente->nome = $request->nome;
        $cliente->e_mail = $request->e_mail;
        $cliente->telefone = $request->telefone;
        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->data_de_nascimento = $request->data_de_nascimento;
        $cliente->save();

        $plano = new Planos;
        $plano->plano = $request->plano;
        
        if($plano->plano == "Free") 
            $plano->mensalidade = Valores::Free;
        if($plano->plano == "Basic")
            $plano->mensalidade = Valores::Basic;
        if($plano->plano == "Plus")
            $plano->mensalidade = Valores::Plus;

        $plano->id_cliente = $cliente->id;

        $plano->save();
        
    }
}