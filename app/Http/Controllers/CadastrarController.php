<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarController extends Controller
{
    public function cadastroVeiculo(){
        return view('cadastro-Veiculo');
    }
    public function cadastroCliente(){
        return view('cadastro-cliente');
    }

    public function salvarCliente(Request $r){
        $r->validate([
            'nome' => 'required|max:80',
            'idade' => 'required',
            'sexo' => 'required',
            'telefone' => 'required',
        ]);

    public function salvarVeiculo(Request $r){
        $r->validate([
            'modelo' => 'required|max:80',
            'placa' => 'required',
            'cor' => 'required',
            'anofb' => 'required',
        ]);
        
        Clientes::create($r->except('_token'));
        return redirect()->route('home');

        Veiculos::create($r->except('_token'));
        return redirect()->route('home');
    }
}
