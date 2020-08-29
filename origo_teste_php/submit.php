<?php
include 'consumir_api.php';
$criarCliente = new ConsumirAPI();

$criarCliente($nome,$e_mail,$telefone,$estado,$cidade,$data_de_nascimento,$plano);

?>