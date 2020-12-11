@extends('template')

@section('titulo', 'lISTAGEM BRASILEIRÃO')
@section('aba-titulo', 'lISTAGEM')
@section('conteudo_principal')

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTA DE COMPETIDORES ORDEM ALFABÉTICA</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Placa</th>
                        </tr>
                    </thead>
                    @foreach($veiculo as $veiculos)
                        <tr>
                            <td>{{$veiculos->id}}</td>
                            <td>
                            <a href="{{route('informacao.competidor')}}">
                                <span class="single-team">
                                <span class="logo">
                                    <img src="assets/img/team-1.png" alt="">
                                </span>
                                <span class="text">
                                <span class="diff"> {{$veiculos->modelo}}</span>
                                </span>
                                </span>
                            </a>
                            </td>
                            <td style="margin-right: 50px;">{{$veiculos->placa}}</td>
                        </tr>
                    @endforeach
                </table>
             </div>
        </div>
    </div>
</div>

@endsection