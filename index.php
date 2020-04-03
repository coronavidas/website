<?php

require_once __DIR__ . "/src/vakinha_crawler.php";

$apoiadores = 62;

$vakinha_fsa = new VakinhaCrawler("https://www.vakinha.com.br/vaquinha/protetor-facial-para-profissionais-de-saude-contra-o-covid-19-menilde-araujo-silva-biao");
$results = $vakinha_fsa->scrap()->toArray();

$arrecadado = $results["arrecadado"];
$meta = $results["meta"];
$pct = $results["progresso"];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Corona Vidas - Ajude os profissionais de saúde a combaterem o Coronavírus</title>
    <meta name="description" content="Um coletivo de voluntários engajados em entregar Equipamentos de Proteção Individual(Protetores Faciais) 3D para profissionais de saúde.">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161996587-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-161996587-1');
    </script>


</head>

<body>
    <!-- page preloader -->
    <div id="loading-area">
        <div class="loader-box">
            <div class="loader" id="loader-1"></div>
        </div>
    </div><!-- end loading -->

    <?php include('inc/_header.php'); ?>

    <!--================================
         START SLIDER AREA
=================================-->
    <section class="slider-area slider-area2 text-center">
        <div class="homepage-slide1">
            <div class="single-slide-item" style="background-image: url(images/coronavidas-topo.jpg)">
                <div class="slide-item-table">
                    <div class="slide-item-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="slider-heading">
                                        <p class="slider__meta">Ajude os profissionais de saúde</p>
                                        <h2 class="slider__title">Nos ajude a combater o coronavírus!</h2>
                                        <a target="_blank" href="http://vaka.me/956493" class="theme-btn">DOAR AGORA</a>
                                        <a target="_blank" href="https://chat.whatsapp.com/DcL189qM2WIHr8K0X1THmf" class="theme-btn" style="margin-left: 30px">SEJA VOLUNTÁRIO</a>

                                    </div>
                                </div>
                                <!--end col-lg-8 -->
                            </div><!-- end row -->
                        </div><!-- container -->
                    </div><!-- slide-item-tablecell -->
                </div><!-- slide-item-table -->
            </div><!-- end single-slide-item -->
        </div><!-- end homepage-slides -->
    </section><!-- end slider-area -->
    <!--================================
        END SLIDER AREA
=================================-->

    <!--================================
         START GIVE AREA
=================================-->
    <section class="give-area skill-area">
        <div class="container-fluid">
            <div class="row give-static-wrap">
                <div class="col-lg-3">
                    <div class="give-title-box section-heading" style="height:100%">
                        <h2 class="give__title section__title text__white" style="font-size: 36px">Doações realizadas<br> até hoje.</h2>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-9">
                    <div class="give-progress-box">
                        <div class="skill-item">
                            <div class="skills">
                                <div class="skill">
                                    <h2 class="skill__title">R$ <?php echo number_format($arrecadado, 2, ',', '.'); ?></h2>
                                    <span><?php echo round($pct); ?>%</span>
                                    <div class="progress_bg">
                                        <div class="progress_bar" style="width: <?php echo round($pct); ?>%"></div>
                                    </div>
                                    <div class="skill-meta">
                                        <ul>
                                            <li>de R$ <?php echo number_format($meta, 2, ',', '.'); ?></li>
                                            <!-- <li><?php echo $apoiadores; ?> apoiadores</li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end skills-->
                        </div><!-- end skill-item -->
                    </div>
                </div><!-- end col-lg-9 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end give-area -->
    <!--================================
        END GIVE AREA
=================================-->

    <!--================================
         START MAKE WORLD AREA
