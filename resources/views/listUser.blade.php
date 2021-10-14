@extends('templates.template')

@section('content')

<div class="container">
    <div class="text-center">
      <h1>Usuarios</h1>
    </div>
    <div class="col-lg-12" style="text-align: right;">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $users)
                <tr>
                    <th scope="row">{{$users -> id}}</th>
                    <th>{{$users -> nome}}</th>
                    <th>{{$users -> cpf}}</th>
                    <th>{{$users -> email}}</th>
                    <th>{{$users -> telefone}}</th>
                    <th>
                        <a href="{{url("users/$users->id")}}">
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