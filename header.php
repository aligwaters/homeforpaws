<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?> <!-- this is the code necessary to see the Name of our Company on the home page -->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		
		
		</div><!-- .site-branding -->
<div class="menu-box">
  
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
</div>		

<!-- Code inspired by http://cssdeck.com/labs/pure-css3-slideshow-without-page-jump -->

<!-- Slider The following code leads to the slider on our home page -->

<h2>Adopt a Pet</h2>
<ul id="css3-slider">
	<li>
		<input type="radio" id="s1" name="num" />
		<label for="s1">1</label>
		<a href="javascript:void(0);"> <!-- this allows us to have a working slider without the use of Java -->
			<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/blackslide.jpg" />
		</a>
	</li>
	<li>
		<input type="radio" id="s2" name="num" /> <!-- each image on our slider is labeled differently and has a different id associated with it fo css -->
		<label for="s2">2</label>
		<a href="javascript:void(0);">
			<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/slidechihuahua.jpg" />
		</a>
	</li>
	<li>
		<input type="radio" id="s3" name="num" />
		<label for="s3">3</label>
		<a href="javascript:void(0);">
			<img src="http://phoenix.sheridanc.on.ca/~ccit3432/wp-content/uploads/2016/03/slidepug.jpg" />

		</a>
	</li>
</ul>


	</header><!-- #masthead -->

	<div id="content" class="site-content">