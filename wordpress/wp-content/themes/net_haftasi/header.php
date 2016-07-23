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


				          <nav class="navbar navbar-default header-menu">
				            <div class="container">
				              <div class="navbar-header">

				              </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="navbar">

				      <?php wp_nav_menu(array(
				                    'theme_location' => 'header-menu-left',
				                    'container_class' => 'header-menu-left',
				                    'menu_class' => 'nav navbar-nav',
				                    'show_home' => 'false'));
				          ?>

				                    <ul class="nav navbar-nav navbar-right">
										<?php /*wp_nav_menu(array(
													  'theme_location' => 'header-menu-right',
													  'container_class' => 'header-menu-right',
													  'menu_class' => 'nav navbar-nav',
													  'link_after'  => '<img src=s>',
													  'show_home' => 'false'));*/

												$menu = wp_get_nav_menu_items('header-menu-right');
												$p = get_site_url();
												foreach ($menu as $m) {
													$u = $m->url;
													$t = $m->title;
													echo "
													<li> <a target='_blank' href='${u}'><img class='menu-icon' src='{$p}/wp-content/themes/net_haftasi/static/img/icons/{$t}.png'></a>
													";
												}

											?>
				      				</ul>
				    </div><!-- /.navbar-collapse -->

				            </div>


				          </nav>

				          <nav class="navbar navbar-default nav-bar-color main-menu">
				            <div class="container">
				              <div class="navbar-header">
  		              			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						  		<span class="sr-only">Toggle navigation</span>
						  	    <span class="icon-bar"></span>
						  	    <span class="icon-bar"></span>
						  	    <span class="icon-bar"></span>
						  	  </button>
						    </div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<a href="http://bt-stk.org.tr" ><img class="stk-logo" src="<?php echo get_site_url(); ?>/wp-content/themes/net_haftasi/static/img/stk.gif" alt="" /></a>
								<a href="http://internethaftasi.org.tr" ><img class="logo-in-menu" src="<?php echo get_site_url(); ?>/wp-content/themes/net_haftasi/static/img/logo.png" alt="" /></a>

						      	<ul class="nav navbar-nav navbar-right">
						  			<?php wp_nav_menu(array(
						  			  'theme_location' => 'main-menu',
						  			  'container_class' => 'header-menu',
						  			  'menu_class' => 'nav navbar-nav',
						  			  'show_home' => 'false'));
						  			?>
						  				</ul>
						  	    </div><!-- /.navbar-collapse -->

						  	    </div>
				    </nav>


			</header><!-- .header -->
