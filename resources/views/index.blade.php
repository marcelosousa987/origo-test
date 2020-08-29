@extends('templates.template')

@section('content')

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
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($cliente as $c) 
    <tr>

      <th scope="row">{{$c["nome"]  }}</th>
    <td>{{$c["e_mail"]  }}</td>
    <td>{{$c["telefone"]  }}</td>
      <td>{{$c["estado"]  }}</td>
      <td>{{$c["cidade"]  }}</td>
      <td>{{$c["data_de_nascimento"]  }}</td>
      <td>Plano</td>
    <form method="delete" action="http://localhost:8000/api/cliente/deletar/{{$c["id"]}}">
      <td><button type="submit" class="btn btn-danger">Remover</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@endsection