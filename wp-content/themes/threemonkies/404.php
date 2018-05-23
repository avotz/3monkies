<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package threemonkies
 */

get_header();
?>
	<div class="main">

          <div class="banner">
             
          </div>
         <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'threemonkies'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below?', 'threemonkies'); ?></p>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="btn success">Return Home</a>
					<?php
				//get_search_form();

				//the_widget('WP_Widget_Recent_Posts');
				?>

				

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

         
       </div>
	
<?php
get_footer();
