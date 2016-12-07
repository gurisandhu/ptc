<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<!-- [if IE]>
		<script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]
		<style type="text/css">
		.gradient {
		filter: none;
		}
		</style>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<!-- <body class="show-loader"> -->
<body>
	<section class="header">
		<header>
			<div class="container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="PTC Logo" title="Professional Teachers' Council NSW"></a>
				</div>
				<div class="desktop-menu desktop">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>
					<div class="login">
						<a href="<?php echo esc_url( home_url( '' ) ); ?>/schools/">PTC Plus</a>
					</div>
					<div class="search show-search">
						<i class="fa fa-search"></i>
					</div>
				</div>
				<div class="responsive-menu responsive">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>
					<div class="login">
						<a href="<?php echo esc_url( home_url( '' ) ); ?>/schools/">PTC Plus</a>
					</div>
					<div class="search">
						<i class="fa fa-search"></i>
					</div>
				</div>
			</div>
		</header>
		<section class="toggle-form desktop search-form">
				<div class="container">
					<form class="row" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input class="row" type="text" value="" name="s" id="s" placeholder="Start typing ..." />
						<summary>Press enter</summary>
					</form>
				</div>
		</section>
	</section>
	