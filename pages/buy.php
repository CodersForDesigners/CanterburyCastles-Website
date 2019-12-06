<?php
/*
 *
 * This is a sample page you can copy and use as boilerplate for any new page.
 *
 */
require_once __DIR__ . '/../inc/above.php';

// Page-specific preparatory code goes here.

?>



<!-- Buy Page -->
<div class="buy">

	<!-- intro section -->
	<section class="intro-section no-overflow">
		<div class="container">
			<div class="row">
				<div class="column large-3 large-offset-3 medium-4 medium-offset-2 small-10 small-offset-1">
					<div class="title h2 ga_scroll_track">
					977 plots,
					each with fruit &amp; flower bearing trees
					</div>
	 			</div>
				<div class="column large-3 large-offset-1 medium-4 medium-offset-1 small-10 small-offset-1">
					<div class="highlight-line"></div>
					<div class="description h6">
					Plots range from 1200sft to 5000sft, spread over 112 acres. Enjoy trouble-free instant registrations. We are also approved by all major banks, if you are looking to apply for a loan.
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- landscape video section -->
	<section class="landscape-video-section no-overflow">
		<div class="section-video video-embed video-embed-bg js_video_embed js_video_get_player" data-src="6wWQUUrWRgs" data-loop="true" data-autoplay="true" style="padding-top: 33.75%;">
			<div class="video-embed-placeholder" style="background-image: url( '/media/video-thumb-1.jpg<?php echo $ver; ?>' );"></div>
			<!-- <div class="video-loading-indicator"></div> -->
		</div>
		<div class="video-overlay">
			<div class="container video-overlay-flex row">
				<span class="caption h2 column large-5 large-offset-5 medium-6 medium-offset-3 small-10 small-offset-1 text-right">100% clear title, 112 acre BMRDA approved layout</span>
			</div>
		</div>
	</section>


	<!-- investment section -->
	<section class="investment-section local-modal qpid_login_site js_investment_section">
		<div class="container row">
			<div class="column large-4 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="title h2">
					What is the investment potential in this region?
				</div>
				<div class="highlight-line"></div>
				<div class="description h6">
					Get a quick retrospective look at Canterbury’s genesis back in 1995, and how it’s grown in value as the city changed over the last 21 years.
				</div>
			</div>
			<div class="column large-5 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<!-- video -->
				<div class="investment-video">
					<!-- video embed -->
					<div class="video-embed js_video_embed" data-src="RWGrlxLzlik">
						<div class="video-loading-indicator"></div>
					</div>
				</div>
				<div class="social-buttons text-left">
					<a target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D-KCFEJR2_rY','name','width=600,height=400')"><img width="35" src="/media/social-facebook.svg<?php echo $ver?>"></a>
					<a target="popup" onclick="window.open('https://twitter.com/intent/tweet?url=https%3A//youtu.be/-KCFEJR2_rY&related=YouTube,YouTubeTrends,YTCreators','name','width=600,height=400')"><img width="35" src="/media/social-twitter.svg<?php echo $ver?>"></a>
					<a target="popup" onclick="window.open('https://plus.google.com/u/0/share?url=https%3A//www.youtube.com/attribution_link%3Fa%3DjU5IwmSK4rs%26u%3D%252Fwatch%253Fv%253D-KCFEJR2_rY%2526feature%253Dshare&source=yt&hl=en&soc-platform=1&soc-app=130','name','width=600,height=400')"><img width="35" src="/media/social-google.svg<?php echo $ver?>"></a>
					<a target="popup" onclick="window.open('https://www.linkedin.com/shareArticle?source=Youtube&title=The+Canterbury+Story&summary=v1%2E5%2E2+a1%2E5&url=https%3A%2F%2Fwww%2Eyoutube%2Ecom%2Fattribution_link%3Fa%3DuRTPvZRlHqo%26u%3D%252Fwatch%253Fv%253D-KCFEJR2_rY%2526feature%253Dshare','name','width=600,height=400')"><img width="35" src="/media/social-linkedin.svg<?php echo $ver?>"></a>
				</div>
			</div>
		</div>
		<div class="container row action-brochure">
			<div class="column large-5 large-offset-0 medium-6 medium-offset-3 small-10 small-offset-1">
				<img src="/media/action-brochure-mockup.png<?php echo $ver?>">
			</div>
			<div class="info column large-4 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="title h3">
					If you’re in a hurry download a PDF Brochure instead
				</div>
				<a class="button button-large fill-green js_download_brochure" data-c="test-trac-1" target="_blank" data-href="/download/brochure.pdf">Download Now</a>
			</div>
		</div>
		<div class="local-modal-box">
			<!-- Sticky Content -->
			<div class="container">
				<div class="row">
					<div class="form-card fill-dark space-half columns small-12 small-offset-0 medium-6 medium-offset-3 large-4 large-offset-4">
						<!-- Title -->
						<div class="h4 space-half-bottom">Download PDF Brochure</div>
						<!-- Phone Trap form -->
						<form class="js_phone_form">
							<div class="form-row columns small-12" style="position: relative">
								<label><span class="label inline text-neutral-1 text-uppercase">Mobile Number</span></label>
								<div class="phone-trap phone-number">
									<div class="block prefix-group" style="position: relative">
										<select class="js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="input-text prefix js_phone_country_code_label button" value="+91" style="pointer-events: none; width: 100%;">
									</div>
									<input class="phone block" type="text" name="phone-number" placeholder="Enter Mobile Number">
								</div>
							</div>
							<div class="form-row columns small-12" style="position: relative">
								<div class="phone-trap phone-number">
									<label class="submit block">
										<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
										<button class="button block fill-green">Submit</button>
									</label>
								</div>
							</div>
						</form>
						<!-- OTP form -->
						<form class="js_otp_form" style="display: none;">
							<div class="form-row columns small-12">
								<div class="otp-trap">
									<label class="block">
										<span class="label inline text-neutral-1 text-uppercase">Enter the OTP</span>
										<input class="otp block" type="text" name="otp">
									</label>
									<label class="submit block">
										<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
										<button class="button block fill-green">Download</button>
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
					<!-- Local Modal Close Button -->
					<div class="button local-modal-close fill-red js_local_modal_close" style="font-size: 35px;">&times;</div>
				</div>
			</div>
			<!-- End: Sticky Content -->
		</div>
	</section>


	<!-- location section -->
	<section class="location-section no-overflow">
		<div class="location-map"></div>
		<div class="container location-content row">
			<div class="column large-3 large-offset-3 medium-4 medium-offset-2 small-10 small-offset-1">
				<div class="title h2">
				25 minutes to the
				Bangalore International Airport.
				</div>
				</div>
			<div class="column large-3 large-offset-1 medium-4 medium-offset-1 small-10 small-offset-1">
				<div>
				<a class="button button-large fill-green ga_open_google_maps" href="https://goo.gl/maps/f92jxfiWFzz" target="_blank">Open in Google Maps</a>
				</div>
				<div class="highlight-line"></div>
				<div class="description h6">
					<ul>
						<li>Easy Access from the city on National &amp; State Highways.</li>
	  					<li>Bordering the Karnataka Government IT Investment Region.</li>
	  					<li>12 minute drive from Prestige Golfshire.</li>
						<li>20 minute drive to Columbia Asia Hospital.</li>
	   				 	<li>In the same belt as the Aerospace SEZ &amp; the Devanahalli Business Zone.</li>
	  					<li class="show-for-mobile">Nandi Hills is just 3km away.</li>
						<li class="show-for-mobile">Easy access to Stone Hill &amp; Mallya Aditi International Schools.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- testimonials section -->
	<section class="testimonials-section no-overflow">
		<div class="container row">
			<div class="column large-3 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="title h2">Spend a few minutes getting to know your neighbours.</div>
			</div>
			<div class="column large-7 large-offset-0 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="tes">
					<div class="testimonial row">
						<div class="column large-6 large-offset-1">
							<!-- video -->
							<div class="testimonial-video">
								<!-- video embed -->
								<div class="video-embed js_video_embed" data-src="nhBOMfPThok">
									<div class="video-loading-indicator"></div>
								</div>
							</div>
						</div>
						<div class="column large-4 large-offset-1">
							<div class="person-name h5">Preetam Daniel</div>
							<div class="description">"For me, the bigger developers had a problem with valuation, the smaller ones had poor infrastructure. I own 3000sft in Canterbury and it was value for money."</div>
						</div>
					</div>
					<div class="testimonial row">
						<div class="column large-6 large-offset-1">
							<!-- video -->
							<div class="testimonial-video">
								<!-- video embed -->
								<div class="video-embed js_video_embed" data-src="ischiW2dczo">
									<div class="video-loading-indicator"></div>
								</div>
							</div>
						</div>
						<div class="column large-4 large-offset-1">
							<div class="person-name h5">Nirmal Raj</div>
							<div class="description">"It's easy to acquire property but maintaining it is a big headache. I think this is a good investment because they look after it and protect it."</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- gallery section -->
	<section class="gallery-section no-overflow">
		<div class="gallery">
			<!-- <img class="gallery-image" src="/media/gallery-placeholder.png<?php echo $ver?>"> -->
			<div class="slick_gallery">
				<img src="/media/gallery/slides/slide-1.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-2.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-3.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-4.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-5.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-6.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-7.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-8.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-9.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-10.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-11.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-12.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-13.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-14.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides/slide-15.jpg<?php echo $ver?>">
			</div>

			<div class="slick_gallery_mobile">
				<img src="/media/gallery/slides-mobile/slide-1.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-2.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-3.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-4.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-5.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-6.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-7.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-8.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-9.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-10.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-11.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-12.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-13.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-14.jpg<?php echo $ver?>">
				<img src="/media/gallery/slides-mobile/slide-15.jpg<?php echo $ver?>">
			</div>
		</div>
		<div class="title h2 text-center">What does Canterbury look like today?</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.slick_gallery').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			});

			$('.slick_gallery_mobile').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			});
		});
	</script>


	<!-- aerial section -->
	<section class="aerial-section no-overflow local-modal qpid_login_site js_aerial_section">
		<div class="container row">
			<div class="column large-5 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<!-- video -->
				<div class="aerial-video">
					<!-- video embed -->
					<div class="video-embed js_video_embed" data-src="17v3Bmgavpw">
						<div class="video-loading-indicator"></div>
					</div>
				</div>
			</div>
			<div class="column large-4 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="title h2">
					Take an aerial tour<br> of the property
				</div>
				<div class="highlight-line"></div>
				<div class="description h6">
					977 plots in 4 Sectors. Tarred roads, 24/7 Electricity, Water &amp; Security. 2 Clubhouses, Community &amp; Meditation Center, A Swimming Pool and Parks.
				</div>
			</div>
		</div>
		<div class="container row">
			<div class="plot-price column large-5 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">
				<div class="title h3 space-half-top space-quarter-bottom">Get a quotation for a plot</div>
				<div class="row space-min-bottom ">
					<div class="columns inline-bottom small-12 large-3 h3">№ 886</div>
					<div class="columns inline-bottom small-7 large-5 label text-uppercase"><span class="strong text-green">1200sft</span> - North Facing - Plot Value <span class="strong text-yellow">24 Lakhs</span></div>
					<div class="columns inline-bottom small-5 large-4 xlarge-3 xlarge-offset-1"><button class="button fill-light block js_request_quote" data-unit="886">get a quote</button></div>
				</div>
				<div class="row space-min-bottom ">
					<div class="columns inline-bottom small-12 large-3 h3">№ 910</div>
					<div class="columns inline-bottom small-7 large-5 label text-uppercase"><span class="strong text-green">2594sft</span> - S-West Facing - Plot Value <span class="strong text-yellow">54 Lakhs</span></div>
					<div class="columns inline-bottom small-5 large-4 xlarge-3 xlarge-offset-1"><button class="button fill-light block js_request_quote" data-unit="910">get a quote</button></div>
				</div>
				<div class="row space-min-bottom ">
					<div class="columns inline-bottom small-12 large-3 h3">№ 902</div>
					<div class="columns inline-bottom small-7 large-5 label text-uppercase"><span class="strong text-green">3468sft</span> - N-West Facing - Plot Value <span class="strong text-yellow">73 Lakhs</span></div>
					<div class="columns inline-bottom small-5 large-4 xlarge-3 xlarge-offset-1"><button class="button fill-light block js_request_quote" data-unit="902">get a quote</button></div>
				</div>
				<div class="row space-min-bottom ">
					<div class="columns inline-bottom small-12 large-3 h3">№ 202</div>
					<div class="columns inline-bottom small-7 large-5 label text-uppercase"><span class="strong text-green">4104sft</span> - S-West Facing - Plot Value <span class="strong text-yellow">85 Lakhs</span></div>
					<div class="columns inline-bottom small-5 large-4 xlarge-3 xlarge-offset-1"><button class="button fill-light block js_request_quote" data-unit="202">get a quote</button></div>
				</div>
			</div>
			<div class="action-masterplan column large-4 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1 space-quarter-top">
				<img src="/media/action-masterplan-mockup.png<?php echo $ver?>">
				<div class="title h3 space-min-bottom">
					Download the PDF Masterplan with Plot Numbers
				</div>
				<a class="button button-large fill-green js_download_masterplan" data-c="test-trac-2" target="_blank" data-href="/download/masterplan.pdf">Download Now</a>
			</div>
		</div>
		<div class="local-modal-box">
			<!-- Sticky Content -->
			<div class="container">
				<div class="row">
					<div class="form-card fill-dark space-half columns small-12 small-offset-0 medium-6 medium-offset-3 large-4 large-offset-4">
						<!-- Title -->
						<div class="h4 space-half-bottom js_trap_heading">Download PDF Masterplan</div>
						<!-- Phone Trap form -->
						<form class="js_phone_form">
							<div class="form-row columns small-12" style="position: relative">
								<label><span class="label inline text-neutral-1 text-uppercase">Mobile Number</span></label>
								<div class="phone-trap phone-number">
									<div class="block prefix-group" style="position: relative">
										<select class="js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="input-text prefix js_phone_country_code_label button" value="+91" style="pointer-events: none; width: 100%;">
									</div>
									<input class="phone block" type="text" name="phone-number" placeholder="Enter Mobile Number">
								</div>
							</div>
							<div class="form-row columns small-12" style="position: relative">
								<div class="phone-trap phone-number">
									<label class="submit block">
										<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
										<button class="button block fill-green">Submit</button>
									</label>
								</div>
							</div>
						</form>
						<!-- OTP form -->
						<form class="js_otp_form" style="display: none;">
							<div class="form-row columns small-12">
								<div class="otp-trap">
									<label class="block">
										<span class="label inline text-neutral-1 text-uppercase">Enter the OTP</span>
										<input class="otp block" type="text" name="otp">
									</label>
									<label class="submit block">
										<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
										<button class="button block fill-green" type="submit">Download</button>
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
					<!-- Local Modal Close Button -->
					<div class="button local-modal-close fill-red js_local_modal_close" style="font-size: 35px;">&times;</div>
				</div>
			</div>
			<!-- End: Sticky Content -->
		</div>
	</section>


	<!-- aerial video section -->
	<section class="aerial-video-section no-overflow">
		<div class="section-video video-embed video-embed-bg js_video_embed js_video_get_player" data-src="6wWQUUrWRgs" data-loop="true" data-autoplay="true" style="padding-top: 33.75%;">
			<div class="video-embed-placeholder" style="background-image: url( '/media/video-thumb-2.jpg<?php echo $ver; ?>' );"></div>
			<!-- <div class="video-loading-indicator"></div> -->
		</div>
		<div class="video-overlay">
			<div class="container row">
				<span class="caption h2 column large-5 large-offset-1 medium-6 medium-offset-3 small-10 small-offset-1">‘Plug n Play’ ready; Buy, register &amp; build a Villa</span>
			</div>
		</div>
	</section>

	<!-- masterplan section -->
	<section class="masterplan-section no-overflow">
		<div class="masterplan"></div>
	</section>

	<!-- Modal JS -->
	<script type="text/javascript" src="/js/modules/modal.js<?php echo $ver?>"></script>

</div><!-- End: Buy Page -->




<?php require_once __DIR__ . '/../inc/below.php'; ?>
















