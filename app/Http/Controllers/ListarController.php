<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function listarVeiculo(){
        $veiculo = Veiculos::orderBy('nome', 'ASC')->get();
            return view('listar-Veiculo', compact('veiculo'));
    }

    public function listarCliente(){
        $cliente = Clientes::orderBy('nome', 'ASC')->get();
            return view('listar-Cliente', compact('cliente'));
        }
}