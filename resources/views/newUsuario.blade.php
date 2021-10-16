@extends('templates.template')

@section('content')

  <div class="container">
    <div class="text-center">
      <h1>@if(isset($usuario))Editar Usuario @else Cadastrar Usuario @endif</h1>
    </div>

    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
              {{$erro}}<br>
          @endforeach
      </div>
    @endif

    @if(isset($usuario))
      <form class="row g-3" name="formEditUsuario" id="formUsuario" method="post" action="{{url('/usuarios',$usuario->id)}}">
        @method('PUT')
    @else
      <form class="row g-3" name="formCadUsuario" id="formUsuario" method="post" action="{{url('/')}}">
    @endif

      @csrf
      <div class="col-12">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{$usuario->nome ?? ''}}" required>
      </div>

      <div class="col-12">
        <label for="inputCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" value="{{$usuario->cpf ?? ''}}" required>
      </div>

      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$usuario->email ?? ''}}" required>
      </div>

      <div class="col-md-6">
        <label for="inputCel" class="form-label">Telefone</label>
        <input type="cel" class="form-control" name="telefone" id="telefone" value="{{$usuario->telefone ?? ''}}" required>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">@if(isset($usuario))Editar @else Cadastrar @endif</button>
      </div>
    </form>
  </div>

@endsection