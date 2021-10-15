@extends('templates.template')

@section('content')

<div class="container">
  <div class="text-center">
    <h1>Novo Veiculo</h1>
  </div>
  <form name="formCad" id="formCad" method="post" action="{{url('veiculos')}}" class="row g-3">
    @csrf
    <div class="col-12">
      <label for="inputMarca" class="form-label">Marca</label>
      <input type="text" class="form-control" name="marca" id="marca">
    </div>

    <div class="col-md-6">
      <label for="inputModelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="modelo">
    </div>

    <div class="col-md-6">
      <label for="placa" class="form-label">Placa</label>
      <input type="text" class="form-control" name="placa" id="placa">
    </div>

    <div class="col-8">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" class="form-control" name="ano" id="ano">
    </div>

    <div class="col-4">
      <label for="inputCor" class="form-label">Cor</label>
      <input type="text" class="form-control" name="cor" id="cor">
    </div>

    <select class="form-control" name="id_user" id="id_user">
      <option value="">Usuario</option>
      @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->nome}}</option>
      @endforeach
    </select>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>

@endsection