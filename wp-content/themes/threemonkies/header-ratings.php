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

	<style>
		.size-6 {
			width: 2em;
			height: 2em;
		}

		.wpcf7-spinner {
			display: block;
		}

		.wpcf7-not-valid-tip {
			color: red;
			display: block;
		}

		.screen-reader-response {
			display: none;
		}

		.header {
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #f1f1f1;
		}

		.main {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 0 auto;
		}

		.main h3 {
			text-align: center;
		}

		.main div {
			text-align: center;
		}

		.main form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}


		.main form textarea {
			margin: 10px;
			width: 100%;
			height: 100px;
		}

		.main form label {
			margin: 10px;
		}


		.main form input[type="submit"] {
			margin: 10px;
			cursor: pointer;
		}

		.main form input[type="submit"]:hover {
			background-color: #f1f1f1;
		}
	</style>
</head>

<body <?php body_class(); ?>>


	<header class="header">
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="3 Monkies CR">
		</div>
	</header>