=================================-->
    <section class="make-world-area">
        <div class="container">
            <div class="row world-static-wrap2">
                <div class="col-lg-5">
                    <div class="world-content">
                        <h3 class="world__title">
                            Conectando pessoas para salvar pessoas!
                        </h3>
                    </div>
                </div><!-- end col-lg-5 -->
                <div class="col-lg-7">
                    <div class="world-content">
                        <p class="world__desc">
                            Somos um coletivo de pessoas voluntárias engajadas em entregar Equipamento de Proteção Individual - Protetor facial conhecido como Face Shield - aos profissionais de Saúde de todo o Brasil. Esse EPI evita o contato com gotículas que possam atingir boca, nariz e olhos. Todo recurso arrecadado será utilizado única e exclusivamente para doação. Pretendemos entregar até 200.000 (duzentos mil equipamentos). Atualmente estamos finalizando o Molde de injeção. Todo recurso arrecadado será utilizado única e exclusivamente para doação.<br /><br />
                            Hoje temos HUB´s de produção nas seguintes cidades:
                            <ul>
                                <li>- <b>Bahia:</b> Feira de Santana, Vitoria da Conquista, Jequie, Ilhes, Valença, Guanambi</li>
                                <li>- <b>São Paulo:</b> Marilia, Bauru, Vale do Paraíba, São Paulo</li>
                                <li>- <b>Rio de Janeiro:</b> Rio de Janeiro</li>
                            </ul>
                            <br>
                            Você pode fazer parte desse movimento e ajudar a combater o Corona vírus de duas formas:
                            <br>- Sendo um voluntário
                            <br>- Realizando uma doação
                        </p>
                    </div>
                </div><!-- end col-lg-7 -->
            </div>
        </div><!-- end container -->
    </section><!-- end give-area -->
    <!--================================
      END MAKE WORLD  AREA
=================================-->

    <!--================================
         START SERVICE AREA
=================================-->
    <section class="service-area text-center">
        <img src="images/heart-icon1.png" alt="" class="heart-icon heart-icon-1">
        <img src="images/heart-icon2.png" alt="" class="heart-icon heart-icon-2">
        <img src="images/heart-icon3.png" alt="" class="heart-icon heart-icon-3">
        <img src="images/heart-icon4.png" alt="" class="heart-icon heart-icon-4">
        <img src="images/heart-icon5.png" alt="" class="heart-icon heart-icon-5">
        <img src="images/heart-icon6.png" alt="" class="heart-icon heart-icon-6">
        <img src="images/heart-icon7.png" alt="" class="heart-icon heart-icon-7">
        <img src="images/heart-icon8.png" alt="" class="heart-icon heart-icon-8">
        <img src="images/heart-icon9.png" alt="" class="heart-icon heart-icon-9">
        <img src="images/heart-icon10.png" alt="" class="heart-icon heart-icon-10">
        <img src="images/heart-icon11.png" alt="" class="heart-icon heart-icon-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading service-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title">Todo o nosso trabalho é voluntário! Faça uma doação para compra de matéria prima na sua CIDADE.</h2>
                        <p class="section__meta">SAIBA COMO AJUDAR</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Feira de Santana, BA</h4>
                                <p class="service__desc">
                                    Projeto industrial para injeção na industria. EPI´s Bahia.
                                </p>
                                <a target="_blank" href="http://vaka.me/956493" class="theme-btn">Doar para EPI´s na Bahia</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Vitória da Conquista, BA</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de VITÓRIA DA CONQUISTA.
                                </p>
                                <a target="_blank" href="http://vaka.me/955169" class="theme-btn">Doar para Vitória da Conquista</a>

                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Jequié, BA</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de JEQUIÉ-BA.
                                </p>
                                <a target="_blank" href="http://vaka.me/959699" class="theme-btn">Doar para a cidade de Jequié</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Marília, SP</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de Marília-SP
                                </p>
                                <a target="_blank" href="http://vaka.me/966668" class="theme-btn">Doar para a cidade de Marília</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Bauru, SP</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de Bauru-SP.
                                </p>
                                <!-- ESTÃO MUDANDO DE PLATAFORMA -->
                                <!-- <a target="_blank" href="http://vaka.me/968449" class="theme-btn">Doar para a cidade de Bauru.</a> -->
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Vale do Paraíba, SP</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de Vale do Paraíba-SP.
                                </p>
                                <a target="_blank" href="https://www.kickante.com.br/campanhas/corona-vidas-vale-do-paraiba" class="theme-btn">Doar para cidade Vale do Paraíba</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Ilhéus, Bahia</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de ILHÉUS-BA.
                                </p>
                                <a target="_blank" href="http://vaka.me/967777" class="theme-btn">Doar para a cidade de Ilhéus</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Itabuna, Bahia</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas da cidade de ITABUNA-BA.
                                </p>
                                <a target="_blank" href="http://vaka.me/967777" class="theme-btn">Doar para a cidade de Itabuna</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
            </div>
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Valença, Bahia</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas desse Hub.
                                </p>
                                <!-- <a target="_blank" href="https://chat.whatsapp.com/DcL189qM2WIHr8K0X1THmf" class="theme-btn" >Faça parte</a> -->
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Guanambi, Bahia</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas desse Hub.
                                </p>
                                <!-- <a target="_blank" href="https://chat.whatsapp.com/DcL189qM2WIHr8K0X1THmf" class="theme-btn" >Faça parte</a> -->
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Itabuna, Bahia</h4>
                                <p class="service__desc">
                                    Faça parte do movimento e ajude as pessoas desse Hub.
                                </p>
                                <a target="_blank" href="https://chat.whatsapp.com/JGlX3K0gr7WDKa7dZuCMvO" class="theme-btn">Faça parte</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
            </div>
            <div class="row service-wrap">
                <div class="col">
                    <div class="service-item service-item1">
                        <div class="service-item-inner">
                            <div class="service-content">
                                <h4 class="service__title">Sua cidade não está aqui?</h4>
                                <p class="service__desc">
                                    Faça a diferença e crie um Hub em sua cidade.
                                </p>
                                <a href="#crie-seu-hub" class="theme-btn">Criar um Hub</a>
                            </div>
                        </div><!-- end service-item-inner -->
                    </div><!-- end service-item -->
                </div><!-- end col -->
            </div>
        </div><!-- end container -->
    </section><!-- end service-area -->
    <!--================================
      END SERVICE AREA
