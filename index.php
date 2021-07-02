<?php
    require_once 'php/usuarios.php';

    session_start();
if (isset($_SESSION['id_usuario']))
 {
    $us = new Usuario("mery_goumert", "localhost", "root", "");
    $informacoes = $us->buscarDadosUser($_SESSION['id_usuario']);
} elseif (isset($_SESSION['id_master'])) {
    $us = new Usuario("mery_goumert", "localhost", "root", "");
    $informacoes = $us->buscarDadosUser($_SESSION['id_master']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <title>Página principal</title>
    <link rel="shortcut icon" href="assents/img/Logo-removebg-preview.png">



    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/components/slider.css">


    <link rel="stylesheet" href="css/cardapio.css">
    <link rel="stylesheet" href="css/escrever.css">
    <link rel="stylesheet" href="css/sobre-nos.css">






    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

    <script src="https://kit.fontawesome.com/59c99cc2bb.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;700;800;900&family=Fira+Code:wght@300;500&family=Kiwi+Maru:wght@300;400;500&family=Lobster&family=Medula+One&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&family=Open+Sans:wght@300;400;600&family=Roboto:wght@100;300&family=Schoolbell&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/components/actions.css">
    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/input.css">
    <link rel="stylesheet" href="css/components/label.css">
    <link rel="stylesheet" href="css/components/logo.css">
    <link rel="stylesheet" href="css/components/sections.css">
    <link rel="stylesheet" href="css/components/title.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/components/texts.css">
    <link rel="stylesheet" href="css/components/navegation.css">
    <link rel="stylesheet" href="css/components/sobre-nos2.css">
    <link rel="stylesheet" href="css/components/CONTATOS.CSS">
    <link rel="stylesheet" href="css/components/locailizacao.css">
    <link rel="stylesheet" href="css/components/modal.css">
    <link rel="stylesheet" href="css/components/direito.css">




</head>

<body>


    <div id="MenuHref">

    </div>
    <div class="CorpoHome">
        <header class="header">
            <!--TAG DE ESTRUTURAÇÃO-->


            <!--AREA PARA A LOGO -->
            <a class="imglogoA" href="#MenuHref" id="animaMenu">
                <img class="imgLogo" src="assents/img/Logo-removebg-preview.png" />
            </a>
            <!--QUANDO CLICAR NA LGO
            IRÁ PARA PACINA INICIAL -->

            <div class="container">
                <!--A AREA QUE IRA FICAR A LOGO E O MENU-->

                <div class="menu">
                    <!--AREA DO MENU, AQUELE COM OS NOMES, INICIO,SOBRE-->
                    <nav class="nav">
                        <!-- PARA NAVEGAÇÃO , PARA MENU-->
                        <!--MENU RESPONSIVO-->
                        <div class="menuMobile">
                            <div class="mm_line"></div>
                            <!--isso sera o menu, aquele tres linhas-->
                            <div class="mm_line"></div>
                            <!--LINHAS-->
                            <div class="mm_line"></div>
                            <!--LINHAS-->
                        </div>
                        <ul class="ul">
                            <?php
                            if (isset($_SESSION['id_master'])) {?>
                                    <li><a href="php/dados.php"> Dados</a></li>
                            <?php     }
                            ?>
                            <!--MENU SEM RESPONSIVO-->
                            <li class="active"><a class="link" href="#MenuHref" id="animaMenu2">HOME</a></li>
                            <!--active sera como estivesse
                        selecionado -->
                            <!-- essa lista sera de links e tbm menu-->
                            <li class="li"><a class="link" href="#Vip" id="animaVip">SOCIAL</a></li>
                            <li class="li"><a class="link" href="#Cardapioo" id="animaCardapio">CARDÁPiO</a></li>
                            <li class="li"><a class="link" href="#Sobre" id="animaSobre">SOBRE</a></li>
                            <li class="li"><a class="link" href="#Contatoss" id="animaContatos">CONTATO</a></li>
                            <li class="li"><a class="link" href="#Localização" id="animaLocalizacao">LOCALIZAÇÃO</a></li>
                            <li class="li"><a class="link" style="font-size: 25px;" href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li> <a href="login.php">ENTRAR</a> </li>

                            <?php
                            if (isset($informacoes))
                             {//tem uma sessao, tem uma pessoa logada
                                ?>
                    <li><a href="sair.php">Sair</a></li>
                            <?php	  } else
                             { ?>
                    <li><a href="login.php">Entrar</a></li>
                            <?php	  }
                            ?>  


                        </ul>
                    </nav>
                </div>
            </div>
        </header>
          <?php  
        if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario']))
     { ?>
        <h2>
            <?php
            echo "Olá! ";
            echo $informacoes['nome'];
            echo " ,seja bem vindo(a)!";
            ?>
        </h2>
<? php}

?>


        <!--image slider start-->

        <h1 class="substSlide">Sejam Bem-Vindos a Mary Gourmet!</h1>

        <section class="cor">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input class="input" type="radio" name="radio-btn" id="radio1">
                    <input class="input" type="radio" name="radio-btn" id="radio2">
                    <input class="input" type="radio" name="radio-btn" id="radio3">
                    <input class="input" type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <!-- nada e nada-->
                        <img class="img" src="assents/img/couple-1807617_1920.jpg" alt="">


                    </div>
                    <div class="slide">
                        <img class="img" src="assents/img/restaurant-690975_1280.jpg" alt="">

                    </div>
                    <div class="slide">
                        <img class="img" src="assents/img/brick-wall-1834784_1920.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img class="img" src="assents/img/kitchen-731351_1920.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
        </section>
    </Div>
    <!--image slider end-->
    </div>
    <!--CorpoVip-->
    <div class="CorpoVip" id="Vip">
        <nav class="navVip">

            <p class="paragrafoVip">Nossas <br> &nbsp; Redes Sociais</p>
            <a href="https://api.whatsapp.com/send?phone=5527996409749&text=QUERO%20SER%20VIP%20" target="_blank" class="imgvip">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/marmitariamarygourmet/" target="_blank" class="imgvip2">
                <i class="fab fa-instagram"></i>
            </a>
            <i class="fas fa-hand-point-right maozinha"></i>
            <div class="paragrafoDivVip">
                <p class="paragrafoVipSolo"> <i class="fas fa-plus-circle"></i> Receba Informações</p>
                <p class="paragrafoVipSolo"> <i class="fas fa-plus-circle"></i> Veja nossas promoções</p>
                <p class="paragrafoVipSolo"> <i class="fas fa-plus-circle"></i> Observe nossos pratos</p>
            </div>
        </nav>
    </div>
    <!--Fim do Vip-->



    <!--Cardapio-->
    <div id="Cardapioo">
        <section class="imgfundo">
            <div class="texto">
                <h1 class="h1">CARDÁPIO</h1>
            </div>
        </section>

        <section class="cor2">


            <section class="cardapio">



                <div class="card1">
                    <img class="imgcardapio1" src="assents/img/marmita p.png" alt="">
                    <div class="textosimg">
                        <h1>MARMITA P</h1>
                        <p>
                            Completa - Tamanho P
                        </p>
                    </div>



                    <i id="botaomais" class="  fas fa-plus  " style="margin-left: 90px; margin-top: 20px;"></i>

                    <div class="modal">
                        <div class="modal-content">
                            <div class="conteudo-modal">
                                <h1>MARMITA P - R$ 16,00</h1>
                                <div class="tarja-verde1">
                                    <h2>PROTEÍNAS</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>
                                <form name="proteinaMarmitaP" width="100%" action="bullet" method="POST">


                                    <div class="opcao-proteinas">


                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>


                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaP', 'proteinaP')" name="proteinaP">
                                            <label>Frango Xadrez</label>
                                        </div>


                                    </div>

                                </form>
                                <div class="tarja-verde2">
                                    <h2>CARBOIDRATOS</h2>
                                    <p>Pode escolher todos</p>
                                </div>
                                <div class="opcao-carboidratos">
                                    <div class="fex1">
                                        <input type="checkbox" id="selecao">
                                        <label id="textosele">Arroz Branco</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Feijão</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Farofa</label>


                                    </div>

                                    <div class="fex2">
                                        <input type="checkbox" id="">
                                        <label>Purê de Batata</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Purê de Aimpim</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Macarrão</label>
                                        <br/>
                                    </div>

                                </div>
                                <div class="tarja-verde3">
                                    <h2>SALADA</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>
                                <form name="saladaMarmitaP" width="100%" action="bullet" method="POST">
                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label id="textosele">Tomate</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Pepino</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Repolho</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Cenoura Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Couve Flor</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Vagem Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Couve Flor</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaP', 'saladaP')" name="saladaP">
                                            <label>Batata Frita</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal">&times;</button>

                        </div>

                    </div>
                </div>







                <div class="card2">
                    <img class="imgcardapio2" src="assents/img/marmita m.png" alt="">
                    <div class="textosimg">
                        <h1>MARMITA M </h1>
                        <p>
                            Completa - Tamanho M
                        </p>
                    </div>



                    <i id="botaomais2" class=" fas fa-plus" style="margin-left: 90px; margin-top: 20px;"></i>

                    <div class="modal2">
                        <div class="modal-content">
                            <div class="conteudo-modal">
                                <h1>MARMITA M - R$ 18,00</h1>
                                <div class="tarja-verde1">
                                    <h2>PROTEÍNAS</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>

                                <form name="proteinaMarmitaM" width="100%" action="bullet" method="POST">

                                    <div class="opcao-proteinas">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'proteinaMarmitaM', 'proteinaM')" name="proteinaM">
                                            <label>Frango Xadrez</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="tarja-verde2">
                                    <h2>CARBOIDRATOS</h2>
                                    <p>Pode escolher todos</p>
                                </div>
                                <div class="opcao-carboidratos">
                                    <div class="fex1">
                                        <input type="checkbox" id="selecao">
                                        <label id="textosele">Arroz Branco</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Feijão</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Farofa</label>


                                    </div>

                                    <div class="fex2">
                                        <input type="checkbox" id="">
                                        <label>Purê de Batata</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Purê de Aimpim</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Macarrão</label>
                                        <br/>
                                    </div>

                                </div>
                                <div class="tarja-verde3">
                                    <h2>SALADA</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>

                                <form name="saladaMarmitaM" width="100%" action="bullet" method="POST">

                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label id="textosele">Tomate</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Pepino</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Repolho</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Cenoura Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Couve Flor</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Vagem Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Couve Flor</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaMarmitaM','saladaM')" name="saladaM">
                                            <label>Batata Frita</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal2">&times;</button>

                        </div>

                    </div>
                </div>



                <div class="card3">
                    <img class="imgcardapio3" src="assents/img/marmitex-g.png" alt="">
                    <div class="textosimg">
                        <h1>MARMITA G</h1>
                        <p>
                            Completa - Tamanho G
                        </p>
                    </div>


                    <i id="botaomais3" class=" fas fa-plus" style="margin-left: 90px; margin-top: 20px;"></i>

                    <div class="modal3">
                        <div class="modal-content">
                            <div class="conteudo-modal">
                                <h1>MARMITA G - (R$20,00)</h1>



                                <div class="tarja-verde1">
                                    <h2>PROTEÍNAS</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>

                                <form name="proteinaMarmitaG" width="100%" action="bullet" method="POST">

                                    <div class="opcao-proteinas">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'proteinaMarmitaG', 'proteinaG')" name="proteinaG">
                                            <label>Frango Xadrez</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="tarja-verde2">
                                    <h2>CARBOIDRATOS</h2>
                                    <p>Pode escolher todos</p>
                                </div>
                                <div class="opcao-carboidratos">
                                    <div class="fex1">
                                        <input type="checkbox" id="selecao">
                                        <label id="textosele">Arroz Branco</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Feijão</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Farofa</label>


                                    </div>

                                    <div class="fex2">
                                        <input type="checkbox" id="">
                                        <label>Purê de Batata</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Purê de Aimpim</label>
                                        <br/>
                                        <input type="checkbox" id="">
                                        <label>Macarrão</label>
                                        <br/>
                                    </div>

                                </div>
                                <div class="tarja-verde3">
                                    <h2>SALADA</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>

                                <form name="saladaMarmitaG" width="100%" action="bullet" method="POST">

                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label id="textosele">Tomate</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Pepino</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Repolho</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Cenoura Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Couve Flor</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Vagem Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Couve Flor</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaMarmitaG', 'saladaG')" name="saladaG">
                                            <label>Batata Frita</label>
                                        </div>
                                    </div>
                                </form>
                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal3">&times;</button>

                        </div>

                    </div>
                </div>



                <div class="card4">
                    <img class="imgcardapio4" src="assents/img/salada-removebg-preview.png" alt="">
                    <div class="textosimg">
                        <h1>SALADA P</h1>
                        <p>
                            Salada - Completa P
                        </p>

                    </div>

                    <i id="botaomais4" class="fas fa-plus" style="margin-left: 90px; margin-top: 20px;"></i>
                    <div class="modal4">
                        <div class="modal-content">
                            <div class="conteudo-modal">


                                <h1>SALADA P - R$ 18,00</h1>

                                <div class="tarja-verde1">
                                    <h2>PROTEÍNAS</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>

                                <form name="saladaMarmitaProteinaP" width="100%" action="bullet" method="POST">

                                    <div class="opcao-proteinas">

                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaP', 'saladaProteinaP')" name="saladaProteinaP">
                                            <label>Frango Xadrez</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="tarja-verde2">
                                    <h2>VEGETAIS E LEGUMES E FRUTAS</h2>
                                    <p>Pode escolher 8</p>
                                </div>

                                <form name="saladaPVLF" width="100%" action="bullet" method="POST">

                                    <div class="opcao-carboidratos">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label id="textosele">Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Cenoura Ralada</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Azeitona</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Alho Porô</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Milho Verde</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Cebola Roxo</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Alface</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Couve</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8,'saladaPVLF', 'opPVLF')" id="opPVLF">
                                            <label>Agrião</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="tarja-verde3">
                                    <h2>SEMENTES E MOLHOS</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>

                                <form name="saladaSementeMolhoP" width="100%" action="bullet" method="POST">

                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label id="textosele">Linhaça</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label>Chia</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label>Gergelim</label>
                                            <br/>

                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label>Cesar</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label>Ervas Cítrica</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5,'saladaSementeMolhoP', 'sementeMolhoP')" id="sementeMolhoP">
                                            <label>Mostarda e Mel</label>
                                            <br/>
                                        </div>

                                    </div>

                                </form>

                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal4">&times;</button>

                        </div>

                    </div>
                </div>


                <div class="card5">
                    <img class="imgcardapio5" src="assents/img/salada2.png" alt="">
                    <div class="textosimg">
                        <h1>SALADA M</h1>
                        <p>
                            Salada - Completa M
                        </p>

                    </div>

                    <i id="botaomais5" class="  fas fa-plus" style="margin-left: 90px; margin-top: 20px;"></i>

                    <div class="modal5">
                        <div class="modal-content">
                            <div class="conteudo-modal">
                                <h1>SALADA M - R$ 20,00</h1>
                                <div class="tarja-verde1">
                                    <h2>PROTEÍNAS</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>

                                <form name="saladaMarmitaProteinasM" width="100%" action="bullet" method="POST">


                                    <div class="opcao-proteinas">

                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2, 'saladaMarmitaProteinasM', 'saladaProteinasM')" id="saladaProteinasM">
                                            <label>Frango Xadrez</label>
                                        </div>

                                    </div>
                                </form>

                                <div class="tarja-verde2">
                                    <h2>VEGETAIS E LEGUMES E FRUTAS</h2>
                                    <p>Pode escolher 8</p>
                                </div>

                                <form name="saladaMVLF" width="100%" action="bullet" method="POST">


                                    <div class="opcao-carboidratos">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label id="textosele">Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Cenoura Ralada</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Azeitona</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Alho Porô</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Milho Verde</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Cebola Roxo</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Alface</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Couve</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaMVLF', 'opMVLF')" id="opMVLF">
                                            <label>Agrião</label>
                                        </div>
                                </form>
                                </div>
                                <div class="tarja-verde3">
                                    <h2>SEMENTES E MOLHOS</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>

                                <form name="saladaSementeMolhosM" width="100%" action="bullet" method="POST">


                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label id="textosele">Linhaça</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label>Chia</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label>Gergelim</label>
                                            <br/>

                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label>Cesar</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label>Ervas Cítrica</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosM', 'sementeMolhosM')" name="sementeMolhosM">
                                            <label>Mostarda e Mel</label>
                                            <br/>

                                        </div>
                                    </div>
                                </form>
                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal5">&times;</button>

                        </div>

                    </div>
                </div>



                <div class="card6">
                    <img class="imgcardapio6" src="assents/img/salada3.png" alt="">
                    <div class="textosimg">
                        <h1>SALADA G</h1>
                        <p>
                            Salada - Completa G
                        </p>

                    </div>

                    <i id="botaomais6" class="    fas fa-plus" style="margin-left: 90px; margin-top: 20px;"></i>
                    <div class="modal6">
                        <div class="modal-content">
                            <div class="conteudo-modal">
                                <h1>SALADA G - (R$20,00)</h1>
                                <div class="tarja-verde1">
                                    <h2>PROTEÍNA</h2>
                                    <p>Pode escolher até 2 opções</p>
                                </div>

                                <form name="saladaMarmitaProteinaG" width="100%" action="bullet" method="POST">

                                    <div class="opcao-proteinas">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label id="textosele">Peito de frango em cubos</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Iscas de boi</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Omelete</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Estrogonofe</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Iscas de Fígado</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Panqueca de Carne</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Panqueca de Frango</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Carne Cozida</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Frango Grelhado</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(2,'saladaMarmitaProteinaG', 'saladaProteinaG')" name="saladaProteinaG">
                                            <label>Frango Xadrez</label>
                                        </div>

                                    </div>

                                </form>
                                <div class="tarja-verde2">
                                    <h2>VEGETAIS E LEGUMES E FRUTAS</h2>
                                    <p>Pode escolher 8</p>
                                </div>

                                <form name="saladaGVLF" width="100%" action="bullet" method="POST">


                                    <div class="opcao-carboidratos">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label id="textosele">Manga</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Cenoura Ralada</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Azeitona</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Alho Porô</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Milho Verde</label>
                                            <br/>
                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Cebola Roxo</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Alface</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Couve</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Brócolis</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(8, 'saladaGVLF', 'opGVLF')" name="opGVLF">
                                            <label>Agrião</label>
                                        </div>

                                    </div>
                                </form>
                                <div class="tarja-verde3">
                                    <h2>SEMENTES E MOLHOS</h2>
                                    <p>Pode escolher até 5 opções</p>
                                </div>

                                <form name="saladaSementeMolhosG" width="100%" action="bullet" method="POST">


                                    <div class="opcao-salada">
                                        <div class="fex1">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label id="textosele">Linhaça</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label>Chia</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label>Gergelim</label>
                                            <br/>

                                        </div>

                                        <div class="fex2">
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label>Cesar</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label>Ervas Cítrica</label>
                                            <br/>
                                            <input type="checkbox" onclick="checkGeral(5, 'saladaSementeMolhosG', 'sementeMolhoG')" name="sementeMolhoG">
                                            <label>Mostarda e Mel</label>
                                            <br/>
                                        </div>

                                    </div>
                                </form>
                                <div class="botaos-modal">

                                    <i class="fas fa-shopping-cart carrinho"></i>
                                </div>
                            </div>
                            <button class="close-modal6">&times;</button>

                        </div>

                    </div>
                </div>

            </section>
        </section>
    </div>

    <!--Sobre nós-->
    <div class="CorpoSobre" id="Sobre">
        <section class="imgfundomvv">


            <section class="blocos">
                <div class="traco"></div>
                <div class="container_caixa">
                    <div class="missao">
                        <div class="texto1">
                            <h1 class="sobreh1">MISSÃO</h1>
                            <p class="sobreParagrafo">
                                Oferecer produtos deliciosos e serviços que façam nossos clientes contentes por bastante tempo.
                            </p>
                        </div>
                    </div>
                    <div class="visao">
                        <div class="texto2">
                            <h1 class="sobreh1">VISÃO</h1>

                            <p class="sobreParagrafo">
                                Ser reconhecido e ser referência no mercado no ramo alimentício, pelo nosso esforço.
                            </p>
                        </div>
                    </div>
                    <div class="valores">
                        <div class="texto3">
                            <h1 class="sobreh1">VALORES</h1>
                            <p class="sobreParagrafo">
                                Respeito, compromisso e paixão pelos nossos clientes e funcionários.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="traco"></div>
            </section>
        </section>
        <section class="sobre-nos">

            <div class="textossobre">
                <h1 class="h1prin">SOBRE<br/> &nbsp; &nbsp; &nbsp; &nbsp; NÓS</h1>
            </div>

            <div class="caixadetextop">
                <div class="caixas">
                    <p class="textosobre">
                        A Mary Gourmet atua no mercado há 15 anos, com funcionários treinados e prontos para servi-lo a qualquer hora, respeitando as normas de higiene e qualidade do nossos produtos. O nosso dever é garantir que o cliente esteja satisfeito com nosso atendimento
                        e com a qualidade dos alimentos oferecidos pela marmitaria. Temos como missão sempre evoluir e crescer com o nossos clientes, com respeito e honestidade. Seja bem vindo a marmitaria Mary Gourmet!
                    </p>
                </div>
            </div>



        </section>
    </div>
    <!--FIM Sobre nós-->

    <!--COMEÇO DOS CONTATOS-->
    <div class="CorpoContatos">
        <section class="contatos" id="Contatoss">

            <div class="imgcontato1"></div>
            <div class="imgcontato2"></div>

            <h1 class="contatosh1">CONTATOS</h1>
            <div class="formulario_forma">

                <form action="https://api.staticforms.xyz/submit" method="POST" class="formulario">
                    <input type="hidden" name="accessKey" value="6b84f73b-7d5e-48a9-b74c-6508b7110d9c">
                    <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/index.html">

                    <p class="contatosParagrafo">NOME</p>
                    <input class="input-placeholder  input_contatos" type="text" id="nomee" name="name" placeholder="Digite seu nome" required>

                    <p class="contatosParagrafo">E-MAIL</p>
                    <input class="input-placeholder" type="text" id="emaill" name="email" placeholder="Digite seu email" required>

                    <p class="contatosParagrafo">MENSAGEM</p>
                    <textarea name="message" id="textArea" cols="30" rows="10" required>

               </textarea>
                    <button class="botao_form" onclick="mensagem()">ENVIAR</button>
                </form>

            </div>
        </section>
    </div>
    <!--FIM DOS CONTATOS-->

    <!--Localização-->

    <div class="CorpoLocalização" id="Localização">
        <section class="fundoLocalizaçao">

            <h1 class="titleLocalizaçao">Localização <i class="fas fa-map-marker-alt"></i></h1>
            <br>
            <p class="paragrafoLocalizaçao">Rua R. João Gonçalves, 6-27 - <br> São Francisco, Cariacica - ES, <br>29145-387</p>

            <!-- MAPA -->



            <div style='overflow:hidden;height:480px;width:100%;color: #0095eb' class="corpoLoca">
                <div id='gmap_canvas' style='height:480px;width:100%;'></div>
                <style>
                    #gmap_canvas img {
                        max-width: none!important;
                        background: none!important
                    }
                </style>
            </div>



            <!-- MAPA -->
        </section>
    </div>
    <!--FIM DA LOCALIZAÇÃO-->

    <section class="FundoDireito">
        <p class="paragrafoDireito">© 2021 Mary Gourmet. Todos os direitos reservados.</p>
    </section>


<?php
if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario'])) 
    { ?>
  <h2>
      <?php
         echo
        echo$ "<script>alert('informacoes['nome'];');</script>";
        echo  "<script>alert('Seja Bem Vinda (a)');</script>";
        ?>
  </h2>
<?php }

?>
   }

?>



</body>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
<script src="js/cabecalho.js"></script>
<script src="js/slide.js"></script>
<script src="js/escrever.js"></script>
<script src="js/localizacao.js"></script>
<script src="js/modal.js"></script>
<script src="js/menuHambuguer.js"></script>
<script src="js/checkGeral.js"></script>
<script src="carrinho.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</html>








