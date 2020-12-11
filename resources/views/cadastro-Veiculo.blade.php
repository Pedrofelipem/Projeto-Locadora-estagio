@extends('template')

@section('titulo', 'CADASTRAR VEICULO')
@section('aba-titulo', 'SALVAR VEICULO')
@section('conteudo_principal')


<div class="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-8">
                <div class="section-title">
                    <h2>REGISTRE-SE PARA SER MOVIDA</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9">
                </div>
                <div class="all-form">
                    <div class="single-form" id="first-step">
                        <form action="{{route('salvar.veiculo')}}" method="post">
                            @csrf 
                            <div>
                                <input type="text" name="modelo"  id="firstName" placeholder="EX: FIAT TORO"/>  
                            </div>
                            
                            <div>
                                <input type="number" name="placa" placeholder="EX: PDM-0767"/>
                            </div>
                            <div>
                                <input type="text" name="cor" placeholder="EX: AZUL."/>
                            </div>
                            <div>
                                <input type="number" name="anofb" id="dOb" placeholder="EX: 2017"/>
                            </div><p>Ao clicar em "CADASTRAR", você confirma que leu e entendeu Privacy & Coockie Policy, e concorda com seus termos.</p>
                            <input class="next" type="submit" value="CADASTRAR"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection