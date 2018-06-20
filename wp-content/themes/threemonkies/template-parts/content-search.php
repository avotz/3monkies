<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package threemonkies
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 

		if (has_post_thumbnail()) :

		$id = get_post_thumbnail_id($post->ID);
		$big_url = wp_get_attachment_image_src($id, 'item-gallery', true);
		$thumb_url = wp_get_attachment_image_src($id, 'large', true);
	?>
					
					<?php if (wp_is_mobile()) { ?>
						<figure class="post-banner blog-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');">
						<?php if (!is_single()) : ?>
							<a href="<?php echo get_permalink() ?>"></a>
						
						<?php endif; ?>
					</figure>

				<?php 
		} else { ?>
					<figure class="post-banner blog-banner" style="background-image: url('<?php echo $big_url[0] ?>');">
						<?php if (!is_single()) : ?>
							<a href="<?php echo get_permalink() ?>"></a>
						
						<?php endif; ?>
					</figure>
					<?php 
			} ?>

		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			threemonkies_posted_on();
			threemonkies_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php /*threemonkies_post_thumbnail();*/ ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php threemonkies_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
