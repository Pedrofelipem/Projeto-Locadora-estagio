@extends('template')

@section('titulo', 'lISTA DE CLIENTES')
@section('aba-titulo', 'lISTAGEM')
@section('conteudo_principal')

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTA DE CLIENTES ORDEM ALFABÉTICA</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">nome</th>
                            <th scope="col">idade</th>
                        </tr>
                    </thead>
                    @foreach($cliente as $clientes)
                        <tr>
                            <td>{{$clientes->id}}</td>
                            <td>
                            <a href="{{route('informacao.competidor')}}">
                                <span class="single-team">
                                <span class="logo">
                                    <img src="assets/img/team-1.png" alt="">
                                </span>
                                <span class="text">
                                <span class="diff"> {{$clientes->nome}}</span>
                                </span>
                                </span>
                            </a>
                            </td>
                            <td style="margin-right: 50px;">{{$clientes->idade}}</td>
                        </tr>
                    @endforeach
                </table>
             </div>
        </div>
    </div>
</div>

@endsection