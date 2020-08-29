<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;


use App\domain\services\AtualizarClienteService;
use App\domain\services\CriarClienteService;
use App\domain\services\DeletarClienteService;
use App\domain\services\PegarClienteService;
use App\domain\services\PegarPlanoClienteService;
use App\domain\services\TodosPlanosService;
use App\domain\services\SalvarPlanoService;
use App\domain\services\TodosClientesService;

class ApiController extends Controller
{
      public function TodosClientes() {
        $TodosClientesService = new TodosClientesService;

        return response($TodosClientesService->TodosClientes(), 200);
      }
  
      public function CriarCliente(Request $request) {
        $CriarClienteService = new CriarClienteService;
        $CriarClienteService->CriarCliente($request);

        return response()->json([
            "message" => "Criado novo cliente."
        ], 201);
      }
  
      public function PegarCliente($id) {
        $PegarClienteService = new PegarClienteService;

        if($PegarClienteService->PegarCliente($id))
            return response($PegarClienteService->PegarCliente($id), 200);
        else
            return response()->json([
                "message" => "Cliente não encontrado"
              ], 404);
      }
      
      public function PegarPlanoCliente($id) {
        $PegarPlanoClienteService = new PegarPlanoClienteService;

        if($PegarPlanoClienteService->PegarPlanoCliente($id))
            return response($PegarPlanoClienteService->PegarPlanoCliente($id), 200);
        else
            return response()->json([
                "message" => "Cliente não encontrado"
              ], 404);
      }

      public function TodosPlanos() {
        $TodosPlanos = new TodosPlanosService;

        return response($TodosPlanos->TodosPlanos(), 200);
      }
  
      public function AtualizarCliente(Request $request, $id) {
        $AtualizarClienteService = new AtualizarClienteService;

        if($AtualizarClienteService->AtualizarCliente($request,$id))
             return response()->json([
                 "message" => "Cliente atualizado com sucesso."
             ], 200);
        else
            return response()->json([
                "message" => "Cliente não encontrado."
            ], 404);
        ;
      }
  
      public function DeletarCliente ($id) {
        $DeletarClienteService = new DeletarClienteService;

        if($DeletarClienteService->DeletarCliente($id) != 'SP' 
                && $DeletarClienteService->DeletarCliente($id))
                return response()->json([
                    "message" => "Cliente deletado"
                  ], 201);
          elseif($DeletarClienteService->DeletarCliente($id) == 'SP')
                return response()->json([
                  "message" => "Cliente de Sâo Paulo com plano Free"
                ], 404);
          else
                return response()->json([
                   "message" => "Cliente não encontrado"
                ], 404);
      }
}
