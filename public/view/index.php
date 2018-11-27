<?php

$tpl = new \Helpers\Template(DOMINIO);
$read = new \ConnCrud\Read();
$read->exeRead("equipe", "ORDER BY id LIMIT 6");
$equipe = ($read->getResult() ? $read->getResult() : []);

$read->exeRead("clientes", "WHERE status = 1 ORDER BY id DESC LIMIT 10");
$clientes = ($read->getResult() ? $read->getResult() : []);
?>

<section class="header10 cid-raBgLdchSJ mbr-fullscreen mbr-parallax-background" id="header10-0">
    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10 ml-auto">
            <h1 class="mbr-section-title align-right mbr-bold pb-3 mbr-fonts-style display-1">SOLUÇÕES PARA O SEU
                NEGÓCIO</h1>
            <h3 class="mbr-section-subtitle align-right mbr-light pb-3 mbr-fonts-style display-2">Criação de Sites</h3>
            <p class="mbr-text align-right pb-3 mbr-fonts-style display-5">COM PAINEIS ADMINISTRATIVOS, RELATÓRIOS,
                LEADS E AUTOMAÇÃO DE PROCESSOS, A AG3 CONSTRÓI A SOLUÇÃO PARA O SEU NEGÓCIO PROSPERAR</p>
            <div class="mbr-section-btn align-right"><span class="btn btn-md btn-primary display-4">CONHECER</span>
                <span class="btn btn-md btn-white-outline display-4">VER VÍDEO</span></div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features1 cid-raBh6EkhNv" id="features1-3">

    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-setting2"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        AUTOMAÇÃO</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Através de automação de processos, nossos sistemas
                        enviam emails e mensagens com informações relevantes para a conversão do seu negócio.</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbri-touch mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        SITE OU APP?</h4>
                    <p class="mbr-text mbr-fonts-style display-7">A ag3 trabalha com sites e apps! Através de um sistema
                        híbrido de desenvolvimento, nossos sites não necessitam de internet para operar, além de nada
                        ficar desatualizado.</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">AONDE VOCÊ FOR</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Não dependa de uma dispositivo para usar seu sistema, nossas soluções são multiplataformas, isso
                        quer dizer que você poderá utilizá-lo em seu smartphone ou em seu notebook. Tanto faz!</p>
                </div>
            </div>


        </div>

    </div>

</section>

<section class="mbr-gallery mbr-slider-carousel cid-raBgWMIuLj" id="gallery2-1">

    <div class="container">
        <div><!-- Filter -->
            <div class="mbr-gallery-filter container gallery-filter-active">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all">
                        <span class="btn btn-md btn-primary-outline active display-7">Todos</span>
                    </li>
                </ul>
            </div><!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false"
                                 data-tags="Sistemas">
                                <div href="#lb-gallery2-1" data-slide-to="0" data-toggle="modal">
                                    <img src="<?= HOME ?>public/assets/images/multi-1919x887-800x370.png">
                                    <span class="icon-focus"></span>
                                </div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Sites">
                                <div href="#lb-gallery2-1" data-slide-to="1" data-toggle="modal">
                                    <img src="<?= HOME ?>public/assets/images/karina-1919x887-800x370.png">
                                    <span class="icon-focus"></span>
                                </div>
                            </div>
                            <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false"
                                 data-tags="Projeção Invertida">
                                <div href="#lb-gallery2-1" data-slide-to="2" data-toggle="modal">
                                    <img src="<?= HOME ?>public/assets/images/projecao-1919x887-800x370.jpg">
                                    <span class="icon-focus"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
                 data-keyboard="true" data-interval="false" id="lb-gallery2-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="<?= HOME ?>public/assets/images/multi-1919x887.png"></div>
                                <div class="carousel-item active">
                                    <img src="<?= HOME ?>public/assets/images/karina-1919x887.png" alt="" title="">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= HOME ?>public/assets/images/projecao-1919x887.jpg" alt="" title="">
                                </div>
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev"
                               href="#lb-gallery2-1"><span class="mbri-left mbr-iconfont"
                                                           aria-hidden="true"></span><span
                                        class="sr-only">Previous</span></a><a
                                    class="carousel-control carousel-control-next" role="button" data-slide="next"
                                    href="#lb-gallery2-1"><span class="mbri-right mbr-iconfont"
                                                                aria-hidden="true"></span><span
                                        class="sr-only">Next</span></a><a class="close" href="#" role="button"
                                                                          data-dismiss="modal"><span class="sr-only">Close</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content5 cid-raBzwObT2o mbr-parallax-background" id="content5-9">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">MAIS QUE NEGÓCIOS</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Uma
                    Parceria Consistente com Suporte e Atualizações</h3>


            </div>
        </div>
    </div>
