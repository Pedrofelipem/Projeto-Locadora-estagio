@extends('template')

@section('titulo', 'CADASTRAR CLIENTE')
@section('aba-titulo', 'SALVAR CLIENTE')
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
                        <form action="{{route('salvar.cliente')}}" method="post">
                            @csrf 
                            <div>
                                <input type="text" name="nome"  id="firstName" placeholder="EX: João Paulo"/>  
                            </div>
                            
                            <div>
                                <input type="number" name="idade" placeholder="EX: 26"/>
                            </div>
                            <div>
                                <input type="text" name="ma" placeholder="EX: M ou F" />
                            </div>
                            <div>
                                <input type="tel" name="telefone" id="dOb" placeholder="Ex: 81991457865"/>
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