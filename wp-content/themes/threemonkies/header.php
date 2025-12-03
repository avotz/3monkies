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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,900" rel="stylesheet">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon_32x32.ico">
	<meta name="theme-color" content="#ffffff" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="3monkiescr">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/icon-152x152.png">
	<?php wp_head(); ?>

	<script>
		FontAwesomeConfig = {
			searchPseudoElements: true
		};
	</script>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-small"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours"></a>
		<div class="header-top">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="3 Monkies Tours"></a>
		</div>
		<div class="right-buttons">
			<div href="#" id="btn-info" class="btn-info">
				<i class="fas fa-envelope-open"></i>
				<span>
					Contact Us
				</span>
				<span class="contact-info">
					<a href="mailto::reservations@3monkiescr.com" id="contact-email">
						<!-- <i class="fas fa-envelope"></i> -->
						<span style="color: #fff;">
							reservations@3monkiescr.com
						</span>
					</a>

					<!-- <a href="tel:50687199020" id="contact-phone">
						
						<span>
							+(506) 87199020
						</span>
					</a> -->
				</span>

			</div>


			<a href="#transportation-popup" id="reservation-shuttle" class="transportation-popup-link">
				<i class="fas fa-car"></i>
				<span>
					Reserve Shuttle
				</span>
			</a>
			<a href="#tour-popup" id="reservation-tour" class="tour-popup-link">
				<i class="fas fa-book"></i>
				<span>
					Reserve Tour
				</span>
			</a>


		</div>
		<!-- 	<button id="btn-info" class="btn-info" role="button" aria-label="info">
	   <i class="fas fa-info"></i>
	</button> -->
		<button id="btn-menu" class="btn-menu" role="button" aria-label="info">
			<i class="fas fa-bars"></i>
		</button>
	</header>
	<section class="section-right">

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
		<div class="small-right-buttons">
			<div href="#" id="btn-info" class="btn-info">
				
				<span class="contact-info">
					<a href="mailto::reservations@3monkiescr.com" id="contact-email">
						<!-- <i class="fas fa-envelope"></i> -->
						<span>
							reservations@3monkiescr.com
						</span>
					</a>

					<a href="tel:50687199020" id="contact-phone">
						<!-- <i class="fas fa-phone"></i> -->
						<span>
							+(506) 87199020
						</span>
					</a>
				</span>

			</div>


			<a href="#transportation-popup" id="reservation-shuttle" class="transportation-popup-link">
				
				<span>
					Reserve Shuttle
				</span>
			</a>
			<a href="#tour-popup" id="reservation-tour" class="tour-popup-link">
			
				<span>
					Reserve Tour
				</span>
			</a>


		</div>
	</section>