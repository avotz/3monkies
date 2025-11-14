<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package threemonkies
 */

?>

<div class="footer">
	<div class="footer-container flex-container-sb">
		<div class="footer-left flex-container-sb">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer',
				'menu_id' => 'footer-menu',
				'container' => 'nav',
				'container_class' => 'footer-menu',
				'container_id' => '',
				'menu_class' => 'footer-menu-ul',
			));
			?>
			<div class="footer-social">
				<a href="https://www.facebook.com/profile.php?id=61561087587665" class="" target="_blank" rel="noreferrer"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/threemonkiescr" class="" target="_blank" rel="noreferrer"><i class="fab fa-instagram"></i></a>
				<a href="https://www.tripadvisor.com/Attraction_Review-g309240-d3359599-Reviews-3_Monkies_Day_Tours-Liberia_Province_of_Guanacaste.html" class="ta" target="_blank" rel="noreferrer"><img height="25" width="25" src="<?php echo get_template_directory_uri(); ?>/img/tripadvisor-logo-6-1.png" style="filter:brightness(5) invert(0) saturate(0);" /></a>
				<a href="https://www.youtube.com/channel/UChJaQ_6UN6FO6VTOt7aymZQ" class=""><i class="fab fa-youtube" target="_blank"></i></a>
			</div>
			<div class="footer-partners">
				<a href="#" class="ict">ICT</a>
				<a href="#" class="canatur">Canatur</a>
				<a href="#" class="calitur">Calitur</a>
				<a href="#" class="ts">Turismo Sostenible</a>
				<a href="#" class="code-conduct">Code of conduct</a>
			</div>
		</div>

		<p class="copyright">Copyright © 2013-<?php echo date('Y') ?> | Avotz</p>

	</div>

</div>

<div id="tour-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2>Reserve Tours <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="32" title="Book Tour"]'); ?>
	<!-- <div class="membrete"></div> -->
	
</div>
<div id="transportation-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2>Reserve Transportation <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="33" title="Book Transportation"]'); ?>
	<!-- <div class="membrete"></div> -->


</div>
<div id="wedding-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2><span class="wedding-name">Reserve Wedding</span> Transportation <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="3752" title="Book Wedding"]'); ?>
	<!-- <div class="membrete"></div> -->


</div>
<div id="contact-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2>Contact Us <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="31" title="Contact form"]'); ?>
	<!-- <div class="membrete"></div> -->

</div>


	
<?php wp_footer(); ?>

</body>

</html>