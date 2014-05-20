<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title();
        }
        ?>
    </title>


    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--  Font des menus du jour  -->
    <link href='http://fonts.googleapis.com/css?family=Zeyada&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Leckerli+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

    <script src="<?php bloginfo('template_url'); ?>/bower_components/modernizr/modernizr.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bower_components/webshim/js-webshim/dev/polyfiller.js"></script>


<!--    <script>
        // Polyfill all unsupported features
        $.webshims.polyfill();
    </script>
-->
    <?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">Vous utilisez un navigateur <strong>périmé</strong>. SVP <a href="http://browsehappy.com/">mettez à jour votre navigateur</a> pour améliorer votre expérience.</p>
<![endif]-->

<div id="page" class="wrap hfeed site">
    <header id="masthead" class="site-header" role="banner">

        <nav class="site-navigation main-navigation navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu-collapse">
                    <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
                </div>
            </div>
        </nav>

        <br>
    </header>
    <div id="main" class="site-main">