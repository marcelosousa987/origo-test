<?php

class ConsumirAPI{

    const url_hostname       = "http://localhost:8000/api/";
    const url_todos_clientes = self::url_hostname . "clientes/";
    const url_pegar_plano    = self::url_hostname . "planos/cliente/";
    const url_criar_cliente  = self::url_hostname . "clientes/";

    function pegarPlanoCliente($id){
        $url = self::url_pegar_plano . $id;

        return $this->lerApi($url);
    }

    function pegarTodosClientes(){
        $url = self::url_todos_clientes;

        return $this->lerApi($url);
    }

    function lerApi($url){
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);

        $result = json_decode($response, true);

        return $result;
    }

    function criarCliente($nome, $e_mail, $telefone, $estado, $cidade, $data_de_nascimento, $plano){
        $url = self::url_criar_cliente;
        $data = array('nome'               => $nome, 
                      'e_mail'             => $e_mail,
                      'telefone'           => $telefone,
                      'estado'             => $estado,
                      'cidade'             => $cidade,
                      'data_de_nascimento' => $data_de_nascimento,
                      'plano'              => $plano
                    );

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { echo 'Erro ao cadastrar'; }

        var_dump($result);
    }
}

?>