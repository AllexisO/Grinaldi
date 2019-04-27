<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('description'); ?></title>
    <meta name="description">
    <meta name="keywords">
    <!-- Main CSS file -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media quvfffgfgfgfgeries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- HEADER -->
<header id="header">
    <div class="container">
        <div class="row">
            <div id="logotip">
                <a class="logo"><img src="<?php bloginfo('template_url'); ?>/img/rastra2.png" alt="logo" class="img-responsive"></a>
            </div>
            <ul class="langflags lang-menu container"><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0,)); ?></ul>
        </div>
    </div>
    <hr class="hr-color">
    <nav class="navbar st-navbar navbar-default">
        <div class="container">    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Navbar MENU -->
             <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
            <!-- /Navbar MENU/ -->
        </div>
    </nav>
</header>
<!-- /HEADER -->