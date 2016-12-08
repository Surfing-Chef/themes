<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Surfing-Chef
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Underscores based normalize.css -->
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/normalize.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'surfing_chef' ); ?></a>

	<!-- MASTHEAD -->
	<header id="masthead" class="site-header row" role="banner">

		<!-- SITE NAVIGATION -->
		<nav class="main-navigation navbar navbar-inverse navbar-fixed-top clearfix" role="navigation">

			<!-- SITE BRANDING within the top navbar -->
			<div class="site-branding col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				//$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div>
			<!-- END SITE BRANDING -->

			<div class="navholder col-md-6 col-sm-6 col-xs-6">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<!-- link back to top of page -->
					<!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		<!-- END SITE NAVIGATION -->

	</header><!-- #masthead -->

	<div id="content" class="site-content row">
