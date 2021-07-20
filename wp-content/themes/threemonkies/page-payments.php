<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Payments
 * @package threemonkies
 */

get_header();
?>

	<div class="main">
		 <div class="banner">
              <div class="banner-container">
                
                
              </div> 
              
          </div>
			<?php
		while (have_posts()) :
			the_post();

		get_template_part('template-parts/content', 'page');

		
		endwhile; // End of the loop.
		?>
		<div>
			<?php dynamic_sidebar( 'paypal-widget' ); ?>
		</div>
		
		
	</div><!-- #main -->


<?php
//get_sidebar();
get_footer();
