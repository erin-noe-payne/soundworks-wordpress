<!DOCTYPE html>
<html>
<head>
    <title>Measure Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mods.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
</head>
<body>
<a href="#" class="scrolltop">
    <span>up</span>
</a>
<!-- begins navbar -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand scroller" data-section="body" href="<?php bloginfo( 'url' ); ?>" id="header-logo">
                <img src="<?php bloginfo('template_directory');?>/img/soundworks-logo-small.png" alt="logo"/>
            </a>
            <div class="nav-collapse collapse">

                <?php wp_nav_menu( array( 'theme_location' => 'page',
                'menu_class' => 'nav pull-right',
                'container'=> false,
                ) );

                ?>
            </div>
        </div>
    </div>
</div>
<!-- ends navbar -->