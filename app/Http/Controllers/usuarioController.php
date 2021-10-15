<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuarioController extends Controller {
    private $usuario;

    public function __construct() {
        $this -> usuario = new UsuarioModel();
    }

    public function index() {
        $usuario = $this -> usuario -> all();
        return view('listUsuario', compact('usuario'));
    }

    public function show($id) {
        $usuario = $this -> usuario -> find($id);
        return view('showUsuario', compact('usuario'));
    }

    public function create() {
        return view('newUsuario');
    }

    public function store(Request $request) {
        $cad = $this -> usuario -> create([
            'nome' => $request -> nome,
            'cpf' => $request -> cpf,
            'email' => $request -> email,
            'telefone' => $request -> telefone
        ]);
        if($cad){
            return redirect('/');
        }
    }
}