=================================-->


    <!--================================
         START MIXER AREA
=================================-->
    <section class="mixer-area mixer-area3 mixer-area4" style="background-image: url(images/coronavidas2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title text__white">Nos ajude sendo um colaborador. Clique no botão abaixo e entre em contato</h2>
                        <a target="_blank" href="http://vaka.me/956493" class="theme-btn">DOAR AGORA</a>
                        <a target="_blank" href="https://chat.whatsapp.com/DcL189qM2WIHr8K0X1THmf" class="theme-btn" style="margin-left: 30px">SEJA VOLUNTÁRIO</a>

                    </div><!-- end section-heading -->
                </div>
                <!-- end col-lg-6 -->
                <!-- <div class="col-lg-6">
              <div class="mixer-video-content">
                  <img src="images/mixer-img.jpg" alt="">
                  <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=RQu7jpcNUWI" title="Play Video"><i class="fa fa-play"></i></a>
              </div>
          </div> -->
                <!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mixer-area -->
    <!--================================
      END MIXER AREA
=================================-->

    <!--================================
       START GALLERY AREA
=================================-->
    <section class="gallery-area text-center" style="background-image: none; background-color: #494949;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title text__white">Veja como é o Equipamento de Proteção Individual</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8-->
            </div><!-- end row -->
            <div class="row gallery-wrap">
                <div class="col-lg-12">
                    <div class="gallery-carousel">
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas01.jpg" alt="">
                            <a href="images/galeria/coronavidas01.jpg" data-lightbox="roadtrip" data-title="Profissionais de saúde usando o equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas02.jpg" alt="">
                            <a href="images/galeria/coronavidas02.jpg" data-lightbox="roadtrip" data-title="O equipamento protege o rosto dos profissionais de gotículas que podem atingir o rosto"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas03.jpg" alt="">
                            <a href="images/galeria/coronavidas03.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas04.jpg" alt="">
                            <a href="images/galeria/coronavidas04.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas05.jpg" alt="">
                            <a href="images/galeria/coronavidas05.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas06.jpg" alt="">
                            <a href="images/galeria/coronavidas06.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas07.jpg" alt="">
                            <a href="images/galeria/coronavidas07.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas08.jpg" alt="">
                            <a href="images/galeria/coronavidas08.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas09.jpg" alt="">
                            <a href="images/galeria/coronavidas09.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                        <div class="gallery-item">
                            <img src="images/galeria/coronavidas10.jpg" alt="">
                            <a href="images/galeria/coronavidas10.jpg" data-lightbox="roadtrip" data-title="O equipamento"> <span class="gallery-icon"></span></a>
                        </div><!-- end gallery-item -->
                    </div><!-- end gallery-carousel -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- container -->
    </section><!-- end gallery-area -->
    <!--================================
        END GALLERY AREA
=================================-->



    <div class="section-divider"></div>

    <!--================================
         START MIXER AREA
=================================-->
    <section class="mixer-area helping-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading mixer-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title">O corona vírus tem deixado milhares de profissionais de saúde fora de combate.</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="helping-text-box">
                        <p class="helping__text">
                            Cerca de 3,5 mil casos de Covid-19 no país correspondem a trabalhadores do setor da saúde.
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mixer-area -->
    <!--================================
      END MIXER AREA
