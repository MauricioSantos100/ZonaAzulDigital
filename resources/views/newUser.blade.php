@extends('templates.template')

@section('content')

  <div class="container">
    <div class="text-center">
      <h1>Novo Usuario</h1>
    </div>
    <form class="row g-3">
      <div class="col-12">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome">
      </div>

      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
      </div>

      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone">
      </div>

      <div class="col-8">
        <label for="inputRua" class="form-label">Rua</label>
        <input type="text" class="form-control" id="rua">
      </div>

      <div class="col-4">
        <label for="inputBairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro">
      </div>

      <div class="col-6">
        <label for="inputcidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade">
      </div>

      <div class="col-md-4">
        <label for="inputState" class="form-label">Estado</label>
        <select id="estado" class="form-select">
          <option selected>...</option>
          <option>AC</option>
          <option>AL</option>
          <option>AP</option>
          <option>AM</option>
          <option>BA</option>
          <option>CE</option>
          <option>DF</option>
          <option>ES</option>
          <option>GO</option>
          <option>MA</option>
          <option>MT</option>
          <option>MS</option>
          <option>MG</option>
          <option>PA</option>
          <option>PB</option>
          <option>PR</option>
          <option>PE</option>
          <option>PI</option>
          <option>RJ</option>
          <option>RN</option>
          <option>RS</option>
          <option>RO</option>
          <option>RR</option>
          <option>SC</option>
          <option>SP</option>
          <option>SE</option>
          <option>TO</option>
        </select>
      </div>

      <div class="col-md-2">
        <label for="inputCep" class="form-label">Cep</label>
        <input type="number" class="form-control" id="cep">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>

@endsection