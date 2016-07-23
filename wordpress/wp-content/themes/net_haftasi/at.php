<?php

/**
 * Shape functions and definitions
 *
 * @package net-haftasi
 * @since net_haftasi 1.0
 */
?>

<!DOCTYPE html>
		<html lang="tr">
		<title>internethaftasi.org.tr</title>
<head>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>§
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<?php wp_head(); ?>

</head>
	<body>
			<header class="header">


					<?php	wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu-container', 'menu_class' => 'nav nav-tabs header-menu ', 'show_home' => false ) ); ?>

					<?php	wp_nav_menu( array( 'theme_location' => 'years-menu', 'container_class' => 'years-menu-container', 'menu_class' => 'nav nav-tabs years-menu nav-justified', 'show_home' => false ) ); ?>




          <nav class="navbar navbar-default nav-bar-color">
            <div class="container-fluid">
              <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">internethaftasi.org.tr</a>
              </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container_class' => '',
                    'menu_class' => 'nav navbar-nav',
                    'show_home' => 'false'));
          ?>

                    <ul class="nav navbar-nav navbar-right">

      </ul>
    </div><!-- /.navbar-collapse -->

            </div>
          </nav>
			</header><!-- .header -->
