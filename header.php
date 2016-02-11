<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IFSP - Campus Votuporanga</title>

    <link href="<?php bloginfo("template_url"); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Noticia+Text:400,700|Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- header ----------------------------------------->
<header>
    <div id="navBrasil">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 brandNavBrasil">
                    <ul class="list-inline">
                        <li>
                            <a href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/brasil-band.png" class="img-responsive imagemLeft">BRASIL</a>
                        </li>
                        <li>
                            <a href="#">Acesso à informação</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 itensNavBrasil">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Participe</a>
                        </li>
                        <li>
                            <a href="#">Serviços</a>
                        </li>
                        <li>
                            <a href="#">Legislação</a>
                        </li>
                        <li>
                            <a href="#">Canais</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="identificacao">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/logo-ifsp-vtp.png" class="img-responsive imagemLeft" alt="IFSP - Campus Votuporanga">
                </div>
                <div class="col-lg-5">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/facebook.png" class="img-responsive imagemLeft" alt="Facebook">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/youtube.png" class="img-responsive imagemLeft" alt="youtube">
                    <form class="form-inline">
                        <input type="search" class="form-control input-sm" id="buscar" placeholder="Buscar...">
                        <button type="submit" class="fa fa-search btn btn-xs"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav id="navPrincipal" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuPrincipal">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <?php
                    wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </div>


        </div>
    </nav>
</header>
