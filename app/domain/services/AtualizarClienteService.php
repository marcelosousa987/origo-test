<?php

namespace App\Domain\Services;

use App\Clientes;

class AtualizarClienteService{

    public function AtualizarCliente($request, $id){
        if (Clientes::where('id', $id)->exists()) {
            $cliente = Clientes::find($id);

            $cliente->nome = is_null($request->nome) ? $cliente->nome      : $request->nome;
            $cliente->e_mail = is_null($request->e_mail) ? $cliente->e_mail  : $request->e_mail;
            $cliente->telefone = is_null($request->telefone) ? $cliente->telefone  : $request->telefone;
            $cliente->estado = is_null($request->estado) ? $cliente->estado  : $request->estado;
            $cliente->cidade = is_null($request->cidade) ? $cliente->cidade  : $request->cidade;
            $cliente->data_de_nascimento = is_null($request->data_de_nascimento) ? $cliente->data_de_nascimento  : $request->data_de_nascimento;
            $cliente->save();
    
            return $cliente;
            
            } else {
                return false;
        }
    }
}