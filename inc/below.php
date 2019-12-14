
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->

			<!-- Contact section -->
			<section class="contact-section overflow qpid_login_site js_contact_form_section">
				<div class="container row">

					<div id="contact" class="contact-card fill-dark column large-6 large-offset-3 medium-8 medium-offset-2 small-12 text-center">
						<div class="title h5">Get in Touch</div>
						<a href="tel:+916366448688" class="phone h2 block">Call +91 63664 48688</a>

						<div class="or"><span>OR</span></div>

						<div class="contact-form">
							<!-- Main form -->
							<form class="js_contact_form ga_form" data-c="<?php echo $urlSlug ?>-enquire-now">
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Name</label>
									<input class="form-field input-large block" type="text" name="name" placeholder="Enter Full Name" data-name="name">
								</div>
								<!-- <div class="form-row space-min-bottom">
									<label class="visuallyhidden">Email</label>
									<input class="form-field input-large block js_email" type="email" placeholder="Email">
								</div> -->
								<div class="phone-trap phone-number form-row space-min-bottom">
									<label class="visuallyhidden">Mobile Number</label>
									<div class="block prefix-group" style="position: relative">
										<select class="form-field input-large block js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="prefix js_phone_country_code_label button button-large input-text fill-dark" value="+91" style="pointer-events: none; width: 100%;">
									</div>
									<input class="form-field input-large block" type="tel" name="phone-number" placeholder="Enter Mobile Number">
								</div>
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Budget</label>
									<select class="form-field input-large block" name="budget">
										<option selected="" disabled="" value="" data-name="budget">Select Budget</option>
										<option>Around Rs.30 Lakhs</option>
										<option>Around Rs.60 Lakhs</option>
										<option>Around Rs.90 Lakhs</option>
									</select>
								</div>
								<div class="form-row space-quarter-top">
									<label class="visuallyhidden">Enquire Now</label>
									<input class="button button-large block" type="submit" value="Enquire Now">
								</div>
							</form>

							<!-- OTP form -->
							<form class="js_otp_form" style="display: none;">
								<div class="form-row columns small-12 _medium-6">
									<div class="otp-trap">
										<label class="block text-left">
											<span class="label inline text-neutral-1 text-uppercase">Enter the OTP</span>
											<input class="otp block" type="text" name="otp">
										</label>
										<label class="submit block">
											<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
											<button class="button button-large block">Submit</button>
										</label>
									</div>
								</div>
								<br>
								<div class="form-row columns small-12 clearfix">
									<div class="label strong text-neutral-1 opacity-50 text-uppercase inline-middle cursor-pointer float-left" tabindex="-1">Re-send OTP</div>
									<div class="label strong text-neutral-1 opacity-50 text-uppercase inline-middle cursor-pointer float-right" tabindex="-1">Enter different number</div>
								</div>
							</form>

						</div>

					</div>

				</div>
			</section>


			<!-- Quadros Section -->
			<section class="quadros-section">
				<!-- quadros image -->
				<!-- <img class="quadros-image" src="/media/quadros-photo.jpg<?php echo $ver?>"> -->
				<div class="quadros"></div>
				<div class="name-tag">
					<div class="tag">
						<div class="h3">Juliet Quadros</div>
						<div class="label">Managing Director</div>
					</div>
					<div class="tag">
						<div class="h3">Leslie Quadros</div>
						<div class="label">Marketing Director</div>
					</div>
					<div class="tag">
						<div class="h3">Leo Quadros</div>
						<div class="label">Chairman</div>
					</div>
				</div>
			</section><!-- End: Quadros Section -->

			<!-- Address Section -->
			<section class="address-section">
				<div class="container row">
					<div class="column xlarge-3 large-offset-3 medium-4 medium-offset-2 small-12">
						<img class="logo-address" src="/media/logo-large.svg<?php echo $ver?>">
						<div class="address">
							Near Nandi Hills, Melekote Cross, Tubugere Hobli, Doddaballapura Taluk,<br>
							Bangalore - 561205<br>
							info@regencyblr.com<br>
							<!-- +91 98450 77177<br>
							+91 93439 41003 -->
						</div>
					</div>
					<div class="column medium-4 medium-offset-1 small-12">
						<div class="title h5">City Office</div>
						<div class="address">
							Bangalore Regency Developers Pvt. Ltd.<br>
							13/2, El-Shaddai, Beside Assisi Church,<br>
							Hennur Road,<br>
							Bangalore - 560084 <br>
							<!-- +91 80 2549 9780-84<br> -->
							<!-- +91 9343 941001 -->
							<!-- +91 98450 77177 -->
						</div>
					</div>
				</div>
			</section><!-- End: Address Section -->

			<!-- Footer Section -->
			<section class="footer-section ga_footer_links">
				<div class="container row">
					<div class="column xlarge-5 large-6 large-offset-1 medium-6 small-12">
						<div class="title h5">The Canterbury Story</div>
						<!-- video embed -->
						<div class="video-embed js_video_embed" data-src="RWGrlxLzlik">
							<div class="video-loading-indicator"></div>
						</div>
					</div>
					<div class="column large-2 medium-4 medium-offset-1 small-12">
						<div class="title h5">Quick Links</div>
						<!-- Quick Links -->
						<div class="quick-links">
							<a href="/buy" class="link label" data-ga-footer-src="Footer - Buy">Buy a plot</a>
							<a href="/build" class="link label" data-ga-footer-src="Footer - Build">Build a villa</a>
							<a href="/book" class="link label" data-ga-footer-src="Footer - Book">Book a getaway</a>
							<a href="/host" class="link label" data-ga-footer-src="Footer - Host">Host an event</a>
							<a href="/faqs" class="link label" data-ga-footer-src="Footer - Faqs">FAQ<span class="text-lowercase">s</span></a>
							<a href="/nri" class="link label" data-ga-footer-src="Footer - NRI">NRI corner</a>
							<a href="#contact" class="link label" data-ga-footer-src="Footer - Contact">Contact Us</a>
							<!-- <a href="/download/masterplan.pdf<?php echo $ver?>" target="_blank" class="link label">PDF Masterplan</a> -->
						</div>
					</div>
			</section><!-- End: Footer Section -->

			<!-- Version Number -->
			<div class="version-section">
				<div class="container">version 2.0.1
				</div>
			</div><!-- End: Version Number -->

		</div> <!-- END : Page Content -->


		<!-- Lazaro Signature -->
		<?php lazaro_signature(); ?>
		<!-- END : Lazaro Signature -->

	</div><!-- END : Page Wrapper -->

	<?php require_once 'modals.php' ?>

	<!--  ☠  MARKUP ENDS HERE  ☠  -->

	<?php // lazaro_disclaimer(); ?>









	<!-- JS Modules -->
	<script type="text/javascript" src="/js/modules/utils.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/device-charge.js<?= $ver ?>"></script> -->
	<script type="text/javascript" src="/js/modules/menu.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/video_embed.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/modal_box.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/form.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/disclaimer.js"></script> -->

	<script type="text/javascript" src="/js/modules/revealer.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/plugins/slick/slick.js"></script>

	<script type="text/javascript" src="/js/modules/cupid/utils.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/cupid/user.js<?= $ver ?>"></script>

	<script type="text/javascript" src="/js/login-prompts.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/forms.js<?= $ver ?>"></script>

	<script type="text/javascript">

		/*
		 *
		 * Log the Person's Website Visit
		 *
		 */
		$( function () {

			var user = __CUPID.utils.getUser();
			if ( user ) {
				setTimeout( function () {
					__CUPID.utils.getAnalyticsId()
						.then( function ( deviceId ) {
							user.hasDeviceId( deviceId );
							var where = window.location.pathname;
							user.isOnWebsite( where );
						} )
				}, 1500 );
			}

		} );

	</script>

	<!-- Other Modules -->
	<?php // require __DIR__ . '/inc/can-user-hover.php' ?>


	<?php
		/*
		 * Arbitrary Code ( Bottom of Body )
		 */
		echo getContent( '', 'arbitrary_code_body_bottom' );
	?>

</body>

</html>
