<?php

namespace App\Http\Controllers;

use App\Models\ModelVeiculo;
use App\Models\UserModel;
use Illuminate\Http\Request;


class VeiculoController extends Controller
{
    private $veiculo;
    private $user;

    public function __construct() {
        $this -> veiculo = new ModelVeiculo();
        $this -> user = new UserModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculo = $this -> veiculo -> all();
        return view('listVeiculo', compact('veiculo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->user->all();
        return view('newVeiculo',compact('users'));
        // return view(view: 'newVeiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->veiculo->create([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'placa'=>$request->placa,
            'ano'=>$request->ano,
            'cor'=>$request->cor,
            'id_user'=>$request->id_user
         ]);
         if($cad){
             return redirect('veiculos');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = $this -> veiculo -> find($id);
        return view('showVeiculo', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
