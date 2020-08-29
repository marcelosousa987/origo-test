<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Origo Teste</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Teste</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicial
            </a>
            <li class="nav-item active">
            <a class="nav-link" href="cadastro.php">Cadastro
            </a>

        </ul> 
      </div>
    </div>
  </nav>

<body>
<?php
include 'consumir_api.php';
?>
<div class="container mt-5 mb-5">
  <center><h2>Status</h2></center>
  </div>
<div class="container mt-2">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Estado</th>
      <th scope="col">Cidade</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Plano</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  $verCliente = new ConsumirAPI();
  $verPlanoCliente = new ConsumirAPI();


  foreach($verCliente->pegarTodosClientes() as $r) {?>
    <tr>
      <th scope="row"><?php echo $r["nome"]; ?></th>
    <td><?php echo $r["e_mail"]; ?></td>
      <td><?php echo $r["telefone"]; ?></td>
      <td><?php echo $r["estado"]; ?></td>
      <td><?php echo $r["cidade"]; ?></td>
      <td><?php echo $r["data_de_nascimento"]; ?></td>
      <td><?php foreach($verPlanoCliente->pegarPlanoCliente($r["id"]) as $p){ 
                echo $p["plano"] . " "; 
      }; ?>
      </td>
      <td>Deletar</td>
    </tr>
  <?php }?>
  </tbody>
</table>
</div>

</div>

</body>
</html>