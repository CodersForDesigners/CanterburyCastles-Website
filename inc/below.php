
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->

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
					<div class="column large-3 large-offset-3 medium-4 medium-offset-2 small-10 small-offset-1">
						<img class="logo-address" src="/media/logo-large.svg<?php echo $ver?>">
						<div class="address">
							Near Nandi Hills, Melekote Cross, Tubugere Hobli, Doddaballapura Taluk,<br>
							Bangalore - 561205<br>
							info@regencyblr.com<br>
							<!-- +91 98450 77177<br>
							+91 93439 41003 -->
						</div>
					</div>
					<div class="column large-3 medium-4 medium-offset-1  small-10 small-offset-1">
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
					<div class="column large-2 large-offset-3 medium-4 medium-offset-2 small-10 small-offset-1">
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
							<a href="/download/masterplan.pdf<?php echo $ver?>" target="_blank" class="link label">PDF Masterplan</a>
						</div>
					</div>
					<div class="column large-4 large-offset-0 medium-4 medium-offset-1 small-10 small-offset-1">
						<div class="title h5">The Canterbury Story</div>
						<!-- video -->
						<!-- <img src="/media/thumb-canterbury-story.png<?php echo $ver?>"> -->
						<div class="youtube_embed" data-src="https://www.youtube.com/embed/kkkDjjT0Ygo?rel=0&showinfo=0">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen data-ga-footer-src="Footer - Leslie"></iframe>
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

	<?php lazaro_disclaimer(); ?>









	<!-- JS Modules -->
	<script type="text/javascript" src="/js/modules/utils.js"></script>
	<!-- <script type="text/javascript" src="/js/modules/device-charge.js"></script> -->
	<script type="text/javascript" src="/js/modules/video_embed.js"></script>
	<script type="text/javascript" src="/js/modules/modal_box.js"></script>
	<script type="text/javascript" src="/js/modules/form.js"></script>
	<script type="text/javascript" src="/js/modules/disclaimer.js"></script>

	<script type="text/javascript">

		$( function () {
			//
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
