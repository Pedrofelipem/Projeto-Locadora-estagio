
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Campeonato Brasileiro</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico.html" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="{{url('assets/css/fontawesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" href="{{url('assets/fonts/flaticon.css')}}">
        <!-- animate.css -->
        <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/odometer.min.css')}}">
        <!-- stylesheet -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    </head>

    <body>

        <!-- preloader begin -->
        <div class="preloader">
            <img src="{{url('assets/img/movida3.png')}}" alt="" height="200px">
        </div>
        <!-- preloader end -->
        
        <!-- header begin -->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                            
                        </div>
                    </div>
                </div>
            </div>
        <div id="navbar" class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                                    <div >
                                        <a href="{{route('home')}}">
                                            <img src="assets/img/movida2.jpg" alt="logo" height="80" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 d-xl-none d-lg-none d-block">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="mainmenu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{route('home')}}">Home</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('listar.veiculos')}}">Veículos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('listar.cliente')}}">Clientes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('cadastro.veiculo')}}">Cadastrar Veículo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('cadastro.cliente')}}">Cadastrar Cliente</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- banner begin -->
        <div class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="row justify-content-xl-start justify-content-lg-center justify-content-md-center">
                        <div class="col-xl-7 col-lg-11 col-md-10 col-12 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="text-content">
                                <h1>MOVIDA</h1>
                                <h4>VIAJE DE FORMA SEGURA..</h4>
                                <p>Trabalhamos para que sua viajem seja mais que uma viajem, seja tranquila, seja segura, seja MOVIDA!</p>
                                <div class="banner-button">
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}" class="bet-btn bet-btn-border">explore mais</a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- about begin -->
        <div class="about">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-img">
                            <img src="{{url('assets/img/movida1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                        <div>
                            <div class="part-text">
                                <h2>Apresentando Nossas Palavras</h2>
                                <p>Desde 2006 no mercado, a Movida Aluguel de Carros conta com a frota mais nova do Brasil e dispõe de lojas nas principais cidades e aeroportos do país. Adquirida em 2013 pelo Grupo JSL, hoje faz parte da empresa Movida Participações, criada em 2015 para administrar as operações de Aluguel de Carros, Venda de Seminovos e de Gestão de Terceirização de Frotas de veículos leves.Conhecida por ser uma empresa que valoriza a prestação de serviço a marca oferece a todos os clientes, diária de 27 horas, locação Carbon Free, a Frota mais nova do mercado, com CD player ou entrada USB em todas as categorias, sistema GPS, Wi-fi para carro e diárias com proteções inclusas e quilometragem livre.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->

        <!-- cta begin -->
        <div class="cta">
            <div class="container">
                <h3>Movida sempre com Você</h3>
                <div class="cta-btn-group">
                    <a href="#" class="bet-btn bet-btn-border">Explore Mais</a>
                </div>
            </div>
        </div>
        <!-- cta end -->
    
        <!-- feature begin -->
        <div class="feature" id="feature_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title">
                            <h2>RECURSOS MOVIDA</h2>
                            <p>Peredion mostra as probabilidades em tempo real para apostar com as apostas mais altas que você pode obter. Colocamos suas apostas em vários bMakers para obter a maior liquidez</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/music-and-multimedia.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">PREVISÃO AO VIVO</h3>
                                <p>Peredion tem um serviço de Prediction in-play de qualidade e o console ao vivo tem ampla cobertura de eventos esportivos e mercados de previsão.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/announcement.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">PROMOÇÕES DIÁRIAS</h3>
                                <p>A MOVIDA oferece uma grande variedade de promoções diferentes, todos os dias. Isso inclui ofertas de devolução de dinheiro quando seu cavalo for espancado por um nariz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/usability.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">USABILIDADE LIMPA</h3>
                                <p>Mais do que um recurso, a usabilidade é um aspecto que afeta todo o produto. Para nós, isso significa uma interface intuitiva e fácil de usar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/browser.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">MOVIMENTAÇÂO</h3>
                                <p>MOVIDA em uma arbitragem ou predição de valor é extremamente fácil. Todas as informações de que você precisa são reunidas em um único navegador de previsão usando o software.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/exchange.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">PREÇO</h3>
                                <p>A conversão automática de moeda está integrada. Você pode usar diferentes moedas em diferentes casas de apostas e faremos todas as contas para você.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{url('assets/img/svg/key-card.svg')}}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">ALTA SEGURANCA</h3>
                                <p>Nossas medidas de segurança estão muito acima do normal na indústria de software.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature end -->