=================================-->



    <!--================================
         START MIXER AREA
=================================-->
    <section class="mixer-area2 helping-area2">
        <div class="container">
            <div class="row fun-content-wrap">
                <div class="col-lg-6">
                    <div class="fun-content">

                        <div class="section-heading">
                            <div class="section-icon">
                                <img src="images/section-icon.png" alt="section-icon">
                            </div>
                            <h2 class="section__title">Seja um Colaborador</h2>
                            <p class="section__desc">
                                Sua cidade ainda não possui um Hub? Preencha o formulário abaixo que lhe ajudaremos a ativar um Hub.
                            </p>
                        </div><!-- end section-heading -->
                    </div><!-- end fun-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="helping-form">
                        <div class="form-shared" id="crie-seu-hub">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSedkfvl6ouEavJx8fVNhhV22ugC_r2Nql9WvjBc94tv58b3QQ/viewform?embedded=true" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
                        </div><!-- end form-shared -->
                    </div><!-- end helping-form -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mixer-area2  -->
    <!--================================
      END MIXER AREA
=================================-->

    <!--================================
         START MIXER AREA
=================================-->
    <section class="mixer-area mixer-area3 text-center" style="background-image: url(images/coronavidas1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mixer-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title text__white">Precisamos de sua ajuda. <br> Seja um doador!</h2>
                        <a target="_blank" href="http://vaka.me/956493" class="theme-btn">DOAR AGORA</a>
                        <a target="_blank" href="https://chat.whatsapp.com/DcL189qM2WIHr8K0X1THmf" class="theme-btn" style="margin-left: 30px">SEJA VOLUNTÁRIO</a>

                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mixer-area -->
    <!--================================
      END MIXER AREA
=================================-->
    <!--================================
         START SERVICE AREA
