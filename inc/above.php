<?php

// Get utility functions
require_once __DIR__ . '/utils.php';
// Include WordPress for Content Management
initWordPress();

/* -- Lazaro disclaimer and footer -- */
require_once __DIR__ . '/lazaro.php';

/*
 * A version number for versioning assets to invalidate the browser cache
 */
$ver = '?v=20181126';

// Pull some data from the request
$urlSlug = $_GET[ '_slug' ] ?? null;

// #fornow
// Just so that when some social media service (WhatsApp) try to ping URL,
//  	it should not get a 404. This because is setting the response header.
http_response_code( 200 );

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

	<?php require_once 'head.php'; ?>

	<body id="body" class="body <?php echo $urlSlug ?: 'buy' ?>">

		<?php
			/*
			 * Arbitrary Code ( Top of Body )
			 */
			echo getContent( '', 'arbitrary_code_body_top' );
		?>

	<!--  ★  MARKUP GOES HERE  ★  -->

	<div id="page-wrapper"><!-- Page Wrapper -->

		<?php //require_once 'navigation.php'; ?>

		<!-- Page Content -->
		<div id="page-content">
			<!-- Landing Section -->
			<section class="landing-section">

				<!-- landing image -->
				<div class="landing-image"></div>

				<!-- landing text overlay -->
				<div class="landing wipe_out">
					<div class="container row">
						<div class="column medium-8 medium-offset-2 small-10 small-offset-1">
							<img class="logo" width="210" src="/media/logo-medium.svg<?php echo $ver?>">
							<div class="title h1">
								<div class="wipe_line"><div class="wipe wipe_bottom">A weekend</div></div><br>
								<div class="wipe_line"><div class="wipe wipe_bottom">home</div></div><br>
								<div class="wipe_line"><div class="wipe wipe_bottom">destination</div></div>
							</div>
							<div class="description label">
								<div class="wipe_line"><div class="wipe wipe_left">Just a 40 minute drive from Bangalore, India</div></div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- End: Landing Section -->

			<!-- Navigation Section -->
			<section class="navigation-section row">
				<img class="logo-mobile" src="/media/logo-small.svg<?php echo $ver?>">
				<div class="menu-button js_menu_button">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
				<div class="container row">
					<div class="navigation column xlarge-8 xlarge-offset-2 medium-10 medium-offset-1 small-12 js_navigation_box">
						<a class="nav-button h2 js_nav_button ga_nav_button <?php if ( $urlSlug == 'buy' or $urlSlug == '' ) : ?> active <?php endif; ?>" href="/buy">
							Buy
							<div class="label">A Plot</div>
						</a>
						<a class="nav-button h2 js_nav_button ga_nav_button <?php if ( $urlSlug == 'build' ) : ?> active <?php endif; ?>" href="/build">
							Build
							<div class="label">A Villa</div>
						</a>
						<a class="nav-button h2 js_nav_button ga_nav_button <?php if ( $urlSlug == 'book' ) : ?> active <?php endif; ?>" href="/book">
							Book
							<div class="label">A Weekend Getaway</div>
						</a>
						<a class="nav-button h2 js_nav_button ga_nav_button <?php if ( $urlSlug == 'host' ) : ?> active <?php endif; ?>" href="/host">
							Host
							<div class="label">An Event</div>
						</a>
					</div>
				</div>
			</section><!-- End: Navigation Section -->
