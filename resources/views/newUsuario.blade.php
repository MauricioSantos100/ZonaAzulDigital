@extends('templates.template')

@section('content')

  <div class="container">
    <div class="text-center">
      <h1>Novo Usuario</h1>
    </div>

    <form class="row g-3" name="formUsuario" id="formUsuario" method="post" action={{url('/')}}>
      @csrf
      <div class="col-12">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
      </div>

      <div class="col-12">
        <label for="inputCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf">
      </div>

      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" name="telefone" id="telefone">
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">cadastrar</button>
      </div>
    </form>
  </div>

@endsection