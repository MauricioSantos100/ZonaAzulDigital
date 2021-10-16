<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }

    public function index()
    {
        $usuario = $this->usuario->all();
        return view('listUsuario', compact('usuario'));
    }

    public function show($id)
    {
        $usuario = $this->usuario->find($id);
        return view('showUsuario', compact('usuario'));
    }

    public function create()
    {
        return view('newUsuario');
    }

    public function store(UsuarioRequest $request)
    {
        $cad = $this->usuario->create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);
        if ($cad) {
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $usuario = $this->usuario->find($id);
        return view('newUsuario', compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id)
    {
        $this->usuario->where(['id' => $id])->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $del = $this->usuario->destroy($id);
        return ($del) ? "sim" : "não";
    }
}
