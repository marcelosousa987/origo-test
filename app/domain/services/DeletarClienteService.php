<?php

namespace App\Domain\Services;

use App\Clientes;
use App\Planos;

class DeletarClienteService{

    public function DeletarCliente($id){
    if(Clientes::where('id', $id)->exists()) {
            /* Verifica o plano e se a pessoa é de Sâo Paulo */
            if(Planos::where('id_cliente', $id)->where('plano','Free')->exists() && 
                Clientes::where('estado','Sâo Paulo')->where('id',$id)->exists()){
                    return 'SP';
            }else{ /* Nâo pertence a Sâo Paulo */
                $cliente = Clientes::find($id);
                $cliente->delete();
                return $cliente;
            }
          } else { /* Não existe */
            return false;
          }
        }
    }