<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package threemonkies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,900" rel="stylesheet">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
	<?php wp_head(); ?>

	<script>
		FontAwesomeConfig = { searchPseudoElements: true };

	</script>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-small"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours"></a>
	<div class="header-top">
		<a href="#tour-popup" id="reservation-tour" class="tour-popup-link">
			<i class="fas fa-book"></i>
			<span>
				Reserve Tour
			</span>
		</a>
		<a href="#transportation-popup" id="reservation-shuttle" class="transportation-popup-link">
			<i class="fas fa-car"></i>
			<span>
				Reserve Shuttle
			</span>
		</a>
		<a href="#contact-popup" id="contact" class="contact-popup-link">
			<!-- <i class="fas fa-envelope-open"></i> -->
			<span>
				reservations@3monkiescr.com
			</span>
			<span>
				(506)2668-0074 - (506)2668-0076 <br>
				 US Number: 12134389614
			</span>
		</a>
		<a href="#contact-popup" id="contact-small" class="contact-popup-link">
			<i class="fas fa-envelope-open"></i>
			<span>
				Contact Us
			</span>
			
		</a>
	</div>
	<button id="btn-info" class="btn-info">
	   <i class="fas fa-info"></i>
	</button>
	<button id="btn-menu" class="btn-menu">
	   <i class="fas fa-bars"></i>
	</button>
</header>
<section class="section-right">
	<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="3 Monkies Tours" ></a>

	<?php
	wp_nav_menu(array(
		'theme_location' => 'right',
		'menu_id' => 'menu-right',
		'container' => 'nav',
		'container_class' => 'menu-right',
		'container_id' => '',
		'menu_class' => 'menu-right-ul',
	));
	?>
</section>