=================================-->
    <section class="service-area text-center">
        <img src="images/heart-icon1.png" alt="" class="heart-icon heart-icon-1">
        <img src="images/heart-icon2.png" alt="" class="heart-icon heart-icon-2">
        <img src="images/heart-icon3.png" alt="" class="heart-icon heart-icon-3">
        <img src="images/heart-icon4.png" alt="" class="heart-icon heart-icon-4">
        <img src="images/heart-icon5.png" alt="" class="heart-icon heart-icon-5">
        <img src="images/heart-icon6.png" alt="" class="heart-icon heart-icon-6">
        <img src="images/heart-icon7.png" alt="" class="heart-icon heart-icon-7">
        <img src="images/heart-icon8.png" alt="" class="heart-icon heart-icon-8">
        <img src="images/heart-icon9.png" alt="" class="heart-icon heart-icon-9">
        <img src="images/heart-icon10.png" alt="" class="heart-icon heart-icon-10">
        <img src="images/heart-icon11.png" alt="" class="heart-icon heart-icon-11">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-heading service-heading">
                        <div class="section-icon">
                            <img src="images/section-icon.png" alt="section-icon">
                        </div>
                        <h2 class="section__title">Voluntários que estão fazendo a diferença</h2>
                        <p class="section__meta">Nosso eterno obrigado a todos vocês</p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row service-wrap">
                <div class="col voluntarios">
                    <a href="http://instagram.com/dra.priscila.andrade" target="_blank">Priscila de Andrade Gonçalves <small class="instagram">@dra.priscila.andrade</small></a>
                    <a href="http://instagram.com/sheilapereiras" target="_blank">Sheila Pereira<small class="instagram">@sheilapereiras</small></a>
                    <a href="http://instagram.com/" target="_blank">André Nicolau Aquime Gonçalves</a>
                    <a href="http://instagram.com/fabioabarreto" target="_blank">Fabio Barreto<small class="instagram">@fabioabarreto</small><small class="empresa">IFBA</small></a>
                    <a href="http://instagram.com/santanaSocrates" target="_blank">Sócrates Santana<small class="instagram">@SantanaSocrates </small></a>
                    <a href="http://instagram.com/" target="_blank">Leandro Brito<small class="empresa">UFOB</small></a>
                    <a href="http://instagram.com/netosimasoficial" target="_blank">Neto Simas<small class="instagram">@netosimasoficial</small><small class="empresa">Prime In-Tech</small></a>
                    <a href="http://instagram.com/flavio_maia.eng" target="_blank">Flávio Couvo Teixeira Maia<small class="instagram">@flavio_maia.eng</small></a>
                    <a href="http://instagram.com/lucianopestanasantos" target="_blank">Luciano Pestana Santos<small class="instagram">@lucianopestanasantos</small></a>
                    <a href="http://instagram.com/antoniocordeiro9" target="_blank">Antônio Cordeiro<small class="instagram">@antoniocordeiro9</small><small class="empresa">IFBA</small></a>
                    <a href="http://instagram.com/jeidsonMarques" target="_blank">Prof Jeidson Marques /Prof Audi<small class="instagram">@jeidsonMarques</small><small class="empresa">UNEF</small></a>
                    <a href="http://instagram.com/Vinigeira" target="_blank">Vinícius Bispo<small class="instagram">@vinigeira</small></a>
                    <a href="http://instagram.com/alebranco" target="_blank">Alexandre branco<small class="instagram">@alebranco</small></a>
                    <a href="http://instagram.com/" target="_blank">Marlovich Vaz Dantas</a>
                    <a href="http://instagram.com/" target="_blank">Fernanda Castelo Branco de Santana<small class="empresa">IFBA</small></a>
                    <a href="http://instagram.com/institutopepo" target="_blank">Menilde Bião<small class="instagram">institutopepo</small><small class="empresa">Institutopepo</small></a>
                    <a href="http://instagram.com/andreluiz.dev" target="_blank">André Luiz Batista<small class="instagram">@andreluiz.dev</small><small class="empresa">Player2.tech</small></a>
                    <a href="http://instagram.com/maiconfrancisco_" target="_blank">Maicon Francisco<small class="instagram">@maiconfrancisco_</small><small class="empresa">Player2.tech</small></a>
                    <a href="http://instagram.com/detalhealaser" target="_blank">Sebastião Oliveira<small class="instagram">@detalhealaser</small><small class="empresa">Detalhe Cortes e Gravações a Laser</small></a>
                    <a href="http://instagram.com/" target="_blank">Fernanda Castelo Branco de Santana<small class="empresa">IFBA</small></a>
                    <a href="http://instagram.com/turmairada" target="_blank">Rafael Souza<small class="instagram">@turmairada</small><small class="empresa">Instituto de Robótica Aplicada e Dispositivos Autômatos (Turma IRADA)</small></a>
                    <a href="http://instagram.com/" target="_blank">Luciana Araújo dos Reis <small class="empresa">Faculdade Independente do Nordeste</small></a>
                    <a href="http://instagram.com/" target="_blank">Arianna Oliveira Santana Lopes <small class="empresa">Fainor/secretaria de saúde de Itambé </small></a>
                    <a href="http://instagram.com/" target="_blank">Multiarte Comunicação Visual<small class="empresa">Multiarte</small></a>
                    <a href="http://instagram.com/arthurcesarmd" target="_blank">Arthur César <small class="instagram">@arthurcesarmd </small><small class="empresa">Medicina UFBA</small></a>
                    <a href="http://instagram.com/" target="_blank">André Souza</small><small class="empresa">TriBee Brasil</small></a>
                    <a href="http://instagram.com/marcio.megabyte" target="_blank">Márcio Henrique Alves dos Santos<small class="instagram">@marcio.megabyte</small><small class="empresa">IFBA - Campus de Jequié</small></a>
                    <a href="http://instagram.com/jeualmeida" target="_blank">Jeferson Almeida<small class="instagram">@jeualmeida</small><small class="empresa">Rock Faz Bem</small></a>
                    <a href="http://instagram.com/cuttereart" target="_blank">Tatiane Parizotto<small class="instagram">cuttereart</small><small class="empresa">Cutter's Art Impressão 3D</small></a>
                    <a href="http://instagram.com/jessica.cerqueira_" target="_blank">Jéssica Cerqueira<small class="instagram">jessica.cerqueira_</small><small class="empresa">UESB|CPDS - Campus Jequié</small></a>
                    <a href="http://instagram.com/green_mktdigital" target="_blank">Caio Lucas Santos Silva<small class="instagram">green_mktdigital</small><small class="empresa">Green MKT Digital</small></a>
                    <a href="http://instagram.com/cribeirolopes" target="_blank">Claudia Ribeiro<small class="instagram">cribeirolopes</small><small class="empresa">UESB|CPDS - Campus Jequié</small></a>
                    <a href="http://instagram.com/hayttle" target="_blank">Hayttle Soljnivisk<small class="instagram">@hayttle</small><small class="empresa">Maker</small></a>
                    <a href="http://instagram.com/raquelbarzotto" target="_blank">Raquel Barzotto Bavaresco<small class="instagram">@raquelbarzotto</small><small class="empresa">Cirurgiã Dentista (voluntária em Santa Bárbara do sul-RS)</small></a>
                    <a href="http://instagram.com/sandrogalvani" target="_blank">Sandro galvani<small class="instagram">@sandrogalvani</small><small class="empresa">Sandro galvani</small></a>
                    <a href="http://instagram.com/samarabarreto.mktdigital" target="_blank">Samara Barreto<small class="instagram">samarabarreto.mktdigital</small><small class="empresa">INNOVATE</small></a>
                    <a href="http://instagram.com/resistencia_fer_prof" target="_blank">Fernanda Vasques Ferreira <small class="instagram">resistencia_fer_prof</small><small class="empresa">UFOB, Professora, Jornalista</small></a>
                    <a href="http://instagram.com/juliassnunes" target="_blank">Julia Sousa Santos Nunes<small class="instagram">juliassnunes</small><small class="empresa">Enfermeira e engenheira</small></a>
                    <a href="http://instagram.com/luanareis86" target="_blank">Luana Araújo dos Reis <small class="instagram">@luanareis86</small><small class="empresa">Faculdade Independente do Nordeste (Enfermeira)</small></a>
                    <a href="http://instagram.com/Ecovillemarilia" target="_blank">Mariana Dallan Gelain<small class="instagram">Ecovillemarilia</small><small class="empresa">Ecoville Marília </small></a>
                    <a href="http://instagram.com/Priscila Zambon" target="_blank">Priscila Galati Zambon<small class="instagram">Priscila Zambon</small><small class="empresa">Fisioterapeuta</small></a>
                    <a href="http://instagram.com/motajosana" target="_blank">Josana Mota Bispo Amaral<small class="instagram">@motajosana</small><small class="empresa">Contadora</small></a>
                    <a href="http://instagram.com/jumistroni" target="_blank">Juliana mistroni Ramos <small class="instagram">@jumistroni</small><small class="empresa">Autônoma</small></a>
                    <a href="http://instagram.com/nando_guarilha" target="_blank">Luiz Fernando Braga Guarilha <small class="instagram">nando_guarilha</small><small class="empresa">BlueOne 3D </small></a>
                    <a href="http://instagram.com/amandaferreirabasso" target="_blank">Amanda Ferreira dos santos<small class="instagram">@amandaferreirabasso</small><small class="empresa">Universidade Federal do sul da Bahia</small></a>
                    <a href="http://instagram.com/unclefinado" target="_blank">Verônica Popov<small class="instagram">@unclefinado</small></a>
                    <a href="http://instagram.com/vinisampaioalmeida" target="_blank">Vinicius Sampaio<small class="instagram">@vinisampaioalmeida</small><small class="empresa">UFBA/FORD</small></a>
                    <a href="http://instagram.com/superlohcarvalho" target="_blank">Loraine A Carvalho<small class="instagram">@superlohcarvalho</small><small class="empresa">Band Tv</small></a>
                    <a href="http://instagram.com/sheilapereiras" target="_blank">Sheila Pereira<small class="instagram">@sheilapereiras</small><small class="empresa">Meio Mundo Comunicação, Tecnologia e Inovação</small></a>
                    <a href="http://instagram.com/marcelmarumaia" target="_blank">Marcel Maia<small class="instagram">@marcelmarumaia</small><small class="empresa">AdMobilize</small></a>
                    <a href="http://instagram.com/jonataweber" target="_blank">Jonata Weber<small class="instagram">@jonataweber</small><small class="empresa">Skilopay</small></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end service-area -->
    <!--================================
      END SERVICE AREA
=================================-->

    <!-- ================================
       START FOOTER AREA
================================= -->
    <section class="footer-area">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-desc">
                            <p>Entre em contato conosco através do email <a href="mailto:contato@coronavidas.net">contato@coronavidas.net</a></p>
                            <p>Juntos vamos vencer! <br><a href="https://www.player2.tech" target="_blank">site feito com ❤ por player2.tech</a></p>
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-copyright -->
    </section><!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- Template JS Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/smooth-scrolling.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>
</body>

</html>