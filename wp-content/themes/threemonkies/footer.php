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
						<a href="https://www.facebook.com/3monkiestourscostarica" class="fb" target="_blank" rel="noreferrer"><i class="fab fa-facebook"></i></a>
						<a href="https://plus.google.com/b/112586289525728866642/+3monkiescr/about?gmbpt=true&hl=en" class="gp" target="_blank" rel="noreferrer"><i class="fab fa-google-plus"></i></a>
						<a href="https://www.youtube.com/channel/UChJaQ_6UN6FO6VTOt7aymZQ" class="yt"><i class="fab fa-youtube" target="_blank" ></i></a>
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
         <h2>Reserve Tours</h2>
         <?php echo do_shortcode('[contact-form-7 id="32" title="Book Tour"]'); ?>
              
        
    </div>
	<div id="transportation-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <h2>Reserve Transportation</h2>
         <?php echo do_shortcode('[contact-form-7 id="33" title="Book Transportation"]'); ?>
              
        
    </div>
	<div id="contact-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <h2>Contact Us</h2>
         <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form"]'); ?>
              
        
    </div>
	


<?php wp_footer(); ?>

</body>
</html>
