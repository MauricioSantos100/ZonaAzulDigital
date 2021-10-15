@extends('templates.template')

@section('content')

<div class="container">
    <div class="text-center">
      <h1>Usuarios</h1>
    </div>
    <div class="col-lg-12" style="text-align: right;">
        <a href="{{url("usuarios/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $usuarios)
                <tr>
                    <th scope="row">{{$usuarios -> id}}</th>
                    <th>{{$usuarios -> nome}}</th>
                    <th>{{$usuarios -> telefone}}</th>
                    <th>
                        <a href="{{url("usuarios/$usuarios->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">deletar</button>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection