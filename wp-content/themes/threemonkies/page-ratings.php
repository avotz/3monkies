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
 * Template Name: Page Ratings
 * @package threemonkies
 */

$rate = $_GET['rate'];
if($rate > 5) {
	$rate = 5;
} elseif($rate < 1) {
	$rate = 1;
}
get_header('ratings');

?>
<div class="main">
	<h3>You're writing a review for 3 Monkeys Tours & Transportation</h3>
	<div>
		
		<?php for ($i = 1; $i <= $rate; $i++) : ?>
		
			<label for="rate<?= $i ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6" style="color:#f1c40f;">
  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
</svg>
</label>
		<?php endfor; ?>
		<?php for ($i = 1; $i <= (5-$rate); $i++) : ?>
		
		<label for="rate<?= $i ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="color:#f1c40f;">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
</svg>

<?php endfor; ?>
	</div>

	<?= do_shortcode('[contact-form-7 id="5b4682a" title="Rating Form"]'); ?>
</div><!-- #main -->

<script>
	
	document.querySelector('.wpcf7-form input[name="rate"]').value = '<?= $rate ?>';
	// form.addEventListener('submit', function(e) {
	// 	let rating = document.querySelector('.wpcf7-form input[name="rate"]').value;
	// 	if (rating === '') {
	// 		e.preventDefault();
	// 		alert('Please select a rating');
	// 	}
	// });
</script>
<?php
//get_sidebar();
get_footer('ratings');
