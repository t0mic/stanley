<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stanley
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<title>STANLEY - Free Bootstrap Theme </title>

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="assets/css/main.css" rel="stylesheet">

<script src="<?php bloginfo('template_directory'); ?>/https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/hover.zoom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/hover.zoom.conf.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stanley' ); ?></a>

	<!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">STANLEY</a>
        </div>
        <?php
            wp_nav_menu( array(
                'theme_location'	=> 'primary',
                'container'	=>	'div',
                'container_class'	=>	'navbar-collapse collapse',
                'menu_class'	=> 'nav navbar-nav navbar-right'
                ));
        ?>
      </div>
    </div>
