
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->

			<!-- Contact section -->
			<section class="contact-section overflow qpid_login_site js_contact_form_section">
				<div class="container row">

					<div id="contact" class="contact-card fill-dark column large-6 large-offset-3 medium-8 medium-offset-2 small-12 text-center">
						<div class="title h5">Get in Touch</div>
						<a href="tel:+917942531561" class="phone h2 block">Call +91 7942-531561</a>

						<div class="or"><span>OR</span></div>

						<div class="contact-form">
							<!-- Main form -->
							<form class="js_contact_form ga_form" data-c="<?php echo $urlSlug ?? 'buy' ?>-enquire-now">
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Name</label>
									<input class="form-field input-large block" type="text" name="name" placeholder="Name" data-name="name">
								</div>
								<div class="phone-trap phone-number form-row space-min-bottom">
									<label class="visuallyhidden">Mobile Number</label>
									<div class="block prefix-group" style="position: relative">
										<select class="form-field input-large block js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="prefix js_phone_country_code_label button button-large input-text fill-dark" value="+91" style="pointer-events: none; width: 100%;" readonly>
									</div>
									<input class="form-field input-large block" type="tel" name="phone-number" placeholder="Mobile Number">
								</div>
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Email</label>
									<input class="form-field input-large block js_email" type="email" placeholder="Email">
								</div>
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Budget</label>
									<select class="form-field input-large block" name="budget">
										<option selected="" disabled="" value="" data-name="budget">Select Budget</option>
										<option>Around 30 Lakhs</option>
										<option>Around 60 Lakhs</option>
										<option>Around 90 Lakhs</option>
									</select>
								</div>
								<div class="form-row space-quarter-top">
									<label class="visuallyhidden">Enquire Now</label>
									<button class="button button-large block" type="submit">Enquire Now</button>
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
	<script type="text/javascript" src="/plugins/base64/base64.js__v3.7.2.min.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/plugins/js-cookie/js-cookie__v3.0.1.min.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/utils.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/device-charge.js<?= $ver ?>"></script> -->
	<script type="text/javascript" src="/js/modules/menu.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/video_embed.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/modals.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/disclaimer.js"></script> -->

	<script type="text/javascript" src="/js/modules/revealer.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/plugins/slick/slick.js"></script>

	<script type="text/javascript" src="/js/modules/cupid.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/cupid-extensions.js<?= $ver ?>"></script>

	<script type="text/javascript" src="/js/modules/forms.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/form-utils.js<?= $ver ?>"></script>

	<script type="text/javascript" src="/js/pages/contact-form.js<?= $ver ?>"></script>

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
