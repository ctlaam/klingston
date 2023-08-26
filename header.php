<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klingston
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'klingston'); ?></a>

		<header id="masthead" class="site-header">
			<div id="header">
				<div class="container d-flex">
					<div class="logo">
						<img src="
					https://klingeltone.mobi/wp-content/themes/klingeltone/assets/img/logo.png" height="60" alt="">
					</div>
					<nav class="navbar navbar-expand-lg navbar-light w-100 justify-content-end position-relative ">
						<button class=" position-absolute navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse on-mobile " id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item ml-2 active">
									<a class="nav-link h3" href="#">Neue Klingeltöne </a>
								</li>
								<li class="nav-item ml-2 active">
									<a class="nav-link h3" href="#">Beste Klingeltöne</a>
								</li>
								<li class="nav-item ml-2 active">
									<a class="nav-link h3" href="#">Top Klingeltöne </a>
								</li>
							</ul>
						</div>
				</div>
				</nav>
			</div>
		</header><!-- #masthead -->