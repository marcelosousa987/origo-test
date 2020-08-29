<div class="container mt-5 mb-5">
  <center><h2>Cadastro</h2></center>
  </div>

<div class="container mt-3 mb-3">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="nome" class="form-control" id="nome" placeholder="Nome completo">
    </div>
    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" placeholder="E-mail">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="telefone">Telefone</label>
      <input type="telefone" class="form-control" id="telefone" placeholder="Telefone">
    </div>
    <div class="form-group col-md-3">
      <label for="estado">Estado</label>
      <input type="estado" class="form-control" id="estado" placeholder="Estado">
    </div>
    <div class="form-group col-md-2">
      <label for="cidade">Cidade</label>
      <input type="cidade" class="form-control" id="cidade" placeholder="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="data_de_nascimento">Data de Nascimento</label>
      <input type="data_de_nascimento" class="form-control" id="data_de_nascimento" placeholder="Data de Nascimento">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Plano</label>
      <select id="inputState" class="form-control">
        <option selected>Selecione...</option>
        <option>Free (R$ 0,00)</option>
        <option>Basic (R$ 100,00)</option>
        <option>Plus (R$ 187,00)</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Cadastre-se</button>
</form>