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
				<a href="https://www.youtube.com/channel/UChJaQ_6UN6FO6VTOt7aymZQ" class="yt"><i class="fab fa-youtube" target="_blank"></i></a>
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
	<div class="membrete"></div>

</div>
<div id="transportation-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2>Reserve Transportation <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="33" title="Book Transportation"]'); ?>
	<div class="membrete"></div>


</div>
<div id="contact-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
	<h2>Contact Us <img src="<?php echo get_template_directory_uri(); ?>/img/logo-faces.png" alt="3 Monkies Tours" style="position: absolute;right: 35px;top: 5px;"></h2>
	<?php echo do_shortcode('[contact-form-7 id="31" title="Contact form"]'); ?>
	<div class="membrete"></div>

</div>


<div id="smart-button-container">
		<div style="text-align: center"><label for="description"> </label><input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
		<p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
		<div style="text-align: center"><label for="amount"> </label><input name="amountInput" type="number" id="amount" value=""><span> USD</span></div>
		<p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
		<div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value=""></div>
		<p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
		<div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
	</div>
	<script src="https://www.paypal.com/sdk/js?client-id=AeHyejoa9M1udO7Qk1AznenkuM0fXKSD9iPWGTjyZJP_PFxj24PBKZZ9gDXg_2smtsaZLhPLkBAwZ5lb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
	<script>
		function initPayPalButton() {
			var description = document.querySelector('#smart-button-container #description');
			var amount = document.querySelector('#smart-button-container #amount');
			var descriptionError = document.querySelector('#smart-button-container #descriptionError');
			var priceError = document.querySelector('#smart-button-container #priceLabelError');
			var invoiceid = document.querySelector('#smart-button-container #invoiceid');
			var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
			var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

			var elArr = [description, amount];

			if (invoiceidDiv.firstChild.innerHTML.length > 1) {
				invoiceidDiv.style.display = "block";
			}

			var purchase_units = [];
			purchase_units[0] = {};
			purchase_units[0].amount = {};

			function validate(event) {
				return event.value.length > 0;
			}

			paypal.Buttons({
				style: {
					color: 'gold',
					shape: 'rect',
					label: 'pay',
					layout: 'vertical',

				},

				onInit: function(data, actions) {
					actions.disable();

					if (invoiceidDiv.style.display === "block") {
						elArr.push(invoiceid);
					}

					elArr.forEach(function(item) {
						item.addEventListener('keyup', function(event) {
							var result = elArr.every(validate);
							if (result) {
								actions.enable();
							} else {
								actions.disable();
							}
						});
					});
				},

				onClick: function() {
					if (description.value.length < 1) {
						descriptionError.style.visibility = "visible";
					} else {
						descriptionError.style.visibility = "hidden";
					}

					if (amount.value.length < 1) {
						priceError.style.visibility = "visible";
					} else {
						priceError.style.visibility = "hidden";
					}

					if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
						invoiceidError.style.visibility = "visible";
					} else {
						invoiceidError.style.visibility = "hidden";
					}

					purchase_units[0].description = description.value;
					purchase_units[0].amount.value = amount.value;

					if (invoiceid.value !== '') {
						purchase_units[0].invoice_id = invoiceid.value;
					}
				},

				createOrder: function(data, actions) {
					return actions.order.create({
						purchase_units: purchase_units,
					});
				},

				onApprove: function(data, actions) {
					return actions.order.capture().then(function(details) {
						alert('Transaction completed by ' + details.payer.name.given_name + '!');
					});
				},

				onError: function(err) {
					console.log(err);
				}
			}).render('#paypal-button-container');
		}
		initPayPalButton();
	</script>
<?php wp_footer(); ?>

</body>

</html>