</section>

<section class="features12 cid-raBhh36wun" id="features12-4">

    <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2">
            Sites Dinâmicos e Responsivos</h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">O sistema evolui com você!</h3>

        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-upload mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Soluções em Nuvem</h4>
                        </div>
                    </div>

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            centralize seus dados, compartilhe com seus usuários e gerenciar em equipe.</p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-drag-n-drop2 mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Precisa Expandir?</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Estamos esperando por isso!</p>
                    </div>
                </div>
            </div>

            <div class="mbr-figure" style="width: 50%;">
                <img src="<?= HOME ?>public/assets/images/mbr-982x655.jpg" alt="ag3tecnologia" title="">
            </div>

            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-features mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Os mais Recentes Recursos</h4>
                        </div>
                    </div>

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Trabalhamos com tecnologias recentes e de ponta, não fique para trás!</p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-sites mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Você no Controle</h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">Paineis de gerenciamento e
                            relatórios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients cid-raBhy5nKVj" id="clients-6">


    <div class="container mb-5">
        <div class="media-container-row">
            <div class="col-12 align-center">
                <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">Nossos Clientes</h2>
                <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                    Conheça quem já fez parte da nossa história</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="5">
                <?php
                if(!empty($clientes)){
                    foreach ($clientes as $cliente) {
                        $cliente['imagem'] = json_decode($cliente['imagem'], true)[0]['url'];
                        $tpl->show("clientes_slide", $cliente);
                    }
                }
                ?>
            </div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button"
                   data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button"
                   data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="testimonials1 cid-raBhBYTHhc" id="testimonials1-7">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">Nosso Time</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    Pessoas que entendem o que fazem</h3>
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <?php
            if(!empty($equipe)) {
                foreach ($equipe as $item) {
                    $item['imagem'] = json_decode($item['imagem'], true)[0]['url'];
                    $tpl->show("time", $item);
                }
            }
            ?>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-raBhtPqFRD" id="form4-5">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map">
                    <iframe frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJ2xn1cVOCIZURwFRVDOqwyhA"
                            allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Sem Compromisso!</h2>
                <div>
                    <div class="icon-block pb-3">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Porque o melhor, ainda esta por vir...</h4>
                    </div>

                </div>
                <div>
                    <form class="block mbr-form" method="post">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" id="nome" name="name" data-form-field="Name"
                                       placeholder="Nome *" required="">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" id="telefone" name="phone" data-form-field="Phone"
                                       placeholder="Telefone *" required="">
                            </div>
                            <div class="col-md-12" data-for="email">
                                <input type="text" class="form-control input" id="email" name="email" data-form-field="Email"
                                       placeholder="Email *" required="">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message"
                                          placeholder="Mensagem *" required style="resize:none" id="mensagem"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button href="" type="submit" class="btn btn-primary btn-form display-4">
                                    Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-raBhMxACab" id="footer5-8">

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">

                    <img src="<?= HOME ?>public/assets/images/favicon-195-192x192.png" alt="Mobirise" title="">

                </div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">SOBRE &nbsp; &nbsp; &nbsp;PORTIFÓLIO&nbsp;
                    &nbsp; &nbsp; FAÇA PARTE&nbsp; &nbsp; &nbsp; CONTATO</p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 AG3 - Todos os direitos Reservados</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/ag3tecnologia" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/ag3tecnologia/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/ag3tecnologia" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/ag3tecnologia" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>