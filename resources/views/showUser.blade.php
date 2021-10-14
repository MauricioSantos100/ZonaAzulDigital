@extends('templates.template')

@section('content')

  <div class="container">
    <form class="row g-3">
      <div class="col-12 text-center">
        <label for="inputNome" class="form-label">
          <h4>{{$user->nome}}</h4>
        </label>
      </div>

      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email: </label>
        <label for="inputEmail" class="form-label">{{$user->email}}</label>
      </div>

      <div class="col-md-6">
        <label for="inputPhone" class="form-label">Telefone: </label>
        <label for="inputPhone" class="form-label">{{$user->telefone}}</label>
      </div>

      <div class="col-md-12 text-center">
        <label class="form-label">
          <h5>Endereço</h5>
        </label>
      </div>

      <div class="col-6">
        <label for="inputRua" class="form-label">Rua: </label>
        <label for="inputRua" class="form-label">{{$user->rua}}</label>
      </div>

      <div class="col-6">
        <label for="inputBairro" class="form-label">Bairro: </label>
        <label for="inputBairro" class="form-label">{{$user->bairro}}</label>
      </div>

      <div class="col-4">
        <label for="inputcidade" class="form-label">Cidade: </label>
        <label for="inputcidade" class="form-label">{{$user->cidade}}</label>
      </div>

      <div class="col-md-3">
        <label for="inputState" class="form-label">Estado: </label>
        <label for="inputState" class="form-label">{{$user->estado}}</label>
      </div>

      <div class="col-md-5">
        <label for="inputCep" class="form-label">Cep: </label>
        <label for="inputCep" class="form-label">{{$user->cep}}</label>
      </div>
    </form>
  </div>

@endsection